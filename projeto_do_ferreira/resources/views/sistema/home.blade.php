@extends('sistema.layouts.basico_home')

@section('titulo', 'Home')

@section('conteudo')

    <main>
        <div class="container px-3  py-5" id="custom-cards">
            <h2 class="pb-2 border-bottom">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Home</font>
                </font>
            </h2>

            <div class="row row-cols-1 row-cols-lg-5 align-items-stretch g-2 py-5">

                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('#');">
                        <div class="d-flex flex-column h-80 p-2 pb-5 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-10 lh-1 fw-bold">
                                <font style="vertical-align: inherit;">
                                    <a href="{{ route('produto.index') }}" class="nav-link">
                                        <font style="vertical-align: inherit;">Produto</font>
                                    </a>
                                </font>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('#');">
                        <div class="d-flex flex-column h-80 p-2 pb-5 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-10 lh-1 fw-bold">
                                <font style="vertical-align: inherit;">
                                    <a href="{{ route('cliente.index') }}" class="nav-link">
                                        <font style="vertical-align: inherit;">Cliente</font>
                                    </a>
                                </font>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('#');">
                        <div class="d-flex flex-column h-80 p-2 pb-5 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-10 lh-1 fw-bold">
                                <font style="vertical-align: inherit;">
                                    <a href="{{ route('frentecaixa.index') }}" class="nav-link">
                                        <font style="vertical-align: inherit;">Caixa</font>
                                    </a>
                                </font>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('#');">
                        <div class="d-flex flex-column h-80 p-2 pb-5 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-10 lh-1 fw-bold">
                                <font style="vertical-align: inherit;">
                                    <a href="{{ route('venda.index') }}" class="nav-link">
                                        <font style="vertical-align: inherit;">Vendas</font>
                                    </a>
                                </font>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                        style="background-image: url('#');">
                        <div class="d-flex flex-column h-80 p-2 pb-5 text-shadow-1">
                            <h2 class="pt-5 mt-5 mb-4 display-10 lh-1 fw-bold">
                                <font style="vertical-align: inherit;">
                                    <a href="{{ route('sis.sair') }}" class="nav-link">
                                        <font style="vertical-align: inherit;">Sair</font>
                                    </a>
                                </font>
                            </h2>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
@endsection
