@extends('sistema.layouts.basico')

@section('titulo', 'Produto - Adicionar')

@section('conteudo')


    <main>
        <div class="container px-3  py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Produto</font>
                </font>
            </h2>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('produto.index') }}" class="nav-link">Voltar</a></li>
            </ul>

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
