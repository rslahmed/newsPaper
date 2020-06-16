{{--  side bar--}}
<div class="col-md-4 col-sm-4 left-padding">
    <!-- right content wrapper -->
    <form action="{{route('article.search')}}" method="post">
        <div class="input-group search-area">
            <!-- search area -->
                @csrf
                <input type="text" class="form-control" placeholder="Search articles here ..." name="search">
                <div class="input-group-btn">
                    <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
        </div>
    </form>
    <!-- /.search area -->
    <aside>
        <h3 class="category-headding ">CATEGORIES</h3>
        <div class="headding-border bg-color-2"></div>
        <div class="cats-widget">
            <ul>
                @foreach($categories as $category)
                    <li class=""><a href="{{route('article.filter', $category->id)}}">{{$category->name}}</a> <span>{{$category->posts->count()}}</span></li>
                @endforeach
            </ul>
        </div>
    </aside>
    <div class="banner-add">
        <!-- add -->
        <span class="add-title">- Advertisement -</span>
        <a href="#"><img src="{{asset('images/ad-banner.jpg')}}" class="img-responsive center-block" alt=""></a>
    </div>
    <!-- twitter feed -->
    <h3 class="category-headding ">TWITTER FEED</h3>
    <div class="headding-border"></div>
    <div class="feed-inner">
        <p>It is a long established fact that a reader will be distracted by the.</p>
        <div class="feed-footer">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
            <span class="feed-date">2 hours ago</span>
        </div>
        <hr>
        <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
        <div class="feed-footer">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
            <span class="feed-date">2 hours ago</span>
        </div>
        <hr>
        <p>The standard chunk of Lorem Ipsum used since the 1500s is.</p>
        <div class="feed-footer">
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <cite><a href="#" class="social-feed__author">@newsagency</a></cite>
            <span class="feed-date">2 hours ago</span>
        </div>
    </div>
    <!-- /.twitter feed -->



    <!-- / tab -->
</div>
