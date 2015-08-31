@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.profileUpdate')
@overwrite

@section('text')

	<h1><span>Profile Update | {{ $brother->firstName }}</span></h1>
	<hr>

	<!-- Profile update form -->
	<form method="POST" action="https://www.skullhouse.nyc/profile/update/" accept-charset="UTF-8" class="form-signin" enctype="multipart/form-data">

		{!! Form::token() !!}

		<!-- Basic information -->
		{!! Form::text('firstName', $brother->firstName, array('class' => 'form-control', 'placeholder' => 'First name')) !!}
		{!! Form::text('middleInitial', $brother->middleInitial, array('class' => 'form-control', 'placeholder' => 'Middle initial(s)')) !!}
		{!! Form::text('lastName', $brother->lastName, array('class' => 'form-control', 'placeholder' => 'Last name')) !!}
		{!! Form::email('email', $brother->email, array('class' => 'form-control', 'placeholder' => 'Email address')) !!}

		<!-- Profile picture updates -->
		<p>
			Your current profile picture:
		</p>
		<a href="{{'/assets/img/profiles/' . $brother->obfuscationCode . '/profile.' . $brother->extension}}">
			<img id="displayPicture" src="{{'/assets/img/profiles/' . $brother->obfuscationCode . '/profile.' . $brother->extension}}" 
			alt="{!! $brother->firstName . " " . $brother->lastName !!}" width="200" 
					height="200" border="1">
		</a>

		<p>New profile picture upload:</p>
		{!! Form::file('picture', ['onchange' => 'displayUploaded(this);']) !!}

		<!-- Fraternity information -->
		{!! Form::textarea('description', $brother->description, array('class' => 'form-control', 'placeholder' => 'Biography')) !!}

		{!! Form::label('initiationClass', 'Initiation Class') !!}
		{!! Form::select('initiationClass', array(
			NULL => '',
			'Founder' => 'Founder',
			'Alpha' => 'Alpha',
			'Beta' => 'Beta',
			'Gamma' => 'Gamma',
			'Delta' => 'Delta',
			'Epsilon' => 'Epsilon',
			'Zeta' => 'Zeta',
			'Eta' => 'Eta',
			'Theta' => 'Theta',
			'Iota' => 'Iota',
			'Kappa' => 'Kappa',
			'Lambda' => 'Lambda',
		), $brother->initiationClass, array('class' => 'drop')) !!}

		{!! Form::text('degree', $brother->degree, array('class' => 'form-control', 'placeholder' => 'Degree (e.g. B.S. Computer Science 2018)')) !!}

		{!! Form::text('school', $brother->school, array('class' => 'form-control', 'placeholder' => 'School (e.g. Courant Institute of Mathematical Sciences)')) !!}

		{!! Form::text('honours', $brother->honours, array('class' => 'form-control', 'placeholder' => 'Honours & awards')) !!}

		{!! Form::text('affiliations', $brother->affiliations, array('class' => 'form-control', 'placeholder' => 'Affiliations (e.g. fencing team, college libertarians)')) !!}

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

