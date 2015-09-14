@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.forms')
@overwrite

@section('text')

	<h1><span>Phi Kap confirmation</span></h1>
	<hr>

	<p>
		<span style="color:#8D734A">Are you a Phi Kap?</span>
	</p>

	<!-- Registration in case of no account -->
	<hr>
	<p>
		If you don't have an account, sign up for one <a href="/register/"><span>here</span></a>. After you register, an admin will approve/deny your account if you are from Delta Phi.
	</p>
	<hr>
@endsection
