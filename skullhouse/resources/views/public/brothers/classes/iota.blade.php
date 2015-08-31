<!-- Iota Class -->
<h3>Iota Class</h3>

<!-- Carron Barboza -->
@if($brothers->where('seo', 'CarronBarboza')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'CarronBarboza')->first()->seoExternal}}/">Carron Barboza</a><br>
@else
    Carron Barboza<br>
@endif

<!-- Jason Yao -->
@if($brothers->where('seo', 'JasonYao')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JasonYao')->first()->seoExternal}}/">Jason Yao</a><br>
@else
    Jason Yao<br>
@endif

<!-- Vincent Xu -->
@if($brothers->where('seo', 'VincentXu')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'VincentXu')->first()->seoExternal}}/">Vincent Xu</a><br>
@else
    Vincent Xu<br>
@endif
