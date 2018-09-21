<div>	
	<h3 class="open">
		{{$menu_item->name}}
	</h3>	
	<ul class="open">
		@isset($sub_items[$k])
			@forelse ($sub_items[$k] as $itm)			
			    <li>		
			    <a href="{{ url('/') }}/{{$itm['path']}}">{{$itm['name']}}</a>
			    </li>
			@empty	
			@endforelse
		@endisset	
	</ul>
</div>