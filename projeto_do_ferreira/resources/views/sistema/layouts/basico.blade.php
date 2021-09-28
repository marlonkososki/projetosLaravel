<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>CRY SYS - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    <script src="https://unpkg.com/vue@next"></script>
</head>

<body>
    @include('sistema.layouts._partials.topo')
    @yield('conteudo')
    @include('sistema.layouts._partials.rodape')

</body>

</html>
