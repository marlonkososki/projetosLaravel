<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    //
    public function index(Request $request)
    {
        $erro = '';

        if ($request->get('erro') == 1) {
            $erro = 'Usuário e/ou senha não existe.';
        }

        if ($request->get('erro') == 2) {
            $erro = 'Necessário realizar o login para ter acesso a página.';
        }

        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request)
    {

        $regras = [
            'usuario' => 'required|email',
            'senha' => 'required'
        ];

        $feedback = [
            'usuario.required' => 'O campo "Usuário" precisa ser informado.',
            'usuario.email' => 'Informe um email válido.',
            'senha.required' => 'O campo "Senha" precisa ser informado.'
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');


        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if (isset($usuario->name)) {
            //dd($usuario);
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            // dd($_SESSION);]

            return redirect()->route('app.cliente');
        } else {
            echo 'Usuário não existe.';
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }
}
