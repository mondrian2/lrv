<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacote extends Model
{
    protected $fillable = ['titulo', 'livro_id', 'questoes', 'livro'];

    public function questoes()
    {
        return $this->hasMany('App\Questao', 'pacote_id');
    }

    public function livro()
    {
        return $this->belongsTo('App\Livro')->withDefault();
    }
}
