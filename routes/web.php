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

# passando parametros via url
Route::get('/category/{flag}',function($flag) {
    return "Produtos da categoria {$flag}";
});

# tornando parametros opicionais
Route::get('/tag/{flag?}',function($tag = 'indefinida') {
    return "A flag é {$tag}";
});

# rota que aceita somente os métodos especificados
Route::match(['post', 'get'], '/match', function () {
    return 'match route';
});

# rota que aceita qualquer metodo
Route::any('/any', function () {
    return 'rota que aceita todos os métodos http';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function () {
 return view('site.contato');
});