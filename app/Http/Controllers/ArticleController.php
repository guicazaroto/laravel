<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', ['articles' => $articles]);
    }
    

    public function show(Article $article)
    {
        //$article = Article::find($id); // ele vai fazer isso automaticamente usando sempre a
        //chave primária.
        //Para ver como alterar a chave da consulta, vá em Article Model
        return view('articles.show', ['article' => $article]);
    }

    public function create() 
    {
        return view('articles.create');
    }

    public function store()
    {     
        Article::create(
            request()->validate([
                'title' => 'required',
                'excerpt' => 'required',
                'body' => 'required'
            ])
        );    

        return redirect('/articles');
    }

    public function edit (Article $article) 
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article) 
    {
        $article->update(
            request()->validate([
                'title' => 'required',
                'excerpt' => 'required',
                'body' => 'required'
            ])
        );


        return redirect('/articles/' . $article->id );
    }

}
