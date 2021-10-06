@extends('sistema.layouts.basico')

@section('titulo', 'Venda - Itens')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h1>Venda - {{ $idvenda}}</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('venda.index') }}">Voltar</a></li>
            </ul>
        </div>

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
                        <tr> 
                            <th>TOTAL</th>
                            <th>{{ $total }}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
