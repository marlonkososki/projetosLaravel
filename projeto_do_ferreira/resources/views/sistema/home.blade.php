@extends('sistema.layouts.basico_home')

@section('titulo', 'Home')

@section('conteudo')


    <div class="conteudopaginahome">
        <div class="caixasmenuhome">

            <div class="caixasmenuhome_inner">
                <li><a href="{{ route('produto.index') }}">Produto</a></li>
            </div>
            <div class="caixasmenuhome_inner">
                <li><a href="{{ route('cliente.index') }}">Cliente</a></li>
            </div>
            <div class="caixasmenuhome_inner">
                <li><a href="{{ route('venda.index') }}">Vendas Realizadas</a></li>
            </div>
            <div class="caixasmenuhome_inner">
                <li><a href="{{ route('frentecaixa.index') }}">Frente de Caixa</a></li>
            </div>

        </div>
    </div>
@endsection
