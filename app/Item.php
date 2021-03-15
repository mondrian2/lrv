<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $casts = [
        'options' => 'array'
    ];
    protected $fillable = [
        'id',
        'exerciseId',
        'label',
        'options'
    ];

}
