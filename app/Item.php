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
        'questoes'
    ];

    public function questoes()
    {
        return $this->belongsTo('App\Questao')->withDefault();
    }
}
