<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    protected $fillable = [
        'comando'
    ];

    public function itens()
    {
        return $this->hasMany('App\Item', 'exercicio_id');
    }
}
