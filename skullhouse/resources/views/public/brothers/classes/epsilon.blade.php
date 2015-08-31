<!-- Epsilon Class -->
<h3>Epsilon Class</h3>

<!-- Britton T. Burdick -->
@if($brothers->where('seo', 'BrittonBurdick')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'BrittonBurdick')->first()->seoExternal}}/">Britton T. Burdick</a><br>
@else
    Britton T. Burdick<br>
@endif

<!-- Derek Meitzer -->
@if($brothers->where('seo', 'Derek Meitzer')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'Derek Meitzer')->first()->seoExternal}}/">Derek Meitzer</a><br>
@else
    Derek Meitzer<br>
@endif

<!-- Johnathan Hamiter -->
@if($brothers->where('seo', 'JohnathanHamiter')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JohnathanHamiter')->first()->seoExternal}}/">Johnathan Hamiter</a><br>
@else
    Johnathan Hamiter<br>
@endif

<!-- Jonathan Kirsh -->
@if($brothers->where('seo', 'JonathanKirsh')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JonathanKirsh')->first()->seoExternal}}/">Jonathan Kirsh</a><br>
@else
    Jonathan Kirsh<br>
@endif
