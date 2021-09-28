<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //instanciando o objeto Fornecedor
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor Mil';
        $fornecedor->uf = 'AM';
        $fornecedor->email = 'dorneceorMil.com.br';
        $fornecedor->save();

        // usando medoto create sem instanciar objeto Fornecedor
        // atenção aos atributos fillable
        Fornecedor::create([
            'nome'=> 'Fornecedor 200',
            'uf'=> 'PR',
            'email'=> 'emialteste.com'
        ]);

        // Chamando o metodo insert da classe DB
        DB::table('fornecedores')->insert([
            'nome'=> 'Fornecedor 100',
            'uf'=> 'RJ',
            'email'=> 'emialteste100.com'
        ]);

    }
}
