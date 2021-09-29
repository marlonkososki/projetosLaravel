<?php

namespace App\Http\Controllers;

use App\FrenteCaixa;
use Illuminate\Http\Request;
use App\Produto;

class FrenteCaixaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        //
        $produtos = Produto::paginate(5);

        return view('sistema.frente_caixa', ['titulo' => 'Frente de Caixa', 'produtos' => $produtos, 'request' => $request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FrenteCaixa  $frenteCaixa
     * @return \Illuminate\Http\Response
     */
    public function show(FrenteCaixa $frenteCaixa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FrenteCaixa  $frenteCaixa
     * @return \Illuminate\Http\Response
     */
    public function edit(FrenteCaixa $frenteCaixa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FrenteCaixa  $frenteCaixa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrenteCaixa $frenteCaixa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FrenteCaixa  $frenteCaixa
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrenteCaixa $frenteCaixa)
    {
        //
    }
}
