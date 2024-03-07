<div class="sidebar-widget sidebar-blog-category">
    <ul class="blog-cat-two">
        @foreach ($services as $item)
        <li  @if(URL::to('service/'.$item->slug) == url()->current()) class= "active" @endif><a href="{{url('service/'.$item->slug)}}">{{$item->title}}</a></li>
        @endforeach
        
    </ul>
</div>
