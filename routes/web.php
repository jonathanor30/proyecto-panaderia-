<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});
//establecer rutas con los controladores y vistas metodo por metodo 
//Route::get('/Usuarios','UsuariosController@index');
//Route::get('/Usuarios/create', 'UsuariosController@create');

//establecer rutas con controlador para todos los metodos
Route::resource('Usuarios', 'UsuariosController');
Auth::routes(['register'=>false,'reset']);

Route::get('/home', 'HomeController@index')->name('home');
