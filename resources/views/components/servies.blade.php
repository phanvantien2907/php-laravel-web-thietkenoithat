
@foreach($services as $item)
    <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="content">
                <div class="icon-box">
                    <span class="{{$item->image}}"></span>
                </div>
                <h3><a href="/{{$item->slug}}">{{$item->title}}</a></h3>
                <div class="text">{{$item->description}}</div>
                <a href="{{ route('service.index', ['slug' => $item->slug, 'id' => $item->servies_id ]  )}}" class="read-more">Read More</a>
            </div>
        </div>
    </div>
@endforeach
