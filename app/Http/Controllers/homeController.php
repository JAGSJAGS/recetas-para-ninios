<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;

class HomeController extends Controller
{
    public function index()
    {
        $recetas = Receta::all();
        $recetas2 = Receta::all();
        return view('index.indexAdmin',compact('recetas','recetas2'));
    }
    public function buscar(Request $request)
    {
        $recetas2 = Receta::all();
        $recetas = Receta::where('nombre', $request->input('Nombre'))->get();
        //$recetas = Receta::all();
        return view('index.indexAdmin',compact('recetas','recetas2'));
    }
    /**public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        return view('home');
    }*/
}
