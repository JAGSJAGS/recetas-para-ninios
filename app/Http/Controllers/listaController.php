<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;

class listaController extends Controller
{
    public function listar()
    {
        $recetas = Receta::orderBy('id')->get();
        return view('Prueba_ListadePublicaciones.lista',compact('recetas'));
    }
}
