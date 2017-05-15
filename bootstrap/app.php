<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Noodlehaus\Config;

require __DIR__ . '/../vendor/autoload.php';

$app = new App\App;

$config = new Config(__DIR__ . '/../config');

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => $config->get('database.pgsql.driver'),
    'host' => $config->get('database.pgsql.host'),
    'database' => $config->get('database.pgsql.database'),
    'username' => $config->get('database.pgsql.username'),
    'password' => $config->get('database.pgsql.password'),
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

require __DIR__ . '/../app/routes.php';
