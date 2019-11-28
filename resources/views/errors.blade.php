@if($errors->any())
	<div class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<ul>
			     <li style="list-style-type: none;">{{ $error }}</li>
			</ul>
		@endforeach
	</div>
@endif
