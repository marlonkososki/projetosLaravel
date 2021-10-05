@extends('sistema.layouts.basico')

@section('titulo', 'Produto - Adicionar')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h1>Produto - Visualizar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index') }}">Voltar</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width:30%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <tr>
                        <th>ID</th>
                        <th>{{ $produto->id }}</th>
                    <tr>
                        <th>Descrição</th>
                        <th>{{ $produto->descricao }}</th>
                    </tr>
                    <tr>
                        <th>Código de barras</th>
                        <th>{{ $produto->codigo_barra }}</th>
                    </tr>
                    <tr>
                        <th>Estoque Atual</th>
                        <th>{{ $produto->estoque_atual }}</th>
                    </tr>
                    <tr>
                        <th>Vl Custo</th>
                        <th>{{ $produto->valor_custo }}</th>

                    </tr>
                    <tr>
                        <th>Vl Venda</th>
                        <th>{{ $produto->valor_venda }}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
