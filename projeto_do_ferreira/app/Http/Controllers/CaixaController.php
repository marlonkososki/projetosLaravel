<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Caixa;

class CaixaController extends Controller {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index() {
        //
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create() {

    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request ) {
        // print_r( $_SESSION );
        $ldate = date( 'Y-m-d H:i:s' );

        $users = User::where( 'email', $request->get( 'usuario' ) )->pluck( 'id' )->all();

        $caixas = Caixa::orderBy( 'updated_at',  'DESC' )->first();

        if ( $caixas == null ) {

            print_r( $users );
            $caixa = new Caixa();
            $caixa->user_id = $users[0];
            $caixa->valor_inicial = 0.00;
            $caixa->valor_final = 0.00;
            $caixa->abertura = $ldate;

            $caixa->save();

        } else if ( isset( $caixas->fechamento ) && $caixas->fechamento != '' ) {

            print_r( $users );
            $caixa = new Caixa();
            $caixa->user_id = $users[0];
            $caixa->valor_inicial = 0.00;
            $caixa->valor_final = 0.00;
            $caixa->abertura = $ldate;

            $caixa->save();
        }
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

    public function destroy( Caixa $caixas ) {

        if ( $caixas->fechamento == null ) {
            $ldate = date( 'Y-m-d H:i:s' );
            $caixas->fechamento = $ldate;
            $caixas->update();
        }
    }

}
