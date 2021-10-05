<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;
class Cliente extends Model
{
    use SoftDeletes;
    protected $fillable = ['id','nome','cpf','telefone','endereco_completo'];

}
