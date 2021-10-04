<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrenteCaixa extends Model
{
    protected $fillable = ['user_id', 'valor_inicial', 'valor_final', 'abertura', 'fechamento'];
}
