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
})->name('welcome');

Route::get('/desenhos', ['middleware' => 'auth', 'uses'=>'Conteudo@desenhos'])->name('desenhos');

Route::get('/filmes', ['middleware' => 'auth', 'uses'=>'Conteudo@filmes'])->name('filmes');
    
Route::get('/series', ['middleware' => 'auth', 'uses'=>'Conteudo@series'])->name('series');
    
Route::get('/sobre', ['middleware' => 'auth', function () {
    return view('sobre');
}])->name('sobre');

Auth::routes();

//Route::get('/home', ['middleware' => 'auth', 'HomeController@index'])->name('home');
Route::get('/home', ['middleware' => 'auth','uses'=>'Conteudo@recentes'])->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
