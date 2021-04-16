<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = [
        'id',
        'level',
        'package',
        'type',
        'number',
        'instruction'
    ];
}
