<!-- Gamma Class -->
<h3>Gamma Class</h3>

<!-- Ethan Webman -->
@if($brothers->where('seo', 'EthanWebman')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'EthanWebman')->first()->seoExternal}}/">Ethan Webman</a><br>
@else
    Ethan Webman<br>
@endif

<!-- John Catstimatidis, Jr. -->
@if($brothers->where('seo', 'JohnCatstimatidis')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JohnCatstimatidis')->first()->seoExternal}}/">John Catstimatidis, Jr.</a><br>
@else
    John Catstimatidis, Jr.<br>
@endif
