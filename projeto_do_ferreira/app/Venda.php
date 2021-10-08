<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Venda extends Model
{
    protected $fillable = ['id','frente_caixa_id', 'cliente_id','desconto', 'acrescimo', 'total', 'updated_at'];

    public function index()
    {
         $listagem = DB::table( 'vendas' )
           ->join( 'clientes', 'clientes.id', '=', 'vendas.cliente_id' )
           ->join( 'caixas', 'caixas.id', '=', 'vendas.caixa_id' )
           ->join( 'users', 'users.id', '=', 'caixas.user_id' )
           ->whereNotNull( 'vendas.updated_at' )
           ->select( 'vendas.id', 'vendas.caixa_id', 'clientes.nome', 'users.name', 'vendas.desconto', 'vendas.acrescimo', 'vendas.total', 'vendas.updated_at' )
           ->paginate( 5 );
   
           //print_r( $listagem );
   
           return $listagem;
       }

}
