<aside id="jas_gecko_instagram-3" class="widget widget_jas_gecko_instagram">
    <h4 class="widget-title tu">Instagram Feed</h4>
    <div class="jas-instagram clearfix columns-3">
        @foreach($instagram as $items)
            @foreach($items->images as $image)
                @if($image->width == 150 && $image->height == 150)
                    <div class="item dib">
                        <a href="{{$items->link}}">
                            <img width="150" height="150" src="{{$image->url}}" alt="Instagram {{config('app.name')}}" />
                        </a>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
</aside>