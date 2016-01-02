@if(count($error)>0)
	<div class="alert">
	    <button class="close"></button>
	    <ul>
	        @foreach($errors->all() as $error)
	            <li>{!!$error!!}</li>
	        @endforeach
	    </ul>
	</div>
@endif