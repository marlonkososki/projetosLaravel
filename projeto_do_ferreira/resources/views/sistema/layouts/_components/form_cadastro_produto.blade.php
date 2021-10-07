{{$slot}}

<form action={{route('sis.produto')}} method="post">
    @csrf
    <input name="descricao"  value="{{ old('descricao') }}" type="text" placeholder="Descricao" class="form-label">
    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
    <br>

    <input name="codigo_barra"  value="{{ old('codigo_barra') }}" type="text" placeholder="Código de barras" class="form-label">
    {{ $errors->has('codigo_barra') ? $errors->first('codigo_barra') : '' }}
    <br>

    <input name="estoque_atual"  value="{{ old('estoque_atual') }}" type="decimal" placeholder="Estoque" class="form-label">
    {{ $errors->has('estoque_atual') ? $errors->first('estoque_atual') : '' }}
    <br>

    <input name="valor_custo"  value="{{ old('valor_custo') }}" type="decimal" placeholder="VL Custo" class="form-label">
    {{ $errors->has('valor_custo') ? $errors->first('valor_custo') : '' }}
    <br>

    <input name="valor_venda"  value="{{ old('valor_venda') }}" type="decimal" placeholder="VL Venda" class="form-label">
    {{ $errors->has('valor_venda') ? $errors->first('valor_venda') : '' }}
    <br>

    <button type="submit" class="form-label">CONCLUIR</button>
</form>

{{-- @if ($errors->any())
    <div style="positon:absolute; top:0px; left:0px; width:100%; background:red;">
        @foreach ($errors->all() as $erro)
            {{ $erro }}
            <br>
        @endforeach
    </div>
@endif --}}
