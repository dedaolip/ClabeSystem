<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }
}
