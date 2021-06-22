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
    public function index2()
    {
        $recetas = Receta::all();
        $recetas2 = Receta::all();
        return view('index.index',compact('recetas','recetas2'));
    }
    public function buscar(Request $request)
    {
        $recetas2 = Receta::all();
        $recetas = Receta::where('nombre', $request->input('Nombre'))->get();
        //$recetas = Receta::all();
        return view('index.indexAdmin',compact('recetas','recetas2'));
    }
    public function buscar2(Request $request)
    {
        $recetas2 = Receta::all();
        $recetas = Receta::where('nombre', $request->input('Nombre'))->get();
        //$recetas = Receta::all();
        return view('index.index',compact('recetas','recetas2'));
    }
    public function filtrar(Request $request)
    {//dd($request);
        if(($request->Tipo == 'Tipo de Comida') && ($request->Edad == 'Edad') && ($request->Calorias == 'Calorias')){
            $recetas = Receta::all();
        }
        if(($request->Tipo == 'Tipo de Comida') && ($request->Edad == 'Edad') && ($request->Calorias != 'Calorias')){
            $recetas = Receta::where('calorias', $request->Calorias)->get();
        }
        if(($request->Tipo == 'Tipo de Comida') && ($request->Edad != 'Edad') && ($request->Calorias == 'Calorias')){
            $recetas = Receta::where('edad', $request->Edad)->get();
        }
        if(($request->Tipo != 'Tipo de Comida') && ($request->Edad == 'Edad') && ($request->Calorias == 'Calorias')){
            $recetas = Receta::where('tipo', $request->Tipo)->get();
        }
        if(($request->Tipo == 'Tipo de Comida') && ($request->Edad != 'Edad') && ($request->Calorias != 'Calorias')){
            $recetas = Receta::where('calorias', $request->Calorias)->where('edad', $request->Edad)->get();
        }
        if(($request->Tipo != 'Tipo de Comida') && ($request->Edad == 'Edad') && ($request->Calorias != 'Calorias')){
            $recetas = Receta::where('calorias', $request->Calorias)->where('tipo', $request->Tipo)->get();
        }
        if(($request->Tipo != 'Tipo de Comida') && ($request->Edad != 'Edad') && ($request->Calorias == 'Calorias')){
            $recetas = Receta::where('edad', $request->Edad)->where('tipo', $request->Tipo)->get();
        }
        if(($request->Tipo != 'Tipo de Comida') && ($request->Edad != 'Edad') && ($request->Calorias != 'Calorias')){
            $recetas = Receta::where('edad', $request->Edad)->where('tipo', $request->Tipo)->where('calorias', $request->Calorias)->get();
        }    
        $recetas2 = Receta::all();
        //$recetas = Receta::where('tipo', $request->Tipo)->where('edad', $request->Edad)->where('calorias', $request->Calorias)->get();
        //$recetas = Receta::all();
        return view('index.index',compact('recetas','recetas2'));
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
