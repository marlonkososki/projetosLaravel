<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrenteCaixa extends Model
{
    protected $fillable = ['descricao', 'codigo_barra', 'estoque_atual', 'valor_custo', 'valor_venda'];
}
