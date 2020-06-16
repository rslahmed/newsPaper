@extends('backend.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">General setting</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('general.setup')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group d-flex align-items-start">
                                <img id="logo_prev" src="{{asset($general->logo)}}" alt="">
                                <input name="logo" type="file" class="d-none" id="file" onchange="document.getElementById('logo_prev').src = window.URL.createObjectURL(this.files[0])">
                                <label for="file" class="change_logo btn btn-sm btn-primary text-white">Change logo</label>
                            </div>
                            <div class="form-group">
                                <label for="location">Location:</label>
                                <input name="location" type="text" class="form-control" id="location" placeholder="Location" value="{{$general->location}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address:</label>
                                <input name="email" type="text" class="form-control" id="email" placeholder="Location" value="{{$general->email}}">
                            </div>
                            <div class="form-group">
                                <label for="tel">phone Number:</label>
                                <input name="phone" type="text" class="form-control" id="tel" placeholder="Location" value="{{$general->phone}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary sub_btn">Save change</button>
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
        $('form').on('change keypress', function(){
            $('.sub_btn').show();
        })
    </script>
    @endsection
