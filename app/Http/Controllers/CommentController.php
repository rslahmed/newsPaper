<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
   public function store(){
       $data = request()->validate([
          'name' => 'required|string',
          'comment' => 'required|string',
          'post_id' => 'required|integer'
       ]);

       $create = Comment::create($data);
       if($create){
           return back();
       }else{
           return back()->with('error', 'something went wrong, please try agian');
       }

        return back();
    }
}
