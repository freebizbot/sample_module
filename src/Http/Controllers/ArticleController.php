<?php

namespace Freebizbot\SimpleArticles\Http\Controllers;

use Illuminate\Routing\Controller;
use Freebizbot\SimpleArticles\Models\Article;

class ArticleController extends Controller
{
    public function show($slug)
    {
        $article = Article::where('slug',$slug)->first();
        abort_if(!$article,404);
        return $article;
//        view('article', ['article' => $article]);
    }
}
