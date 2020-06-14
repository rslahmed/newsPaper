<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberWelcome;
use App\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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

        $token = Str::random(12);

        $data['token'] = $token;

        $create = Subscriber::create($data);
        if($create){
            $unID = $create->id;
            Mail::to(request()->email)->send(new SubscriberWelcome($unID,$token));
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


    public function unsubscribe($id,$token)
    {
        $subs = Subscriber::findOrFail($id);
        if($subs->token == $token){
            $delete = $subs->delete();
        }
        if($delete){
            return 'You have unsubscribe from Laranews. We are sorry to see you go';
        }else{
            return 'Something went wrong, please try again later';
        }
    }


}
