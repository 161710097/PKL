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

<body>
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
                    @if (Route::has('login'))
                    <li class="hidden"><a class="page-scroll" href="#page-top"></a> </li>
                    <li>
                        @if (Auth::check())
                        <a  href="{{ url('/home') }}">Home</a>
                         @else
                    </li>
                    <li><a  href="{{ url('/login') }}">Login</a></li>
                    <li><a class="page-scroll scroll" href="{{ url('/register') }}">Register</a></li>
                     @endif
                     @endif
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>

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

                    </div>
                </li>
                <li>
                    <div class="slider-img w3-twoimg">
                    </div>
                    <div class="slider-info">
                        <h4>Dolor sit hatant morbi </h4>
                        <p>Quis autem vel eum iure reprehderit.</p>
                    </div>
                </li>
                <li>
                    <div class="slider-img w3-threeimg">
                    </div>
                    <div class="slider-info">
                        <h4>Quis autem ve eum iure</h4>
                        <p>Excepteur sint ocecat proident,deseru.</p>
                    </div>
                </li>
                <li>
                    <div class="slider-img w3-fourimg">
                    </div>
                    <div class="slider-info">
                        <h4>Voluptate velit esse</h4>
                        <p>Quis autem velrepreht quiea.eum</p>
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