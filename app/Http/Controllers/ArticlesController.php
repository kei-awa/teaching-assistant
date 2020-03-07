<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Article;


class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        
        $title = Article::select('title')->get();
        $title = Article::select('id');
        
        return view('articles.logout-index',[
            'articles' => $articles,
            'title' => $title,
            ]);
    }
    public function read($id)
    {
        $article = Article::find($id);
        
        return view ('articles.logout-show',[
            'article' => $article,
            ]);
    }
}
