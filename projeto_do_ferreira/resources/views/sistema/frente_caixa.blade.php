@extends('sistema.layouts.basico')

@section('titulo', 'Frente de Caixa')

@section('conteudo')

    <main class="mw-100 mh-100">
        <div class="container mw-100 mh-100 align-items-stretch g-5 py-3 d-inline-block">
            <div class="row">
                <div class="col w-75 p-3 bg-secondary">
                    <h2 class="pb-2 border-bottom">
                        <font style="vertical-align: inherit;">
                            <span style="vertical-align: inherit;" class="text-white" id="labelDescricao">Frente de
                                Caixa</span>
                        </font>
                    </h2>
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;" class="text-white-50">
                            <span style="vertical-align: inherit;" class="text-white" id="labelProdutoLista">teste</span>
                        </font>
                    </font>
                </div>
                <div class="direita w-25 p-3 bg-dark">
                    <div class="container py-2">
                        <div class="row py-3">
                            <form action={{ route('frentecaixa.store') }} method="post">
                                @csrf
                                <div class="col">
                                    <button type="submit" class="btn btn-success">FECHAR VENDA
                                        {{ $venda_atual->id }}</button>
                                </div>
                            </form>
                        </div>
                        @foreach ($produtos as $produto)
                            <div class="row py-1">
                                <div class="col">
                                    <form name="form_{{ $produto->id }}" id="form_{{ $produto->id }}">
                                        @csrf
                                        <button onclick="onClick({{ $produto->id }})" class="btn btn-primary"
                                            id="btn_{{ $produto->id }}"
                                            value="{{ $produto }}">{{ $produto->descricao }}</a>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                        <div class="row py-2">
                            <div class="col">
                                {{ $produtos->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        let produtos = [];

        function onClick(id) {
            event.preventDefault();

            var produto = new Object();
            var a = 'form_' + id;


            var labelDescricao = $('form[name="' + a + '"]').find('button#btn_' + id).val();

            labelDescricao = labelDescricao.replace(/['"]+/g, '').replace('{', '').replace('}', '');

            var array = labelDescricao.split(",");
            var teste = [];

            for (var i = 0; i < array.length; i++) {

                teste.push(array[i].split(":"));
            }

            for (var i = 0; i < teste.length; i++) {

                //debugger;
                switch (teste[i][0]) {

                    case 'id':
                        produto.id = teste[i][1];
                        break;
                    case 'descricao':
                        produto.descricao = teste[i][1];
                        break;
                    case 'codigo_barra':
                        produto.codigo_barra = teste[i][1];
                        break;
                    case 'estoque_atual':
                        produto.estoque_atual = teste[i][1];
                        break;
                    case 'valor_custo':
                        produto.valor_custo = teste[i][1];
                        break;
                    case 'valor_venda':
                        produto.valor_venda = teste[i][1];
                        break;
                    default:
                        break;
                }
            }

            $('#labelDescricao').text(produto.descricao);
            
            produtos.push(produto);

            var print = '';
            for (var i = 0; i < produtos.length; i++) {
                print += '<span style="vertical-align: inherit;" class="text-white">' +
                    produtos[i].id + ' ' +
                    produtos[i].descricao + ' ' +
                    produtos[i].codigo_barra + ' ' +
                    produtos[i].estoque_atual + ' ' +
                    produtos[i].valor_custo + ' ' +
                    produtos[i].valor_venda +
                    '</span><br>';
            }

            $('#labelProdutoLista').html(print);

        }
    </script>
@endsection
