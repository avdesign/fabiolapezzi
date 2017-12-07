<h4 class="swatch__title">{{$product->kit_name}}:  {{$product->unit}} {{$product->measure}}</h4>
@php
   foreach($image->grids as $grid) {
      $arrayGrids = explode(',' ,$grid->grid);
   }


   foreach($arrayGrids as $str) {
      $grids        = explode('/' ,$str);
      $labels[]     = $grids[1];
      $quantities[] = $grids[0];
   }
@endphp

<table cellspacing="0" class="group_table">
   <tbody>
   <tr>
      <td class="label">N&ordm;</td>
      @foreach($labels as $key => $label)
         <td>{{$label}}</td>
         @endforeach
   </tr>
   <tr>
      <td class="label">Qtd.</td>
      @foreach($quantities as $key => $qty)
         <td>{{$qty}}</td>
      @endforeach
   </tr>
   </tbody>
</table>
<ul class="swatch__list is-flex" data-attribute="pa_size">
   <li data-variation="{{$grid->grid}}" data-image-id="" class="swatch__list--item is-relative is-selected" style="display: none">
      <span class="swatch__value">{{$product->unit}}</span>
      <span class="swatch__tooltip is-absolute is-block">{{$product->unit}}</span>
   </li>
</ul>

<div class="value">
   <select id="pa_size" class="" name="attribute_pa_size" data-attribute_name="attribute_pa_size" data-show_option_none="yes">
      <option value="">Escolha uma Tamanho</option>
      <option value="{{$grid->grid}}" selected>{{$grid->grid}}</option>
   </select>
   <a class="reset_variations" href="#">Limpar</a>
</div>

