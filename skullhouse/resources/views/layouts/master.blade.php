<!DOCTYPE html>
<html lang="en">
<head>
	@include('includes.partials.meta.global')
	@yield('meta')

	<title>Phi Kappa Sigma Delta Phi | {{$title}}</title>

	@include('includes.partials.favicon.global')

	@include('includes.partials.css.bootstrap')
	@include('includes.partials.css.global')
	@yield('css')

</head>
<body data-spy="scroll" data-target="#navbar">>

	@include('includes.navbar')

	@yield('breadcrumbs')

	@include('includes.messages')

	<div id="main">
		<p>2nd testing</p>
		@yield('content')
	</div>

	@include('includes.footer')

	@include('includes.partials.google.analytics')

	@include('includes.partials.js.bootstrap')
	@yield('js')
</body>
</html>

