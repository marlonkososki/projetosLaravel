@extends('sistema.layouts.basico')

@section('titulo', 'Cliente - Listar')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h1>Cliente - Listar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.create') }}">Novo</a></li>
            </ul>
        </div>

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
