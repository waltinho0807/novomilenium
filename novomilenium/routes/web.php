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
    return view('index');
});

Route::get('/docentes', function () {
    return view('docentes');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/cursos', function () {
    return view('cursos');
});



Route::get('/contato', 'ContatoController@index');
Route::post('/contato/enviar', 'ContatoController@enviar');
Route::resource('/blog', 'BlogController');
Route::resource('/sobre', 'SobreController');
Route::resource('/cursos', 'CursosController');
Route::resource('/docentes', 'DocentesController');
Route::resource('/show', 'ShowController');
Route::resource('/edit', 'EditController');
Route::resource('blog/create', 'CreateController');
Route::get('/', 'IndexController@index');
Route::post('/contatoIndex/enviar', 'IndexController@enviar');

Route::post('/blog/busca', 'BlogController@busca');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
