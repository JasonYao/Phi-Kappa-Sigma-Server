<!-- Alpha Class -->
<h3>Alpha Class</h3>

<!-- Minh Le -->
@if($brothers->where('seo', 'MinhLe')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'MinhLe')->first()->seoExternal}}/">Minh Le</a><br>
@else
    Minh Le<br>
@endif

<!-- William Cromarty -->
@if($brothers->where('seo', 'WilliamCromarty')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'WilliamCromarty')->first()->seoExternal}}/">William Cromarty</a><br>
@else
    William Cromarty<br>
@endif
