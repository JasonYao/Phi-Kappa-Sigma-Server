@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.profileUpdate')
@overwrite

@section('text')

	<h1><span>Profile Update | {{ Auth::user()->firstName }}</span></h1>
	<hr>

	<!-- Profile update form -->
	<form method="POST" action="https://www.skullhouse.nyc/profile/update/" accept-charset="UTF-8" class="form-signin" enctype="multipart/form-data">

		{!! Form::token() !!}

		<!-- Basic information -->
		{!! Form::text('firstName', Auth::user()->firstName, array('class' => 'form-control', 'placeholder' => 'First name')) !!}
		{!! Form::text('middleInitial', Auth::user()->middleInitial, array('class' => 'form-control', 'placeholder' => 'Middle initial(s)')) !!}
		{!! Form::text('lastName', Auth::user()->lastName, array('class' => 'form-control', 'placeholder' => 'Last name')) !!}
		{!! Form::email('email', Auth::user()->email, array('class' => 'form-control', 'placeholder' => 'Email address')) !!}

		<!-- Profile picture updates -->
		<p>
			Your current profile picture:
		</p>
		<a href="{{'/assets/img/profiles/' . Auth::user()->obfuscationCode . '/profile.' . Auth::user()->extension}}">
			<img id="displayPicture" src="{{'/assets/img/profiles/' . Auth::user()->obfuscationCode . '/profile.' . Auth::user()->extension}}" 
			alt="{!! Auth::user()->firstName . " " . Auth::user()->lastName !!}" width="200" 
					height="200" border="1">
		</a>

		<p>New profile picture upload:</p>
		{!! Form::file('picture', ['onchange' => 'displayUploaded(this);']) !!}

		<!-- Fraternity information -->
		{!! Form::textarea('description', Auth::user()->description, array('class' => 'form-control', 'placeholder' => 'Biography')) !!}

		{!! Form::label('initiationClass', 'Initiation Class') !!}
		{!! Form::select('initiationClass', array(
			NULL => '',
			'Founders Class' => 'Founders Class',
			'Alpha Class' => 'Alpha Class',
			'Beta Class' => 'Beta Class',
			'Gamma Class' => 'Gamma Class',
			'Delta Class' => 'Delta Class',
			'Epsilon Class' => 'Epsilon Class',
			'Zeta Class' => 'Zeta Class',
			'Eta Class' => 'Eta Class',
			'Theta Class' => 'Theta Class',
			'Iota Class' => 'Iota Class',
			'Kappa Class' => 'Kappa Class',
			'Lambda Class' => 'Lambda Class',
		), Auth::user()->initiationClass, array('class' => 'drop')) !!}

		{!! Form::text('degree', Auth::user()->degree, array('class' => 'form-control', 'placeholder' => 'Degree (e.g. B.S. Computer Science 2018)')) !!}

		{!! Form::text('school', Auth::user()->school, array('class' => 'form-control', 'placeholder' => 'School (e.g. Courant Institute of Mathematical Sciences)')) !!}

		{!! Form::text('honours', Auth::user()->honours, array('class' => 'form-control', 'placeholder' => 'Honours & awards')) !!}

		{!! Form::text('affiliations', Auth::user()->affiliations, array('class' => 'form-control', 'placeholder' => 'Affiliations (e.g. fencing team, college libertarians)')) !!}

		{!! Form::submit('Update profile', array('class' => 'btn btn-lg btn-primary btn-block')) !!}
	</form>

	<hr>
	<p>
		Go back to dashboard <a href="/dashboard/"><span>here</span></a>
	</p>

@endsection

@section('js')
<script>
function displayUploaded(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#displayPicture')
				.attr('src', e.target.result)
				.width(200)
				.height(200);
		};
		reader.readAsDataURL(input.files[0]);
	}
}
</script>
@endsection
