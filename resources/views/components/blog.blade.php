@foreach($blog as $item)
    <div class="news-block-three">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image"><a href="blog-detail.html"><img src="{{$item->image}}" alt=""></a></figure>
                <span class="date">{{$item->created_at ? \Carbon\Carbon::parse($item->created_at)->format('j M Y') : 'N/A' }}</span>
            </div>
            <div class="lower-content">
                <div class="post-meta">
                    <ul class="post-info clearfix">
                        <li><a href="blog-detail.html">By : {{$item->user->name}}</a></li>
                        <li><a href="blog-detail.html">interior, furniture</a></li>
                        <li><a href="blog-detail.html">Comments: 8</a></li>
                    </ul>
                </div>
                <h3><a href="blog-detail.html">{{$item->title}}</a></h3>
                <div class="text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur velit esse cillum Duis aute irure dolor in reprehenderit in voluptate ...</div>
                <div class="link-box"><a href="blog-detail.html" class="theme-btn read-more">Read more</a></div>
            </div>
        </div>
    </div>
@endforeach
