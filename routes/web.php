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

Route::get('productos', function (){
	return 'Listado de Productos';
});


Route::post('productos', function (){
	return 'Almacenando Información';
});

Route::post('productos', function (){
	return 'Almacenando Información';
});

Route::put('productos/{id}', function (){
	return 'Actualizando Producto';
});
