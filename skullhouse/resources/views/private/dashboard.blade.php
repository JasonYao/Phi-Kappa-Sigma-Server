@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.dashboard')
@overwrite

@section('text')

	<h1><span>{{ Auth::user()->firstName . "'s" }} Dashboard</span></h1>
	<hr>
@endsection
