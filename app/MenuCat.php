<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCat extends Model
{
    protected $table='food_menu_cat';

    protected $guarded=['created_at','updated_at'];
}
