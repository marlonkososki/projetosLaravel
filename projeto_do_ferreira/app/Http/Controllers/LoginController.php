<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        $erro = '';

        if ($request->get('erro') == 1) {
            $erro = 'Usuário e/ou senha não existe.';
        }

        if ($request->get('erro') == 2) {
            $erro = 'Necessário realizar o login para ter acesso a página.';
        }

        return view('sistema.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request)
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
        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($usuario->name) && $usuario->name != '') {
            //dd($usuario);
            
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            //dd($_SESSION);

            return redirect()->route('sis.home');
        } else {
            echo 'Usuário não existe.';
            return redirect()->route('sistema.login', ['erro' => 1]);
        }
    }

    public function sair(){
        session_destroy();
        return redirect()->route('sistema.login');
    }
}
