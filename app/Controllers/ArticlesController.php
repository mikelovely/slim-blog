<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ArticlesController
{
    public function index(Request $request, Response $response)
    {
        var_dump("one");
        exit;
    }

    public function show()
    {

    }
}
