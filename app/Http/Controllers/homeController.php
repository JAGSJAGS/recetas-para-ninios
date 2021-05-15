<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;

class homeController extends Controller
{
    public function index()
    {
        $recetas = Receta::all();
        return view('index.indexAdmin',compact('recetas'));
    }
}
