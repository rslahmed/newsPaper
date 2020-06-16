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
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> {{$row->comment->count()}} comments </div>
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

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <!-- left content inner -->
                <section class="recent_news_inner">
                    <h3 class="category-headding ">RECENT NEWS</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div class="category_slider owl-carousel">
                            @foreach($recent_news as $row)
                                <div class="item">
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- image -->
                                    <h3><a href="{{route('article.show', $row->id)}}">{{$row->title}}</a></h3>
                                    <div class="post-thumb">
                                        <a href="{{route('article.show', $row->id)}}">
                                            <img class="img-responsive" src="{{asset($row->image)}}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-info meta-info-rn">
                                        <div class="slide">
                                            <a target="_blank" href="{{route('article.filter', $row->category->id)}}" class="post-badge btn_six">{{$row->category->name}}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{date('d-m-Y', strtotime($row->created_at))}}
                                        </div>
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> {{$row->comment->count()}}   </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>

                @foreach($categories->slice(0,2) as $category)
                    <section class="recent_news_inner">
                        <h3 class="category-headding ">{{$category->name}}</h3>
                        <div class="headding-border"></div>
                        <div class="row">
                            <div class="category_slider owl-carousel">
                                @foreach($category->posts as $row)
                                    <div class="item">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                            <!-- image -->
                                            <h3><a href="{{route('article.show', $row->id)}}">{{$row->title}}</a></h3>
                                            <div class="post-thumb">
                                                <a href="{{route('article.show', $row->id)}}">
                                                    <img class="img-responsive" src="{{asset($row->image)}}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="{{route('article.filter', $row->category->id)}}" class="post-badge btn_six">{{$row->category->name}}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> {{date('d-m-Y', strtotime($row->created_at))}}
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> {{$row->comment->count()}}   </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endforeach

                <section class="weekly-news-inner">
                    <div class="container">
                        <div class="row row-margin">
                            <h3 class="category-headding ">WEEKLY NEWS</h3>
                            <div class="headding-border bg-color-1"></div>
                            <div id="content-slide-4" class="owl-carousel">
                                @foreach($weekly_news as $row)
                                    <div class="item">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                            <div class="post-thumb img-zoom-in">
                                                <a href="{{route('article.show', $row->id)}}">
                                                    <img class="entry-thumb" src="{{$row->image}}" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info">
                                                <span class="color-4">{{$row->category->name}} </span>
                                                <h3 class="post-title"><a href="{{route('article.show', $row->id)}}" rel="bookmark">{{$row->title}} </a></h3>
                                                <div class="post-editor-date">
                                                    <!-- post date -->
                                                    <div class="post-date">
                                                        <i class="pe-7s-clock"></i> {{date('d-m-Y', strtotime($row->created_at))}}
                                                    </div>
                                                    <!-- post comment -->
                                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> {{$row->comment->count()}} </div>
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
                </section>

            </div>

            @include('frontend.partials.aside')
            <!-- side content end -->
        </div>
        <!-- row end -->
    </div>

    {{-- add--}}
    <div class="container">
        <!-- /.adds -->
        <div class="row">
            <div class="col-sm-12">
                <div class="ads">
                    <a href="#"><img src="{{asset('images/body-add.jpg')}}" class="img-responsive center-block" alt=""></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach($categories as $category)
                @if($category->posts->count() > 0)
                    <div class="col-md-4 col-sm-4">
                <!-- sports -->
                <div class="sports-inner">
                    <h3 class="category-headding ">{{$category->name}}</h3>
                    <div class="headding-border bg-color-1"></div>
                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                        <!-- post title -->
                        <h3><a href="#">{{$category->posts->first()->title}}</a></h3>
                        <!-- post image -->
                        <div class="post-thumb">
                            <a href="#">
                                <img src="{{$category->posts->first()->image}}" class="img-responsive" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="post-title-author-details">
                        <div class="post-editor-date">
                            <!-- post date -->
                            <div class="post-date">
                                <i class="pe-7s-clock"></i> {{date('d-m-Y', strtotime($category->posts->first()->created_at))}}
                            </div>
                            <!-- post comment -->
                            <div class="post-author-comment"><i class="pe-7s-comment"></i> {{$category->posts->first()->comment->count()}} </div>
                        </div>
                    </div>
                </div>
            </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection
