<!-- Theta Class -->
<h3><span>Theta Class</span></h3>

<!-- Alexander J. Shapiro -->
@if($brothers->where('seo', 'AlexanderShapiro')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'AlexanderShapiro')->first()->seoExternal}}/"><span>Alexander J. Shapiro</span></a><br>
@else
    Alexander J. Shapiro<br>
@endif

<!-- Brian J. Hajjar -->
@if($brothers->where('seo', 'BrianHajjar')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'BrianHajjar')->first()->seoExternal}}/"><span>Brian J. Hajjar</span></a><br>
@else
    Brian J. Hajjar<br>
@endif

<!-- Chris Chen -->
@if($brothers->where('seo', 'ChrisChen')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'ChrisChen')->first()->seoExternal}}/"><span>Chris Chen</span></a><br>
@else
    Chris Chen<br>
@endif

<!-- Matthew Hammen -->
@if($brothers->where('seo', 'MatthewHammen')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'MatthewHammen')->first()->seoExternal}}/"><span>Matthew Hammen</span></a><br>
@else
    Matthew Hammen<br>
@endif
