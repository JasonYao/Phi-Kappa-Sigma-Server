<!-- Theta Class -->
<h3>Theta Class</h3>

<!-- Alexander J. Shapiro -->
@if($brothers->where('seo', 'AlexanderShapiro')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'AlexanderShapiro')->first()->seoExternal}}/">Alexander J. Shapiro</a><br>
@else
    Alexander J. Shapiro<br>
@endif

<!-- Brian J. Hajjar -->
@if($brothers->where('seo', 'BrianHajjar')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'BrianHajjar')->first()->seoExternal}}/">Brian J. Hajjar</a><br>
@else
    Brian J. Hajjar<br>
@endif

<!-- Chris Chen -->
@if($brothers->where('seo', 'ChrisChen')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'ChrisChen')->first()->seoExternal}}/">Chris Chen</a><br>
@else
    Chris Chen<br>
@endif

<!-- Matthew Hammen -->
@if($brothers->where('seo', 'MatthewHammen')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'MatthewHammen')->first()->seoExternal}}/">Matthew Hammen</a><br>
@else
    Matthew Hammen<br>
@endif
