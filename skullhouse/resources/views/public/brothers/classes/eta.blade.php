<!-- Eta Class -->
<h3><span>Eta Class</span></h3>

<!-- Andrew Begay -->
@if($brothers->where('seo', 'AndrewBegay')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'AndrewBegay')->first()->seoExternal}}/"><span>Andrew Begay</span></a><br>
@else
    Andrew Begay<br>
@endif

<!-- Daehan Kim -->
@if($brothers->where('seo', 'DaehanKim')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'DaehanKim')->first()->seoExternal}}/"><span>Daehan Kim</span></a><br>
@else
    Daehan Kim<br>
@endif

<!-- Thomas K. Maher -->
@if($brothers->where('seo', 'ThomasMaher')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'ThomasMaher')->first()->seoExternal}}/"><span>Thomas K. Maher</span></a><br>
@else
    Thomas K. Maher<br>
@endif

<!-- Richard Samuels -->
@if($brothers->where('seo', 'RichardSamuels')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'RichardSamuels')->first()->seoExternal}}/"><span>Richard Samuels</span></a><br>
@else
    Richard Samuels<br>
@endif

<!-- Sukhgewanpreet Singh -->
@if($brothers->where('seo', 'SukhgewanpreetSingh')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'SukhgewanpreetSingh')->first()->seoExternal}}/"><span>Sukhgewanpreet Singh</span></a><br>
@else
    Sukhgewanpreet Singh<br>
@endif

<!-- Sam Tan -->
@if($brothers->where('seo', 'SamTan')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'SamTan')->first()->seoExternal}}/"><span>Sam Tan</span></a><br>
@else
    Sam Tan<br>
@endif
