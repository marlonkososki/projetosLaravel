<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = ['id','frente_caixa_id', 'cliente_id','desconto', 'acrescimo', 'total', 'updated_at'];
}
