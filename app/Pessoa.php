<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable =
        [
            'nome',
            'cpf',
            'fone',
            'cel',
            'endereco',
            'bairro',
            'cidade',
            'uf',
            'cep',
            'data_nasc'
        ];
}
