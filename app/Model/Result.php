<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $fillable = [
        'id_place', 'data', 
        'id_tatami','id_tour',
        'id_athlete','vid_quest',
        'id_judge','result',
       ];
}
