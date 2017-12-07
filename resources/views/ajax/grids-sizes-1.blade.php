<h4 class="swatch__title">Grade</h4>
<ul class="swatch__list is-flex" data-attribute="pa_size">
    @foreach($grids as $grd)
        @if($loop->index == 0)
            <li data-variation="{{$grd->grid}}" data-image-id="" class="swatch__list--item is-relative is-selected">
                <span class="swatch__value">{{$grd->grid}}</span>
                <span class="swatch__tooltip is-absolute is-block">{{$grd->grid}}</span>
            </li>
        @else
            <li data-variation="{{$grd->grid}}" data-image-id="" class="swatch__list--item is-relative">
                <span class="swatch__value">{{$grd->grid}}</span>
                <span class="swatch__tooltip is-absolute is-block">{{$grd->grid}}</span>
            </li>
        @endif
    @endforeach
</ul>

<div class="value">
    <select id="pa_size" class="" name="attribute_pa_size" data-attribute_name="attribute_pa_size" data-show_option_none="yes">
        <option value="">Escolha uma Tamanho</option>
        @foreach($grids as $grd)
            @if($loop->index == 0)
                <option value="{{$grd->grid}}" selected>{{$grd->grid}}</option>
            @else
                <option value="{{$grd->grid}}">{{$grd->grid}}</option>
            @endif
        @endforeach
    </select>
    <a class="reset_variations" href="#">Limpar</a>
</div>