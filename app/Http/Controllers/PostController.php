<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\SubCategory;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public $postImgPath = 'uploads/post/';

    public function index()
    {
        return view('backend.posts.all_post', [
            'post' => Post::all(),
        ]);
    }

    public function create()
    {
        return view('backend.posts.create_post', [
           'journalist' => User::all(),
           'category' => Category::all(),
           'subcategory' => SubCategory::all(),
           'tag' => Tag::all(),
        ]);
    }

    public function store()
    {
        $this->validatePost();

        $data = [
            'title' => request()->title,
            'description' => request()->description,
            'category_id' => request()->category,
            'subcategory_id' => request()->subcategory,
            'author_name' => request()->author_name,
            'featured_news' => request()->featured_news,
            'published' => request()->publish,
            'tag_id' => json_encode(request()->tag_id),
            'image_caption' => request()->image_caption,
        ];
        $file = request()->image;
        if($file){
            request()->validate([
                'image' => 'image|mimes:jpg,png,jpeg,gif',
            ]);

            $image = $this->postImgPath.uniqid().time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/'.($this->postImgPath), $image);
            $data['image'] = $image;
        }
        $data['image'] = $image;
        $create = Post::create($data);
        if($create){
            return back()->with('success', 'New post created');
        }else{
            return back()->with('error', 'something went wrong, please try again');
        }

    }

    public function show($id)
    {
        return view('backend.posts.view_post', [
           'post' => Post::findOrFail($id),
        ]);
    }


    public function edit($id)
    {
        return view('backend.posts.create_post', [
            'journalist' => User::all(),
            'category' => Category::all(),
            'subcategory' => SubCategory::all(),
            'tag' => Tag::all(),
            'prev_data' => Post::findOrFail($id)
        ]);
    }


    public function update($id)
    {
        $this->validatePost();
        $data = [
            'title' => request()->title,
            'description' => request()->description,
            'category_id' => request()->category,
            'subcategory_id' => request()->subcategory,
            'author_name' => request()->author_name,
            'featured_news' => request()->featured_news,
            'published' => request()->publish,
            'tag_id' => json_encode(request()->tag_id),
            'image_caption' => request()->image_caption,
        ];

        $file = request()->image;
        if ($file){
            request()->validate([
                'image' => 'image|mimes:jpg,png,jpeg',
            ]);
            $oldImage = Post::find($id)->image;
            if ($oldImage != ''){
                @unlink(public_path().'/'.$oldImage);
            }

            $image = $this->postImgPath.uniqid().time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/'.($this->postImgPath), $image);
            $data['image'] = $image;
        }

        $update = Post::where('id', $id)->update($data);
        if($update){
            return back()->with('success', 'Post updated');
        }else{
            return back()->with('error', 'something went wrong, please try again');
        }
    }


    public function destroy($id)
    {
        $imgpath = Post::findOrFail($id)->image;
        $delete = Post::where('id',$id)->delete();
        if($delete){
            @unlink(public_path().$imgpath);
            return redirect(route('post.index'))->with('success', 'Post deleted');
        }else{
            return back()->with('error', 'something went wrong, please try again');
        }
    }

    function validatePost(){
        return request()->validate([
           'title' => 'required|min:5|max:255',
           'description' => 'required|string',
           'category_id' => 'integer',
           'subcategory_id' => 'integer',
           'author_name' => 'max:28',
           'featured_news' => 'integer',
           'tag_id' => 'array',
           'image_caption' => 'string',
        ]);
    }
}
