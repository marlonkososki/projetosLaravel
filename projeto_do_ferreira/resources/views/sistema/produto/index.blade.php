@extends('sistema.layouts.basico')

@section('titulo', 'Produto - Listar')

@section('conteudo')

    <main>
        <div class="container px-3  py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Produto</font>
                </font>
            </h2>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('produto.create') }}" class="nav-link">Novo</a></li>
            </ul>

            <div class="informacao-pagina">
                <div style="width:90%; margin-left: auto; margin-right: auto;">
                    <table class="table  table-hover">
                        <thead>
                            <tr>
                                <th>Descrição</th>
                                <th>Código de barras</th>
                                <th>Estoque Atual</th>
                                <th>Vl Custo</th>
                                <th>Vl Venda</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($produtos as $produto)
                                <tr>
                                    <th>{{ $produto->descricao }}</th>
                                    <th>{{ $produto->codigo_barra }}</th>
                                    <th>{{ $produto->estoque_atual }}</th>
                                    <th>{{ $produto->valor_custo }}</th>
                                    <th>{{ $produto->valor_venda }}</th>
                                    <th><a href="{{ route('produto.show', ['produto' => $produto->id]) }}">Visualizar</a>
                                    </th>
                                    <th><a href="{{ route('produto.edit', ['produto' => $produto->id]) }}">Editar</a></th>
                                    <th>
                                        <form id="form_{{ $produto->id }}"
                                            action="{{ route('produto.destroy', ['produto' => $produto->id]) }}"
                                            method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a href="#"
                                                onclick="document.getElementById('form_{{ $produto->id }}').submit()">Excluir</a>
                                        </form>
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    {{ $produtos->appends($request)->links() }}

                            {{-- <br>
                        {{ $produtos->count() }} 
                        <br>
                        {{ $produto->total() }}
                        <br>
                        {{ $produtos->firstItem() }}
                        <br>
                        {{ $produtos->lastItem() }}
                        <br> --}}
                    <br>
                    Exibindo {{ $produtos->count() }} produtos de {{ $produtos->total() }}.
                </div>
            </div>
        </div>
    </main>
@endsection
