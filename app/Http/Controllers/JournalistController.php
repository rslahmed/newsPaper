<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class JournalistController extends Controller
{
    public function index(){
        return view('backend.journalist.all_journalist',[
            'journalist' => User::all()
        ]);
    }

    public function destroy($id){
        $delete = User::findOrFail($id)->delete();
        if($delete){
            return back()->with('success', 'Journalist deleted');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }
}
