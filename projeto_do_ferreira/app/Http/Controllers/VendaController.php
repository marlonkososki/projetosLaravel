<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\VendaItem;
use Illuminate\Support\Facades\DB;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendas = Venda::all();

        $listagem = DB::table('vendas')
        ->join('clientes', 'clientes.id', '=', 'vendas.cliente_id')
        ->join('users', 'users.id', '=', 'vendas.user_id')
        ->whereNotNull('vendas.updated_at')
        ->select('vendas.id','vendas.frente_caixa_id','clientes.nome','users.name','vendas.desconto', 'vendas.acrescimo', 'vendas.total', 'vendas.updated_at')
        ->get();
        
        //print_r($listagem);

        return view('sistema.modulo_venda.index',['listagem' => $listagem]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Venda $venda)
    {

        //print_r($venda);

        $itens = DB::table('venda_itens')
        ->join('produtos', 'venda_itens.produto_id', '=', 'produtos.id')
        ->where('venda_itens.venda_id',$venda->id)
        ->select('venda_itens.venda_id', 'venda_itens.produto_id', 'produtos.descricao', 
                'venda_itens.quantidade', 'venda_itens.valor_custo', 
                'venda_itens.valor_venda','venda_itens.valor_venda') 
        ->get();

        return view( 'sistema.modulo_venda.show', ['itens' => $itens] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
