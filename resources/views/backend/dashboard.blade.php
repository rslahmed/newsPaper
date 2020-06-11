@extends('backend.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="mb-3">{{$journalist->count()}}</h3>
                                <span>Total Journalist</span>
                            </div>
                            <div class="card-icon "><i class="now-ui-icons users_single-02"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="mb-3">{{$post->count()}}</h3>
                                <span>Total Posts</span>
                            </div>
                            <div class="card-icon "><i class="now-ui-icons education_paper"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="mb-3">{{$categories->count()}}</h3>
                                <span>Total categories</span>
                            </div>
                            <div class="card-icon "><i class="now-ui-icons design_bullet-list-67"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h3 class="mb-3">{{$subscriber->count()}}</h3>
                                <span>Total subscriber</span>
                            </div>
                            <div class="card-icon "><i class="now-ui-icons users_circle-08"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
