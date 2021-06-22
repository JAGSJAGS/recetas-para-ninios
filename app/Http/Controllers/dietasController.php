<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;
use App\Dieta;
use App\DietaReceta;

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

        $dietaReceta = DietaReceta::where('dieta_id', $id)->get();
        $dieta = Dieta::find($id);
        $recetas = Receta::where('edad', $dieta->edad)->get();
        
        return view('DietasNew.editarDieta',compact('dieta','recetas','dietaReceta'));
    }
    public function buscarReceta(Request $request,$id){

        $dietaReceta = DietaReceta::where('dieta_id', $id)->get();
        $dieta = Dieta::find($id);
        $recetas = Receta::where('nombre', $request->input('Nombre'))->where('edad', $dieta->edad)->get();        
        return view('DietasNew.editarDieta',compact('dieta','recetas','dietaReceta'));
    }
    public function filtrarReceta(Request $request,$id){

        $dietaReceta = DietaReceta::where('dieta_id', $id)->get();
        $dieta = Dieta::find($id);
        if(($request->Tipo == 'Tipo de Comida') && ($request->Calorias == 'Calorias')){
            $recetas = Receta::where('edad', $dieta->edad)->get();
        }
        if( ($request->Tipo == 'Tipo de Comida') && ($request->Calorias != 'Calorias')){
            $recetas = Receta::where('calorias', $request->Calorias)->where('edad', $dieta->edad)->get();
        }
        if(($request->Tipo != 'Tipo de Comida') && ($request->Calorias == 'Calorias')){
            $recetas = Receta::where('tipo', $request->Tipo)->where('edad', $dieta->edad)->get();
        }
        if(($request->Tipo != 'Tipo de Comida') && ($request->Calorias != 'Calorias')){
            $recetas = Receta::where('tipo', $request->Tipo)->where('calorias', $request->Calorias)->where('edad', $dieta->edad)->get();
        }

        
        return view('DietasNew.editarDieta',compact('dieta','recetas','dietaReceta'));
    }
    public function registrarHorario(Request $request,$id){

        $dietaReceta = DietaReceta::where('dieta_id', $id)->get();
        $dr = new DietaReceta();
        $dr->name = 'Nombre';
        $dr->receta_id = $request->input('Receta_id');
        $dr->dieta_id = $id;
        $dr->dia = $request->input('Dia');
        $dr->save();

        $dieta = Dieta::find($id);
        $recetas = Receta::where('edad', $dieta->edad)->get();       
        return view('DietasNew.editarDieta',compact('dieta','recetas','dietaReceta'));
    }
}
