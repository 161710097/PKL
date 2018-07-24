<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Food-Land a Hotels Category Flat Bootstrap Responsive web Template | Home :: w3layouts</title>
	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Food-Land Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!--//meta tags ends here-->
	<!--booststrap-->
	<link href="{{asset('member/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="{{asset('member/css/font-awesome.min.css')}}" />
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="{{asset('member/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop-ups-->
	<link rel="stylesheet" type="text/css" href="{{asset('member/css/easy-responsive-tabs.css')}} " />
	<!--tabs-->
	<!-- Owl-carousel-CSS -->
	<link href="{{asset('member/css/owl.carousel.css')}}" rel="stylesheet">
	<link href="{{asset('member/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
	<link href="{{asset('member/fonts.googleapis.com/css?family=Dosis:400,500,600')}}" rel="stylesheet">
	<!--//style sheet end here-->
</head>
<style type="text/css">
	div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
</style>



<body>
	@include('matrial.nav')
	<!-- //header -->
	<!--Slider-->
	<div class="slider">
		<div class="callbacks_container w3l">
			<ul class="rslides" id="slider">
				<li>
					<div class="slider-img w3-oneimg">
					</div>
					<div class="slider-info">
						<h4>Lorem ipsum amet</h4>
						<p>Lorem ipsum dolor sit ctetur adiping</p>
						<div class="w3layouts_more-buttn">
							<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
						</div>

					</div>
				</li>
				<li>
					<div class="slider-img w3-twoimg">
					</div>
					<div class="slider-info">
						<h4>Dolor sit hatant morbi </h4>
						<p>Quis autem vel eum iure reprehderit.</p>
						<div class="w3layouts_more-buttn">
							<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
						</div>
					</div>
				</li>
				<li>
					<div class="slider-img w3-threeimg">
					</div>
					<div class="slider-info">
						<h4>Quis autem ve eum iure</h4>
						<p>Excepteur sint ocecat proident,deseru.</p>
						<div class="w3layouts_more-buttn">
							<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
						</div>
					</div>
				</li>
				<li>
					<div class="slider-img w3-fourimg">
					</div>
					<div class="slider-info">
						<h4>Voluptate velit esse</h4>
						<p>Quis autem velrepreht quiea.eum</p>
						<div class="w3layouts_more-buttn">
							<a href="#" data-toggle="modal" data-target="#myModal">Read More</a>
						</div>
					</div>
				</li>

			</ul>

		</div>
		<div class="clearfix"></div>
	</div>
	<!--//Slider-->
	<!-- modal-about -->
	<div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body modal-spa">
					<img src="images/g2.jpg" class="img-responsive" alt="" />
					<div class="modal-w3lstext">
						<h4>Food-Land</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec
							fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin
							ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis
							enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum
							et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate in. Fusce lacus purus, pulvinar ut lacinia
							id, sagittis eumi.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal-about -->
	<!--about-->
	

	<!--//about-->
	<!-- services -->
	
	<!-- //services -->
	<!--gallery-->
	<!-- menu-form -->
	<div class="menu-form " id="menu">
		<div class="container">	
			<h3>Barang</h3>
			<div></div>
    			<img src="{{asset('member/images/b1.jpg')}}" alt="Cinque Terre" width="300" height="200">
			
		</div>
		<div class="container">	
			<div></div>
    			<img src="{{asset('member/images/b1.jpg')}}" alt="Cinque Terre" width="300" height="200">
			
		</div>
		<div class="clearfix"> </div>
	</div>
	<!-- //menu-form -->
	
	<!--//video-->
	<!-- agile_testimonials -->
	<div class="team " id="team">
		<div class="container">
			<h3 class="title team1">Our Chefs</h3>
			<div class="agile_wthree_inner_grids">
				<div class="test-gri1">
					<div id="owl-demo2" class="owl-carousel">
						<div class="agile">
							<div class="test-grid">
								<div class="col-md-9 test-grid1">

									<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit,consectetur adipiscing elit, sed do eiusmod tempor incididunt
										ut labore et dolore magna aliqua sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
										minim veniam, quis. Lorem ipsum dolor .</p>
									<h4>lia west</h4>
									<ul>
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-rss"></span></a></li>
									</ul>
								</div>
								<div class="col-md-3 test-grid2">
									<img src="images/t1.jpg" alt="" class="img-r">
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="agile">
							<div class="test-grid">
								<div class="col-md-9 test-grid1">

									<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit,consectetur adipiscing elit, sed do eiusmod tempor incididunt
										ut labore et dolore magna aliqua sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
										minim veniam, quis. Lorem ipsum dolor.</p>
									<h4>Harry son</h4>
									<ul>
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-rss"></span></a></li>
									</ul>
								</div>
								<div class="col-md-3 test-grid2">
									<img src="images/t2.jpg" alt="" class="img-r">
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="agile">
							<div class="test-grid">
								<div class="col-md-9 test-grid1">

									<p class="para-w3-agile">Lorem ipsum dolor sit amet, consectetur adipiscing elit,consectetur adipiscing elit, sed do eiusmod tempor incididunt
										ut labore et dolore magna aliqua sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
										minim veniam, quis. Lorem ipsum dolor .</p>
									<h4>Williams</h4>
									<ul>
										<li><a href="#"><span class="fa fa-facebook"></span></a></li>
										<li><a href="#"><span class="fa fa-twitter"></span></a></li>
										<li><a href="#"><span class="fa fa-rss"></span></a></li>
									</ul>
								</div>
								<div class="col-md-3 test-grid2">
									<img src="images/t3.jpg" alt="" class="img-r">
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //agile_testimonials -->
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="title">Contact</h3>

			<div class="col-md-6 matter">
				<div class="para-left">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
						dummy text the printing and typesetting industry.
					</p>
				</div>
				<div class="addres">
					<p><span class="fa fa-map-marker icons-left" aria-hidden="true"></span>Thit sar,Magway zarmani,</p>
					<p><span class="fa fa-map-marker icons-left" aria-hidden="true"></span>Myanmar of Burma.</p>
				</div>
				<div class="email-us">
					<p><span class="fa fa-envelope icons-left" aria-hidden="true"></span><a href="mailto:mail@example.com" class="info">info@mail.com</a></p>
					<p><span class="fa fa-envelope icons-left" aria-hidden="true"></span><a href="mailto:mail@example.com" class="info">info@example.com</a></p>
				</div>
				<div class="tele">
					<p><span class="fa fa-phone icons-left" aria-hidden="true"></span>+1 (112)456-1111</p>
					<p><span class="fa fa-phone icons-left" aria-hidden="true"></span> +1 (112) 562-7114</p>
				</div>
				<div class="icons-butn">
					<span class="fa fa-facebook-square" aria-hidden="true"></span>
					<span class="fa fa-twitter-square" aria-hidden="true"></span>
					<span class="fa fa-google-plus-square" aria-hidden="true"></span>
				</div>
			</div>
			<div class="col-md-6 contact-left">
				<form action="#" method="post">
					<div class="main">
						<div class="form-left-w3l">

							<input type="text" placeholder="Name" name="name" required="">

						</div>
						<div class="form-right-w3ls ">
							<input type="email" class="top-up" name="email" placeholder="Email" required="">
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="form-control-w3l">
						<textarea name="Message" placeholder="Any Message..."></textarea>
					</div>
					<div class="btnn">
						<input type="submit" value="Send">
						<div class="clearfix"></div>
					</div>

				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	@include('matrial.footer')
	<!-- //Footer -->


	<!--menu script-->
	<script type='text/javascript' src="{{asset('member/js/jquery-2.2.3.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('member/js/modernizr-2.6.2.min.js')}}"></script>
	<script src="{{asset('member/js/bootstrap.min.js')}}"></script>
	<!--//menu script-->
	<!-- banner-->
	<script src="{{asset('member/js/responsiveslides.min.js')}}"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!--// banner-->
	<!--About tabs-->
	<script src="{{asset('member/js/easyResponsiveTabs.js')}}"></script>
	<!--Plug-in Initialisation-->
	<script type="text/javascript">
		$(document).ready(function () {

			$('#ChildVerticalTab_1').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true,
				tabidentify: 'ver_1', // The tab groups identifier
				activetab_bg: '#fff', // background color for active tabs in this group
				inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
				active_border_color: '#c1c1c1', // border color for active tabs heads in this group
				active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
			});
		});
	</script>

	<!--//tabs-->
	<!-- OnScroll-Number-Increase-JavaScript -->
	<script src="{{asset('member/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('member/js/jquery.countup.js')}}"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //OnScroll-Number-Increase-JavaScript -->
	<!--//About-->
	<script src="{{asset('member/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pop-up-box video -->
	<!-- requried-jsfiles-for owl -->
	<script src="{{asset('member/js/owl.carousel.js')}}"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo2").owlCarousel({
				items: 1,
				lazyLoad: false,
				autoPlay: true,
				navigation: false,
				navigationText: false,
				pagination: true,
			});
		});
	</script>
	<!-- //requried-jsfiles-for owl -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="{{asset('member/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('member/js/easing.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

		});
	</script>
	<!-- //here ends scrolling icon -->

</body>

</html>