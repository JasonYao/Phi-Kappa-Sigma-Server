@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.forms')
@overwrite

@section('text')

	<h1><span>{{ Auth::user()->firstName . "'s" }} Dashboard</span></h1>
	<hr>

	<p>
		Update your profile information <a href="/dashboard/update/profile/"><span>here</span></a>
	</p>

	<p>
		Update your account password <a href="/password/email/"><span>here</span></a>
	</p>
@endsection
