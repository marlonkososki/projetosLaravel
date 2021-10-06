<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendaItem extends Model {
    
    protected $fillable = ['id', 'venda_id', 'produto_id', 'quantidade', 'valor_custo', 'valor_venda','valor_venda'];
}
