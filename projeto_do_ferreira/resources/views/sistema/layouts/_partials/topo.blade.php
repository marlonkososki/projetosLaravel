    <div class="topo">

        <div class="logo">
            <img src="{{ asset('img/logo.png') }}">
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('sis.home') }}">Home</a></li>
                <li><a href="{{ route('produto.index') }}">Novo Produto</a></li>
                <li><a href="{{ route('cliente.index') }}">Novo Cliente</a></li>
                <li><a href="{{ route('frentecaixa.index') }}">Frente de Caixa</a></li>
                <li><a href="{{ route('venda.index') }}">Vendas Realizadas</a></li>
                <li><a href="{{ route('sis.sair') }}">Sair</a></li>
            </ul>
        </div>
    </div>
