{{$slot}}

<form action={{route('sis.cliente')}} method="post">
    @csrf
    <input name="nome"  value="{{ old('nome') }}" type="text" placeholder="Nome" class="borda-preta">
    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    <br>

    <input name="cpf"  value="{{ old('cpf') }}" type="text" placeholder="CPF" class="borda-preta">
    {{ $errors->has('cpf') ? $errors->first('cpf') : '' }}
    <br>

    <input name="telefone"  value="{{ old('telefone') }}" type="text" placeholder="Fone" class="borda-preta">
    {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
    <br>

    <input name="endereco_completo"  value="{{ old('endereco_completo') }}" type="text" placeholder="Endereço Completo" class="borda-preta">
    {{ $errors->has('endereco_completo') ? $errors->first('endereco_completo') : '' }}
    <br>

    <button type="submit" class="borda-preta">CONCLUIR</button>
</form>

{{-- @if ($errors->any())
    <div style="positon:absolute; top:0px; left:0px; width:100%; background:red;">
        @foreach ($errors->all() as $erro)
            {{ $erro }}
            <br>
        @endforeach
    </div>
@endif --}}