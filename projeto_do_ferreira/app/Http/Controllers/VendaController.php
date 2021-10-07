<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\VendaItemController;
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

        $listagem = DB::table( 'vendas' )
        ->join( 'clientes', 'clientes.id', '=', 'vendas.cliente_id' )
        ->join( 'caixas', 'caixas.id', '=', 'vendas.caixa_id' )
        ->join( 'users', 'users.id', '=', 'caixas.user_id' )
        ->whereNotNull( 'vendas.updated_at' )
        ->select( 'vendas.id', 'vendas.caixa_id', 'clientes.nome', 'users.name', 'vendas.desconto', 'vendas.acrescimo', 'vendas.total', 'vendas.updated_at' )
        ->paginate( 5 );

        //print_r( $listagem );

        return view( 'sistema.venda.index', ['listagem' => $listagem] );
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

    public function store( Request $request )
 {

    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( Venda $venda )
 {

        $vendaItensController = new VendaItemController();
        $itens = $vendaItensController->index($venda);

        $total = 0;
        foreach ($itens as $key => $value) {

            $total+= ($value->valor_venda*$value->quantidade);
        }

        return view( 'sistema.venda.show', ['itens' => $itens, 'idvenda' => $venda->id, 'total' => $total]  );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( $id )
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

    public function update( Request $request, $id )
 {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( $id )
 {
        //
    }
}
