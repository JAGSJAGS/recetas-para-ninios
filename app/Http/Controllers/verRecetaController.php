<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;

class verRecetaController extends Controller
{
    public function show($id)
    {
        $receta = Receta::find($id);
        return view('receta.verReceta',compact('receta'));
    }

    public function show2($id)
    {
        $receta = Receta::find($id);
        return view('receta.verRecetaU',compact('receta'));
    }
}