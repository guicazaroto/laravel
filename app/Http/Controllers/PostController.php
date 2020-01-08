<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function show ($slug) {
        //return "This is my post {$slug}";

        $post = Post::where('slug', $slug)->first();

        if(!$post) abort(404);

        return view('post', 
            [
                'post' => $post 
            ]
        );
    }
}
