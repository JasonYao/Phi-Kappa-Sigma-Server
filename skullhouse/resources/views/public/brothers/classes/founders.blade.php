<!-- Founder Class -->
<h3><span>Founder Class</span></h3>
<!-- Benjamin Millard -->
@if($brothers->where('seo', 'BenjaminMillard')->first() !== NULL)
	<a href="/brothers/{{$brothers->where('seo', 'BenjaminMillard')->first()->seoExternal}}/"><span>Benjamin Millard</span></a><br>
@else
	Benjamin Millard<br>
@endif

<!-- Cameron Little -->
@if($brothers->where('seo', 'CameronLittle')->first() !== NULL)
	<a href="/brothers/{{$brothers->where('seo', 'CameronLittle')->first()->seoExternal}}/"><span>Cameron Little</span></a><br>
@else
	Cameron Little<br>
@endif

<!-- Christopher Beck -->
@if($brothers->where('seo', 'ChristopherBeck')->first() !== NULL)
	<a href="/brothers/{{$brothers->where('seo', 'ChristopherBeck')->first()->seoExternal}}/"><span>Christopher Beck</span></a><br>
@else
	Christopher Beck<br>
@endif

<!-- Daniel Camacho -->
@if($brothers->where('seo', 'DanielCamacho')->first() !== NULL)
	<a href="/brothers/{{$brothers->where('seo', 'DanielCamacho')->first()->seoExternal}}/"><span>Daniel Camacho</span></a><br>
@else
	Daniel Camacho<br>
@endif

<!-- Daniel McLaughlin -->
@if($brothers->where('seo', 'DanielMcLaughlin')->first() !== NULL)
	<a href="/brothers/{{$brothers->where('seo', 'DanielMcLaughlin')->first()->seoExternal}}/"><span>Daniel McLaughlin</span></a><br>
@else
	Daniel McLaughlin<br>
@endif

<!-- Daniel Reveles -->
@if($brothers->where('seo', 'DanielReveles')->first() !== NULL)
	<a href="/brothers/{{$brothers->where('seo', 'DanielReveles')->first()->seoExternal}}/"><span>Daniel Reveles</span></a><br>
@else
	Daniel Reveles<br>
@endif

<!-- Gregory Mills -->
@if($brothers->where('seo', 'GregoryMills')->first() !== NULL)
	<a href="/brothers/{{$brothers->where('seo', 'GregoryMills')->first()->seoExternal}}/"><span>Gregory Mills</span></a><br>
@else
	Gregory Mills<br>
@endif

<!-- Justin Kim -->
@if($brothers->where('seo', 'JustinKim')->first() !== NULL)
	<a href="/brothers/{{$brothers->where('seo', 'JustinKim')->first()->seoExternal}}/"><span>Justin Kim</span></a><br>
@else
	Justin Kim<br>
@endif

<!-- Phil Ward -->
@if($brothers->where('seo', 'PhilWard')->first() !== NULL)
	<a href="/brothers/{{$brothers->where('seo', 'PhilWard')->first()->seoExternal}}/"><span>Phil Ward</span></a><br>
@else
	Phil Ward<br>
@endif

<!-- Sajeeb Saha -->
@if($brothers->where('seo', 'SajeebSaha')->first() !== NULL)
	<a href="/brothers/{{$brothers->where('seo', 'SajeebSaha')->first()->seoExternal}}/"><span>Sajeeb Saha</span></a><br>
@else
	Sajeeb Saha<br>
@endif

<!-- Sagar Vachhani -->
@if($brothers->where('seo', 'SagarVachhani')->first() !== NULL)
	<a href="/brothers/{{$brothers->where('seo', 'SagarVachhani')->first()->seoExternal}}/"><span>Sagar Vachhani</span></a><br>
@else
	Sagar Vachhani<br>
@endif

<!-- Vincent Morello -->
@if($brothers->where('seo', 'VincentMorello')->first() !== NULL)
	<a href="/brothers/{{$brothers->where('seo', 'VincentMorello')->first()->seoExternal}}/"><span>Vincent Morello</span></a><br>
@else
	Vincent Morello<br>
@endif

<!-- Zachary Falkow -->
@if($brothers->where('seo', 'ZacharyFalkow')->first() !== NULL)
	<a href="/brothers/{{$brothers->where('seo', 'ZacharyFalkow')->first()->seoExternal}}/"><span>Zachary Falkow</span></a><br>
@else
	Zachary Falkow<br>
@endif
