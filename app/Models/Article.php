<?php

namespace App\Models;

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

    protected $fillable = ['user_id', 'title', 'excerpt', 'body'];

    public function path() {
        return route('articles.show', $this);
    }

    public function user () {
        return $this->belongsTo(User::class); 
        /* existe a possibilidade de sobrescrever a 
            chave de referencia passando um segundo argumento
            $this->belongsTo(User::class, 'author_id'); 
        */
    }

    public function tags () {
        # When tags has many articles and articles has many tags
        return $this->belongsToMany(Tag::class);
    }
}

# $user = User::find(1) // select * user where id = 1
# $user->projects // select * from projects where user_id = $user->id

