<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
 {
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function index( Request $request )
 {
        // dd( $request );

        $produtos = Produto::where( 'descricao', 'like', '%' . $request->input( 'descricao' ) . '%' )
        ->where( 'codigo_barra', 'like', '%' . $request->input( 'codigo_barra' ) . '%' )
        ->paginate( 5 );

        return view( 'sistema.produto.index', ['titulo' => 'Produto - Listar', 'produtos' => $produtos, 'request' => $request->all()] );
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */

    public function create()
 {
        //
        return view( 'sistema.produto.create' );
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
                'descricao' => 'required|min:2|max:150',
                'codigo_barra' => 'required|unique:produtos',
                'estoque_atual' => 'required|numeric',
                'valor_custo' => 'required|numeric',
                'valor_venda' => 'required|numeric'
            ];

            $feedback = [
                'descricao.required' => 'O campo "Descrição" precisa ser preenchido.',
                'descricao.min' => 'O campo "Descrição" precisa ter no mínimo 2 caracteres.',
                'descricao.max' => 'O campo "Descrição" precisa ter no máximo 150 caracteres.',
                'codigo_barra.required' => 'O campo "Código de barras" precisa ser preenchido.',
                'codigo_barra.unique' => 'O código de barras informado já foi cadastrado anteriormente.',
                'estoque_atual.required' => 'O campo "Estoque" precisa ser preenchido.',
                'estoque_atual.numeric' => 'Informe um valor correto para estoque.(Use ponto para valores decimais)',
                'valor_custo.required' => 'O campo "Vl Custo" precisa ser preenchido.',
                'valor_custo.numeric' => 'Informe um valor correto para preço de custo.(Use ponto para valores decimais)',
                'valor_venda.required' => 'O campo "Vl Venda" precisa ser preenchido.',
                'valor_venda.numeric' => 'Informe um valor correto para preço de venda.(Use ponto para valores decimais)'
            ];

            $request->validate( $regras, $feedback );

            Produto::create( $request->all() );

            $msg = 'Cadastro realizado com sucesso!';
        }

        return redirect()->route( 'produto.index', ['msg' => $msg] );
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function show( Produto $produto )
 {
        return view( 'sistema.produto.show', ['produto' => $produto] );
    }

    /**
    * Display the specified resource.
    *
    * @param  string  $codigobarra
    * @return Produto
    */

    public function getProdutoCodigoBarra( $codigobarra )
 {
        return  $produto = Produto::where( 'codigo_barra', $codigobarra );

    } 
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function edit( Produto $produto )
 {
        //
        return view( 'sistema.produto.edit', ['produto' => $produto] );
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function update( Request $request, Produto $produto )
 {
        $produto->update( $request->all() );

        // dd( $produto );

        return redirect()->route( 'produto.show', [ $produto->id] );
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */

    public function destroy( Produto $produto )
 {
        //
        $produto->delete();
        return redirect()->route( 'produto.index' );

    }
}
