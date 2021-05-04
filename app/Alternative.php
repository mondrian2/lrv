<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternative extends Model
{
    protected $fillable = [
        'id',
        'exerciseId',
        'description',
        'alternativeType',
    ];
}
