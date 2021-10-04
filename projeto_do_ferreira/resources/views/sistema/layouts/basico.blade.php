<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>CRY SYS - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
</head>

<body>
    @include('sistema.layouts._partials.topo')
    @yield('conteudo')
    @include('sistema.layouts._partials.rodape')

</body>

</html>
