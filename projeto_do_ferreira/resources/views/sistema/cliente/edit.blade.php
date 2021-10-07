@extends('sistema.layouts.basico')

@section('titulo', 'Cliente - Editar')

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
                {{ $msg ?? '' }}
                <form action={{ route('cliente.update', ['cliente' => $cliente->id]) }} method="post">

                    <input name="id" value="{{ $cliente->id ?? '' }}" type="hidden">
                    @csrf
                    @method('PUT')
                    <input name="nome" value="{{ $cliente->nome ?? old('nome') }}" type="text" placeholder="Nome"
                        class="form-label">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                    <br>

                    <input name="cpf" value="{{ $cliente->cpf ?? old('cpf') }}" type="text" placeholder="CPF"
                        class="form-label">
                    {{ $errors->has('cpf') ? $errors->first('cpf') : '' }}
                    <br>

                    <input name="telefone" value="{{ $cliente->telefone ?? old('telefone') }}" type="text"
                        placeholder="Fone" class="form-label">
                    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
                    <br>

                    <input name="endereco_completo" value="{{ $cliente->endereco_completo ?? old('endereco_completo') }}"
                        type="text" placeholder="Endereço Completo" class="form-label">
                    {{ $errors->has('endereco_completo') ? $errors->first('endereco_completo') : '' }}
                    <br>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
