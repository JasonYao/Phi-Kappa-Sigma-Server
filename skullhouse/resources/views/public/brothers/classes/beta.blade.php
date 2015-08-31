<!-- Beta Class -->
<h3><span>Beta Class</span></h3>

<!-- Billy Susanto -->
@if($brothers->where('seo', 'BillySusanto')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'BillySusanto')->first()->seoExternal}}/"><span>Billy Susanto</span></a><br>
@else
    Billy Susanto<br>
@endif

<!-- Brian Mahoney -->
@if($brothers->where('seo', 'BrianMahoney')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'BrianMahoney')->first()->seoExternal}}/"><span>Brian Mahoney</span></a><br>
@else
    Brian Mahoney<br>
@endif

<!-- Jerry Li -->
@if($brothers->where('seo', 'JerryLi')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JerryLi')->first()->seoExternal}}/"><span>Jerry Li</span></a><br>
@else
    Jerry Li<br>
@endif

<!-- Jordan Elysée -->
@if($brothers->where('seo', 'JordanElysée')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JordanElysée')->first()->seoExternal}}/"><span>Jordan Elysée</span></a><br>
@else
    Jordan Elysée<br>
@endif

<!-- Roy Chin -->
@if($brothers->where('seo', 'RoyChin')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'RoyChin')->first()->seoExternal}}/"><span>Roy Chin</span></a><br>
@else
    Roy Chin<br>
@endif
