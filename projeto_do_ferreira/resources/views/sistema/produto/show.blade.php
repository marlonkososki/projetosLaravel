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
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width:90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <tr>
                        <th>ID</th>
                        <th>Descrição</th>
                        <th>Código de barras</th>
                        <th>Estoque Atual</th>
                        <th>Vl Custo</th>
                        <th>Vl Venda</th>
                    </tr>
                    <tr>
                        <th>{{ $produto->id }}</th>
                        <th>{{ $produto->descricao }}</th>
                        <th>{{ $produto->codigo_barra }}</th>
                        <th>{{ $produto->estoque_atual }}</th>
                        <th>{{ $produto->valor_custo }}</th>
                        <th>{{ $produto->valor_venda }}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
