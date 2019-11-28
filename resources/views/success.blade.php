@if (session('success'))

	<div class="alert alert-success alert-block">

		<button type="button" class="close" data-dismiss="alert">×</button>	
		<p style="margin:auto;">{{ session('success') }}</p>

	</div>

@endif