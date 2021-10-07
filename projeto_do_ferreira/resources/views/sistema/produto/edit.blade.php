@extends('sistema.layouts.basico')

@section('titulo', 'Produto - Adicionar')

@section('conteudo')


    <main>
        <div class="container px-3  py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Produto</font>
                </font>
            </h2>
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{ route('produto.index') }}" class="nav-link">Voltar</a></li>
            </ul>

            <div class="informacao-pagina">
                <div style="width:30%; margin-left: auto; margin-right: auto;">
                    {{ $msg ?? '' }}
                    <form action="{{ route('produto.update', ['produto' => $produto->id]) }}" method="post">

                        <input name="id" value="{{ $produto->id ?? '' }}" type="hidden">
                        @csrf
                        @method('PUT')
                        <input name="descricao" value="{{ $produto->descricao ?? old('descricao') }}" type="text"
                            placeholder="Descricao" class="form-label">
                        {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
                        <br>

                        <input name="codigo_barra" value="{{ $produto->codigo_barra ?? old('codigo_barra') }}" type="text"
                            placeholder="Código de barras" class="form-label">
                        {{ $errors->has('codigo_barra') ? $errors->first('codigo_barra') : '' }}
                        <br>

                        <input name="estoque_atual" value="{{ $produto->estoque_atual ?? old('estoque_atual') }}"
                            type="decimal" placeholder="Estoque" class="form-label">
                        {{ $errors->has('estoque_atual') ? $errors->first('estoque_atual') : '' }}
                        <br>

                        <input name="valor_custo" value="{{ $produto->valor_custo ?? old('valor_custo') }}"
                            type="decimal" placeholder="Vl Custo" class="form-label">
                        {{ $errors->has('valor_custo') ? $errors->first('valor_custo') : '' }}
                        <br>

                        <input name="valor_venda" value="{{ $produto->valor_venda ?? old('valor_venda') }}"
                            type="decimal" placeholder="Vl Venda" class="form-label">
                        {{ $errors->has('valor_venda') ? $errors->first('valor_venda') : '' }}
                        <br>

                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
