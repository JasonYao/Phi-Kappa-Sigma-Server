@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.register')
@overwrite

@section('text')

	<h1><span>MEMBER REGISTRATION</span></h1>
	<hr>

	<form method="POST" action="register" class="form-signin">
    	{!! csrf_field() !!}

	<!-- Name for signup -->
	<label for="inputName" class="sr-only">Full name</label>
	<input type="text" id="inputName" class="form-control" placeholder="Full name" required autofocus>

	<!-- Email for signup -->
	<label for="inputEmail" class="sr-only">Email address</label>
	<input type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

	<!-- Password for signup -->
	<label for="inputPassword" class="sr-only">Password</label>
	<input type="text" id="inputPassword" class="form-control" placeholder="Password" required>

	<!-- Password confirmation for signup -->
	<label for="inputPasswordConfirmation" class="sr-only">Password confirmation</label>
    <input type="text" id="inputPasswordConfirmation" class="form-control" placeholder="Password confirmation" required>

	<!-- Remember value -->
	<div class="checkbox">
		<label>
			<input type="checkbox" value="remember-me"> Remember me
		</label>
	</div>

	<!-- Form submission -->
	<button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
	</form>
@endsection
