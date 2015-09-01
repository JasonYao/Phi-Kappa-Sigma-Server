@extends('public.carouselBaseHome')

@section('css')
	@include('includes.partials.css.forms')
@overwrite

@section('text')
	<h1><span>ROOM RESERVATION FORM</span></h1>
	<hr>

	<!-- Profile update form -->
	<form method="POST" action="https://www.skullhouse.nyc/reservation/" accept-charset="UTF-8" class="form-signin">

	{!! Form::token() !!}

	<!-- Basic information -->
	{!! Form::text('netID', NULL, array('class' => 'form-control', 'placeholder' => 'NetID (E.g. jy1299)')) !!}
	<p>
		Note: Your passwords are kept safe inside the database and locked down with multiple security protocols.
		This database will be sanitised annually and your passwords deleted on
		<br><span>30 August 2016</span>.
	</p>

	{!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}
	{!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Password confirmation')) !!}

	{!! Form::submit('Submit Room Reservation Info', array('class' => 'btn btn-lg btn-primary btn-block')) !!}
	</form>
@endsection
