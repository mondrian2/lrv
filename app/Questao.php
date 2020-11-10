<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $fillable = [
        'tipo',
        'comentario',
        'enunciado',
        'peso',
        'itens'
    ];

    public function itens()
    {
        return $this->hasMany('App\Item', 'questao_id');
    }
}
