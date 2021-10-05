<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendaItem extends Model {
    protected $table = 'venda_itens';
    protected $fillable = ['id', 'venda_id', 'produto_id', 'descricao', 'quantidade', 'valor_custo', 'valor_venda','valor_venda'];
}
