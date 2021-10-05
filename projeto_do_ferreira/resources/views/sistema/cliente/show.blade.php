@extends('sistema.layouts.basico')

@section('titulo', 'Cliente - Adicionar')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h1>Cliente - Visualizar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.index') }}">Voltar</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width:30%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <tr>
                        <th>ID</th>
                        <th>{{ $cliente->id }}</th>
                    </tr>
                    <tr>
                        <th>Nome</th>
                        <th>{{ $cliente->nome }}</th>
                    </tr>
                    <tr>
                        <th>CPF</th>
                        <th>{{ $cliente->cpf }}</th>
                    </tr>
                    <tr>
                        <th>Fone</th>
                        <th>{{ $cliente->telefone }}</th>
                    </tr>
                    <tr>
                        <th>Endereço</th>
                        <th>{{ $cliente->endereco_completo }}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
