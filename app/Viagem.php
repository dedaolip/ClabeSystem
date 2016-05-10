<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    protected $table = 'viagens';

    protected $fillable =
        [
            'veiculo_id',
            'motorista_id',
            'destino',
            'origem',
            'data_partida',
            'data_chegada',
            'tempo',
            'detalhes'
        ];

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class);
    }
}
