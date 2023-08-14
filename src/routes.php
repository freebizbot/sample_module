<?php

use Freebizbot\SimpleArticles\Http\Controllers\ArticleController;

Route::get('/article/{slug}', [ArticleController::class, 'show']);
