<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $casts = [
        'options' => 'array'
    ];

    protected $fillable = [
        'label',
        'options',
        'exercicio_id',
        'correta'
    ];

    public function exercicio()
    {
        return $this->belongsTo('App\Exercicio')->withDefault();
    }
}
