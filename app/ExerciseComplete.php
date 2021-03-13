<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExerciseComplete extends Model
{
    protected $table = 'exercises_complete';
    protected $fillable = [
        'command',
        'book',
        'package'
    ];

    public function ItemComplete()
    {
        return $this->hasMany('App\ItemComplete', 'ExerciseCompleteId');
    }
}
