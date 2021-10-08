@extends('sistema.layouts.basico_home')

@section('titulo', $titulo)

@section('conteudo')


    <main>
        <div class="container px-3  py-0" id="custom-cards">
            <h2 class="pb-2 border-bottom">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Login</font>
                </font>
            </h2>
            <div class="informacao-pagina">
                <div style="width:30%; margin-left: auto; margin-right: auto;">
                    @component('sistema.layouts._components.form_login', ['erro' => $erro])
                    @endcomponent
                </div>
            </div>
        </div>
    </main>
@endsection
