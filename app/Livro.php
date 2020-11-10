<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['titulo', 'pacotes'];

    public function pacotes()
    {
        return $this->hasMany('App\Pacote', 'livro_id');
    }
}
