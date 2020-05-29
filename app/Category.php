<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    function posts(){
        return $this->hasMany(Post::class);
    }

    function subcategory(){
        return $this->hasMany(SubCategory::class);
    }

}
