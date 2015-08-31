<!-- Delta Class -->
<h3><span>Delta Class</span></h3>

<!-- Aditya Chintapalli -->
@if($brothers->where('seo', 'AdityaChintapalli')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'AdityaChintapalli')->first()->seoExternal}}/"><span>Aditya Chintapalli</span></a><br>
@else
    Aditya Chintapalli<br>
@endif

<!-- Jacob Frieling -->
@if($brothers->where('seo', 'JacobFrieling')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JacobFrieling')->first()->seoExternal}}/"><span>Jacob Frieling</span></a><br>
@else
    Jacob Frieling<br>
@endif
