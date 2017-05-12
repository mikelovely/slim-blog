<?php

namespace App;

use DI\ContainerBuilder;
use DI\Bridge\Slim\App as DiBridge;
use Dotenv\Dotenv;
use Noodlehaus\Config;

class App extends DIBridge
{
    protected function configureContainer(ContainerBuilder $builder)
    {
        $builder->addDefinitions(__DIR__ . '/container.php');

        if (file_exists(__DIR__ . '/../.env')) {
            $dotenv = new Dotenv(__DIR__ . '/../');
            $dotenv->load();
        }

        $config = new Config(__DIR__ . '/../config');

        $builder->addDefinitions([
            'settings.displayErrorDetails' => $config->get('general.config.debug'),
        ]);
    }
}
