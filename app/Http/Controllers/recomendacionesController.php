<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recomendacionesController extends Controller
{
    public function index()
    {
        return view('recomendaciones.recomendaciones');
    }
}
