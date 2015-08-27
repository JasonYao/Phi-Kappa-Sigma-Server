@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.profileUpdate')
@overwrite

@section('text')

	<h1><span>Profile Update | {{ Auth::user()->firstName }}</span></h1>
	<hr>

	<!-- Profile update form -->
	<form method="POST" action="https://www.skullhouse.nyc/dashboard/profile/update/" accept-charset="UTF-8" class="form-signin" enctype="multipart/form-data">

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
		<a href="/assets/img/profiles/{!!Auth::user()->obfuscationCode!!}/profile.png">
			<img src="/assets/img/profiles/{!!Auth::user()->obfuscationCode!!}/profile.png" alt="{!!Auth::user()->firstName . " " . Auth::user()->lastName!!}" width="200" height="200" border="1">
		</a>

		<p>New profile picture upload:</p>
		{!! Form::file('image', null) !!}

		<!-- Fraternity information -->
		{!! Form::textarea('description', Auth::user()->description, array('class' => 'form-control', 'placeholder' => 'Biography')) !!}

		{!! Form::label('initiationClass', 'Initiation Class') !!}
		{!! Form::select('initiationClass', array(
			NULL => '',
			'founders' => 'Founders Class',
			'alpha' => 'Alpha Class',
			'beta' => 'Beta Class',
			'gamma' => 'Gamma Class',
			'delta' => 'Delta Class',
			'epsilon' => 'Epsilon Class',
			'zeta' => 'Zeta Class',
			'eta' => 'Eta Class',
			'theta' => 'Theta Class',
			'iota' => 'Iota Class',
			'kappa' => 'Kappa Class',
			'lambda' => 'Lambda Class',
		), 'lambda', array('class' => 'drop')) !!}

		{!! Form::text('degree', Auth::user()->degree, array('class' => 'form-control', 'placeholder' => 'Degree (e.g. B.S. Computer Science 2018)')) !!}

		{!! Form::text('school', Auth::user()->school, array('class' => 'form-control', 'placeholder' => 'School (e.g. Courant Institute of Mathematical Sciences)')) !!}

		{!! Form::text('honours', Auth::user()->honours, array('class' => 'form-control', 'placeholder' => 'Honours & awards')) !!}

		{!! Form::submit('Update profile', array('class' => 'btn btn-lg btn-primary btn-block')) !!}
	</form>

	<hr>
	<p>
		Go back to dashboard <a href="/dashboard/"><span>here</span></a>
	</p>

@endsection
