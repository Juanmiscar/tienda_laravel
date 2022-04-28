<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Crear
Route::post('/addCategory', 'App\Http\Controllers\AdministradorController@create')->name('addCategory')->middleware("auth");
Route::post('/addOrder', 'App\Http\Controllers\AdministradorController@addOrder')->name('addOrder')->middleware("auth");
Route::post('/addProduct', 'App\Http\Controllers\AdministradorController@addProduct')->name('addProduct')->middleware("auth");

//Pagina Principal
Route::get('/', function () {
    return view('usuario.index');
});
Auth::routes();

//Link Header
Route::get('/home', 'App\Http\Controllers\UsuarioController@ir_home');
Route::get('/account', 'App\Http\Controllers\UsuarioController@account')->name('account')->middleware("auth");

//Categoria
Route::get('/editarCategoria/{id?}', 'App\Http\Controllers\CategoriaController@editarCategoria')->name('editarCategoria')->middleware("auth");


//Links
Route::get('/productosAdmin', function () {
    return view('administrador.adminProductos');
});
Route::get('/categoriasAdmin', function () {
    return view('administrador.adminCategorias');
});
Route::get('/pedidosAdmin', function () {
    return view('administrador.adminPedidos');
});



