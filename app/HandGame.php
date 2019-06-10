<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HandGame extends Model
{
    protected $fillable = [
        'player',
        'computer',
        'result',
    ];
}
