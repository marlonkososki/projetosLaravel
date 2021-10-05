<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = ['frente_caixa_id', 'cliente_id', 'user_id', 'desconto', 'acrescimo', 'total', 'updated_at'];
}
