@extends('navigation_bar')
@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title"> Seating Chart</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/">Home</a>
                            </span>
                            <span class="ttm-bread-sep">&gt;</span>
                            <span style="color: #e7b2ff;"> Table Tales: Where Love Takes a Seat</span>
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
                                <li><a href="{{ route('decoration') }}"> Lovely Decoration </a></li>
                                <li><a href="{{ route('music') }}"> Live Music & Dj </a></li>
                                <li><a href="{{ route('food') }}"> Dinner & Drinks </a></li>
                                <li class="active"><a href="#"> Seating Chart </a></li>
                                <li><a href="{{ route('costume') }}"> Costume Services </a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-banner">
                            <div class="contact_img">
                                <img class="img-fluid" src="{{asset('images/sit.jpeg')}}" alt="single_09">
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
                                                                <option value="date">Other Venue</option>

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
                            <div class="ttm-featured-wrapper mb-35 res-991-mb-20">
                                <img class="img-fluid" src="{{asset('images/services/004.jpeg')}}" alt="">
                            </div>
                            <h4 style="color: rgb(212, 254, 255); font-size:20px; font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 50;">Table Tales: Where Love Takes a Seat:</h4>
                            <div class="mb-35">
                                <p class="white-text">Forget spreadsheets and awkward shuffles. Wedco's interactive seating chart tool transforms the dreaded task into a delightful exercise in storytelling. Imagine weaving your guests into the fabric of your celebration, placing them like precious pearls on a glittering necklace, ensuring every seat sparks laughter, conversation, and memories that last a lifetime.</p>
                                <p class="white-text"><strong>We believe seating isn't just logistics, it's storytelling.</strong> Let us weave your guest list into a masterpiece, ensuring every seat sparks conversation, ignites laughter, and becomes a cherished part of your wedding celebration.</p>
                            </div>
                            <div class="ttm-featured-wrapper mb-35 res-991-mb-20">
                                <img class="img-fluid" src="{{asset('images/services/seats-07.jpeg')}}" alt="">
                            </div>
                            <h4 class="mt-15" style="color: rgb(212, 254, 255); font-size:20px; font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 50;">Cheers to Clinking & Connections: Seating Made Simple</h4>
                                <p class="white-text"><strong>Ditch the stress, embrace the fun!</strong> Wedco's intuitive tools take the headache out of seating arrangements. Upload your guest list, browse pre-designed templates, or work with our experts to create a chart that reflects your vision.</p>
                                <p class="white-text"><strong>No more late-night Excel struggles.</strong> We handle RSVPs, dietary restrictions, family dynamics, and even sprinkle in surprise tablemates to encourage mingling and laughter.</p>
                                <p class="white-text"><strong>Sit back, relax, and let Wedco work its magic.</strong> We'll deliver a visually stunning, easy-to-navigate seating chart that sets the stage for a night of connection and celebration.</p>
                                <div class="ttm-horizontal_sep width-100 mt-35 mb-25"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 style="color: rgb(212, 254, 255); font-size:20px; font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 50;">Love & Laughter at Every Place Setting: Wedco's Seating Secrets</h4>
                                    <p class="white-text"><strong>Go beyond assigned seats.</strong> We believe in creating interactive experiences that spark joy and conversation. Think mix-and-mingle cocktail hour rounds, open seating spaces for spontaneous connections, and designated dance floor pods for epic group grooves.</p>
                                    <p class="white-text"><strong>From seating whispers to party roars, Wedco orchestrates the flow.</strong> We make sure every guest feels included, comfortable, and ready to create unforgettable memories around the table and beyond.</p>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-darkgrey" href="#" title="" tabindex="0">View More</a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-10 res-991-mt-20 ttm_single_image-wrapper">
                                        <img class="img-fluid" src="{{asset('images/services/seats-06.jpeg')}}" alt="image"> 
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