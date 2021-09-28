@extends('sistema.layouts.basico')

@section('titulo', 'Cliente - Editar')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h1>Cliente - Editar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('cliente.index') }}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width:30%; margin-left: auto; margin-right: auto;">
                {{ $msg ?? '' }}
                <form action={{ route('cliente.update', ['cliente' => $cliente->id]) }} method="post">

                    <input name="id" value="{{ $cliente->id ?? '' }}" type="hidden">
                    @csrf
                    @method('PUT')
                    <input name="nome" value="{{ $cliente->nome ?? old('nome') }}" type="text" placeholder="Nome"
                        class="borda-preta">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                    <br>

                    <input name="cpf" value="{{ $cliente->cpf ?? old('cpf') }}" type="text" placeholder="CPF"
                        class="borda-preta">
                    {{ $errors->has('cpf') ? $errors->first('cpf') : '' }}
                    <br>

                    <input name="telefone" value="{{ $cliente->telefone ?? old('telefone') }}" type="text"
                        placeholder="Fone" class="borda-preta">
                    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
                    <br>

                    <input name="endereco_completo" value="{{ $cliente->endereco_completo ?? old('endereco_completo') }}"
                        type="text" placeholder="Endereço Completo" class="borda-preta">
                    {{ $errors->has('endereco_completo') ? $errors->first('endereco_completo') : '' }}
                    <br>

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
