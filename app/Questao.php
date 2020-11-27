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
        'pacote'
    ];

    public function pacote()
    {
        return $this->belongsTo('App\Pacote', 'pacote_id');
    }
}
