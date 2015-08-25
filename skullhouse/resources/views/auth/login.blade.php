@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.login')
@overwrite

@section('text')

	<h1><span>MEMBER LOGIN</span></h1>
	<hr>

	<form method="POST" action="login" class="form-signin">
    	{!! csrf_field() !!}

	<label for="inputEmail" class="sr-only">Email address</label>
	<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>

	<label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	</form>
@endsection
