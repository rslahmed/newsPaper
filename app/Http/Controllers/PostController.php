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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.posts.all_post', [
            'post' => Post::orderBy('id','desc')->paginate(10),
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

    public function store(Request $request)
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
        $file = $request->image;
        if($file){
            request()->validate([
                'image' => 'image|mimes:jpg,png,jpeg,gif',
            ]);
            $path = '/backend/upload/';
            $image = $path.uniqid().time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().($path), $image);
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
           'post' => Post::where('id', $id)->first(),
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
                @unlink(public_path().$oldImage);
            }
            $path = '/backend/upload/';
            $image = $path.uniqid().time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().($path), $image);
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
        $delete = Post::where('id',$id)->delete();
        if($delete){
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
           'image_caption' => 'max:28',
        ]);
    }
}
