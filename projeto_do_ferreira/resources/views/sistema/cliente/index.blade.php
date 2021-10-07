@extends('sistema.layouts.basico')

@section('titulo', 'Cliente - Listar')

@section('conteudo')


    <main>
        <div class="container px-3  py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Cliente</font>
                </font>
            </h2>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('cliente.create') }}" class="nav-link">Novo</a></li>
            </ul>

        <div class="informacao-pagina">
            <div style="width:90%; margin-left: auto; margin-right: auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Fone</th>
                            <th>Endereço</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <th>{{ $cliente->nome }}</th>
                                <th>{{ $cliente->cpf }}</th>
                                <th>{{ $cliente->telefone }}</th>
                                <th>{{ $cliente->endereco_completo }}</th>
                                <th><a href="{{ route('cliente.show', ['cliente' => $cliente->id]) }}">Visualizar</a></th>
                                <th><a href="{{ route('cliente.edit', ['cliente' => $cliente->id]) }}">Editar</a></th>
                                <th>
                                    <form id="form_{{ $cliente->id }}"
                                        action="{{ route('cliente.destroy', ['cliente' => $cliente->id]) }}"
                                        method="post">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#"
                                            onclick="document.getElementById('form_{{ $cliente->id }}').submit()">Excluir</a>
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $clientes->appends($request)->links() }}

                {{-- <br>
                {{ $clientes->count() }} 
                <br>
                {{ $clientes->total() }}
                <br>
                {{ $clientes->firstItem() }}
                <br>
                {{ $clientes->lastItem() }}
                <br> --}}
                <br>
                Exibindo {{ $clientes->count() }} clientes de {{ $clientes->total() }}
            </div>
        </div>
    </div>
@endsection
