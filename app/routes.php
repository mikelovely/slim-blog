<?php

$app->get('/', [
    'App\Controllers\HomeController', 'index'
])->setName('home');

$app->get('/articles', [
    'App\Controllers\ArticlesController', 'index',
])->setName('articles.index');

$app->get('/articles/{slug}', [
    'App\Controllers\ArticlesController', 'show',
])->setName('articles.show');

$app->get('/articles/tagged/{tagged}', [
    'App\Controllers\TagsController', 'index',
])->setName('tags.index');
