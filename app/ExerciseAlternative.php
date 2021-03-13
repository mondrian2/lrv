<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseAlternative extends Model
{
    protected $table = 'exercises_alternative';
    protected $fillable = [
        'command',
        'book',
        'package'
    ];

    public function ItemAlternative()
    {
        return $this->hasMany('App\ItemAlternative', 'ExerciseCompleteId');
    }
}
