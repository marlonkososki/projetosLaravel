<?php

use Illuminate\Support\Facades\Route;

/* -------- temos -----------
get
post
put
patch
delete
options
*/


//------------ SINTAXE DE ROTA USADA NAS VERSÕES 8 OU MAIS DO LARAVEL
// Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);



//------------ SINTAXE DE ROTA USADA NAS VERSÕES 7 OU MENOS DO LARAVEL
Route::get('/', 'PrincipalController@principal')
->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::post('/contato', 'ContatoController@salvar')->name('site.contato');

/*Route::get(
        '/contato/{nome}/{categoria_id}', 
        function(String $nome = 'Nome teste', 
                 int $categoria_id = 1){
            echo "estamos aqui, $nome - categoria: $categoria_id";
})-> where('categoria_id', '[0-9]+')-> where('nome','[A-Za-z]+');
*/

Route::get('/login/{erro?}', 'LoginController@index')->name('site.login');

Route::post('/login', 'LoginController@autenticar')->name('site.login');

// agrupando totas para facilitar config de sessao de usuario

Route::middleware('autenticacao')->prefix('/app')->group(function () {
        Route::get('/clientes', function () {
                return 'clientes';
        })->name('app.cliente');
       
       
       
        Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedor');
        Route::get('/produtos', function () {
                return 'prod';
        })->name('app.produtos');
});

// exemplo de redirecionamento de rotas

Route::get('/rota1', function () {
        return 'clientes';
})->name('site.rota1');

// exemplo1 redirect na funcao callback
Route::get('/rota2', function () {
        return redirect()->route('site.rota1');
})->name('site.rota2');

// exemplo2 redirect do obj Route
// Route::redirect('/rota2','/rota1');

Route::fallback(function () {
        echo 'pagina não existe.<a href="' . route('site.index') . '"> Clique aqui</a> para voltar na pagina principal. ';
});
