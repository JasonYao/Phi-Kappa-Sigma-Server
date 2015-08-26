<!-- Displays messages if sent along in the session -->
@if (Session::has('flashMessage'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{!! Session::get('flashMessage') !!}
	</div>
@endif

@if (count($errors) > 0)
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	<ul>
		@foreach ($errors->all() as $error)
			<li>{!! $error !!}</li>
		@endforeach
	</ul>
</div>
@endif

