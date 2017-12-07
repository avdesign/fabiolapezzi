<div class="vc_row">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner vc_custom_1462545904307">
            <div class="wpb_wrapper">
                <div class="jas-sc-instagram clearfix  jas-carousel columns-2" data-slick='{&quot;slidesToShow&quot;: &quot;6&quot;, &quot;autoplay&quot;: true, &quot;arrows&quot;: true,"responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}},{"breakpoint": 480,"settings":{"slidesToShow": 1}}]}'>
                    @foreach($instagram as $items)
                        @foreach($items->images as $image)
                            @if($image->width == 320 && $image->height == 320)
                                <div class="item pr fl">
                                    <a href="{{$items->link}}" target="_blank">
                                        <img class="w__100" width="{{$image->width}}" height="{{$image->height}}" src="{{$image->url}}" alt="Instagram" />
                                    </a>
                                    <div class="info pa tc flex ts__03 center-xs middle-xs">
                                        @foreach($items->likes as $key => $like)
                                            @if ($key == 'count')
                                                <span class="pr cw mgr10"><i class="fa fa-heart-o mr__5"></i>{{$like}}<span>
                                            @endif
                                        @endforeach
                                        @foreach($items->comments as $key => $like)
                                            @if ($key == 'count')
                                                <span class="pr cw"><i class="fa fa-comments-o mr__5"></i>{{$like}}</span>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

