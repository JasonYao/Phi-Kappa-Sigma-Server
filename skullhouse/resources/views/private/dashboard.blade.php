@extends('public.carouselBase')

@section('css')
	@include('includes.partials.css.forms')
@overwrite

@section('text')

	<h1><span>{{$brother->firstName . "'s"}} Dashboard</span></h1>
	<hr>

	<p><span>Once a Phi Kap, Always a Phi Kap</span></p>

	@if($brother->confirmationCode === "1")
		<p>We'd love to keep everyone up to date on your most recent success.</p>
		<p>The links below will allow you to view or update your publicly available biography on the Brothers page.</p>
        <p>View your profile <a href="/profile/"><span>here</span></a>.</p>
        <p>Update your profile information <a href="/profile/update/"><span>here</span></a></p>

        <p>Reset your account password <a href="/password/email/"><span>here</span></a></p>
        <p>To log out, click <a href="/logout/"><span>here</span></a>.</p>
	@elseif($brother->confirmationCode === NULL)
		<p>
			In order to verify your identity, click <a href="/PhiKap/{{$brother->email . '/'}}">here</a> to be sent an email with a challenge- please respond correctly to this email with the correct response.
			If the correct response is not given, your account will be locked.
			For any issues with this, please:
		</p>

		<p>
			<span id="obf"><script>document.getElementById("obf").innerHTML="<n uers=\"znvygb:Bzrtn@fxhyyubhfr.alp?fhowrpg=Nppbhag Npgvingvba\" gnetrg=\"_oynax\">Pbagnpg guvf fvgr'f nqzvavfgengbe</n>".replace(/[a-zA-Z]/g,function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);});document.body.appendChild(eo);</script>
			<noscript><span style="unicode-bidi:bidi-override;direction:rtl;">cyn.esuohlluks@agemO</span></noscript></span>
		</p>

		<p>Reset your account password <a href="/password/email/"><span>here</span></a></p>
		<p>To log out, click <a href="/logout/"><span>here</span></a>.</p>
	@else
		<p>Please check your email and click on the confirmation email to gain access to account editing features.</p>
		<p>Please note: you'll need to <a href="/logout/"><span>logout</span></a> before clicking the confirmation email</p>
	@endif
@endsection
