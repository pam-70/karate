<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    //
    protected $fillable = [
        'id_place', 'data', 
        'id_tatami','id_judge',
        'id_tour','id_kategorie',
        'vid_quest', 'name',
    ];
}
