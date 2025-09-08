<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(10);
        // var_dump('<pre>');
        // var_dump($articles);
        // var_dump('</pre>');
        return view("article.index", compact("articles"));
    }

    public function show($id)
    {
        $article = Article::findOrFail(intval($id));
        return view("article.show", compact("article"));
    }
}
