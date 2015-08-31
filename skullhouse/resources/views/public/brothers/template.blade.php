@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.profile')
@overwrite

@section('text')
	<h1><span>{{ $brother->firstName . ' ' $brother->middleInitial '' . $brother->lastName }}</span></h1>
	<a href="{{$brother->picture}}">
		<ul class="enlarge">
			<li>
				<img src="{{$brother->thumbnail}}" width="200px" height="200px" alt="{{$brother->firstName . " " . $brother->lastName}}" />
				<span>
					<img src="{{$brother->picture}}" width="300px" height="300px" alt="{{$brother->firstName . " " . $brother->lastName}}" />
					<br>{{$brother->firstName . " " . $brother->lastName}}
				</span>
			</li>
		</ul>
	</a>
	<hr>

	@if(($brother->initiationClass !== NULL)
	&& ($brother->initiationClass !== ""))
	<!-- Initiation Class -->
	<h3><span>Initiation Class</span></h3>
	<p>{{$brother->initiationClass}}</p>
	@endif

	@if(($brother->school !== NULL)
	&& ($brother->school !== ""))
	<!-- School at NYU -->
	<h3><span>School</span></h3>
	<p>{{$brother->school}}</p>
	@endif

	@if(($brother->degree !== NULL)
	&& ($brother->degree !== ""))
	<!-- Degree -->
	<h3><span>Degree</span></h3>
	<p>{{$brother->degree}}</p>
	@endif

	@if(($brother->affiliations !== NULL)
	&& ($brother->affiliations !== ""))
	<!-- Affiliations -->
	<h3><span>Affiliations</span></h3>
	<p>{{$brother->affiliations}}</p>
	@endif

	@if(($brother->honours !== NULL)
	&& ($brother->honours != ""))
	<!-- Honours and Awards -->
	<h3><span>Honours and Awards</span></h3>
	<p>{{$brother->honours}}</p>
	@endif

	@if(($brother->description !== NULL)
	&& ($brother->description !== ""))
	<!-- Biography -->
	<h3><span>Biography</span></h3>
	<p>{{$brother->description}}</p>
	@endif

	<hr>
	<p>
		<a href="/brothers/"><span>Return to Brothers directory</span></a>
	</p>

@endsection

@section('js')
	@include('includes.partials.js.profile')
@overwrite
