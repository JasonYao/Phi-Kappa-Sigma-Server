<!-- Zeta Class -->
<h3>Zeta Class</h3>

<!-- Charlie Spector -->
@if($brothers->where('seo', 'CharlieSpector')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'CharlieSpector')->first()->seoExternal}}/">Charlie Spector</a><br>
@else
    Charlie Spector<br>
@endif

<!-- Dmitry Petrov -->
@if($brothers->where('seo', 'Dmitry Petrov')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'CharlieSpector')->first()->seoExternal}}/">Dmitry Petrov</a><br>
@else
    Dmitry Petrov<br>
@endif

<!-- Felix Goldmann -->
@if($brothers->where('seo', 'FelixGoldmann')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'FelixGoldmann')->first()->seoExternal}}/">Felix Goldmann</a><br>
@else
    Felix Goldmann<br>
@endif

<!-- Rasmus Hammarberg -->
@if($brothers->where('seo', 'RasmusHammarberg')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'RasmusHammarberg')->first()->seoExternal}}/">Rasmus Hammarberg</a><br>
@else
    Rasmus Hammarberg<br>
@endif

<!-- Robert Gardner -->
@if($brothers->where('seo', 'RobertGardner')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'RobertGardner')->first()->seoExternal}}/">Robert Gardner</a><br>
@else
    Robert Gardner<br>
@endif

<!-- Shreyas Muzumdar -->
@if($brothers->where('seo', 'ShreyasMuzumdar')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'ShreyasMuzumdar')->first()->seoExternal}}/">Shreyas Muzumdar</a><br>
@else
    Shreyas Muzumdar<br>
@endif

<!-- Warren Ersly -->
@if($brothers->where('seo', 'WarrenErsly')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'WarrenErsly')->first()->seoExternal}}/">Warren Ersly</a><br>
@else
    Warren Ersly<br>
@endif

<!-- Woodrow Dismukes -->
@if($brothers->where('seo', 'WoodrowDismukes')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'WoodrowDismukes')->first()->seoExternal}}/">Woodrow Dismukes</a><br>
@else
    Woodrow Dismukes<br>
@endif
