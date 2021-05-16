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
Route::get('/','homeController@index')->name('indexAdmin')->middleware('auth');
Route::get('Registrar','recetaController@index')->middleware('auth');//muestra formulario de registrar receta
Route::post('Registrar','recetaController@registrar')->middleware('auth');//registra receta
Route::get('/Receta/{id}','verRecetaController@show')->middleware('auth');//muestra receta
Route::get('/Recetas','listaController@listar')->middleware('auth');//listar receta
Route::get('/Recetas/{id}/editar','recetaController@editar')->middleware('auth');//mostrar formulario para editar

Route::get('IniciarSeción','loginController@index')->name('indexlog')->middleware('guest');//login index
Route::post('IniciarSeción','loginController@login')->name('logear');
Route::get('CerrarSeción','loginController@logout')->name('cerrar')->middleware('auth');

Route::put('/Receta/{id}','recetaController@actualizar')->middleware('auth');//ruta para actualizar
Route::post('/','homeController@buscar')->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/Index','homeController@index2')->name('indexUser')->middleware('guest');
Route::get('/UReceta/{id}','verRecetaController@show2')->middleware('guest');
Route::post('/Index','homeController@buscar2')->middleware('guest');