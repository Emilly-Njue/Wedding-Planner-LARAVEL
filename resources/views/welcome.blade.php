@extends('navigation_bar')
@section('content')
    <!--START REVOLUTION SLIDER -->
    <rs-module-wrap id="rev_slider_4_1_wrapper" data-source="gallery">
        <rs-module id="rev_slider_4_1" data-version="6.1.2" class="rev_slider_4_1_height">
            <rs-slides>

                <rs-slide data-key="rs-7" data-title="Slide" data-thumb="{{asset('images/slides/slider-mainbg.jpg')}}" data-anim="ei:d;eo:d;s:d;r:0;t:slotzoom-horizontal;sl:d;">

                    <img src="{{asset('images/slides/slider-mainbg.jpg')}}" title="slider-main-img05" width="1920" height="845" class="rev-slidebg" data-no-retina>

                    <a
                        id="slider-3-slide-7-layer-4" 
                        class="rs-layer"
                        href="{{ route('contact-us') }}" target="_self" rel="nofollow"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:c;y:m;yo:195px,195px,122px,70px;"
                        data-text="w:normal;s:19,19,17,17;l:28,28,20,18;fw:700;a:center;"
                        data-padding="t:12;r:45,45,35,30;b:12;l:45,45,35,30;"
                        data-border="bos:solid;boc:#ffffff;bow:1px,1px,1px,1px;bor:3px,3px,3px,3px;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:580;sp:500;sR:580;"
                        data-frame_999="o:0;st:w;sR:7920;"
                        data-frame_hover="bgc:#c78665;boc:#c78665;bor:3px,3px,3px,3px;bos:solid;bow:1px,1px,1px,1px;"
                        style="z-index:12;font-family:Cormorant;"
                    >Contact Us! 
                    </a>

                </rs-slide>

                <rs-slide data-key="rs-6" data-title="Slide" data-thumb="{{asset('images/slides/mainbg-slider.jpg')}}" data-anim="ei:d;eo:d;s:d;r:0;t:slotzoom-horizontal;sl:d;">

                    <img src="{{asset('images/slides/mainbg-slider.jpg')}}" title="slider-main-img06" width="1920" height="845" class="rev-slidebg" data-no-retina>

                    <a
                        id="slider-3-slide-6-layer-4" 
                        class="rs-layer"
                        href="{{ route('services') }}" target="_self" rel="nofollow"
                        data-type="text"
                        data-rsp_ch="on"
                        data-xy="x:0;x:c;y:m;yo:195px,195px,112px,70px;"
                        data-text="w:normal;s:19,19,17,17;l:28,28,20,18;fw:700;a:center;"
                        data-padding="t:12;r:45,45,35,30;b:12;l:45,45,35,30;"
                        data-border="bos:solid;boc:#ffffff;bow:1px,1px,1px,1px;bor:3px,3px,3px,3px;"
                        data-frame_0="y:50,50,31,19;"
                        data-frame_1="st:580;sp:500;sR:580;"
                        data-frame_999="o:0;st:w;sR:7920;"
                        data-frame_hover="bgc:#c78665;boc:#c78665;bor:3px,3px,3px,3px;bos:solid;bow:1px,1px,1px,1px;"
                        style="z-index:12;font-family:Cormorant;"
                    >We Can Help 
                    </a>
                </rs-slide>
            </rs-slides>
        </rs-module>
    </rs-module-wrap>
    <!--END REVOLUTION SLIDER-->

    <!--site-main start-->
    <div class="site-main">

        <!--about-section-->
        <section class="ttm-row about-section clearfix">
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <!--ttm_single_image-wrapper-->
                        <div class="ttm_single_image-wrapper">
                            <img class="img-fluid" src="{{asset('images/img-1.jpg')}}" title="single-img-four" alt="single-img-four">
                        </div><!--ttm_single_image-wrapper end-->
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="pt-15 pl-30 res-991-pt-40 res-991-pl-0">
                            <!--section title-->
                            <div class="section-title">
                                <div class="title-header">
                                    <h2>Welcome To Wedco</h2>
                                    <h5 class="title">The Most Creative Agency</h5>
                                </div>
                                <div class="title-desc">
                                    <p class="white-text">We’ve delivered fabulous wedding event experiences over the last two decades and are now out a whole new growth story.</p>
                                </div>
                            </div><!--section title end-->
                            <div class="pt-5">
                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style4">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-wedding-card"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>We Bring Quality Services</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p class="white-text">Experience in corporate events, hospitality and wedding planning is certain to make your wedding memorable.</p>
                                        </div>
                                    </div>
                                </div><!--featured-icon-box end-->

                                <div class="ttm-horizontal_sep mt-25 mb-30"></div>

                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style4">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-balloons"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Experiance & Talented</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p class="white-text">We assure a wedding that is stress-free, relaxed and with enjoyable & the way a destination wedding should be!</p>
                                        </div>
                                    </div>
                                </div><!--featured-icon-box end-->

                                <div class="ttm-horizontal_sep mt-25 mb-30"></div>

                                <!--featured-icon-box-->
                                <div class="featured-icon-box icon-align-before-content icon-ver_align-top style4">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-wedding-invitation"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Offers 24/7 Quick Support</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p class="white-text">With years of services in the event industry, Wedco is a wedding planner stands on a stronger base with.</p>
                                        </div>
                                    </div>
                                </div><!--featured-icon-box end-->
                            </div>
                        </div>
                    </div>
                </div><!--row end-->
            </div>
        </section>
        <!--about-section end-->


        <!--services-section end-->
        <section class="ttm-row services-section_1 ttm-bgcolor-grey clearfix">
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-7 col-md-10 mx-auto">
                        <!--section title-->
                        <div class="section-title title-style-center_text without-seperator">
                            <div class="title-header">
                                <h5>Our Wedding Services</h5>
                                <h2 class="title">We Provide The Best Services</h2>
                            </div>
                            <div class="title-desc">
                                <p>Our efforts will help to have a better approach to the planning phase, help build a better vision to make it entertaining &amp; memorable</p>
                            </div>
                        </div><!--section title end-->
                    </div>
                </div><!--row end-->
                <!--row-->
                <div class="row row-equal-height">
                    <div class="col-lg-4 col-md-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content style4">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="ttm-num ti-info"></i>
                                    <i class="flaticon flaticon-camera-1"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Photography & video</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Apart from the best ever professional photographer we’re artists, to beautify amazing memories from events!</p>
                                </div>
                            </div>
                        </div><!--featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content style4">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="ttm-num ti-info"></i>
                                    <i class="flaticon flaticon-wedding-rings"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Wedding Registry</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Receive the your wedding gifts are you want from your friends and relatives including cash gifts. Add products </p>
                                </div>
                            </div>
                        </div><!--featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content style4">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="ttm-num ti-info"></i>
                                    <i class="flaticon flaticon-couple"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Wedding Ceremony</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Every wedding has a story to tell. It can be chosen based on your heritage & culture, on your life story!</p>
                                </div>
                            </div>
                        </div><!--featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content style4">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="ttm-num ti-info"></i>
                                    <i class="flaticon flaticon-wine"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Seating Chart</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>There are so many aspects to take it and look into consideration. We know would worry how our guests be treated!</p>
                                </div>
                            </div>
                        </div><!--featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content style4">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="ttm-num ti-info"></i>
                                    <i class="flaticon flaticon-church-1"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Vendor Manager</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>A complete wedding service, including strong focus on vendor selection and management on board hassle free! </p>
                                </div>
                            </div>
                        </div><!--featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content style4">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="ttm-num ti-info"></i>
                                    <i class="flaticon flaticon-romantic-dinner"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>The Perfect Cake</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Food and drinks are very important and integral parts of our Indian weddings. Provide would be able to cater</p>
                                </div>
                            </div>
                        </div><!--featured-icon-box end-->
                    </div>
                </div><!--row end-->
            </div>
        </section>
        <!--services-section end-->

        <!--why-choose-section-->
        <section class="ttm-row why-choose-section clearfix">
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="pt-35 res-991-pt-10">
                            <!--section title-->
                            <div class="section-title">
                                <div class="title-header">
                                    <h3 style="font-style: italic;">Why Choose Us?</h3>
                                    <h5 class="title">The Most Creative Agency</h5>
                                </div>
                                <div class="title-desc">
                                    <p class="white-text">We are creative for flawless execution, WedCo takes pride in being the most preferred <strong>event management</strong> companies all over the world since,1995!</p>
                                </div>
                            </div><!--section title end-->
                            <p class="white-text">We’ve delivered fabulous wedding event experiences over the last two decades and are now poised to chart out a whole new growth story. We have hosted the most great reputed company ever!. We make our best to make your event memorable and Unforgettable</p>
                            <div class="mt-30">
                                <!--ttm-progress-bar-->
                                <div class="ttm-progress-bar" data-percent="85%">
                                    <div class="progressbar-title" style="color: rgb(213, 213, 213);">Decoration</div>
                                    <div class="progress-bar-inner">
                                        <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                    </div>
                                    <div class="progress-bar-percent" data-percentage="85" style="color: rgb(213, 213, 213);">85%</div>
                                </div><!--ttm-progress-bar end-->
                                <!--ttm-progress-bar-->
                                <div class="ttm-progress-bar" data-percent="80%">
                                    <div class="progressbar-title" style="color: rgb(213, 213, 213);">Planing</div>
                                    <div class="progress-bar-inner">
                                        <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                    </div>
                                    <div class="progress-bar-percent" data-percentage="80" style="color: rgb(213, 213, 213);">80%</div>
                                </div><!--ttm-progress-bar end-->
                                <!--ttm-progress-bar-->
                                <div class="ttm-progress-bar" data-percent="92%">
                                    <div class="progressbar-title" style="color: rgb(213, 213, 213);">Catering</div>
                                        <div class="progress-bar-inner">
                                            <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                        </div>
                                    <div class="progress-bar-percent" data-percentage="92" style="color: rgb(213, 213, 213);">92%</div>
                                </div><!--ttm-progress-bar end-->
                                <!--ttm-progress-bar-->
                                <div class="ttm-progress-bar" data-percent="80%">
                                    <div class="progressbar-title" style="color: rgb(213, 213, 213);">Management</div>
                                    <div class="progress-bar-inner">
                                        <div class="progress-bar progress-bar-color-bar_skincolor"></div>
                                    </div>
                                    <div class="progress-bar-percent" data-percentage="80" style="color: rgb(213, 213, 213);">80%</div>
                                </div><!--ttm-progress-bar end-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-8 m-auto">
                        <div class="d-inline-block ml-50 res-991-ml-0">
                            <!--ttm_single_image-wrapper-->
                            <div class="ttm_single_image-wrapper res-991-pt-40">
                                <img class="img-fluid" src="{{asset('images/rings.jpg')}}" alt="single_05">
                            </div>
                            <div class="pt-20 pb-20 pl-50 pr-50 box-shadow d-flex align-items-center justify-content-between">
                                <h5 class="mb-0" style="font-style: italic;">Do You Need Our Help ?</h5>
                                <a class="ttm-btn ttm-btn-size-xs ttm-btn-shape-squar ttm-btn-style-fill ttm-btn-color-skincolor" href="{{ route('contact-us') }}"><i class="ti ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!--row end-->
            </div>
        </section>
        <!--why-choose-section-->


        <!--testimonial-section-->
        <section class="ttm-row testimonial-section ttm-bgcolor-grey ttm-bgimage-yes bg-img5 ttm-bg clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row"><!--row-->
                    <div class="col-lg-12 col-xl-12 col-md-12">
                        <!--section-title-->
                        <div class="section-title clearfix">
                            <div class="title-header">
                                <h5>Wedding Bliss</h5>
                                <h2 class="title" style="font-style: italic;">Featured Weddings Reviews</h2>
                            </div>
                        </div><!--section-title end-->
                    </div>
                </div><!--row end-->
                <!--row-->
                <div class="row slick_slider slick-arrows-style4 text-center" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":true, "autoplay":false, "dots":false, "infinite":true, "responsive":[{"breakpoint":1199,"settings": {"slidesToShow": 3}}, {"breakpoint":992,"settings":{"slidesToShow": 2}},{"breakpoint":620,"settings":{"slidesToShow": 1}}]}'>
                    <div class="col-lg-4">
                        <!--testimonials-->
                        <div class="testimonials style3"> 
                            <div class="testimonial-avatar">
                                <!--testimonials-img-->
                                <div class="testimonial-img">
                                    <img class="img-center" src="{{asset('images/testimonial/01.jpg')}}" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <i class="fa fa-quote-left"></i>
                                <blockquote>From the very beginning, the Wedco team made us feel at ease. They were patient, understanding, and always willing to go the extra mile. We couldn't have asked for a more professional and reliable wedding planner.</blockquote>
                                <div class="testimonial-caption">
                                    <h5>Elina Christopher</h5>
                                    <label>Bride's Mother</label>
                                </div>
                            </div>
                        </div>
                        <!--testimonials end-->
                    </div>
                    <div class="col-lg-4">
                        <!--testimonials-->
                        <div class="testimonials style3"> 
                            <div class="testimonial-avatar">
                                <!--testimonials-img-->
                                <div class="testimonial-img">
                                    <img class="img-center" src="{{asset('images/testimonial/02.jpg')}}" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <i class="fa fa-quote-left"></i>
                                <blockquote>With their expertise and dedication, Wedco transformed our vision into a spectacular wedding celebration that we will cherish forever. Their professionalism and attention to detail were truly remarkable, and we couldn't have asked for a better team to guide us through this special occasion.</blockquote>
                                <div class="testimonial-caption">
                                    <h5>Kimmie Nicholas</h5>
                                    <label>Best Couple</label>
                                </div>
                            </div>
                        </div>
                        <!--testimonials end-->
                    </div>
                    <div class="col-lg-4">
                        <!--testimonials-->
                        <div class="testimonials style3"> 
                            <div class="testimonial-avatar">
                                <!--testimonials-img-->
                                <div class="testimonial-img">
                                    <img class="img-center" src="{{asset('images/testimonial/03.jpg')}}" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <i class="fa fa-quote-left"></i>
                                <blockquote>The Wedco team made our wedding day a dream come true. They were incredibly organized, responsive, and detail-oriented, and they went above and beyond to ensure that everything was perfect. We couldn't have asked for a better team to help us plan our special day.</blockquote>
                                <div class="testimonial-caption">
                                    <h5>Sarah Jones</h5>
                                    <label>Wedding Couple</label>
                                </div>
                            </div>
                        </div>
                        <!--testimonials end-->
                    </div>
                    <div class="col-lg-4">
                        <!--testimonials-->
                        <div class="testimonials style3"> 
                            <div class="testimonial-avatar">
                                <!--testimonials-img-->
                                <div class="testimonial-img">
                                    <img class="img-center" src="{{asset('images/testimonial/04.jpg')}}" alt="testimonial-img">
                                </div>
                            </div>
                            <div class="testimonial-content">
                                <i class="fa fa-quote-left"></i>
                                <blockquote>The Wedco team was an absolute dream to work with! They made our wedding planning process a breeze and took care of everything from the smallest details to the biggest decisions. We couldn't have asked for a better team to help us create our dream wedding.</blockquote>
                                <div class="testimonial-caption">
                                    <h5>Julia Brandon</h5>
                                    <label>Bride</label>
                                </div>
                            </div>
                        </div>
                        <!--testimonials end-->
                    </div>
                </div><!--row end-->
            </div>
        </section>
        <!--testimonial-section end-->


        <!--portfolio-section -->
        <section class="ttm-row portfolio-section clearfix ">
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-10 m-auto">
                        <!--section-title-->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h5>Wedding Gallery</h5>
                                <h2 class="title" style="font-style: italic;">Your Forever Memories</h2>
                            </div>
                            <div class="title-desc">
                                <p style="color: white;">Wander through our gallery and witness the love, joy, and laughter of countless couples as they celebrate their special day.</p>
                            </div>
                        </div><!--section-title end-->
                    </div>
                </div><!--row end-->
                <!--row-->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <!--featured-imagebox-event-->
                        <div class="featured-imagebox featured-imagebox-portfolio style3">
                            <div class="ttm-box-view-overlay">
                                <!--featured-thumbnail-->
                                <div class="featured-thumbnail">
                                    <a href="#"><img class="img-fluid" src="{{asset('images/portfolio/portfolio-1.jpg')}}" alt="image"></a>
                                </div><!--featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="Business Card Design" data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-1.jpg')}}">
                                        <i class="ti ti-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!--featured-imagebox-event end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <!--featured-imagebox-event-->
                        <div class="featured-imagebox featured-imagebox-portfolio style3">
                            <div class="ttm-box-view-overlay">
                                <!--featured-thumbnail-->
                                <div class="featured-thumbnail">
                                    <a href="#"><img class="img-fluid" src="{{asset('images/portfolio/portfolio-2.jpg')}}" alt="image"></a>
                                </div><!--featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="Business Card Design" data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-2.jpg')}}">
                                        <i class="ti ti-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!--featured-imagebox-event end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <!--featured-imagebox-event-->
                        <div class="featured-imagebox featured-imagebox-portfolio style3">
                            <div class="ttm-box-view-overlay">
                                <!--featured-thumbnail-->
                                <div class="featured-thumbnail">
                                    <a href="#"><img class="img-fluid" src="{{asset('images/portfolio/portfolio-3.jpg')}}" alt="image"></a>
                                </div><!--featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="Business Card Design" data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-3.jpg')}}">
                                        <i class="ti ti-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!--featured-imagebox-event end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <!--featured-imagebox-event-->
                        <div class="featured-imagebox featured-imagebox-portfolio style3">
                            <div class="ttm-box-view-overlay">
                                <!--featured-thumbnail-->
                                <div class="featured-thumbnail">
                                    <a href="#"><img class="img-fluid" src="{{asset('images/portfolio/portfolio-6.jpg')}}" alt="image"></a>
                                </div><!--featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="Business Card Design" data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-6.jpg')}}">
                                        <i class="ti ti-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!--featured-imagebox-event end-->
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <!--featured-imagebox-event-->
                        <div class="featured-imagebox featured-imagebox-portfolio style3">
                            <div class="ttm-box-view-overlay">
                                <!--featured-thumbnail-->
                                <div class="featured-thumbnail">
                                    <a href="#"><img class="img-fluid" src="{{asset('images/portfolio/portfolio-5.jpg')}}" alt="image"></a>
                                </div><!--featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="Business Card Design" data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-5.jpg')}}">
                                        <i class="ti ti-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!--featured-imagebox-event end-->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <!--featured-imagebox-event-->
                        <div class="featured-imagebox featured-imagebox-portfolio style3">
                            <div class="ttm-box-view-overlay">
                                <!--featured-thumbnail-->
                                <div class="featured-thumbnail">
                                    <a href="#"><img class="img-fluid" src="{{asset('images/portfolio/portfolio-4.jpg')}}" alt="image"></a>
                                </div><!--featured-thumbnail end-->
                                <div class="ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" title="Business Card Design" data-rel="prettyPhoto" href="{{asset('images/portfolio/portfolio-4.jpg')}}">
                                        <i class="ti ti-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!--featured-imagebox-event end-->
                    </div>
                </div>
            </div>
        </section>
        <!--portfolio-section end--> 

    </div><!-- site-main end -->

@endsection