<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;

class recetaController extends Controller
{
    public function index()
    {
        
        return view('registrar.registrarRecetas');
    }
    public function registrar(Request $request)
    {
        $receta = new Receta();
        $receta->nombre = $request->input('Nombre');
        $receta->ingredientes = $request->input('Ingredientes');
        $receta->ingredientes_alternativos = $request->input('IngredientesAlternativos');
        $receta->pasos = $request->input('Pasos');

        $receta->save();
        return view('registrar.registrarRecetas');
    }
}
