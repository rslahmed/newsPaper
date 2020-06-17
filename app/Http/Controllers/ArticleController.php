<?php

namespace App\Http\Controllers;

use App\Category;
use App\GeneralSetting;
use App\Headline;
use App\Post;
use App\SubCategory;
use App\Tag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){

    }

    public function show($id){
        $post = Post::findOrFail($id);
        if($post->tag_id != 'null'){
            $tag = Tag::whereIn('id', json_decode($post->tag_id))->get();
        }
        return view('frontend.articles.view_article',[
            'post' => $post,
            'tag' => $tag ?? '',
            'categories' => Category::all(),
            'related_news' => Post::where('category_id', $post->category->id)->where('id','!=',$id)->get(),
            'tags' => Tag::limit(10)->get(),
            'headlines' => Headline::all(),
            'general' => GeneralSetting::all(),
        ]);
    }

    public function filterCat($id){
        return view('frontend.articles.article_bycat', [
            'categories' => Category::all(),
            'tags' => Tag::limit(10)->get(),
            'posts' => Post::where('category_id', $id)->paginate(8),
            'selected_category' => Category::findOrFail($id),
            'headlines' => Headline::all(),
            'general' => GeneralSetting::first(),
        ]);

    }

    public function filterSubCat($id){
        return view('frontend.articles.article_bycat', [
            'categories' => Category::all(),
            'tags' => Tag::limit(10)->get(),
            'posts' => Post::where('subcategory_id', $id)->paginate(8),
            'selected_category' => SubCategory::findOrFail($id),
            'headlines' => Headline::all(),
            'general' => GeneralSetting::first(),
        ]);
    }

    public function search(){
        request()->validate([
            'search' => 'string|required'
        ]);
        $search = request()->search;
        return view('frontend.articles.article_bysearch',[
            'search_key'=> $search,
            'categories' => Category::all(),
            'tags' => Tag::limit(10)->get(),
            'headlines' => Headline::all(),
            'posts'=> Post::where('title', 'LIKE', "%{$search}%")->paginate(8),
            'general' => GeneralSetting::first(),
        ]);
    }
}
