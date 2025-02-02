@foreach($team as $item)
    <div class="team-block col-lg-3 col-md-6 col-sm-12">
        <div class="inner-box">
            <div class="image">
                <img src="{{$item->image}}" alt="ảnh của {{$item->first_name}}" />
                <div class="overlay-box">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li><a href="#"><i class="fab fa-skype"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="lower-content">
                <h3><a href="/contact">{{$item->last_name}} {{$item->first_name}}</a></h3>
                <div class="designation">{{$item->title}}</div>
            </div>
        </div>
    </div>
@endforeach
