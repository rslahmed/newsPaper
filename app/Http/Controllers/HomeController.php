<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('frontend.home',[
            'categories' => Category::all(),
            'featured_news' => Post::where('published', 1)->where('featured_news', 1)->latest()->limit(3)->get()
        ]);
    }
}
