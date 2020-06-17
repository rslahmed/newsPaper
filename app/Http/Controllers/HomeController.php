<?php

namespace App\Http\Controllers;

use App\Category;
use App\GeneralSetting;
use App\Headline;
use App\Post;
use App\Tag;
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
        $week = \Carbon\Carbon::today()->subDays(30);
        return view('frontend.home',[
            'categories' => Category::all(),
            'featured_news' => Post::where('published', 1)->where('featured_news', 1)->latest()->limit(3)->get(),
            'recent_news' => Post::where('published', 1)->latest()->limit(3)->get(),
            'weekly_news' => Post::where('created_at', '>=', $week)->get(),
            'tags' => Tag::limit(10)->get(),
            'headlines' => Headline::all(),
            'general' => GeneralSetting::first(),
        ]);
    }

    public function contact_us(){
        return view('frontend.contact_us',[
            'categories' => Category::all(),
            'tags' => Tag::limit(10)->get(),
            'headlines' => Headline::all(),
            'general' => GeneralSetting::first(),
        ]);
    }

    public function contactForm(){
        $data = request()->validate([
           'first_name' => 'string',
           'last_name' => 'string',
           'email' => 'email|required',
           'subject' => 'string',
           'message' => 'string|required',
            'general' => GeneralSetting::first(),
        ]);
        return back()->with('success', 'Thank you');
    }
}
