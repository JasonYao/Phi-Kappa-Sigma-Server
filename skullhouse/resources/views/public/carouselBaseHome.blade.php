@extends('layouts.homeMaster')

@section('css')
	@include('includes.partials.css.home')
@overwrite

@section('content')

<!-- Page specific text -->
	<div class="container-fluid textContainer">
		<div class="text">
			@yield('text')
        </div>
    </div>

<!-- End of page specific text-->

<!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">

			<!-- 1st carousel slide -->
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/assets/img/bg/bg1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Phi Kappa Sigma</h2>
                </div>
            </div>

			<!-- 2nd carousel slide -->
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/assets/img/bg/bg2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>New York University</h2>
                </div>
            </div>

			<!-- 3rd carousel slide -->
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/assets/img/bg/bg3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Delta Phi Chapter</h2>
                </div>
            </div>

			<!-- 4th carousel slide -->
			<div class="item">
                <!-- Set the fourth background image using inline CSS below. -->
                <div class="fill" style="background-image:url('/assets/img/bg/hashtagSuits.jpg');"></div>
                <div class="carousel-caption">
                    <h2>A Brotherhood for life</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
@endsection

@section('js')
	@include('includes.partials.js.carousel')
@overwrite
