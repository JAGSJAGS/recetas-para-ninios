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
        $credenciales = $this->validate(request(),['email'=>'email|required|string','password'=>'required']);
        //$usuario = Usuario::where('nombre', $request->input('Usuario'))->get();
        //dd(count($usuario));
        if(Auth::attempt($credenciales)){
            return redirect()->route('indexAdmin');
        }
        return back();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('indexlog');
    }
}
