@extends('frontend.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <article class="content">
                    <div class="post-thumb">
                        <img src="{{asset($post->image)}}" class="img-responsive post-image" alt="">
                        <div class="social">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a>
                                </li>
                                <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                                <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a>
                                </li>
                                <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>
                            </ul>
                        </div>
                        <!-- /.social icon -->
                    </div>
                    <h1>{{$post->title}}</h1>
                    <div class="date">
                        <ul>
                            <li>By <a title="" href="#"><span>{{$post->author_name}}</span></a> --</li>
                            <li><a title="" href="#"> {{date('d-m-Y', strtotime($post->created_at))}}</a> --</li>
                            <li><a title="" href="#"><span>{{$post->comment->count()}} comments</span></a></li>
                        </ul>
                    </div>

                {!! $post->description !!}

                <!-- tags -->
                    <div class="tags">
                        <ul>
                            @if(!empty($tag))
                                @foreach($tag as $row)
                                    <li><a href="#">{{$row->name}}</a></li>
                                @endforeach
                            @else
                                No tag
                            @endif
                        </ul>
                    </div>
                    <div class="related-news-inner">
                        <h3 class="category-headding ">RELATED NEWS</h3>
                        <div class="headding-border"></div>
                        <div class="row">
                            <div id="content-slide-5" class="owl-carousel">
                                <!-- item-1 -->

                                <div class="item">
                                    <div class="row rn_block">
                                        @foreach($related_news as $row)
                                            <div class="col-xs-12 col-md-4 col-sm-4 padd">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                                    <!-- image -->
                                                    <div class="post-thumb">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{asset($row->image)}}"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-title-author-details">
                                                    <h4>
                                                        <a href="{{route('article.show', $row->id)}}">{{Str::limit($row->title, 40, '...')}}</a>
                                                    </h4>
                                                    <div class="post-editor-date">
                                                        <div class="post-date">
                                                            <i class="pe-7s-clock"></i> {{date('d-m-Y', strtotime($row->created_at))}}
                                                        </div>
                                                        <div class="post-author-comment"><i class="pe-7s-comment"></i>
                                                            {{$row->comment->count()}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- form
                        ============================================ -->
                    <div class="form-area">
                        <h3 class="category-headding ">LEAVE A COMMENT</h3>
                        <div class="headding-border"></div>
                        <form action="{{route('comment.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <div class="row">
                                <div class="col-sm-12">
                                    <span class="input">
                                        <input name="name" class="input_field" type="text" id="input-1">
                                        <label class="input_label" for="input-1">
                                                <span class="input_label_content"
                                                      data-content="Your Name">Your Name</span>
                                        </label>
                                    </span>
                                </div>

                                <div class="col-sm-12">
                                    <span class="input">
                                            <textarea name="comment" class="input_field" id="message"></textarea>
                                            <label class="input_label" for="message">
                                                <span class="input_label_content"
                                                      data-content="Your Comment">Your Comment</span>
                                    </label>
                                    </span>
                                    <button type="submit" class="btn btn-style">Post Your Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>


                    <!-- comment box
                        ============================================ -->
                    <div class="comments-container">
                        <h1>Comment </h1>
                        <ul id="comments-list" class="comments-list">
                            @if($post->comment->count() > 0)
                                @foreach($post->comment as $comment)
                                    <li class="single_comment">
                                        <div class="comment-main-level">
                                            <!-- Avatar -->
                                            <div class="comment-avatar"><img src="{{asset('images/user-default.jpg')}}" class="img-circle" alt=""></div>
                                            <!-- Contenedor del Comentario -->
                                            <div class="comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name"><a
                                                            href="javascript:void(0)">{{$comment->name}}</a></h6>
                                                    <span>{{$comment->created_at->diffForHumans()}}</span>
                                                    <i class="fa fa-reply reply_cmnt_btn" data-id="{{$comment->id}}"></i>
                                                </div>
                                                <div class="comment-content">
                                                    {{$comment->comment}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="comment_rep_box">

                                        </div>
                                        @if(!empty($comment->reply))
                                            <ul class="comments-list reply-list">
                                                @foreach($comment->reply as $reply)
                                                    <li>
                                                        <!-- Avatar -->
                                                        <div class="comment-avatar"><img src="{{asset('images/user-default.jpg')}}" class="img-circle" alt=""></div>
                                                        <!-- Contenedor del Comentario -->
                                                        <div class="comment-box">
                                                            <div class="comment-head">
                                                                <h6 class="comment-name">
                                                                    <a href="javascript:void(0)">{{$reply->name}}</a>
                                                                </h6>
                                                                <span>{{$reply->created_at->diffForHumans()}}</span>
                                                            </div>
                                                            <div class="comment-content">
                                                                {{$reply->comment}}
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach

                            @else
                                No comments yet
                            @endif
                        </ul>
                    </div>
                </article>
            </div>

            @include('frontend.partials.aside')
        </div>
    </div>
@endsection


@section('script')
    <script !src="">
        let postID;
        function commnetRepBox(postID){
            let output = `
        <form action="{{route('comment_reply.store')}}" method="post">
            @csrf
            <input type="hidden" name="comment_id" value="${postID}">
            <div class="row">
                <div class="col-sm-12">
                    <span class="input">
                        <input name="name" class="input_field" type="text" id="input-3" placeholder="Your Name" required>
                        <label class="input_label" for="input-3">
                        </label>
                    </span>
                </div>

                <div class="col-sm-12">
                    <span class="input">
                            <textarea name="comment" class="input_field" id="input-4" placeholder="Your comment" required></textarea>
                            <label class="input_label" for="input-4">
                    </label>
                    </span>
                    <button type="button" class="btn btn-style rep_cancle_btn">Cancel</button>
                    <button type="submit" class="btn btn-style">Reply Comment</button>
                </div>
            </div>
        </form>`;
        return output;
        }


        $(document).on('click', '.reply_cmnt_btn', function(){
            postID = $(this).attr('data-id');
            $(this).closest('.single_comment').children('.comment_rep_box').html(commnetRepBox(postID));
        })
        $(document).on('click', '.rep_cancle_btn', function(){
            $(this).closest('form').remove();
        })
    </script>
@endsection
