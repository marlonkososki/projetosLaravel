{{ $slot }}

<form action={{ route('sistema.login') }} method="post">
    @csrf
    <input class="form-label" name="usuario" value="{{ old('usuario') }}" type="text" placeholder="Usuário"
        class="borda-preta">
    {{ $errors->has('usuario') ? $errors->first('usuario') : '' }}
    <br>
    <input class="form-label" name="senha" value="{{ old('senha') }}" type="password" placeholder="Senha"
        class="borda-preta">
    {{ $errors->has('senha') ? $errors->first('senha') : '' }}
    <br>
    <button type="submit" class="btn btn-primary">Entrar</button>
</form>
{{ isset($erro) && $erro != '' ? $erro : '' }}
