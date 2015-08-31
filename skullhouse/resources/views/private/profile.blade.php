@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.profile')
@overwrite

@section('text')
	<h1><span>{{ Auth::user()->firstName . ' ' . Auth::user()->lastName }}</span></h1>
	<a href="{{Auth::user()->picture}}">
		<ul class="enlarge">
			<li>
				<img src="{{Auth::user()->thumbnail}}" width="200px" height="200px" alt="{{Auth::user()->firstName . " " . Auth::user()->lastName}}" />
				<span>
					<img src="{{Auth::user()->picture}}" width="300px" height="300px" alt="{{Auth::user()->firstName . " " . Auth::user()->lastName}}" />
					<br>{{Auth::user()->firstName . " " . Auth::user()->lastName}}
				</span>
			</li>
		</ul>
	</a>
	<hr>

	@if((Auth::user()->initiationClass !== NULL)
	&& (Auth::user()->initiationClass !== ""))
	<!-- Initiation Class -->
	<h3><span>Initiation Class</span></h3>
	<p>{{Auth::user()->initiationClass}}</p>
	@endif

	@if((Auth::user()->school !== NULL)
	&& (Auth::user()->school !== ""))
	<!-- School at NYU -->
	<h3><span>School</span></h3>
	<p>{{Auth::user()->school}}</p>
	@endif

	@if((Auth::user()->degree !== NULL)
	&& (Auth::user()->degree !== ""))
	<!-- Degree -->
	<h3><span>Degree</span></h3>
	<p>{{Auth::user()->degree}}</p>
	@endif

	@if((Auth::user()->affiliations !== NULL)
	&& (Auth::user()->affiliations !== ""))
	<!-- Affiliations -->
	<h3><span>Affiliations</span></h3>
	<p>{{Auth::user()->affiliations}}</p>
	@endif

	@if((Auth::user()->honours !== NULL)
	&& (Auth::user()->honours != ""))
	<!-- Honours and Awards -->
	<h3><span>Honours and Awards</span></h3>
	<p>{{Auth::user()->honours}}</p>
	@endif

	@if((Auth::user()->description !== NULL)
	&& (Auth::user()->description !== ""))
	<!-- Biography -->
	<h3><span>Biography</span></h3>
	<p>{{Auth::user()->description}}</p>
	@endif
@endsection

@section('js')
	@include('includes.partials.js.profile')
@overwrite
