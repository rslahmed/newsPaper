@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11 m-auto">
                <div class="card">
                    <div class="card-header d-flex align-items-baseline justify-content-between">
                        <h5>View post</h5>
                        <div class="modify-btns">
                            <a class="btn btn-sm btn-primary px-4" href="{{route('post.edit', $post->id)}}">Edit</a>
                            <a class="btn btn-sm btn-primary delete_btn" href="{{route('post.destroy', $post->id)}}">Delete</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="mb-2"><span class="td-un">Title</span>: {{$post->title}}</h3>
                        <div class="post_img mb-3">
                            @if($post->image)
                                <img style="max-height: 300px;" src="{{asset($post->image)}}" alt="">
                            @else
                                <p>No Preview image</p>
                            @endif
                        </div>
                        <div> <span class="td-un">Description</span>:
                            {!! $post->description !!}
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="mb-1"><span class="td-un">Category</span>: {{$post->category->name ?? 'No Category'}}</p>
                        <p class="mb-1"><span class="td-un">Sub Category</span>: {{$post->subcategory->name ?? 'No Category'}}</p>
                        <p class="mb-1"><span class="td-un">Tags</span>:
                            @if(!empty($tags) && $tags != null)
                                @foreach($tags as $tag)
                                    {{$tag->name}}
                                    @if(!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            @else
                                No tag
                            @endif
                        </p>
                        <p class="mb-1">
                            <span class="td-un">Author name</span>: {{$post->author_name ?? 'Unknown'}}
                        </p>
                        <p class="mb-1">
                            <span class="td-un">Published</span>: @if($post->published == 1) Yes @else No @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
