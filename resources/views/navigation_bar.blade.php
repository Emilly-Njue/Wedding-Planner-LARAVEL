<!DOCTYPE html>
<html lang="en">
<head>
    <!-- 1. Icons -->
    <script src="https://kit.fontawesome.com/ce7a381eed.js" crossorigin="anonymous"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Lobster&display=swap" rel="stylesheet">

     <!-- 4. Bootstrap 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Wedding-Planner</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}"/>

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}"/>

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}"/>

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/themify-icons.css')}}"/>

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/prettyPhoto.css')}}">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/shortcodes.css')}}"/>

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"/>

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/megamenu.css')}}"/>

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}"/>

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel='stylesheet' id='rs-plugin-settings-css' href="{{asset('revolution/css/rs6.css')}}"> 

</head>


<body>
    <div class="page">
        <header id="masthead" class="header ttm-header-style-01" >
            <div id="site-header-menu" class="site-header-menu ttm-bgcolor-darkgrey">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <!--site-navigation-->
                        <div class="site-navigation d-flex flex-row align-items-center" >
                            <!--site-branding-->
                            <div class="site-branding">
                                <a class="home-link" href="#" title="wedco" rel="home">
                                    <img id="logo-img" class="img-center standardlogo" src="{{asset('images/logo-img.png')}}" alt="logo-img">
                                    <img id="logo-dark" class="img-center stickylogo" src="{{asset('images/logo-dark.png')}}" alt="logo-img">
                                </a>
                            </div><!--site-branding end-->
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box">
                                    <span class="menubar-inner"></span>
                                </span>
                            </div>
                            <!--menu-->
                            <nav class="main-menu menu-mobile ml-auto" id="menu">
                                <ul class="menu">
                                    <li class="mega-menu-item">
                                        <a href="/" class="mega-menu-link">Home</a>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="#" class="mega-menu-link">Pages</a>
                                        <ul class="mega-submenu">
                                            <li><a href="about-us-2.html">About Us</a></li>
                                            <li><a href="{{ route('services') }}">Services</a></li>
                                            <li><a href="our-team.html">Our Team</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="{{ route('services') }}" class="mega-menu-link">Services</a>
                                        <ul class="mega-submenu">
                                            <li><a href="{{ route('decoration') }}">Lovely Decoration</a></li>
                                            <li><a href="{{ route('music') }}">Live Music & Dj</a></li>
                                            <li><a href="{{ route('food') }}">Dinner & Drinks</a></li>
                                            <li><a href="{{ route('seating') }}">Seating Chart</a></li>
                                            <li><a href="{{ route('sourcing') }}">Responsible Sourcing</a></li>
                                            <li><a href="{{ route('costume') }}">Costume Services</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <a href="{{ route('portfolio') }}" class="mega-menu-link">Portfolio</a>
                                    </li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </nav>
                            <div class="header_extra d-flex flex-row align-items-center justify-content-end ">
                                <div class="header_search">
                                    <a href="#" class="btn-default search_btn"><i class="ti ti-search"></i></a>
                                    <div class="header_search_content">
                                        <form id="searchbox" method="get" action="#">
                                            <input class="search_query" type="text" id="search_query_top" name="s" placeholder="Enter Keyword" value="">
                                            <button type="submit" class="btn close-search"><i class="ti ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div><!--site-navigation end-->
                    </div>
                </div>
            </div>
        </header>
        <!--header end-->


        <main>
            @yield('content')
        </main>

        <!--footer start-->
        <footer class="footer widget-footer clearfix">
            <div class="first-footer">
                <div class="container" >
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="first-footer-inner">
                                <div class="footer-logo">
                                    <img id="footer-logo-img" class="img-center" src="{{asset('images/footer-logo.png')}}" alt="">
                                </div>
                                <div class="row no-gutters footer-box">
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Our Address</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Evanto HQ 24 Karen, Nairobi, Kenya</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Talk To Expert</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>+25474 567 8910 or +25474 567 8911</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Email Us</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>example@yourdomain.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 widget-area">
                            <div class="widget widget_text  clearfix">
                                <h3 class="widget-title">About WedCo</h3>
                                <div class="textwidget widget-text">We’ve delivered fabulous wedding event experiences over the last two decades and are now poised to chart out a whole new growth story. We hosted for reputed company<br><br>
                                </div>
                                <div class="social-icons circle social-hover">
                                        <ul class="list-inline">
                                            <li class="social-facebook">
                                                <a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="social-twitter">
                                                <a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="social-flickr">
                                                <a class=" tooltip-top" target="_blank" href="#" data-tooltip="Flickr">
                                                    <i class="fa fa-flickr" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="social-linkedin">
                                                <a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn">
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_nav_menu clearfix">
                                <h3 class="widget-title">Wedding Planner Faqs</h3>
                                <ul class="menu-footer-services">
                                    <li><a href="#">Why hire a planner ?</a></li>
                                    <li><a href="#">How can i make an appointment ?</a></li>
                                    <li><a href="#">How to choose a venue ?</a></li>
                                    <li><a href="#">Event catalogue ?</a></li>
                                    <li><a href="#">Payment type you accept</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                            <div class="widget flicker_widget clearfix">
                                <h3 class="widget-title">Instagram Gallery</h3>
                                <div class="widget_media_gallery">
                                    <figure class="gallery-item">
                                        <div class="ttm-box-view-overlay">
                                        <img class="img-fluid" src="{{asset('images/gallery/01.jpg')}}" alt="Gallery" title="gallery-img">
                                        <div class="ttm-media-link">
                                            <a class="ttm_prettyphoto ttm_image" title="gallery" data-rel="prettyPhoto" href="{{asset('images/portfolio/01.jpg')}}">
                                                <i class="ti ti-search"></i>
                                            </a>
                                        </div>
                                        </div>
                                    </figure>
                                        <figure class="gallery-item">
                                        <div class="ttm-box-view-overlay">
                                        <img class="img-fluid" src="{{asset('images/gallery/02.jpg')}}" alt="Gallery" title="gallery-img">
                                        <div class="ttm-media-link">
                                            <a class="ttm_prettyphoto ttm_image" title="gallery" data-rel="prettyPhoto" href="{{asset('images/portfolio/05.jpg')}}">
                                                <i class="ti ti-search"></i>
                                            </a>
                                        </div>
                                        </div>
                                    </figure>
                                        <figure class="gallery-item">
                                        <div class="ttm-box-view-overlay">
                                        <img class="img-fluid" src="{{asset('images/gallery/03.jpg')}}" alt="Gallery" title="gallery-img">
                                        <div class="ttm-media-link">
                                            <a class="ttm_prettyphoto ttm_image" title="gallery" data-rel="prettyPhoto" href="{{asset('images/portfolio/02.jpg')}}">
                                                <i class="ti ti-search"></i>
                                            </a>
                                        </div>
                                        </div>
                                    </figure>
                                    <figure class="gallery-item">
                                        <div class="ttm-box-view-overlay">
                                        <img class="img-fluid" src="{{asset('images/gallery/04.jpg')}}" alt="Gallery" title="gallery-img">
                                        <div class="ttm-media-link">
                                            <a class="ttm_prettyphoto ttm_image" title="gallery" data-rel="prettyPhoto" href="{{asset('images/portfolio/10.jpg')}}">
                                                <i class="ti ti-search"></i>
                                            </a>
                                        </div>
                                        </div>
                                    </figure>
                                    <figure class="gallery-item">
                                        <div class="ttm-box-view-overlay">
                                        <img class="img-fluid" src="{{asset('images/gallery/05.jpg')}}" alt="Gallery" title="gallery-img">
                                        <div class="ttm-media-link">
                                            <a class="ttm_prettyphoto ttm_image" title="gallery" data-rel="prettyPhoto" href="{{asset('images/portfolio/03-540x640.jpg')}}">
                                                <i class="ti ti-search"></i>
                                            </a>
                                        </div>
                                        </div>
                                    </figure>
                                        <figure class="gallery-item">
                                        <div class="ttm-box-view-overlay">
                                        <img class="img-fluid" src="{{asset('images/gallery/06.jpg')}}" alt="Gallery" title="gallery-img">
                                        <div class="ttm-media-link">
                                            <a class="ttm_prettyphoto ttm_image" title="gallery" data-rel="prettyPhoto" href="{{asset('images/portfolio/04-770x770.jpg')}}">
                                                <i class="ti ti-search"></i>
                                            </a>
                                        </div>
                                        </div>
                                    </figure>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12">
                            <div class="text-center">
                                <span>Copyright ©2024.&nbsp;All rights reserved&nbsp;<a href="#" target="_blank"></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->


    <!-- Javascript -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/tether.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script> 
    <script src="{{asset('js/jquery.easing.js')}}"></script>    
    <script src="{{asset('js/jquery-waypoints.js')}}"></script>    
    <script src="{{asset('js/jquery-validate.js')}}"></script> 
    <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/numinate.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.min.js')}}"></script>
    <script src="{{asset('js/jquery-isotope.js')}}"></script>
    <script src="{{asset('js/price_range_script.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>


    <!-- Revolution Slider -->
    
    <script src="{{asset('revolution/js/slider.js')}}"></script>

    <script  src="{{asset('revolution/js/revolution.tools.min.js')}}"></script>
    <script  src="{{asset('revolution/js/rs6.min.js')}}"></script>

</body>
</html>