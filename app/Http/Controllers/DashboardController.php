<?php

namespace App\Http\Controllers;

use App\Category;
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
}
