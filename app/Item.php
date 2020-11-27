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
        'questao'
    ];

    public function questao()
    {
        return $this->belongsTo('App\Questao')->withDefault();
    }
}
