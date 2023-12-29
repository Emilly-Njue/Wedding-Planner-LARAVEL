@extends('navigation_bar')
@section('content')
        <!--page-title-->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title"> Lovely Decoration</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/">Home</a>
                            </span>
                            <span class="ttm-bread-sep">&gt;</span>
                            <span style="color: #e7b2ff;"> Deck the Halls (with Wedding Bells)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
    </div>
    <!--page-title end-->

    <!--site-main start-->
    <div class="site-main" style="background: linear-gradient(to right, rgb(140, 201, 255), rgb(35, 4, 27), rgb(52, 44, 78), rgb(132, 58, 55));">


        <div class="ttm-row sidebar ttm-sidebar-right clearfix">
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-4 widget-area sidebar-right">
                        <aside class="widget widget-nav-menu">
                            <ul class="widget-menu">
                                <li class="active"><a href="#"> Lovely Decoration </a></li>
                                <li><a href="{{ route('music') }}"> Live Music & Dj </a></li>
                                <li><a href="{{ route('food') }}"> Dinner & Drinks </a></li>
                                <li><a href="{{ route('seating') }}"> Seating Chart </a></li>
                                <li><a href="{{ route('costume') }}"> Costume Services </a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-banner">
                            <div class="contact_img">
                                <img class="img-fluid" src="{{asset('images/just_an_image.jpeg')}}" alt="single_09">
                            </div>                                
                        </aside>
                        <aside class="widget tagcloud-widget with-title">
                            <h3 class="widget-title">Free Consult</h3>
                            <form id="contactform" class="contactform wrap-form clearfix" method="post" action="#">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>
                                            <span class="text-input">
                                            <input name="name" type="text" value="" placeholder="Name" required="required">
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>
                                            <span class="text-input"><input name="phone" type="text" value="" placeholder="Phone" required="required"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <label>
                                            <span class="text-input">
                                            <span class="orderby">
                                                <select name="orderby" class="select2-hidden-accessible">
                                                        <option value="menu_order" selected="selected">Visit Venue</option>
                                                        <option value="popularity">Diani</option>
                                                        <option value="rating">Nairobi</option>
                                                        <option value="date">Naivasha</option>
                                                    </select>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>
                                            <span class="text-input"><textarea name="message" rows="4" placeholder="Messages" required="required"></textarea></span>
                                        </label>
                                    </div>
                                </div>
                                <button class="submit ttm-btn ttm-btn-size-lg ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor" type="submit">Send A Request</button>
                            </form>
                        </aside>
                    </div>
                    <div class="col-lg-8 content-area">
                        <div class="ttm-service-single-content-area">
                            <div class="ttm-featured-wrapper mb-35 res-991-mb-40">
                                <img class="img-fluid" src="{{asset('images/services/services01.jpeg')}}" alt="">
                            </div>
                            <div class="ttm-service-description">
                                <h3 style="font-size: 27px; font-family: 'Alkatra', 'Croissant One', 'Faster One', 'Great Vibes', 'Lobster', 'Rubik', 'Sail', sans-serif;color: #b6b6b6;">Whispers of Romance: Infuse Every Corner with Wedding Decor Magic!</h3>
                                <div class="mb-35 res-991-mb-40">
                                    <p class="white-text" style="font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 100;">Dress the Space, Dazzle the Day: <strong> Wedding Decor You'll Swoon Over</strong> </p>
                                    <p class="white-text">Whether you dream of a whimsical garden ceremony or a glamorous ballroom reception, we have the perfect decorations to bring your vision to life. Explore our vast selection of flowers, linens, lighting, and more.</p>
                                </div>
                                <h4 style="color: #b6b6b6;">Service Advantages</h4>
                                <div class="mb-20">
                                    <p class="white-text">Say "I do" to a wedding that's as special as your love. Wedco's decor is more than just ornaments – it's an expression of your heart, a canvas for your memories to unfold.</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="featured-icon-box style4 icon-align-before-content icon-ver_align-top">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                                    <i class="flaticon flaticon-candle"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5 style="color: #b6b6b6;">Beyond Bouquets</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p class="white-text">Don't stress about the details! We're here to help you navigate the world of wedding decor with ease.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="featured-icon-box style4 icon-align-before-content icon-ver_align-top">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                                    <i class="flaticon flaticon-placeholder"></i>
                                                </div>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5 style="color: #b6b6b6;">From Vision to Vow</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p class="white-text">Don't settle for ordinary, explore extraordinary! </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="mt-15" style="color: #b6b6b6;">Our Latest Project</h4>
                                <div class="mb-15">
                                    <p class="white-text" style="font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 100;">Love, laughter, and a touch of magic... dive into the story behind our newest creation!</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <!--featured-imagebox-->
                                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                                            <!--ttm-box-view-overlay-->
                                            <div class="ttm-box-view-overlay">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"><img class="img-fluid" src="{{asset('images/portfolio/01.jpeg')}}" alt="image"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5><a href="{{ route('wedding-bells') }}">Wedding Bells</a></h5>
                                                    </div>
                                                </div>
                                            </div><!--ttm-box-view-overlay end-->
                                        </div><!--featured-imagebox end-->
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <!--featured-imagebox-->
                                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                                            <!--ttm-box-view-overlay-->
                                            <div class="ttm-box-view-overlay">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('images/portfolio/02.jpeg')}}" alt="image"></a>
                                                </div><!--featured-thumbnail end-->
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5><a href="{{ route('florist') }}">Best Florists</a></h5>
                                                    </div>
                                                </div>
                                            </div><!--ttm-box-view-overlay end-->
                                        </div><!-- featured-imagebox end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div> 

    </div><!-- site-main end -->
@endsection