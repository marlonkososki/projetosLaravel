<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrenteCaixaController extends Controller
{
    public function principal(Request $request)
    {

        return view('sistema.frente_caixa');
    }
}
