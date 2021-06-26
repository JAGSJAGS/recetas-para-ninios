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
        $dietas = Dieta::all();
        return view('DietasNew.Lista De Dietas',compact('dietas'));
    }
    public function verDieta($id)
    {
        $dietaRecetas = DietaReceta::where('dieta_id', $id)->get();
        $dieta = Dieta::find($id);
        $recetas = Receta::where('edad', $dieta->edad)->get();
        return view('visualizarDietas.visualizaDietas',compact('dieta','recetas','dietaRecetas'));
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

        $dietaRecetas = DietaReceta::where('dieta_id', $id)->get();
        $dieta = Dieta::find($id);
        $recetas = Receta::where('edad', $dieta->edad)->get();
        $recetas2 = Receta::where('edad', $dieta->edad)->get();
        
        return view('DietasNew.editarDieta',compact('dieta','recetas','recetas2','dietaRecetas'));
    }
    public function buscarReceta(Request $request,$id){

        $dietaRecetas = DietaReceta::where('dieta_id', $id)->get();
        $dieta = Dieta::find($id);
        $recetas = Receta::where('edad', $dieta->edad)->get();
        $recetas2 = Receta::where('nombre', $request->input('Nombre'))->where('edad', $dieta->edad)->get();        
        return view('DietasNew.editarDieta',compact('dieta','recetas','recetas2','dietaRecetas'));
    }
    public function filtrarReceta(Request $request,$id){

        
        $dieta = Dieta::find($id);
        if(($request->Tipo == 'Tipo de Comida') && ($request->Calorias == 'Calorias')){
            $recetas2 = Receta::where('edad', $dieta->edad)->get();
        }
        if( ($request->Tipo == 'Tipo de Comida') && ($request->Calorias != 'Calorias')){
            $recetas2 = Receta::where('calorias', $request->Calorias)->where('edad', $dieta->edad)->get();
        }
        if(($request->Tipo != 'Tipo de Comida') && ($request->Calorias == 'Calorias')){
            $recetas2 = Receta::where('tipo', $request->Tipo)->where('edad', $dieta->edad)->get();
        }
        if(($request->Tipo != 'Tipo de Comida') && ($request->Calorias != 'Calorias')){
            $recetas2 = Receta::where('tipo', $request->Tipo)->where('calorias', $request->Calorias)->where('edad', $dieta->edad)->get();
        }


        $recetas = Receta::where('edad', $dieta->edad)->get();
        $dietaRecetas = DietaReceta::where('dieta_id', $id)->get();
        return view('DietasNew.editarDieta',compact('dieta','recetas','recetas2','dietaRecetas'));
    }
    public function registrarHorario(Request $request,$id){

        
        $dr = new DietaReceta();
        $dr->name = 'Nombre';
        $dr->receta_id = $request->input('Receta_id');
        $dr->dieta_id = $id;
        $dr->dia = $request->input('Dia');
        $dr->save();

        $dieta = Dieta::find($id);
        $recetas = Receta::where('edad', $dieta->edad)->get();
        $recetas2 = Receta::where('edad', $dieta->edad)->get();
        $dietaRecetas = DietaReceta::where('dieta_id', $id)->get();       
        return view('DietasNew.editarDieta',compact('dieta','recetas','recetas2','dietaRecetas'));
    }
}
