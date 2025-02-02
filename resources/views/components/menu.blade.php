@foreach($menu as $item)
    <li><a href="{{$item->slug}}">{{$item->title}}</a></li>
@endforeach
