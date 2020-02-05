<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tatami extends Model
{
    //
    protected $fillable = [
        'id_place', 'data', 
        'id_kategorie','name',
    ];
}
