<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table='food_stuffs';

    protected $guarded=['created_at','updated_at'];
}
