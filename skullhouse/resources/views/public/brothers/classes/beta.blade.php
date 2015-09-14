<!-- Beta Class -->
<h3>Beta Class</h3>

<!-- Billy Susanto -->
@if($brothers->where('seo', 'BillySusanto')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'BillySusanto')->first()->seoExternal}}/">Billy Susanto</a><br>
@else
    Billy Susanto<br>
@endif

<!-- Brian Mahoney -->
@if($brothers->where('seo', 'BrianMahoney')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'BrianMahoney')->first()->seoExternal}}/">Brian Mahoney</a><br>
@else
    Brian Mahoney<br>
@endif

<!-- Jerry Li -->
@if($brothers->where('seo', 'JerryLi')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JerryLi')->first()->seoExternal}}/">Jerry Li</a><br>
@else
    Jerry Li<br>
@endif

<!-- Jordan Elysée -->
@if($brothers->where('seo', 'JordanElysee')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JordanElysee')->first()->seoExternal}}/">Jordan Elysée</a><br>
@else
    Jordan Elysée<br>
@endif

<!-- Roy Chin -->
@if($brothers->where('seo', 'RoyChin')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'RoyChin')->first()->seoExternal}}/">Roy Chin</a><br>
@else
    Roy Chin<br>
@endif
