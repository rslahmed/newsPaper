<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

    public function index()
    {
        return view('backend.subscribers.all_subscribers',[
            'subscribers' => Subscriber::all()
        ]);
    }

    public function store()
    {
        $data = request()->validate([
            'email' => 'required|email|unique:subscribers'
        ]);

        $create = Subscriber::create($data);
        if($create){
            return back()->with('success', 'Subscriber added');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }

    public function destroy($id)
    {
        $delete = Subscriber::findOrFail($id)->delete();
        if($delete){
            return back()->with('success', 'Subscriber deleted');
        }else{
            return back()->with('error', 'Something went wrong, please try again');
        }
    }
}
