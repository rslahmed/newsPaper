<?php

namespace App\Http\Controllers;

use App\Category;
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
        ]);
    }
}
