<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

    }

    public function show($id){
        $post = Post::findOrFail($id);
        if($post->tag_id != 'null'){
            $tags = Tag::whereIn('id', json_decode($post->tag_id))->get();
        }
        return view('frontend.articles.view_article',[
            'post' => $post,
            'tags' => $tags ?? '',
            'categories' => Category::all(),
            'related_news' => Post::where('category_id', $post->category->id)->where('id','!=',$id)->get()
        ]);
    }
}
