<!-- Eta Class -->
<h3>Eta Class</h3>

<!-- Andrew Begay -->
@if($brothers->where('seo', 'AndrewBegay')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'AndrewBegay')->first()->seoExternal}}/">Andrew Begay</a><br>
@else
    Andrew Begay<br>
@endif

<!-- Daehan Kim -->
@if($brothers->where('seo', 'DaehanKim')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'DaehanKim')->first()->seoExternal}}/">Daehan Kim</a><br>
@else
    Daehan Kim<br>
@endif

<!-- Thomas K. Maher -->
@if($brothers->where('seo', 'ThomasMaher')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'ThomasMaher')->first()->seoExternal}}/">Thomas K. Maher</a><br>
@else
    Thomas K. Maher<br>
@endif

<!-- Richard Samuels -->
@if($brothers->where('seo', 'RichardSamuels')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'RichardSamuels')->first()->seoExternal}}/">Richard Samuels</a><br>
@else
    Richard Samuels<br>
@endif

<!-- Sukhgewanpreet Singh -->
@if($brothers->where('seo', 'SukhgewanpreetSingh')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'SukhgewanpreetSingh')->first()->seoExternal}}/">Sukhgewanpreet Singh</a><br>
@else
    Sukhgewanpreet Singh<br>
@endif

<!-- Sam Tan -->
@if($brothers->where('seo', 'SamTan')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'SamTan')->first()->seoExternal}}/">Sam Tan</a><br>
@else
    Sam Tan<br>
@endif
