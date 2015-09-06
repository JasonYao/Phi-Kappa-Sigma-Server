<!-- Navigation -->
    <nav id="nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>


                <!-- Centre navbar -->
                <div class="navbar-center navbar-brand">
                	<a class="navbar-brand" href="/">
                		<img id="navbar-title-banner" src="/assets/img/navbar/header.png">
                	</a>
                </div>

            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar">
               <!-- Left-side of navbar -->
          		<ul class="nav navbar-nav navbar-left">
          		  <li class="{{ Request::is('vision') ? 'live' : '' }}"><a href="/vision/">Vision</a></li>

					<!-- About us information -->
					<li class="dropdown">
                    	<a href="/about/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							About us
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="{{ Request::is('about') ? 'live' : '' }}"><a href="/about/">Who We Are</a></li>
							<li class="{{ Request::is('core-values') ? 'live' : '' }}"><a href="/core-values/">Core Values</a></li>
							<li class="{{ Request::is('public-mottos') ? 'live' : '' }}"><a href="/public-mottos/">Public Mottos</a></li>
						</ul>
					</li>
					<!-- End of about us information -->

          		  <li class="{{ Request::is('events') ? 'live' : '' }}"><a href="/events/">Events</a></li>
          		</ul>

          		<!-- Right-side of navbar -->
          		<ul class="nav navbar-nav navbar-right">

					<!-- Membership information -->
                    <li class="dropdown">
                        <a href="/membership/recruitment/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Membership
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
								<li class="{{ Request::is('membership/recruitment') ? 'live' : '' }}"><a href="/membership/recruitment/">Recruitment</a></li>
	                            <li class="{{ Request::is('membership/expectations') ? 'live' : '' }}"><a href="/membership/expectations/">Expectations</a></li>
								<li class="{{ Request::is('membership/faqs') ? 'live' : '' }}"><a href="/membership/faqs/">FAQs</a></li>

								<hr>
								@if (Auth::check())
									<li class="{{ Request::is('dashboard') ? 'live' : '' }}"><a href="/dashboard/">{{Auth::user()->firstName . "'s Dashboard"}}</a></li>
									<li class="{{ Request::is('logout') ? 'live' : '' }}"><a href="/logout/">Logout</a></li>
								@else
									<li class="{{ Request::is('login') ? 'live' : '' }}"><a href="/login/">Login</a></li>
									<li class="{{ Request::is('register') ? 'live' : '' }}"><a href="/register/">Registration</a></li>
								@endif
						</ul>
                    </li>
                    <!-- End of membership information -->
            		<li class="{{ Request::is('brothers') ? 'live' : '' }}"><a href="/brothers/">Brothers</a></li>
            		<li class="{{ Request::is('contact') ? 'live' : '' }}"><a href="/contact/">Contact Us</a></li>
          		</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
