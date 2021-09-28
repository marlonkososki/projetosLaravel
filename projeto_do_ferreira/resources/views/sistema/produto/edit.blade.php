@extends('sistema.layouts.basico')

@section('titulo', 'Produto - Adicionar')

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h1>Produto - Editar</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('produto.index')}}">Voltar</a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        <div class="informacao-pagina">
            <div style="width:30%; margin-left: auto; margin-right: auto;">
                {{ $msg ?? '' }}
                <form action="{{ route('produto.update', ['produto' => $produto->id])}}" method="post">

                    <input name="id" value="{{ $produto->id ?? '' }}" type="hidden">
                    @csrf
                    @method('PUT')
                    <input name="descricao" value="{{ $produto->descricao ?? old('descricao') }}" type="text"
                        placeholder="Descricao" class="borda-preta">
                    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
                    <br>

                    <input name="codigo_barra" value="{{ $produto->codigo_barra ?? old('codigo_barra') }}" type="text"
                        placeholder="Código de barras" class="borda-preta">
                    {{ $errors->has('codigo_barra') ? $errors->first('codigo_barra') : '' }}
                    <br>

                    <input name="estoque_atual" value="{{ $produto->estoque_atual ?? old('estoque_atual') }}"
                        type="decimal" placeholder="Estoque" class="borda-preta">
                    {{ $errors->has('estoque_atual') ? $errors->first('estoque_atual') : '' }}
                    <br>

                    <input name="valor_custo" value="{{ $produto->valor_custo ?? old('valor_custo') }}" type="decimal"
                        placeholder="Vl Custo" class="borda-preta">
                    {{ $errors->has('valor_custo') ? $errors->first('valor_custo') : '' }}
                    <br>

                    <input name="valor_venda" value="{{ $produto->valor_venda ?? old('valor_venda') }}" type="decimal"
                        placeholder="Vl Venda" class="borda-preta">
                    {{ $errors->has('valor_venda') ? $errors->first('valor_venda') : '' }}
                    <br>

                    <button type="submit" class="borda-preta">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
