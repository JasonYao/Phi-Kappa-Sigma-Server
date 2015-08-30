@extends('public.carouselBase')

@section('text')
	<h1><span>{{ Auth::user()->firstName . ' ' . Auth::user()->lastName }}</span></h1>
	<a href="{{Auth::user()->picture}}">
		<img src="{{Auth::user()->picture}}" height="200" width="200">
	</a>
	<hr>

@if(Auth::user()->school !== NULL)
<!-- School at NYU -->
<h3><span>School</span></h3>
<p>{{Auth::user()->school}}</p>
@endif

@if(Auth::user()->degree !== NULL)
<!-- Degree -->
<h3><span>Degree</span></h3>
<p>{{Auth::user()->degree}}</p>
@endif

@if(Auth::user()->affiliations !== NULL)
<!-- Affiliations -->
<h3><span>Affiliations</span></h3>
<p>{{Auth::user()->affiliations}}</p>
@endif

@if(Auth::user()->honours !== NULL)
<!-- Honours and awards -->
<h3><span>Honours and awards</span></h3>
<p>{{Auth::user()->honours}}</p>
@endif

@if(Auth::user()->description !== NULL)
<!-- Biography -->
<h3><span>Biography</span></h3>
<p>{{Auth::user()->description}}</p>
@endif

@if(Auth::user()->initiationClass !== NULL)
<!-- Initiation class -->
<h3><span>Initiation class</span></h3>
<p>{{Auth::user()->initiationClass}}</p>
@endif
@endsection
