<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompleteItem extends Model
{
    protected $table = 'completeitems';
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
