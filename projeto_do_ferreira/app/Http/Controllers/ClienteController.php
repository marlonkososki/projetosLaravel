<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
 {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index( Request $request )
 {
        //

        $clientes = Cliente::where( 'nome', 'like', '%' . $request->input( 'nome' ) . '%' )
        ->where( 'cpf', 'like', '%' . $request->input( 'cpf' ) . '%' )
        ->where( 'telefone', 'like', '%' . $request->input( 'telefone' ) . '%' )
        ->where( 'endereco_completo', 'like', '%' . $request->input( 'endereco_completo' ) . '%' )
        ->paginate( 10 );

        return view( 'sistema.cliente.index', ['clientes' => $clientes, 'request' => $request->all()] );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create()
 {
        //
        return view( 'sistema.cliente.create' );
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

    public function store( Request $request )
 {
        //
        $msg = '';

        //inclusao
        if ( $request->input( '_token' ) != '' && $request->input( 'id' ) == '' ) {
            // validação
            $regras = [
                'nome' => 'required|min:2|max:150',
                'cpf' => 'required|unique:clientes',
                'telefone' => 'required',
                'endereco_completo' => 'required|min:5|max:150'
            ];

            $feedback = [
                'nome.required' => 'O campo "Nome" precisa ser preenchido.',
                'nome.min' => 'O campo "Nome" precisa ter no mínimo 2 caracteres.',
                'nome.max' => 'O campo "Nome" precisa ter no máximo 150 caracteres.',
                'cpf.required' => 'O campo "CPF" precisa ser preenchido.',
                'cpf.unique' => 'O CPF informado já foi cadastrado anteriormente.',
                'telefone.required' => 'O campo "Fone" precisa ser preenchido.',
                'endereco_completo.required' => 'O campo "Endereço Completo" precisa ser preenchido.',
                'endereco_completo.min' => 'O campo "Endereço" precisa ter no mínimo 5 caracteres.',
                'endereco_completo.max' => 'O campo "Endereço" precisa ter no máximo 150 caracteres.'
            ];

            $request->validate( $regras, $feedback );

            Cliente::create( $request->all() );

            $msg = 'Cadastro realizado com sucesso!';
        }

        return redirect()->route( 'cliente.index', ['msg' => $msg] );
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( Cliente $cliente )
 {
        //
        return view( 'sistema.cliente.show', ['cliente' => $cliente] );
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( Cliente $cliente )
 {
        //
        return view( 'sistema.cliente.edit', ['cliente' => $cliente] );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Cliente $cliente )
 {
        //
        $cliente->update( $request->all() );

        // dd( $cliente );

        return redirect()->route( 'cliente.show', [ $cliente->id] );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( Cliente $cliente )
 {
        //
        $cliente->delete();
        return redirect()->route( 'cliente.index' );
    }
}
