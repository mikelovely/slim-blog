<?php

use function DI\get;
use App\Models\Article;
use App\Models\Author;
use App\Models\Tag;
use Interop\Container\ContainerInterface;
use Noodlehaus\Config;
use Roulette\Library\Adapters\Logger;
use Roulette\Library\Adapters\StreamHandler;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

use Aptoma\Twig\Extension\MarkdownExtension;
use Aptoma\Twig\Extension\MarkdownEngine;

return [
    'router' => get(Slim\Router::class),
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
    Twig::class => function (ContainerInterface $c) {
        $twig = new Twig(__DIR__ . '/../resources/views', [
            'cache' => false
        ]);

        $twig->addExtension(new TwigExtension(
            $c->get('router'),
            $c->get('request')->getUri()
        ));

        // $twig->getEnvironment()->addGlobal('basket', $c->get(Basket::class));

        $twig->addExtension(new MarkdownExtension(
            new MarkdownEngine\MichelfMarkdownEngine()
        ));

        return $twig;
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
