<?php

use App\Models\Article;
use App\Models\Author;
use App\Models\Tag;
use Interop\Container\ContainerInterface;
use Noodlehaus\Config;
use Roulette\Library\Adapters\Logger;
use Roulette\Library\Adapters\StreamHandler;

return [
    Config::class => function (ContainerInterface $c) {
        return new Config(__DIR__ . '/../config');
    },
    Logger::class => function (ContainerInterface $c) {
        $logger = new Logger('Simulator');
        $logger->pushHandler(
            new StreamHandler('../logs/main.log', Logger::INFO)
        );
        return $logger;
    },
    Article::class => function (ContainerInterface $c) {
        return new Article;
    },
    Author::class => function (ContainerInterface $c) {
        return new Author;
    },
    Tag::class => function (ContainerInterface $c) {
        return new Tag;
    },
];
