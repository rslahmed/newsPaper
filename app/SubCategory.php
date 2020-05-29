<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $guarded = [];

    function category(){
        return $this->belongsTo(Category::class);
    }

    function posts(){
        return $this->hasMany(Post::class);
    }

}
