<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable =
        [
            'pessoa_id',
            'cargo_id'
        ];

    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function veiculo()
    {
        return $this->hasOne('App\Veiculo');
    }

    public function viagem()
    {
        return $this->hasOne('App\Viagem');
    }


}
