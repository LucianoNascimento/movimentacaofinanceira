<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValorEntrada extends Model
{
    protected $table = 'valor_entradas';

    protected $fillable = ['descricao','valor_entrada'];
}
