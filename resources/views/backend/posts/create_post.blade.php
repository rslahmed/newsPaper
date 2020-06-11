@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-11 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mt-0 mb-0 text-center font-weight-bold">@if(!empty($prev_data)) Edit @else Create @endif Post</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <form action="@if(!empty($prev_data)) {{route('post.update',$prev_data->id)}} @else {{route('post.store')}} @endif" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="post_title">Post Headline:</label>
                                <input type="text" name="title" placeholder="Headline here" id="post_title" class="form-control" value="{{old('title') ?? $prev_data->title ?? ''}}">
                            </div>
                            <div class="form-group">
                                <label for="summernote">Post Description:</label>
                                <textarea id="summernote" name="description"></textarea>
                            </div>
                            <div class="form-group d-flex">
                                <div class="w-25 mt-3">
                                    <label for="category">Select Category:</label>
                                    <select class="form-control" id="category" name="category">
                                        <option value="">Select Category</option>
                                        @foreach($category as $row)
                                            <option value="{{$row->id}}" @if((old('category') ?? $prev_data->category_id ?? '') == $row->id) selected @endif>{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="ml-3 w-25 mt-3">
                                    <label for="subcategory">Select SubCategory:</label>
                                    <select class="form-control" id="subcategory" name="subcategory">
                                        <option class="default" value="" >Select SubCategory</option>
                                        @if(!empty($prev_data->category))
                                            @foreach($prev_data->category->subcategory as $row)
                                                <option value="{{$row->id}}" @if((old('subcategory') ?? $prev_data->subcategory_id ?? '') == $row->id) selected @endif>{{$row->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="mb-3 w-25 mt-3 ml-3 multiselect">
                                    <label for="tag">Select Tags:</label>
                                    <select class="form-control" id="tag" name="tag_id[]" multiple>
                                        @foreach($tag as $row)
                                            @php
                                                if(!empty($prev_data) && json_decode($prev_data->tag_id) != null){
                                                    $prevTag = json_decode($prev_data->tag_id) ;
                                                }
                                            @endphp
                                            <option value="{{$row->id}}" @if(in_array($row->id, (old('tag_id') ?? $prevTag ?? []) ))) selected @endif>{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="d-flex mt-2">
                                <div class="form-group w-25 ">
                                    <input type="text" name="author_name" class="form-control" placeholder="Author Name" value="{{old('author_name') ?? $prev_data->author_name ?? ''}}">
                                </div>
                                <div class="form-group w-25 ml-3">
                                    <input type="text" name="image_caption" class="form-control" placeholder="Image caption" value="{{old('image_caption') ?? $prev_data->image_caption ?? ''}}">
                                </div>
                                <div class=" w-25">
                                    <input type="file" name="image" class="form-control py-2 ml-3" onchange="document.getElementById('prev_img').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div class="pl-1 ml-4 prev_img_wrap" >
                                    <img src="@if(!empty($prev_data)){{asset($prev_data->image)}}@endif" alt="image preview" id="prev_img">
                                </div>

                            </div>

                            <div class="d-flex ">

                                <div class="form-group ml-2 pl-3 pt-2">
                                    <input type="hidden" name="publish" value="0">
                                    <input class="form-check-input mt-2" type="checkbox" name="publish" value="1" id="publish" @if((old('publish') ?? $prev_data->published ?? '') == 1) checked @endif>
                                    <label class="form-check-label" for="publish" style="font-size: 19px">
                                        Publish now
                                    </label>
                                </div>
                                <div class="form-group ml-2 pl-5 pt-2">
                                    <input type="hidden" name="featured_news" value="0">
                                    <input class="form-check-input mt-2" type="checkbox" name="featured_news" value="1" id="fnews" @if((old('featured_news') ?? $prev_data->featured_news ?? '') == 1) checked @endif>
                                    <label class="form-check-label" for="fnews" style="font-size: 19px">
                                        Featured News
                                    </label>
                                </div>
                            </div>


                            <div class="sub-btn pb-3">
                                <button class="btn btn-sm btn-primary mt-0">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script !src="">
        $(document).ready(function() {
            // $('#summernote').summernote();

            $('#category').on('change', function(){
                let id = $(this).val();

                $.ajax({
                    type:"GET",
                    cache:false,
                    url:"/get_subcategory",
                    data:{id: id},
                    success: function (response) {
                        let data = JSON.parse(response);
                        $('#subcategory option:not(".default")').remove();
                        $.each(data, function(key, value){
                            let html = `<option value="${value.id}">${value.name}</option>`;
                            $('#subcategory').append(html);
                        })
                    }
                });

            })
        });

        $('#tag').selectpicker();

        $('#summernote').summernote('code', '{!! old('description') ?? $prev_data->description ?? '' !!} ');

    </script>
@endsection

