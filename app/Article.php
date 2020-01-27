<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /*

    public function getRouteKeyName()
    {
        // dessa forma é possível alterar a chave utilizada para pesquisa em
        //find() em Article controller 
        //return 'slug';
    }

    */

    protected $fillable = ['title', 'excerpt', 'body'];

    public function path() {
        return request()->path();
    }
}
