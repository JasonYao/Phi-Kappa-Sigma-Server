@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.forms')
@overwrite

@section('text')

	<h1><span>{{ Auth::user()->firstName . "'s" }} Dashboard</span></h1>
	<hr>

	<p><span>Once a Phi Kap, Always a Phi Kap</span></p>
	<p>
		We'd love to keep everyone up to date on your most recent success. The links below will allow you to view or update your publicly available biography on the Brothers page.
	</p>

	<p>
		View your profile <a href="/profile/"><span>here</span></a>.
	</p>

	<p>
		Update your profile information <a href="/profile/update/"><span>here</span></a>
	</p>

	<p>
		Reset your account password <a href="/password/email/"><span>here</span></a>
	</p>
@endsection
