<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;
use App\DietaReceta;

class listaController extends Controller
{
    public function listar()
    {
        $recetas = Receta::orderBy('id')->get();
        return view('Prueba_ListadePublicaciones.lista',compact('recetas'));
    }
    public function eliminar($id)
    {
        $dietaRecetas = DietaReceta::where('receta_id',$id);
        foreach($dietaRecetas as $dietaReceta){
        $dietaReceta->delete();
        
        }
        $receta = Receta::find($id)->delete();
        
        return back();
    }
}
