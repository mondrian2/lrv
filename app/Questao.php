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
        'itens',
        'pacote'
    ];

    public function itens()
    {
        return $this->hasMany('App\Item', 'questoes_id');
    }

    public function pacote()
    {
        return $this->belongsTo('App\Pacote')->withDefault();
    }

}
