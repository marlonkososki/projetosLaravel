@extends('sistema.layouts.basico')

@section('titulo', 'Cliente - Adicionar')

@section('conteudo')


    <main>
        <div class="container px-3  py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Cliente</font>
                </font>
            </h2>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('cliente.index') }}" class="nav-link">Voltar</a></li>
            </ul>

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
