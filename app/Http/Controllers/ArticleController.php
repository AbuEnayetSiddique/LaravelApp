<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class ArticleController extends Controller
{
    public function index() {
        $articles = DB::table('articles')->get();

        return view('articles.index', compact("articles"));
    }
    public  function show(Article $article){
        //$article = Article::findOrFail($article);
        return view('articles.show', compact("article"));
    }
}
