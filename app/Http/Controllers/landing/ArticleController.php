<?php

namespace App\Http\Controllers\Landing;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('landing.pages.blog.index', compact('articles'));
    }

    public function article($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('landing.pages.blog.article', compact('article'));
    }
}
