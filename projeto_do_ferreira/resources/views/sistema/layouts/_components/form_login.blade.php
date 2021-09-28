{{ $slot }}

<form action={{ route('sistema.login') }} method="post">
    @csrf
    <input name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário" class="borda-preta">
    {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
    <br>
    <input name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha" class="borda-preta">
    {{ $errors->has('senha') ? $errors->first('senha') : '' }}
    <br>
    <button type="submit" class="borda-preta">CONCLUIR</button>
</form>
{{ isset($erro) && $erro != '' ? $erro : '' }}
{{-- @if ($errors->any())
    <div style="positon:absolute; top:0px; left:0px; width:100%; background:red;">
        @foreach ($errors->all() as $erro)
            {{ $erro }}
            <br>
        @endforeach
    </div>
@endif --}}
