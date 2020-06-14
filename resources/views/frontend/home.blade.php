@extends('frontend.layout')

@section('content')
    <!-- newsfeed Area ====== -->
    <section class="news-feed">
        <div class="container">
            <div class="row row-margin">
                <div class="col-12 col-padding">
                    <div id="news-feed-carousel" class="owl-carousel owl-theme">
                        @foreach($featured_news as $row)
                        <div class="item">
                            <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="{{route('article.show', $row->id)}}">
                                        <img class="entry-thumb" src="{{asset($row->image)}}" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-2">{{$row->category->name}} </span>
                                    <h3 class="post-title"><a href="{{route('article.show', $row->id)}}" rel="bookmark">{{$row->title}}</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{date('d-m-Y', strtotime($row->created_at))}}
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                        <!-- read more -->
                                        <a class="readmore pull-right" href="{{route('article.show', $row->id)}}"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
