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

    public function clientes()
    {
        return $this->hasOne('App\Cliente');
    }

    public function funcionarios()
    {
        return $this->hasOne('App\Funcionario');
    }


}
