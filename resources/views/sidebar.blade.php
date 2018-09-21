@include('header')
<div class="wakkaCell slide-left-col" style="background-color: rgb(85, 118, 52); position: relative; min-height: 3000px;margin-top:60px;">
	{{--@each('partials.module', $menu_items, 'menu_item')--}}
	@foreach ($menu_items as $menu_item)
        @include('partials.module', ['sub_items' => $sub_items, 'k'=> $menu_item->id])
   @endforeach	
</div>
@include('footer')