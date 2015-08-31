<!-- Alpha Class -->
<h3><span>Alpha Class</span></h3>

<!-- Minh Le -->
@if($brothers->where('seo', 'MinhLe')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'MinhLe')->first()->seoExternal}}/"><span>Minh Le</span></a><br>
@else
    Minh Le<br>
@endif

<!-- William Cromarty -->
@if($brothers->where('seo', 'WilliamCromarty')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'WilliamCromarty')->first()->seoExternal}}/"><span>William Cromarty</span></a><br>
@else
    William Cromarty<br>
@endif
