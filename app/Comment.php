<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $guarded = [];

   function post(){
       return $this->belongsTo(Post::class);
   }

   function reply(){
       return $this->hasMany(CommentReply::class);
   }
}
