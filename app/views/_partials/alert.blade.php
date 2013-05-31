@foreach(array('error', 'info', 'success') as $type)
	@if (Session::has("flash-$type"))
	    <div class="alert alert-{{$type}}">{{ Session::get("flash-$type") }}</div>
	@endif
@endforeach
