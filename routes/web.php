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
    return view('login');
});


Route::get('/desenhos', 'Conteudo@desenhos')->name('desenhos');

Route::get('/filmes', 'Conteudo@filmes')->name('filmes');

Route::get('/series', 'Conteudo@series')->name('series');

Route::get('/sobre', function () {
    return view('sobre');
})->name('sobre');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'Conteudo@recentes')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
