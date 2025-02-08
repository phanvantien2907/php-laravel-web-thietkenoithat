@foreach($admin_menu as $item)
    <li><a class="nav-link" href="/{{$item->slug}}"><i class="{{$item->icon}}"></i> <span>{{$item->item_name}}</span></a></li>
@endforeach
