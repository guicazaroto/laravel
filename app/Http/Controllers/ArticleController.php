<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Render a list of resources
     */
    public function Index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', ['articles' => $articles]);
    }
    
    /**
     * Show a single resource
    */
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', ['article' => $article]);
    }

    /**
     * Shows a view to create a new resource
     */
    public function create () {

    }

    /**
     * Persist a new resource
     */
    public function store () {

    }

    /**
     * Show a view to edit an existing resource
     */
    public function edit () {

    }

    /**
     * Persist an edited resource
     */
    public function update () {
        
    }

    /**
     * Delete a resoure
     */
    public function destroy () {

    }

}
