@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.forms')
@overwrite

@section('text')

	<h1><span>{{ Auth::user()->firstName . "'s" }} Dashboard</span></h1>
	<hr>

	<p>
		View your profile <a href="/profile/"><span>here</span></a>.
	</p>

	<p>
		Update your profile information <a href="/profile/update/"><span>here</span></a>
	</p>

	<p>
		Update your account password <a href="/password/email/"><span>here</span></a>
	</p>
@endsection
