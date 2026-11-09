<?php

declare(strict_types=1);

use App\Database;
use App\Database\MigrationRunner;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$migrator = new MigrationRunner(
    Database::connect(),
    dirname(__DIR__) . '/database/migrations',
);
$migrator->migrate();

fwrite(STDOUT, "Database migrations completed.\n");
