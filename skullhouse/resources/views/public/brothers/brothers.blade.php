@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.brothers')
@overwrite

@section('text')
	@include('public.brothers.dynamic')
@endsection
