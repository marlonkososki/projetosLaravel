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
                                    <h3>Nº Venda:</h3>
                                </th>
                                <th>
                                    <input name="num_caixa" value="{{ old('num_caixa') }}" type="number"
                                        class="borda-preta">
                                    {{ $errors->has('num_caixa') ? $errors->first('num_caixa') : '' }}
                                </th>
                                <th>
                                    <button type="submit">+</button>
                                </th>
                            </form>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)F
                            <tr>
                                <th></th>
                                <th>
                                    <form name="form_{{ $produto->id }}" id="form_{{ $produto->id }}">
                                        @csrf
                                        <button type="submit"
                                            onclick="onClick({{ $produto->id }})">{{ $produto->descricao }}</a>
                                    </form>
                                </th>
                                <th></th>
                            </tr>
                        @endforeach
                        <tr>
                            <th></th>
                            <th>{{ $produtos->appends($request)->links() }}</th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <script>
        function onClick(id) {
            $(function() {
                var a = 'form_' + id;
                ///alert(a);
                $('form[name="' + a + '"]').submit(function(event) {
                    event.preventDefault();
                    alert(a);
                });
            });
        }
    </script>
@endsection
