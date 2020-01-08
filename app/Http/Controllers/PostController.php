<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show ($id) {
        return "This is my post {$id}";
    }
}
