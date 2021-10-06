@extends('sistema.layouts.basico')

@section('titulo', 'Frente de Caixa')

@section('conteudo')



    <div class="conteudo-destaque">

        <div class="esquerda">
            {{-- LISTA DE PRODUTOS ADICIONADOS NA VENDA --}}
        </div>

        <div class="direita">
            <div style="width:90%; margin-left: auto; margin-right: auto;">
                <table width="100%" style="margin-top: 100px;">
                    <thead>
                        <tr>
                            <form action={{ route('frentecaixa.store') }} method="post">
                                @csrf
                                <th>
                                </th>
                                <th>

                                    <button type="submit">FECHAR VENDA {{ $venda_atual->id }}</button>
                                </th>
                                <th>
                                </th>
                            </form>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <th></th>
                                <th>
                                    <form name="form_{{ $produto->id }}" id="form_{{ $produto->id }}">
                                        @csrf
                                        <button onclick="onClick({{ $produto->id }})">{{ $produto->descricao }}</a>
                                    </form>
                                </th>
                                <th></th>
                            </tr>
                        @endforeach
                        <tr>
                            <th></th>
                            <th>{{ $produtos->links() }}</th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script>
        function onClick(id) {
            event.preventDefault();
            debugger
            var a = 'form_' + id;
            alert(a);
            debugger
            // $('form[name="' + a + '"]').submit(function(event) {
            //     event.preventDefault();
            //     alert(a);
            // });
        }
    </script>
@endsection
