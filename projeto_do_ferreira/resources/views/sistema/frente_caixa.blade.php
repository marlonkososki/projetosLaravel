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
                            <span style="vertical-align: inherit;" class="text-white" id="labelProdutoLista"></span>
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
                                            value="{{ $produto->descricao }}">{{ $produto->descricao }}</a>
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
        var listaProd = [];

        function onClick(id) {
            event.preventDefault();
            var a = 'form_' + id;

            var labelDescricao = $('form[name="' + a + '"]').find('button#btn_' + id).val();
            listaProd.push(labelDescricao);
            console.log(listaProd);
            // debugger

            $('#labelDescricao').text(labelDescricao);
            // debugger
            // listaProd.forEach(element => {
            //     $('#labelProdutoLista').text(labelProdutoLista);
            // });

            $('#labelProdutoLista').text($.each(listaProd, function(index, value) {
                console.log(index + ' : ' + value);
            }))





            // $(a).find('input#btn_' + id).val();

            //alert(email);
            // debugger
            // // $('form[name="' + a + '"]').submit(function(event) {
            // //     event.preventDefault();
            // //     alert(a);
            // // });
        }
    </script>
@endsection
