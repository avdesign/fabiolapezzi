<div class="filter-sidebar bgbl pf left">
    <h3 class="mg__0 tc cw bgb tu ls__2 visible-sm">Filtrar<i class="close-filter pe-7s-close pa"></i></h3>
    <div class="filter-content">
        <aside id="yith-woo-ajax-navigation-6" class="widget yith-woocommerce-ajax-product-filter yith-woo-ajax-navigation woocommerce widget_layered_nav">
            <h3 class="widget-title tu fwsb">Fitrar por Marca</h3>
            <ul class='yith-wcan-label yith-wcan yith-wcan-group '>
                @foreach($products as $product)

                    <li><a title="{{$product->brand}}" href="{{route('filter')}}?brand={{$product->brand}}">{{$product->brand}}</a>
                @endforeach
            </ul>
        </aside>
        <aside id="woocommerce_price_filter-2" class="widget woocommerce widget_price_filter">
            <h3 class="widget-title tu fwsb">Filtrar por Preço</h3>
            <form method="get" action="{{route('filter')}}">
                <div class="price_slider_wrapper">
                    <div class="price_slider" style="display:none;"></div>
                    <div class="price_slider_amount">
                        <input type="text" id="min_price" name="min_price" value="" data-min="0" placeholder="Min price" />
                        <input type="text" id="max_price" name="max_price" value="" data-max="100" placeholder="Max price" />
                        <button type="submit" class="button">Filtrar</button>
                        <div class="price_label" style="display:none;">
                            Price: <span class="from"></span> &mdash; <span class="to"></span>
                        </div>

                        <div class="clear"></div>
                    </div>
                </div>
            </form>
        </aside>
        <aside id="yith-woo-ajax-navigation-2" class="widget yith-woocommerce-ajax-product-filter yith-woo-ajax-navigation woocommerce widget_layered_nav">
            <h3 class="widget-title tu fwsb">Por Cor</h3>
            <ul class='yith-wcan-color yith-wcan yith-wcan-group '>
                <li><a style="background-color:#000000;" href="{{route('filter')}}?filter_color=black" title="Black">Black</a>
                <li><a style="background-color:#709abf;" href="{{route('filter')}}?filter_color=blue" title="Blue">Blue</a>
                <li><a style="background-color:#ad8111;" href="{{route('filter')}}?filter_color=brown" title="Brown">Brown</a>
                <li><a style="background-color:#57d6db;" href="{{route('filter')}}?filter_color=cyan" title="Cyan">Cyan</a>
                <li><a style="background-color:#e5ac10;" href="{{route('filter')}}?filter_color=gold" title="Gold">Gold</a>
                <li><a style="background-color:#8ce84a;" href="{{route('filter')}}?filter_color=green" title="Green">Green</a>
                <li><a style="background-color:#c9c9c9;" href="{{route('filter')}}?filter_color=grey" title="Grey">Grey</a>
                <li><a style="background-color:#e664ef;" href="{{route('filter')}}?filter_color=pink" title="Pink">Pink</a>
                <li><a style="background-color:#9d58e2;" href="{{route('filter')}}?filter_color=purple" title="Purple">Purple</a>
                <li><a style="background-color:#f7f7f7;" href="{{route('filter')}}?filter_color=sliver" title="Sliver">Sliver</a>
                <li><a style="background-color:#ffffff;" href="{{route('filter')}}?filter_color=white" title="White">White</a></ul>
        </aside>
        <aside id="yith-woo-ajax-navigation-3" class="widget yith-woocommerce-ajax-product-filter yith-woo-ajax-navigation woocommerce widget_layered_nav">
            <h3 class="widget-title tu fwsb">Por Tamanho</h3>
            <ul class='yith-wcan-list yith-wcan '>
                <li><a href="{{route('filter')}}?filter_size=l">L</a></li>
                <li><a href="{{route('filter')}}?filter_size=m">M</a></li>
                <li><a href="{{route('filter')}}?filter_size=s">S</a></li>
                <li><a href="{{route('filter')}}?filter_size=xl">XL</a></li>
                <li><a href="{{route('filter')}}?filter_size=xs">XS</a></li>
            </ul>
        </aside>
        <aside id="yith-woo-ajax-reset-navigation-2" class="widget yith-woocommerce-ajax-product-filter yith-woo-ajax-reset-navigation yith-woo-ajax-navigation woocommerce widget_layered_nav" style="display:none"></aside>
    </div>
</div>