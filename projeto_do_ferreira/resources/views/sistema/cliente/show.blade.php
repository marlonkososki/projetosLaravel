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
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width:90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Fone</th>
                        <th>Endereço</th>
                    </tr>
                    <tr>
                        <th>{{ $cliente->id }}</th>
                        <th>{{ $cliente->nome }}</th>
                        <th>{{ $cliente->cpf }}</th>
                        <th>{{ $cliente->telefone }}</th>
                        <th>{{ $cliente->endereco_completo }}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
