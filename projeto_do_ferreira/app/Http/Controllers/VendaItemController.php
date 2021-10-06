<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VendaItem;
use App\Venda;
use App\Produto;

class VendaItemController extends Controller {

    public function index( Venda $venda ) {

        
        
        return $itens = VendaItem::join('produtos', 'venda_items.produto_id','=', 'produtos.id')   
                        ->where( 'venda_id', $venda->id )
                        ->select('produtos.descricao','produtos.codigo_barra','venda_items.quantidade','venda_items.valor_custo','venda_items.valor_venda' )
                        ->get();
       // print_r($itens);

        //return $itens = VendaItem::where( 'venda_id', $venda->id )->get();
    }

    public function create() {
        //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( $id ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id ) {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, $id ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id ) {
        //
    }
}
