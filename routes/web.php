<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    $articles = App\Article::take(3)->latest()->get();
    return view('about', ["articles" => $articles]);
});

Route::get('/articles', 'ArticleController@index');
Route::get('/articles/{id}', 'ArticleController@show');