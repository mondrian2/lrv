<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    // id: number;
    // label: string;
    // exercicio_id: number;
    // opcoes: string[];
    // correta?: string;

    protected $fillable = [
        'comando'
    ];
}
