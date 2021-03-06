<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index()
    {
        return view('backend.tags.all_tags',[
            'tags' => Tag::all()
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string|max:25|min:3|unique:tags'
        ]);

        $create = Tag::create($data);
        if($create){
            return back()->with('success', 'Tag added');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }

    public function update($id)
    {
        $data = request()->validate([
            'name' => 'required|string|min:3|max:25|unique:tags'
        ]);

        $update = Tag::findOrFail($id)->update($data);

        if($update){
            return back()->with('success', 'Tag updated');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }

    public function destroy($id)
    {
        $delete = Tag::findOrFail($id)->delete();
        if($delete){
            return back()->with('success', 'Tag deleted');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }
}
