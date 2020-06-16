@extends('frontend.layout')

@section('content')
    <section class="block-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Search result</h1>
                    <div class="breadcrumbs">
                        <p>Search result for "{{$search_key}}"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-sm-8">

                <div class="row">
                    @if($posts->count() > 0)
                        @foreach($posts as $row)
                        <div class="col-sm-6">
                            <div class="post-style1">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post image -->
                                    <a href="{{route('article.show', $row->id)}}"><img src="{{$row->image}}" class="img-responsive" alt=""></a>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="{{route('article.filter', $row->category->id)}}" class="post-badge btn_two">{{$row->category->name}}</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- post title -->
                                <h3><a href="{{route('article.show', $row->id)}}">{{$row->title}}</a></h3>
                                <div class="post-title-author-details">
                                    <div class="date">
                                        <ul>
                                            <li>By <a title="" href="#"><span>{{$row->author_name}}</span></a> --</li>
                                            <li><a title="" href="#">{{date('d-m-Y', strtotime($row->created_at))}}</a> --</li>
                                            <li><a title="" href="#"><span>{{$row->comment->count()}} Comments</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                        <h3 class="text-center">No result found :(</h3>
                    @endif
                </div>

                {{ $posts->links() }}
            </div>
            @include('frontend.partials.aside')
        </div>
    </div>
@endsection
