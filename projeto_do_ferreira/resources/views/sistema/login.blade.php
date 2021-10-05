@extends('sistema.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Faça seu login!</h1>
        </div>

        <div class="informacao-pagina">
            <div style="width:30%; margin-left: auto; margin-right: auto;">
                @component('sistema.layouts._components.form_login',['erro' => $erro])
                @endcomponent
                
            </div>
        </div>
    </div>
@endsection
