<!-- Iota Class -->
<h3><span>Iota Class</span></h3>

<!-- Carron Barboza -->
@if($brothers->where('seo', 'CarronBarboza')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'CarronBarboza')->first()->seoExternal}}/"><span>Carron Barboza</span></a><br>
@else
    Carron Barboza<br>
@endif

<!-- Jason Yao -->
@if($brothers->where('seo', 'JasonYao')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JasonYao')->first()->seoExternal}}/"><span>Jason Yao</span></a><br>
@else
    Jason Yao<br>
@endif

<!-- Vincent Xu -->
@if($brothers->where('seo', 'VincentXu')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'VincentXu')->first()->seoExternal}}/"><span>Vincent Xu</span></a><br>
@else
    Vincent Xu<br>
@endif
