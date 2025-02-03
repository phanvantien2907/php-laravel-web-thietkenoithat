<ul class="filter-tabs filter-btns text-center clearfix">
    <li class="active filter" data-role="button" data-filter=".all">All Projects</li>
    @foreach($categories as $item)
        <li class="filter" data-role="button" data-filter="{{$item->seo_keywords}}">{{$item->title}}</li>
    @endforeach
</ul>
