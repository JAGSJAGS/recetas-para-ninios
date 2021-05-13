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

Route::get('/fda', function () {
    return view('registrar.registrarRecetas');
});
Route::get('/','homeController@index');
Route::get('Registrar','recetaController@index');//muestra formulario de registrar receta
Route::post('Registrar','recetaController@registrar');//registra receta
Route::get('/Receta/{id}','verRecetaController@show');//muestra receta
Route::get('/Recetas','listaController@listar');
