<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Judge extends Model
{
    //
    protected $fillable = [
        'id_place', 'data', 
        'id_tatami', 'name',
    ];
}
