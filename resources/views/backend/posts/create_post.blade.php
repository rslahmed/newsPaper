

<x-backend.master>
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mt-0 mb-0 text-center font-weight-bold">Create Post</h4>
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
                        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="post_title">Post Headline:</label>
                                <input type="text" name="title" placeholder="Headline here" id="post_title" class="form-control" value="{{old('title')}}">
                            </div>
                            <div class="form-group">
                                <label for="summernote">Post Description:</label>
                                <textarea id="summernote" name="description" value="{{old('description')}}"></textarea>
                            </div>
                            <div class="form-group d-flex">
                                <div class="w-25 mt-3">
                                    <label for="category">Select Category:</label>
                                    <select class="form-control" id="category" name="category">
                                        <option value="">Select Category</option>
                                        @foreach($category as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="ml-3 w-25 mt-3">
                                    <label for="subcategory">Select SubCategory:</label>
                                    <select class="form-control" id="subcategory" name="subcategory">
                                        <option class="default" value="">Select SubCategory</option>
                                    </select>
                                </div>

                                <div class="mb-3 w-25 mt-3 ml-3 multiselect">
                                    <label for="tag">Select Tags:</label>
                                    <select class="form-control" id="tag" name="tag_id[]" multiple>
                                        @foreach($tag as $row)
                                            <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                            </div>

                            <div class="d-flex mt-2">
                                <div class=" w-25">
                                    <input type="file" name="image" class="form-control py-2">
                                </div>

                                <div class="form-group ml-2 w-25 ml-3">
                                    <input type="text" name="image_caption" class="form-control" placeholder="Image caption" value="{{old('image_caption')}}">
                                </div>
                                <div class="form-group ml-2 w-25 ml-3">
                                    <input type="text" name="author_name" class="form-control" placeholder="Author Name" value="{{old('author_name')}}">
                                </div>

                            </div>

                            <div class="d-flex">

                                <div class="form-group ml-2 pl-3 pt-2">
                                    <input type="hidden" name="publish" value="0">
                                    <input class="form-check-input mt-2" type="checkbox" name="publish" value="1" id="publish">
                                    <label class="form-check-label" for="publish" style="font-size: 19px">
                                        Publish now
                                    </label>
                                </div>
                                <div class="form-group ml-2 pl-5 pt-2">
                                    <input type="hidden" name="featured_news" value="0">
                                    <input class="form-check-input mt-2" type="checkbox" name="featured_news" value="1" id="fnews">
                                    <label class="form-check-label" for="fnews" style="font-size: 19px">
                                        Featured News
                                    </label>
                                </div>
                            </div>


                            <div class="sub-btn">
                                <button class="btn btn-sm btn-primary mt-0">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">

        <script !src="">
            $(document).ready(function() {
                $('#summernote').summernote();

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

        </script>
    </x-slot>
</x-backend.master>


