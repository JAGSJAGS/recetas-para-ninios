<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;
use App\Dieta;

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
        $dietas = Dieta::all();
        //dd($dieta->recetas);
        return view('DietasNew.ListaDietasAdmin',compact('dietas'));
    }
    public function registrarDietas(Request $request){

        $this->validate(request(),[

            'Nombre' => [ 'required'],
            'Edad' => [ 'required','numeric'],
        ]);
        
        $dieta = new Dieta();
        $dieta->name = $request->input('Nombre');
        $dieta->edad = $request->Edad;
        $dieta->save();
        return back();
    }
    public function showEditar($id){

        $recetas = Receta::all();
        $recetas2 = Receta::all();
        $dieta = Dieta::find($id);
        return view('DietasNew.editarDieta',compact('dieta','recetas','recetas2'));
    }
}
