<x-backend.master>
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="card">
                    <div class="card-header d-flex">
                        <h5>View post</h5>
                        <div class="modify-btns">
                            <a href="#">Delete</a>
                            <a href="#">Edit</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <h3 class="mb-2">{{$post->title}}</h3>
                        <div class="post_img mb-3">
                            @if($post->image)
                                <img style="max-height: 300px;" src="{{$post->image}}" alt="">
                                @else
                                <p>No Preview image</p>
                            @endif
                        </div>
                        <div>
                            {!! $post->description !!}
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="mb-1">Category: {{$post->category->name ?? 'No Category'}}</p>
                        <p class="mb-1">Sub Category: {{$post->subcategory->name ?? 'No Category'}}</p>
                        <p class="mb-1">Tags:
                            @if(!empty($post->tag_id))
                                @foreach($post->tags(json_decode($post->tag_id)) as $row)
                                    {{$row->name}},
                                @endforeach

                            @endif
                        </p>
                        <p class="mb-1">
                            Author name: {{$post->author_name ?? 'Unknown'}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script !src="">
        </script>
    </x-slot>
</x-backend.master>
