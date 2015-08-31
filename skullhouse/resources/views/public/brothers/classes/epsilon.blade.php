<!-- Epsilon Class -->
<h3><span>Epsilon Class</span></h3>

<!-- Britton T. Burdick -->
@if($brothers->where('seo', 'BrittonBurdick')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'BrittonBurdick')->first()->seoExternal}}/"><span>Britton T. Burdick</span></a><br>
@else
    Britton T. Burdick<br>
@endif

<!-- Derek Meitzer -->
@if($brothers->where('seo', 'Derek Meitzer')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'Derek Meitzer')->first()->seoExternal}}/"><span>Derek Meitzer</span></a><br>
@else
    Derek Meitzer<br>
@endif

<!-- Johnathan Hamiter -->
@if($brothers->where('seo', 'JohnathanHamiter')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JohnathanHamiter')->first()->seoExternal}}/"><span>Johnathan Hamiter</span></a><br>
@else
    Johnathan Hamiter<br>
@endif

<!-- Jonathan Kirsh -->
@if($brothers->where('seo', 'JonathanKirsh')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JonathanKirsh')->first()->seoExternal}}/"><span>Jonathan Kirsh</span></a><br>
@else
    Jonathan Kirsh<br>
@endif
