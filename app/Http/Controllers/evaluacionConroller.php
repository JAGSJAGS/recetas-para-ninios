<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class evaluacionConroller extends Controller
{
    public function index()
    {
        return view('evaluacionAlimenticia.evaluacionAlimen');
    }
}
