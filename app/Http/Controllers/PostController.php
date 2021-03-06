<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mail\SubscriberNews;
use App\Post;
use App\SubCategory;
use App\Subscriber;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public $postImgPath = '/uploads/post/';

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
            if(request()->publish == 1 && request()->featured_news == 1){
                $this->sendMailSub($create->id);
            }
            return back()->with('success', 'New post created');
        }else{
            return back()->with('error', 'something went wrong, please try again');
        }

    }

    public function show($id)
    {
        $post =Post::findOrFail($id);
        if($post->tag_id != 'null'){
            $tags = Tag::whereIn('id', json_decode($post->tag_id))->get();
        }
        return view('backend.posts.view_post', [
           'post' => $post,
            'tags' => $tags ?? ''
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
        $oldPub = Post::findOrFail($id)->published;
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
            if($oldPub == 0 && request()->publish == 1 && request()->featured_news == 1){
                $this->sendMailSub($id);
            }
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

    function sendMailSub($id){
        $mailData = new \stdClass;
        $mailData->id =  $id;
        $mailData->subject =  request()->title;
        $subs = Subscriber::all();
        foreach ($subs as $sub){
            $unID = $sub->id;
            $token = $sub->token;
            Mail::to($sub->email)->send(new SubscriberNews($mailData, $unID, $token));
        }
    }
}
