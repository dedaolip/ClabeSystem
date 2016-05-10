<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable =
        [
            'responsavel_id',
            'placa',
            'ano',
            'registro',
            'tipo'
        ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }

    public function viagem()
    {
        return $this->hasOne('App\Viagem');
    }


}
