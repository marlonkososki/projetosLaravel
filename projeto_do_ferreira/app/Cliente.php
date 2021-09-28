<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\SoftDeletes;
class Cliente extends Model
{
    use SoftDeletes;
    protected $fillable = ['nome','cpf','telefone','endereco_completo'];

}
