@extends('backend.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-baseline">
                        <h4 class="m-0">All Post</h4>
                        <a class="btn btn-sm btn-primary" href="{{route('post.create')}}">Create post+</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover" id="sortableTable">
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
                            @if($post->count() > 0)

                                @foreach($post as $row)
                                    <tr>
                                        <th scope="row">{{$row->id}}</th>
                                        <td>
                                            <a href="{{route('post.show', $row->id)}}" class="text-dark">{{$row->title}} </a>
                                        </td>
                                        <td>{{$row->category->name ?? 'N/A'}}</td>
                                        <td>{{$row->subcategory->name ?? 'N/A'}}</td>
                                        <td>@if($row->published == 1)Yes @else No @endif</td>
                                    </tr>
                                @endforeach

                            @else
                                <tr>
                                    <td colspan="5" class="text-center">no data avilable</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
