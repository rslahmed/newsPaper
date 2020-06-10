<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberWelcome;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        ],
            [
                'email.unique' => 'You have alreaedy subscribe'
            ]);

        $create = Subscriber::create($data);
        if($create){
            Mail::to(request()->email)->send(new SubscriberWelcome());
            return back()->with('success', 'Thank you for subscribe');
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
