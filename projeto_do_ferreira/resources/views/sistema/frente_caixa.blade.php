@extends('sistema.layouts.basico')

@section('titulo', 'Frente de Caixa')

@section('conteudo')

    <div class="conteudo-destaque">

        <div class="esquerda">
            {{-- LISTA DE PRODUTOS ADICIONADOS NA VENDA --}}
        </div>

        <div class="direita">
            <div style="width:90%; margin-left: auto; margin-right: auto;">
                <table  width="100%" style="margin-top: 100px;">
                    <thead>
                        <tr>
                            <th>
                                <h3>Adicione produtos a venda</h3>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)


                            <tr>
                                <th>
                                    <form id="form_{{ $produto->id }}" action="" method="post">
                                        @csrf
                                        <a href="#"
                                            onclick="document.getElementById('form_{{ $produto->id }}').submit()">{{ $produto->descricao }}</a>
                                    </form>
                                </th>
                            </tr>


                        @endforeach
                        <tr>
                            <th>{{ $produtos->appends($request)->links() }}</th>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
