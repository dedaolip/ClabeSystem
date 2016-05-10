<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable =
        [
            'nome'
        ];

    public function funcionarios()
    {
        return $this->hasOne('App\Funcionario');
    }
}
