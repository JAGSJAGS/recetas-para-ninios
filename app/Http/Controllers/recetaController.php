<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;

class recetaController extends Controller
{
    public function index()
    {
        
        return view('registrar.registrarRecetas');
    }
    public function registrar(Request $request)
    {
        $this->validate(request(),[
            'Nombre' => ['required' , 'max:40' , ],
            'imagen' => ['required', 'size: 100 '  ],
            'Ingredientes' =>['required', 'max:1000'  ],
            'Edad' =>['required', 'max:5' ],
            'IngredientesAlternativos' =>['max:1000'  ],
            'Pasos' =>['required', 'max:3000'   ]
        ]);
        
        if($request->hasFile('imagen')){
            $validatedData = $request->validate([
             'imagen' => 'required|mimes:jpeg,png,jpg',
            ]);
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);

        }
        $receta = new Receta();
        $receta->nombre = $request->input('Nombre');
        $receta->ingredientes = $request->input('Ingredientes');
        $receta->edad = $request->input('Edad');
        $receta->ingredientes_alternativos = $request->input('IngredientesAlternativos');
        $receta->pasos = $request->input('Pasos');
        $receta->ruta_imagen = $name;

        $receta->save();

        return back()->with('mensaje','registroexito');
    }
    public function editar($id)
    {
        $receta = Receta::find($id);
        return view('receta.editarReceta',compact('receta'));
    }

    public function actualizar($id,Request $request)
    {
        $receta = Receta::find($id);
        $name = $receta->ruta_imagen;

        if($request->hasFile('imagen')){
            $validatedData = $request->validate([
             'imagen' => 'required|mimes:jpeg,png,bmp,jpg',
            ]);
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);

        }
        
        $receta->update([
        'nombre'=> $request->Nombre,
        'edad'=> $request->Edad,
        'ingredientes'=> $request->Ingredientes,
        'ingredientes_alternativos'=> $request->IngredientesAlternativos,
        'pasos'=> $request->Pasos,   
        'ruta_imagen'=> $name]);
        //return view('receta.editarReceta',compact('receta'))->with('mensaje','registroexito');
        return back()->with('mensaje','registroexito');
    }
}
