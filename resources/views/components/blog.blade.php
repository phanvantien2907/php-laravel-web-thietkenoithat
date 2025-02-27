@foreach($blog as $item)
    <div class="news-block-three">
        <div class="inner-box">
            <div class="image-box">
                <figure class="image"><a href="{{ route('blog.detail', ['slug' => $item->slug, 'id' => $item->blog_id ]  )}}"><img src="{{$item->image}}" alt=""></a></figure>
                <span class="date">{{$item->created_at ? \Carbon\Carbon::parse($item->created_at)->format('j M Y') : 'N/A' }}</span>
            </div>
            <div class="lower-content">
                <div class="post-meta">
                    <ul class="post-info clearfix">
                        <li><a href="{{ route('blog.detail', ['slug' => $item->slug, 'id' => $item->blog_id ]  )}}">By : {{$item->user->last_name}}</a></li>
                        <li><a href="{{ route('blog.detail', ['slug' => $item->slug, 'id' => $item->blog_id ]  )}}">interior, furniture</a></li>
                        <li><a href="{{ route('blog.detail', ['slug' => $item->slug, 'id' => $item->blog_id ]  )}}">Comments: {{$item->blog_comments->count()}}</a></li>
                    </ul>
                </div>
                <h3><a href="{{ route('blog.detail', ['slug' => $item->slug, 'id' => $item->blog_id ]  )}}">{{$item->title}}</a></h3>
                <div class="text">{{$item->description}}</div>
                <div class="link-box"><a href="{{ route('blog.detail', ['slug' => $item->slug, 'id' => $item->blog_id ]  )}}" class="theme-btn read-more">Read more</a></div>
            </div>
        </div>
    </div>
@endforeach
