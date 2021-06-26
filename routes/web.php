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
Route::get('/IndexAdmin','homeController@index')->name('indexAdmin')->middleware('auth');
Route::get('Registrar','recetaController@index')->middleware('auth');//muestra formulario de registrar receta
Route::post('Registrar','recetaController@registrar')->middleware('auth');//registra receta
Route::get('/Receta/{id}','verRecetaController@show')->middleware('auth');//muestra receta
Route::get('/Recetas','listaController@listar')->middleware('auth');//listar receta
Route::get('/Recetas/{id}/editar','recetaController@editar')->middleware('auth');//mostrar formulario para editar

Route::get('IniciarSeción','loginController@index')->name('indexlog')->middleware('guest');//login index
Route::post('IniciarSeción','loginController@login')->name('logear');
Route::get('CerrarSeción','loginController@logout')->name('cerrar')->middleware('auth');

Route::put('/Receta/{id}','recetaController@actualizar')->middleware('auth');//ruta para actualizar
Route::post('/IndexAdmin','homeController@buscar')->middleware('auth');


Auth::routes();

Route::get('/home', 'homeController@index')->name('home')->middleware('auth');



Route::get('/','homeController@index2')->name('indexUser')->middleware('guest');
Route::get('/UReceta/{id}','verRecetaController@show2')->middleware('guest');
Route::post('/','homeController@buscar2')->middleware('guest');

Route::get('/Evaluacion','evaluacionConroller@index')->middleware('guest');
Route::post('/Evaluacion','evaluacionConroller@Calcular')->middleware('guest');
Route::get('/EvaluacionAdmin','evaluacionConroller@indexAdmin')->middleware('auth');
Route::post('/EvaluacionAdmin','evaluacionConroller@CalcularAdmin')->middleware('auth');



Route::get('/Dietas','dietasController@index')->middleware('guest');
Route::get('/Dieta/{id}','dietasController@verDieta')->middleware('guest');
Route::get('/Recomendaciones','recomendacionesController@index')->middleware('guest');
Route::get('/RecomendacionesAdmin','recomendacionesController@index')->middleware('auth');

Route::post('/Filtrar','homeController@filtrar')->middleware('guest');
Route::post('/FiltrarAdmin','homeController@filtrarAd')->middleware('auth');


Route::get('/AdminDietas','dietasController@indexAdmin')->middleware('auth');
Route::post('/RegistrarDietas','dietasController@registrarDietas')->middleware('auth');
Route::get('/AdminDietas/{id}','dietasController@showEditar')->middleware('auth');
Route::post('/AdminDietas/{id}','dietasController@buscarReceta')->middleware('auth');
Route::post('/FiltrarEditarDieta/{id}','dietasController@filtrarReceta')->middleware('auth');
Route::post('/RegistrarHorario/{id}','dietasController@registrarHorario')->middleware('auth');

Auth::routes();


