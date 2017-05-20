<?php

namespace App\Controllers;

use App\Models\Article;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Router;
use Slim\Views\Twig;

class ArticlesController
{
    protected $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function index(Request $request, Response $response, Twig $view, Article $article)
    {
        return $view->render($response, 'articles/index.twig', [
            'articles' => $article->latestFirst()->isLive()->get(),
        ]);
    }

    public function show($slug, Request $request, Response $response, Twig $view, Article $article)
    {
        $article = $article->where('slug', $slug)->isLive()->first();

        if (!$article) {
            return $response->withRedirect($this->router->pathFor('home'));
        }

        return $view->render($response, 'articles/show.twig', [
            'article' => $article,
        ]);
    }
}
