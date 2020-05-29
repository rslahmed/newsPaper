<x-backend.master>
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-baseline">
                        <h4 class="m-0">All Post</h4>
                        <a class="btn btn-sm btn-primary" href="{{route('post.create')}}">Create post+</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Post Headline</th>
                                <th scope="col">Category</th>
                                <th scope="col">Sub Category</th>
                                <th scope="col">Published</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($post as $row)
                                <tr>
                                    <th scope="row">{{$row->id}}</th>
                                    <td>
                                        <a href="{{route('post.show', $row->id)}}" class="text-dark">{{substr($row->title,0, 28)}}@if(strlen($row->title) > 28).... @endif</a>
                                    </td>
                                    <td>{{$row->category->name ?? 'N/A'}}</td>
                                    <td>{{$row->subcategory->name ?? 'N/A'}}</td>
                                    <td>@if($row->published == 1)Yes @else No @endif</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{$post->links()}}
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
