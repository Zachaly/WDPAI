<?php

declare(strict_types=1);

namespace App\Database;

use PDO;
use Throwable;

final class MigrationRunner
{
    private const LOCK_ID = 1978453126;

    public function __construct(
        private PDO $database,
        private string $migrationsPath,
    ) {
    }

    public function migrate(): void
    {
        $migrationFiles = glob($this->migrationsPath . DIRECTORY_SEPARATOR . '*.sql');
        if ($migrationFiles === false || $migrationFiles === []) {
            throw new \RuntimeException('No database migration files were found.');
        }

        sort($migrationFiles, SORT_STRING);
        $this->database->query('SELECT pg_advisory_lock(' . self::LOCK_ID . ')');

        try {
            $this->database->exec(
                'CREATE TABLE IF NOT EXISTS schema_migrations (
                    migration VARCHAR(255) PRIMARY KEY,
                    applied_at TIMESTAMPTZ NOT NULL DEFAULT CURRENT_TIMESTAMP
                )',
            );

            foreach ($migrationFiles as $migrationFile) {
                $migration = basename($migrationFile);
                $check = $this->database->prepare(
                    'SELECT 1 FROM schema_migrations WHERE migration = :migration',
                );
                $check->execute(['migration' => $migration]);

                if ($check->fetchColumn() !== false) {
                    continue;
                }

                $sql = file_get_contents($migrationFile);
                if ($sql === false || trim($sql) === '') {
                    throw new \RuntimeException('Unable to read database migration: ' . $migration);
                }

                $this->database->beginTransaction();
                try {
                    $this->database->exec($sql);
                    $record = $this->database->prepare(
                        'INSERT INTO schema_migrations (migration) VALUES (:migration)',
                    );
                    $record->execute(['migration' => $migration]);
                    $this->database->commit();
                } catch (Throwable $exception) {
                    if ($this->database->inTransaction()) {
                        $this->database->rollBack();
                    }

                    throw $exception;
                }
            }
        } finally {
            $this->database->query('SELECT pg_advisory_unlock(' . self::LOCK_ID . ')');
        }
    }
}
