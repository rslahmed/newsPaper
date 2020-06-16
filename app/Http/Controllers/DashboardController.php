<?php

namespace App\Http\Controllers;

use App\Category;
use App\GeneralSetting;
use App\Post;
use App\Subscriber;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('backend.dashboard',[
            'journalist' => User::all(),
            'post' => Post::all(),
            'categories' => Category::all(),
            'subscriber' => Subscriber::all(),
        ]);
    }

    public function general(){
        return view('backend.general_setting',[
            'general' => GeneralSetting::first()
        ]);
    }

    public function generalSetup(){

        $data = request()->validate([
            'location' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|string',
        ]);
        $general = GeneralSetting::first();
        $file = request()->logo;
        if ($file){
            request()->validate([
                'image' => 'image|mimes:jpg,png,jpeg',
            ]);
            if($general){
                $oldImage = $general->logo;
                if ($oldImage){
                    unlink(public_path().$oldImage);
                }
            }
            $path = '/uploads/logo/';
            $image = $path.time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().($path), $image);
            $data['logo'] = $image;
        }
        if($general){
            $general->update($data);
        }else{
            GeneralSetting::create($data);
        }
        return back()->with('success', 'General setting updated');
    }
}
