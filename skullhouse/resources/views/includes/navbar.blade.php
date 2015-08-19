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

          		  <li class="{{ Request::is('rush') ? 'live' : '' }}"><a href="/rush/">Rush</a></li>
          		</ul>

          		<!-- Right-side of navbar -->
          		<ul class="nav navbar-nav navbar-right">
            		<li class="{{ Request::is('membership') ? 'live' : '' }}"><a href="/membership/">Membership</a></li>
            		<li class="{{ Request::is('events') ? 'live' : '' }}"><a href="/events/">Events</a></li>
            		<li class="{{ Request::is('contact') ? 'live' : '' }}"><a href="/contact/">Contact Us</a></li>
          		</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
