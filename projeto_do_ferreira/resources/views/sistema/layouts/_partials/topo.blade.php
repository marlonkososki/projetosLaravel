    <div class="px-3 py-0 text-white">
        <div class="container">
            <header class="d-flex justify-content-center py-3 ">
                <a href="{{ route('sis.home') }}"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <img src="{{ asset('img/logo.png') }}" class="bi me-2">
                    <span class="fs-3">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Cry System</font>
                        </font>
                    </span>
                </a>

                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="{{ route('sis.home') }}" class="nav-link"
                            aria-current="page">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Home</font>
                            </font>
                        </a></li>
                    <li class="nav-item"><a href="{{ route('produto.index') }}" class="nav-link">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Produto</font>
                            </font>
                        </a></li>
                    <li class="nav-item"><a href="{{ route('cliente.index') }}" class="nav-link">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Cliente</font>
                            </font>
                        </a></li>
                    <li class="nav-item"><a href="{{ route('frentecaixa.index') }}" class="nav-link">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Frente de Caixa</font>
                            </font>
                        </a></li>
                    <li class="nav-item"><a href="{{ route('venda.index') }}" class="nav-link">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Venda Realizadas</font>
                            </font>
                        </a></li>
                    <li class="nav-item"><a href="{{ route('sis.sair') }}" class="nav-link">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Sair</font>
                            </font>
                        </a></li>
                </ul>
            </header>
        </div>
    </div>
