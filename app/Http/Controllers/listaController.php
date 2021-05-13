<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listaController extends Controller
{
    public function listar()
    {
        
        return view('Prueba_ListadePublicaciones.lista');
    }
}
