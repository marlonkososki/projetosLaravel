<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato()
    {

        $motivo_contatos = MotivoContato::all();


        // 1ª forma de salvar no banco de dados

        //    $contato = new SiteContato();
        //     $contato->nome = $request->input('nome');
        //     $contato->telefone = $request->input('telefone');
        //     $contato->email = $request->input('email');
        //     $contato->motivo_contato = $request->input('motivo_contato');
        //     $contato->mensagem = $request->input('mensagem');

        //     print_r($contato->getAttributes());

        //     $contato->save();



        // 2ª forma de inserir no banco (DEVE HAVER ATRIBUTOS FILLABLE)
        // $contato = new SiteContato();
        // $contato->fill($request->all());
        // // $contato->save();

        // // 3ª forma de inserir no banco (DEVE HAVER ATRIBUTOS FILLABLE)
        // $contato = new SiteContato();
        // $contato->create($request->all());

        return view('site.contato', ['titulo' => 'contato (teste)', 'motivo_contatos' => $motivo_contatos]);
    }

    public function salvar(Request $request)
    {

        // dd($request);

        // validar os dados do formulario

        $regras = [
            'nome' => 'required|min:3|max:100|unique:site_contatos',
            'telefone' => 'required',
            'email' => 'required|email',
            'motivo_contatos_id' => 'required',
            'mensagem' => 'required|min:3|max:2000' // validação de quantidade de caracteres

        ];

        $feedback = [
            'nome.required' => 'O campo "Nome" precisa ser preenchido.',
            'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres.',
            'nome.max' => 'O campo nome precisa ter no máximo 100 caracteres.',
            'nome.unique' => 'O nome informado já está em uso.',
            'telefone.required' => 'O campo "Telefone" precisa ser preenchido.',
            'email.required' => 'O campo "E-mail" precisa ser preenchido.',
            'email.email' => 'Informe um e-mail válido.',
            'motivo_contatos_id.required' => 'Selecione o motivo pelo contato.',
            'mensagem.required' => 'O campo de mensagem precisa ser preenchido.',
            'mensagem.min' => 'O campo de mensagem precisa ter no mínimo 3 caracteres.',
            'mensagem.max' => 'O campo de mensagem precisa ter no máximo 2000 caracteres.'
        ];

        $request->validate($regras, $feedback);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
