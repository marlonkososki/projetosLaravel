<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venda;
use App\VendaItem;
use App\Caixa;
use App\Produto;
use App\Cliente;

class FrenteCaixaController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        $produtos = Produto::paginate( 5 );

        $cliente = Cliente::find( 1 )->get();

        //print_r( $cliente[0]->id );

        $ldate = date( 'Y-m-d H:i:s' );

        $caixa = Caixa::orderBy( 'updated_at',  'DESC' )->first();

        $ultima_venda = Venda::orderBy( 'created_at',  'DESC' )->first();

        if ( $ultima_venda == null ) {

            $venda = new Venda();
            $venda->caixa_id = $caixa->id;
            $venda->cliente_id = $cliente[0]->id;
            $venda->desconto = 0.00;
            $venda->acrescimo = 0.00;
            $venda->total = 0.00;
            $venda->updated_at = null;

            $venda->save();
        } else if ( isset( $ultima_venda->updated_at ) && $ultima_venda->updated_at != '' ) {

            $venda = new Venda();
            $venda->caixa_id = $caixa->id;
            $venda->cliente_id = $cliente[0]->id;
            $venda->desconto = 0.00;
            $venda->acrescimo = 0.00;
            $venda->total = 0.00;
            $venda->updated_at = null;

            $venda->save();
        }

        $venda_atual = Venda::orderBy( 'created_at',  'DESC' )->first();

        return view( 'sistema.frente_caixa', ['titulo' => 'Frente de Caixa', 'produtos' => $produtos, 'venda_atual' => $venda_atual] );

    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

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
