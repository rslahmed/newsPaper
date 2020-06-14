<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    function journalist(){
        return $this->belongsTo(User::class, 'id', 'journalist_id');
    }

    function category(){
        return $this->belongsTo(Category::class);
    }

    function subcategory(){
        return $this->belongsTo(SubCategory::class);
    }

    function comment(){
        return $this->hasMany(Comment::class);
    }


}
