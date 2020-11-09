<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['titulo'];

    public function pacotes()
    {
        return $this->hasMany('App\Pacote', 'livro_id');
    }
}
