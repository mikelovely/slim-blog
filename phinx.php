<?php

require_once __DIR__ . '/bootstrap/app.php';

return [
    'paths' => [
        'migrations' => 'database/migrations',
    ],
    'migration_base_class' => 'App\Database\Migrations\Migration',
    'templates' => [
        'file' => 'app/Database/Migrations/MigrationStub.php',
    ],
    'environments' => [
        'default_migration_table' => 'migrations_new',
        'default' => [
            'adapter' => $config->get('database.pgsql.driver'),
            'host' => $config->get('database.pgsql.host'),
            'port' => $config->get('database.pgsql.port'),
            'name' => $config->get('database.pgsql.database'),
            'user' => $config->get('database.pgsql.username'),
            'pass' => $config->get('database.pgsql.password'),
        ],
    ],
];
