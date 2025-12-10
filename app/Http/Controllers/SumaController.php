<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    //
    public function index(){ //el nombre de nuestra función esindex
        //de momento no cuenta con lógica interna

        return view('suma', ['res'=>null]); //regresa la vista suma con un valor en la variable ‘res’ de nulo
    }

    public function suma(Request $request){
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $resultado = $num1 + $num2;

        return view('suma',['res'=>$resultado]);
    }
}
