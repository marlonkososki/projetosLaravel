<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendaController extends Controller
{
    //
    public function principal(Request $request)
    {

        return view('sistema.venda');
    }
}
