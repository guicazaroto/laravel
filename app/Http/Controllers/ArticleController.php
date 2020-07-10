<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tag;

class ArticleController extends Controller
{
    public function index()
    {
        if(request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
            return view('articles.index', ['articles' => $articles]);
        } else {
            $articles = Article::latest()->get();
            return view('articles.index', ['articles' => $articles]);
        }
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
        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    }

    public function store()
    {     
        $article = new Article($this->validateFields());    
        $article->user_id = 1;
        $article->save();
        $article->tags()->attach(request('tags'));  // caso eu quisesse dizer que esse artigo terá o id 1
        
        return redirect(route('articles.index'));
    }

    public function edit (Article $article) 
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article) 
    {
        $article->update($this->validateFields());
        return redirect($article->path());
    }

    public function validateFields () {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'required | exists:tags,id'
        ]);
    }

}
