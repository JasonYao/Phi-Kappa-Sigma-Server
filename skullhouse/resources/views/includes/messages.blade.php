<!-- Displays messages if sent along in the session -->
@if (Session::has('flashMessage'))
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ Session::get('flashMessage') }}
	</div>
@endif
