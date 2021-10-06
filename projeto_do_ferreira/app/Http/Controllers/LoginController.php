<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CaixaController;
use App\User;
use App\Caixa;
use Illuminate\Http\Request;

class LoginController extends Controller
 {
    public function index( Request $request )
 {
        $erro = '';

        if ( $request->get( 'erro' ) == 1 ) {
            $erro = 'Usuário e/ou senha não existe.';
        }

        if ( $request->get( 'erro' ) == 2 ) {
            $erro = 'Necessário realizar o login para ter acesso a página.';
        }

        return view( 'sistema.login', ['titulo' => 'Login', 'erro' => $erro] );
    }

    public function autenticar( Request $request )
 {

        // validando os campos para preenchimento correto
        $regras = [
            'usuario' => 'required|email',
            'senha' => 'required'
        ];

        $feedback = [
            'usuario.required' => 'O campo "Usuário" precisa ser informado.',
            'usuario.email' => 'Informe um email válido.',
            'senha.required' => 'O campo "Senha" precisa ser informado.'
        ];

        // validate verá se ta tudo ok, caso não ele da um redirect na tela de login
        $request->validate( $regras, $feedback );

        // SEPARANDO USER E SENHA
        $email = $request->get( 'usuario' );
        $password = $request->get( 'senha' );

        //PEGANDO USUARIO DE ACORDO COM USER E SENHA
        $usuario = User::where( 'email', $email )->where( 'password', $password )->get()->first();

        // SE O NOME DO USUARIO PUXADO EXISTIR E NÃO FOR VAZIO
        if ( isset( $usuario->name ) && $usuario->name != '' ) {
            //dd( $usuario );

            // INICIA A SESSÃO
            session_start();

            // SETANDO AS INFORMAÇÕES DE NOME E EMAIL NA SESSÃO
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            // INSTANCIANDO O CAIXA E PASSANDO O REQUEST COM INFOS PARA CRIAR O CAIXA
            $caixaController = new CaixaController();
            $caixaController->store( $request );

            //CHAMANDO A ROTA DA PAGINA HOME
            return redirect()->route( 'sis.home' );
        } else {
            echo 'Usuário não existe.';
            return redirect()->route( 'sistema.login', ['erro' => 1] );
        }
    }

    public function sair() {

        $caixas = Caixa::latest()->first();

        $caixaController = new CaixaController();
        $caixaController->destroy( $caixas );

        session_destroy();
        return redirect()->route( 'sistema.login' );
    }
}
