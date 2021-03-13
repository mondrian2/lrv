<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemAlternative extends Model
{
    protected $table = 'items_alternative';

    protected $fillable = [
        'description',
        'ExerciseCompleteId',
        'correct'
    ];

    public function exerciseAlternative()
    {
        return $this->belongsTo('App\ExerciseAlternative')->withDefault();;
    }
}
