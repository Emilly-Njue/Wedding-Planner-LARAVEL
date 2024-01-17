@extends('navigation_bar')
@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">dinner-drinks</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/">Home</a>
                            </span>
                            <span class="ttm-bread-sep">&gt;</span>
                            <span style="color: #e7b2ff;">Wedco's Dinner Delights</span>
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
                                <li class="active"><a href="#"> Dinner & Drinks </a></li>
                                <li><a href="{{ route('seating') }}"> Seating Chart </a></li>
                                <li><a href="{{ route('costume') }}"> Costume Services </a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-banner">
                            <div class="contact_img">
                                <img class="img-fluid" src="{{asset('images/dinner-drinks.jpeg')}}" alt="single_09">
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
                                <img class="img-fluid" src="{{asset('images/services/foods.jpeg')}}" alt="">
                            </div>
                            <div class="ttm-service-description">
                                <div class="mb-35">
                                    <p class="white-text" class="white-text" style="font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 100;">Forget bland buffets and predictable pours. Wedco elevates your wedding feast from mere sustenance to a symphony of flavors, a visual masterpiece, and a celebration of love in every delectable bite and joyful clink. Dive into our world of culinary artistry and toast to a day where dinner dances, drinks dazzle, and every guest savors the memories long after the plates are cleared.</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-sm-12">
                                        <h4 style="color: rgb(212, 254, 255); font-size:20px; font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 50;">Feast Your Eyes & Souls: The Art of Wedding Menus:</h4>
                                        <p class="white-text"><strong>More Than Just Food, It's an Experience:</strong> From interactive cooking stations to themed table settings, we orchestrate a culinary adventure. Imagine hand-rolled pasta stations where guests become chefs, or floating dessert islands brimming with whimsical confections.</p>
                                        <div class="mt-35">
                                            <div class="featured-icon-box style4 icon-align-before-content icon-ver_align-top">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                                        <i class="flaticon flaticon-romantic-dinner"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5 style="color: rgb(212, 254, 255); font-size:20px; font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 50;">Flavors that Whisper "Forever":</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p class="white-text">Forget generic options. We create dishes that tell your story, incorporating symbolic ingredients, family recipes, or cultural nods that weave joy and nostalgia into every morsel.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-30">
                                            <div class="featured-icon-box style4 icon-align-before-content icon-ver_align-top">
                                                <div class="featured-icon">
                                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                                        <i class="flaticon flaticon-wine"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5 style="color: rgb(212, 254, 255); font-size:20px; font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 50;">A Culinary Canvas:</h5>
                                                    </div>
                                                    <div class="featured-desc">
                                                        <p class="white-text">We paint with ingredients, crafting personalized menus that reflect your taste, theme, and love story. Think Tuscan sunsets in slow-cooked lamb, whimsical garden vibes in edible flower desserts, or sizzling coastal romance in ocean-fresh seafood delights.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12">
                                        <img class="img-fluid" src="{{asset('images/services/buffet.jpeg')}}" alt="image">
                                    </div>
                                </div>
                                    <h4 class="mt-25" style="color: rgb(212, 254, 255); font-size:20px; font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 50;">Let's Raise a Glass to Love: Crafting Your Signature Cocktail</h4>
                                <div class="mb-15">
                                    <p class="white-text"><strong>Shaken with Style, Stirred with Soul:</strong> Forget watered-down mojitos. We design bespoke cocktails that capture your vibe, be it bubbly mimosas for a garden brunch, smoky speakeasy concoctions for a roaring twenties bash, or tropical tiki libations for a beachside celebration.</p>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mt-10 res-991-mt-20">
                                            <img class="img-fluid" src="{{asset('images/services/drink.jpeg')}}" alt="image"> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="mt-10 res-991-mt-20">
                                            <img class="img-fluid" src="{{asset('images/services/drinks.jpeg')}}" alt="image"> 
                                        </div>
                                    </div>
                                </div>
                                <p class="pt-30 res-991-mb-0" style="color: white;"><strong>From Mocktails to Magnificence:</strong> Cater to all palates with an array of non-alcoholic delights that are just as creative and delicious as their boozy counterparts. We believe everyone deserves a toast-worthy treat, regardless of their beverage preference.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div> 


    </div><!-- site-main end -->
@endsection