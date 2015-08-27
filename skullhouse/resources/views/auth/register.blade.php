@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.forms')
@overwrite

@section('text')

	<h1><span>MEMBER REGISTRATION</span></h1>
	<hr>

	<!-- Registration form -->
	<form method="POST" action="https://www.skullhouse.nyc/register/" accept-charset="UTF-8" class="form-signin">

		{!! Form::token() !!}

		{!! Form::text('firstName', null, array('class' => 'form-control', 'placeholder' => 'First Name')) !!}
		{!! Form::text('lastName', null, array('class' => 'form-control', 'placeholder' => 'Last Name')) !!}

		{!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email address')) !!}

		{!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
		{!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Password confirmation')) !!}

		{!! Form::submit('Register', array('class' => 'btn btn-lg btn-primary btn-block')) !!}
	</form>

	<!-- Login for those whom already have accounts -->
	<hr>
	<p>
		If you already have an account approved, login <a href="/login/"><span>here</span></a>!
	</p>
	<hr>

@endsection
