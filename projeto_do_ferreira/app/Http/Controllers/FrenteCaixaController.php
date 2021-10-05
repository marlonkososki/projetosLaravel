<?php

namespace App\Http\Controllers;

use App\FrenteCaixa;
use Illuminate\Http\Request;
use App\Produto;
use App\Cliente;
use App\Venda;
use App\VendaItem;

class FrenteCaixaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        $produtos = Produto::paginate(5);

        $cliente = Cliente::find(1)->get();

        //print_r($cliente[0]->id);

        $ldate = date('Y-m-d H:i:s');

        $caixa = FrenteCaixa::orderBy('updated_at',  'DESC')->first();

        $ultima_venda = Venda::orderBy('created_at',  'DESC')->first();

        if ($ultima_venda == null) {

            $venda = new Venda();
            $venda->frente_caixa_id = $caixa->id;
            $venda->cliente_id = $cliente[0]->id;
            $venda->user_id = $caixa->user_id;
            $venda->desconto = 0.00;
            $venda->acrescimo = 0.00;
            $venda->total = 0.00;
            $venda->updated_at = null;

            $venda->save();
        } else if (isset($ultima_venda->updated_at) && $ultima_venda->updated_at != '') {


            $venda = new Venda();
            $venda->frente_caixa_id = $caixa->id;
            $venda->cliente_id = $cliente[0]->id;
            $venda->user_id = $caixa->user_id;
            $venda->desconto = 0.00;
            $venda->acrescimo = 0.00;
            $venda->total = 0.00;
            $venda->updated_at = null;

            $venda->save();
        }

        $venda_atual = Venda::orderBy('created_at',  'DESC')->first();

        return view('sistema.frente_caixa', ['titulo' => 'Frente de Caixa', 'produtos' => $produtos, 'request' => $request->all(), 'venda_atual' => $venda_atual]);
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
