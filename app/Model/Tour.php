<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    protected $fillable = [
        'id_place', 'data', 
        'id_tatami','id_judge',
        'vid_quest', 'name',
    ];
}
