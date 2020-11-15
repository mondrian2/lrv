<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'questoes';
    protected $fillable = [
        'enunciado',
        'tipo',
        'comentario',
        'peso',
        'pacote_id',
        'itens'
    ];

    public function itens()
    {
        return $this->hasMany('App\Item', 'questao_id');
    }
}
