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
    return view('welcome');
});

Route::group(
    [
        'middleware' => [],
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'name' => 'admin.'
    ], 
function () {
   Route::get('/', 'AdminController@test')
    ->name('home'); //this the 'admin.home'
});


// # grupos de rotas em prefixos
// # dessa forma todas as rotas terão que derivar da rota '/dashboard/'
// Route::prefix('dashboard')->group(function () {

//     Route::namespace('Admin')->group(function () {
//         #chamando metodos em controllers
//         Route::get('/', 'AdminController@test');
//     });

//     Route::get('/settings', function () {
//         return 'Configurações do dashboar';
//     });
// });



// # Dessa forma garantimos que todas as rotas do grupo passarão pelo middleware auth
// Route::middleware(['auth'])->group(function () {
//     Route::get('/hello', function () {
//         return 'Hello';
//     });

//     Route::get('/world', function () {
//         return 'world';
//     });
// });

// Route::get('/login', function () {
//     return 'Página de login';
// })->name('login');


// Route::get('/route-name', function () {
//     return 'new name route';
// })->name('new-name');

// Route::get('/use-name',function () {
//     return redirect()->route('new-name');
// });



// # redirecionamento de rotas
// Route::redirect('/redirect1', '/redirect2');
// Route::get('/redirect2', function () {
//     return 'redirect 2';
// });



// # passando parametros via url
// Route::get('/category/{flag}',function($flag) {
//     return "Produtos da categoria {$flag}";
// });



// # tornando parametros opicionais
// Route::get('/tag/{flag?}',function($tag = 'indefinida') {
//     return "A flag é {$tag}";
// });



// # rota que aceita somente os métodos especificados
// Route::match(['post', 'get'], '/match', function () {
//     return 'match route';
// });



// # rota que aceita qualquer metodo
// Route::any('/any', function () {
//     return 'rota que aceita todos os métodos http';
// });



// Route::get('/contato', function () {
//  return view('site.contato');
// });