@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-baseline">
                        <h4 class="m-0">All Subscriber</h4>
                        <a href="{{route('register')}}" class="btn btn-sm btn-primary add_btn">Add Journalist+</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover" id="sortableTable">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email Address</th>
                                <th scope="col" class="text-right no-sorting">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($journalist->count() > 0)
                                @foreach($journalist as $row)
                                    <tr>
                                        <th scope="row">{{$row->id}}</th>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->email}}</td>
                                        <td class="text-right">
                                            <a href="{{route('journalist.destroy', $row->id)}}" class="btn btn-primary btn-sm delete_btn">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="text-center">no data avilable</td>
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
