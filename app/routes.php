<?php

$app->get('/', [
    'App\Controllers\HomeController', 'index'
])->setName('home');

$app->get('/articles/{article}', [
    'App\Controllers\ArticlesController', 'show',
])->setName('articles.show');

// $app->get('/articles/{tag}', [
//     'App\Controllers\ArticlesController', 'tagged',
// ])->setName('articles.tagged');
