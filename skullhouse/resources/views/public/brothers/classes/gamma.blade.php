<!-- Gamma Class -->
<h3><span>Gamma Class</span></h3>

<!-- Ethan Webman -->
@if($brothers->where('seo', 'EthanWebman')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'EthanWebman')->first()->seoExternal}}/"><span>Ethan Webman</span></a><br>
@else
    Ethan Webman<br>
@endif

<!-- John Catstimatidis, Jr. -->
@if($brothers->where('seo', 'JohnCatstimatidis')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JohnCatstimatidis')->first()->seoExternal}}/"><span>John Catstimatidis, Jr.</span></a><br>
@else
    John Catstimatidis, Jr.<br>
@endif
