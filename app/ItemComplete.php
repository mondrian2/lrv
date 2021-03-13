<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemComplete extends Model
{
    protected $table = 'items_complete';
    protected $casts = [
        'options' => 'array'
    ];
    protected $fillable = [
        'label',
        'options',
        'ExerciseCompleteId'
    ];

    public function exerciseComplete()
    {
        return $this->belongsTo('App\ExerciseComplete')->withDefault();;
    }
}
