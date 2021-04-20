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
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }
        $receta = new Receta();
        $receta->nombre = $request->input('Nombre');
        $receta->ingredientes = $request->input('Ingredientes');
        $receta->ingredientes_alternativos = $request->input('IngredientesAlternativos');
        $receta->pasos = $request->input('Pasos');
        $receta->ruta_imagen = $name;

        $receta->save();
        return view('registrar.registrarRecetas');
    }
}
