<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='food_post';
    protected $guarded=[];

    public function categoryName(){
        return $this-> belongsTo(PostCat::class,'post_cat','id');
    }
}