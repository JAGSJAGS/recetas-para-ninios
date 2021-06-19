<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dietasController extends Controller
{
    public function index()
    {
        return view('DietasNew.Lista De Dietas');
    }
    public function verDieta()
    {
        return view('visualizarDietas.visualizaDietas');
    }
    public function indexAdmin()
    {
        return view('visualizarDietas.visualizaDietas');
    }
}
