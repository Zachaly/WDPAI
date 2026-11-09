<?php

declare(strict_types=1);

namespace App;

use PDO;

final class Database
{
    public static function connect(): PDO
    {
        $configuration = require dirname(__DIR__) . '/config.php';
        $database = $configuration['database'];

        return new PDO(
            \sprintf(
                'pgsql:host=%s;port=%d;dbname=%s',
                $database['host'],
                $database['port'],
                $database['name'],
            ),
            $database['username'],
            $database['password'],
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ],
        );
    }
}
