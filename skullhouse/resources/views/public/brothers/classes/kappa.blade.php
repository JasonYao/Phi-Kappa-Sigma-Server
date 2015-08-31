<!-- Kappa Class -->
<h3>Kappa Class</h3>

<!-- Colin Sherman -->
@if($brothers->where('seo', 'ColinSherman')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'ColinSherman')->first()->seoExternal}}/">Colin Sherman</a><br>
@else
    Colin Sherman<br>
@endif

<!-- William Gockel-Figge -->
@if($brothers->where('seo', 'WilliamGockel-Figge')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'WilliamGockel-Figge')->first()->seoExternal}}/">William Gockel-Figge</a><br>
@else
    William Gockel-Figge<br>
@endif
