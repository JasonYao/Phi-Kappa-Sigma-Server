@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.forms')
@overwrite

@section('text')

	<h1><span>Profile Update | {{ Auth::user()->firstName }}</span></h1>
	<hr>

	<!-- Profile update form -->
	<form method="POST" action="https://www.skullhouse.nyc/dashboard/profile/update/" accept-charset="UTF-8" class="form-signin" enctype="multipart/form-data">

		{!! Form::token() !!}

		{!! Form::text('firstName', Auth::user()->firstName, array('class' => 'form-control', 'placeholder' => 'First Name')) !!}
		{!! Form::text('lastName', Auth::user()->lastName, array('class' => 'form-control', 'placeholder' => 'Last Name')) !!}

		{!! Form::email('email', Auth::user()->email, array('class' => 'form-control', 'placeholder' => 'Email address')) !!}

		<p>
			Your current profile picture:
		</p>
		<a href="/assets/img/{!!Auth::user()->obfuscationCode!!}/profile.png">
			<img src="/assets/img/{!!Auth::user()->obfuscationCode!!}/profile.png" alt="{!!Auth::user()->firstName . " " . Auth::user()->lastName!!}" width="400" height="400" border="1">
		</a>

		<p>New profile picture upload:</p>
		{!! Form::file('image', null) !!}

		{!! Form::submit('Update profile', array('class' => 'btn btn-lg btn-primary btn-block')) !!}
	</form>

	<hr>
	<p>
		Go back to dashboard <a href="/dashboard/"><span>here</span></a>
	</p>

@endsection
