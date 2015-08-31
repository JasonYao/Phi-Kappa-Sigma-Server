<!-- Zeta Class -->
<h3><span>Zeta Class</span></h3>

<!-- Charlie Spector -->
@if($brothers->where('seo', 'CharlieSpector')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'CharlieSpector')->first()->seoExternal}}/"><span>Charlie Spector</span></a><br>
@else
    Charlie Spector<br>
@endif

<!-- Dmitry Petrov -->
@if($brothers->where('seo', 'Dmitry Petrov')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'CharlieSpector')->first()->seoExternal}}/"><span>Dmitry Petrov</span></a><br>
@else
    Dmitry Petrov<br>
@endif

<!-- Felix Goldmann -->
@if($brothers->where('seo', 'FelixGoldmann')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'FelixGoldmann')->first()->seoExternal}}/"><span>Felix Goldmann</span></a><br>
@else
    Felix Goldmann<br>
@endif

<!-- Rasmus Hammarberg -->
@if($brothers->where('seo', 'RasmusHammarberg')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'RasmusHammarberg')->first()->seoExternal}}/"><span>Rasmus Hammarberg</span></a><br>
@else
    Rasmus Hammarberg<br>
@endif

<!-- Robert Gardner -->
@if($brothers->where('seo', 'RobertGardner')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'RobertGardner')->first()->seoExternal}}/"><span>Robert Gardner</span></a><br>
@else
    Robert Gardner<br>
@endif

<!-- Shreyas Muzumdar -->
@if($brothers->where('seo', 'ShreyasMuzumdar')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'ShreyasMuzumdar')->first()->seoExternal}}/"><span>Shreyas Muzumdar</span></a><br>
@else
    Shreyas Muzumdar<br>
@endif

<!-- Warren Ersly -->
@if($brothers->where('seo', 'WarrenErsly')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'WarrenErsly')->first()->seoExternal}}/"><span>Warren Ersly</span></a><br>
@else
    Warren Ersly<br>
@endif

<!-- Woodrow Dismukes -->
@if($brothers->where('seo', 'WoodrowDismukes')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'WoodrowDismukes')->first()->seoExternal}}/"><span>Woodrow Dismukes</span></a><br>
@else
    Woodrow Dismukes<br>
@endif
