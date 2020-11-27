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
        'options'
    ];

    // public function options()
    // {
    //     return $this->hasMany('App\Options', 'item_id');
    // }
}
