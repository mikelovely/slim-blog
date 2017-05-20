<?php

namespace App\Controllers;

use App\Models\Tag;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Router;
use Slim\Views\Twig;

class TagsController
{
    protected $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public function index($tagged, Request $request, Response $response, Twig $view, Tag $tag)
    {
        $tag = $tag->where('slug', $tagged)->first();

        if (!$tag) {
            return $response->withRedirect($this->router->pathFor('home'));
        }

        return $view->render($response, 'tags/index.twig', [
            'articles' => $tag->articles()->latestFirst()->isLive()->get(),
            'tag' => $tag,
        ]);
    }
}
