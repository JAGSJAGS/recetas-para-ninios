<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Usuario;

class loginController extends Controller
{
    public function index()
    {
        return view('Prueba_Login.login');
    }

    public function login(Request $request){
        $credenciales = $this->validate(request(),['Usuario'=>'required',
                                    'Contraseña'=>'required']);
        $usuario = Usuario::where('nombre', $request->input('Usuario'))->where('telefono', $request->input('Contraseña'))->get();
        //dd(count($usuario));
        if(count($usuario)>0){
            return 'logeado';
        }
        return back();
    }
}
