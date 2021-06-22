<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class evaluacionConroller extends Controller
{
    public function index()
    {
        $result="Esperando";
        $im="datos....";
        return view('evaluacionAlimenticia.evaluacionAlimen', compact('result','im'));
    }
    public function Calcular(Request $request){
        $this->validate(request(),[
            'Peso' => ['required', 'numeric'],
            'Altura' => [ 'required','numeric'],
            'Edad' =>['required' ],
            'Sexo' =>['required' ],
        ]);

        $op2=$request->Altura;
        $op1=$request->Peso;
        $sex=$request->Sexo;

        $imc=($op1/($op2*$op2));
        $im=round($imc,2);
        if ($sex == 1){
            if($im>25.4){
                $result= "Su hijo se encuentra con sobrepeso. Su imc es de :";
            }else{
                if($im<1.3){
                    $result= "A su hijo le falta peso tomar en cuenta su alimentación. Su imc es de :";
                }else{
                     $result= "Su hijo se encuentra muy bien alimentado. Su imc es de :";
                }
            }
        }else{
            if($im>25.4){
                $result= "Su hija se encuentra con sobrepeso. Su imc es de :";
            }else{
                if($im<1.3){
                    $result= "A su hija le falta peso tomar en cuenta su alimentación. Su imc es de : ";
                }else{
                     $result= "Su hija se encuentra muy bien alimentada. Su imc es de :";
                }
            }
        }
        return view('evaluacionAlimenticia.evaluacionAlimen', compact('result','im'));
    }
<<<<<<< HEAD
=======

    public function indexAdmin()
    {
        $result="Esperando";
        $im="datos....";
        return view('evaluacionAlimenticia.EvaluacionAlimenticiaAdmin', compact('result','im'));
    }

    public function CalcularAdmin(Request $request){
        $this->validate(request(),[
            'Peso' => ['required', 'numeric'],
            'Altura' => [ 'required','numeric'],
            'Edad' =>['required' ],
            'Sexo' =>['required' ],
        ]);

        $op2=$request->Altura;
        $op1=$request->Peso;
        $sex=$request->Sexo;

        $imc=($op1/($op2*$op2));
        $im=round($imc,2);
        if ($sex == 1){
            if($im>25.4){
                $result= "Su hijo se encuentra con sobrepeso. Su imc es de :";
            }else{
                if($im<1.3){
                    $result= "A su hijo le falta peso tomar en cuenta su alimentación. Su imc es de :";
                }else{
                     $result= "Su hijo se encuentra muy bien alimentado. Su imc es de :";
                }
            }
        }else{
            if($im>25.4){
                $result= "Su hija se encuentra con sobrepeso. Su imc es de :";
            }else{
                if($im<1.3){
                    $result= "A su hija le falta peso tomar en cuenta su alimentación. Su imc es de : ";
                }else{
                     $result= "Su hija se encuentra muy bien alimentada. Su imc es de :";
                }
            }
        }
        return view('evaluacionAlimenticia.EvaluacionAlimenticiaAdmin', compact('result','im'));
    }
>>>>>>> be44029b82a3a4349a0601d294660eb779d10c9e
}
