<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    //
    public function inicial(){
        return view('inicial');
    }

    public function composer(){
        return view('composer');
    }

    public function laravel(){
        return view('laravel');
    }

    public function php(){
        return view('php');
    }
}
