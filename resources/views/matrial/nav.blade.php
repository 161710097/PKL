<div class="header-w3layouts" id="home">
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1><a class="navbar-brand" href="index.html">Food-Land</a></h1>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav navbar-right">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="hidden"><a class="page-scroll" href="#page-top"></a> </li>
					<li><a class="page-scroll scroll" href="#home">Home</a></li>
					<li><a class="page-scroll scroll" href="#menu">Barang</a></li>
					<li><a class="page-scroll scroll" href="#contact">Pinjam Barang</a></li>
					<li><a class="page-scroll scroll" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">LogOut</a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                                 </li>
				</ul>
			</div>

			<!-- /.navbar-collapse -->
		</nav>
	</div>