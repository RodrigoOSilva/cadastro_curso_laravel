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

Route::get('/categorias', 'ControladorCategoria@index');
Route::get('/produtos', 'ControladorProduto@index');

Route::get('/categorias/novo', 'ControladorCategoria@create');
Route::get('/produtos/novo', 'ControladorProduto@create');

Route::post('/categorias', 'ControladorCategoria@store');
Route::post('/produtos', 'ControladorProduto@store');

Route::get('/categorias/apagar/{id}', 'ControladorCategoria@destroy');
Route::get('/produtos/apagar/{id}', 'ControladorProduto@destroy');

Route::get('/categorias/editar/{id}', 'ControladorCategoria@edit');
Route::get('/produtos/editar/{id}', 'ControladorProduto@edit');

Route::post('/categorias/{id}', 'ControladorCategoria@update');
Route::post('/produtos/{id}', 'ControladorProduto@update');

