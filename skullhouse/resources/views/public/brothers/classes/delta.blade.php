<!-- Delta Class -->
<h3>Delta Class</h3>

<!-- Aditya Chintapalli -->
@if($brothers->where('seo', 'AdityaChintapalli')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'AdityaChintapalli')->first()->seoExternal}}/">Aditya Chintapalli</a><br>
@else
    Aditya Chintapalli<br>
@endif

<!-- Jacob Frieling -->
@if($brothers->where('seo', 'JacobFrieling')->first() !== NULL)
    <a href="/brothers/{{$brothers->where('seo', 'JacobFrieling')->first()->seoExternal}}/">Jacob Frieling</a><br>
@else
    Jacob Frieling<br>
@endif
