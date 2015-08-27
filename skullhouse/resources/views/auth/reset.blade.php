@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.forms')
@overwrite

@section('text')

	<h1><span>PASSWORD RESET | FORM</span></h1>
	<hr>

	<!-- Password reset via email form -->
	<form method="POST" action="https://www.skullhouse.nyc/password/reset/" accept-charset="UTF-8" class="form-signin">

		<!-- CSRF protection Token -->
		{!!Form::token()!!}

		<!-- Password reset session token -->
		<input type="hidden" name="token" value="{{ $token }}">

		{!! Form::email('email', old('email'), array('class' => 'form-control', 'placeholder' => 'Email address')) !!}

		{!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
		{!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Password confirmation')) !!}

		{!! Form::submit('Reset password', array('class' => 'btn btn-lg btn-primary btn-block')) !!}
	</form>

	<!-- Login for those whom already have accounts -->
	<hr>
	<p>
		If you already have an account approved, login <a href="/login/"><span>here</span></a>!
	</p>

	<p>
		If you don't have an account, sign up for one <a href="/register/"><span>here</span></a>. After you register, an admin will approve/deny your account if you are from Delta Phi.
	</p>
	<hr>

@endsection
