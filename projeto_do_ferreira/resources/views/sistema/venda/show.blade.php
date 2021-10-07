@extends('sistema.layouts.basico')

@section('titulo', 'Venda - Itens')

@section('conteudo')


    <main>
        <div class="container px-3  py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Venda n° {{ $idvenda }}</font>
                </font>
            </h2>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('venda.index') }}" class="nav-link">Voltar</a></li>
            </ul>

            <div class="informacao-pagina">
                <div style="width:90%; margin-left: auto; margin-right: auto;">
                    <table border="1" width="100%">
                        <thead>
                            <tr>
                                <th>Produto</th>
                                <th>Codigo Barras</th>
                                <th>Quantidade</th>
                                <th>Valor de Custo</th>
                                <th>Valor de Venda</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($itens as $item)
                                <tr>
                                    <th>{{ $item->descricao }}</th>
                                    <th>{{ $item->codigo_barra }}</th>
                                    <th>{{ $item->quantidade }}</th>
                                    <th>{{ $item->valor_custo }}</th>
                                    <th>{{ $item->valor_venda }}</th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <table border="1" width="50%">
                        <tr>
                            <th>TOTAL</th>
                            <th>R$ {{ $total }}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    @endsection
