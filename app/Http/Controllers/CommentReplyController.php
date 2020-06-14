<?php

namespace App\Http\Controllers;

use App\CommentReply;
use Illuminate\Http\Request;

class CommentReplyController extends Controller
{
    public function store(){
        $data = request()->validate([
            'name' => 'required|string',
            'comment' => 'required|string',
            'comment_id' => 'required'
        ]);

        $create = CommentReply::create($data);
        if($create){
            return back();
        }else{
            return back()->with('error', 'something went wrong, please try agian');
        }

        return back();
    }
}
