<!-- Kappa Class -->
<h3><span>Kappa Class</span></h3>

<!-- Colin Sherman -->
@if($brothers->where('seo', 'ColinSherman')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'ColinSherman')->first()->seoExternal}}/"><span>Colin Sherman</span></a><br>
@else
    Colin Sherman<br>
@endif

<!-- William Gockel-Figge -->
@if($brothers->where('seo', 'WilliamGockel-Figge')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'WilliamGockel-Figge')->first()->seoExternal}}/"><span>William Gockel-Figge</span></a><br>
@else
    William Gockel-Figge<br>
@endif
