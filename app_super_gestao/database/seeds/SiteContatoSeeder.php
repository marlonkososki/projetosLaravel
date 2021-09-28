<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $contato = new SiteContato();
        $contato->nome = 'Marlon';
        $contato->telefone = '41998037232';
        $contato->email = 'marlinho.com.br';
        $contato->motivo_contato = 2;
        $contato->mensagem = 'Nao sei o motivo';
        $contato->save();

        

        factory(SiteContato::class, 100)->create();

    }
}
