<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/{erro?}', 'LoginController@index')->name('sistema.login');

Route::post('/', 'LoginController@autenticar')->name('sistema.login');

Route::middleware('log.acesso', 'autenticacao')->prefix('/sis')->group(function () {

    Route::get('/home', 'HomeController@index')->name('sis.home');

    Route::get('/sair', 'LoginController@sair')->name('sis.sair');

    //---------------------------- ROTAS PRODUTO ----------------------------

    Route::resource('/produto', 'ProdutoController');

    //------------------------------- ROTAS CLIENTE -----------------------------------------

    Route::resource('/cliente', 'ClienteController');


    Route::resource('/caixa', 'CaixaController');


    Route::resource('/frentecaixa', 'FrenteCaixaController');
    

    Route::resource('/venda', 'VendaController');

});

Route::fallback(function () {
    echo 'pagina não existe.<a href="' . route('app.home') . '"> Clique aqui</a> para voltar na pagina principal. ';
});
