<?php

namespace App\Controllers;

use App\Models\Article;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Router;
use Slim\Views\Twig;

class HomeController
{
    protected $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function index(Request $request, Response $response, Twig $view, Article $article)
    {
        return $view->render($response, 'home.twig', [
            'articles' => $article->latestFirst()->isLive()->get(),
        ]);
    }
}
