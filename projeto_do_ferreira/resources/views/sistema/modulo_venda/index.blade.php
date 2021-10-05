@extends('sistema.layouts.basico')

@section('titulo', 'Vendas Realizadas')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Vendas Realizadas</h1>
        </div>

        <div class="informacao-pagina">
            <div style="width:90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nº Venda</th>
                            <th>Nº Caixa</th>
                            <th>Cliente</th>
                            <th>Usuário</th>
                            <th>Desconto</th>
                            <th>Acrescimo</th>
                            <th>Valor Total</th>
                            <th>Data</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listagem as $list)
                            <tr>
                                <th>{{ $list->id }}</th>
                                <th>{{ $list->frente_caixa_id }}</th>
                                <th>{{ $list->nome }}</th>
                                <th>{{ $list->name }}</th>
                                <th>{{ $list->desconto }}</th>
                                <th>{{ $list->acrescimo }}</th>
                                <th>{{ $list->total }}</th>
                                <th>{{ $list->updated_at }}</th>
                                <th><a href="{{route('venda.show', ['venda' => $list->id])}}">Visualizar</a></th>
                                <th>
                                    <form id="form_{{ $list->id }}" action="#" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#"
                                            onclick="document.getElementById('form_{{ $list->id }}').submit()">Excluir</a>
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $vendas->appends($request)->links() }}

                {{-- <br>
                {{ $clientes->count() }} 
                <br>
                {{ $clientes->total() }}
                <br>
                {{ $clientes->firstItem() }}
                <br>
                {{ $clientes->lastItem() }}
                <br> --}}
                {{-- <br>
                Exibindo {{ $clientes->count() }} clientes de {{ $clientes->total() }} --}}
            </div>
        </div>
    </div>
@endsection
