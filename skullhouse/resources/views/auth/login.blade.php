@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.login')
@overwrite

@section('text')

	<h1><span>MEMBER LOGIN</span></h1>
	<hr>

	<!-- Login form -->
    <form method="POST" action="https://www.skullhouse.nyc/login/" accept-charset="UTF-8" class="form-signin">

        {!! Form::token() !!}

        {!! Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email address')) !!}
        {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) !!}

        {!! Form::submit('Login', array('class' => 'btn btn-lg btn-primary btn-block')) !!}
    </form>
@endsection
