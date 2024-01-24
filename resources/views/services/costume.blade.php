@extends('navigation_bar')
@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title"> Wedding Wardrobe Magic</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/">Home</a>
                            </span>
                            <span class="ttm-bread-sep">&gt;</span>
                            <span style="color: #e7b2ff;"> Beyond Bridal: Styling Every Star of Your Wedding Story</span>
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
                                <li><a href="{{ route('seating') }}"> Seating Chart </a></li>
                                <li class="active"><a href="#"> Costume Services </a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-banner">
                            <div class="contact_img">
                                <img class="img-fluid" src="{{asset('images/gown.jpeg')}}" alt="single_09">
                            </div>                                
                        </aside>
                        <aside class="widget tagcloud-widget with-title">
                            <h3 class="widget-title">Free Consult</h3>
                            @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{session('success')}}
                                </div>
                            @endif
                            <form id="contactform" class="contactform wrap-form clearfix" method="post" action="{{ route('admin.consultations.store') }}">
                                @csrf
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
                                                            <select name="topic" class="select2-hidden-accessible">
                                                                <option value="" selected="selected">Choose a topic</option>
                                                                <option value="Budget and financial planning">Budget and financial planning</option>
                                                                <option value="Timeline and scheduling">Timeline and scheduling</option>
                                                                <option value="Guest list and invitations">Guest list and invitations</option>
                                                                <option value="Venue selection">Venue selection</option>
                                                                <option value="Legalities and paperwork">Legalities and paperwork</option>
                                                                <option value="Attire">Attire</option>
                                                                <option value="Decor">Decor</option>
                                                                <option value="Transportation">Transportation</option>
                                                                <option value="Other">Other</option>
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
                                <img class="img-fluid" src="{{asset('images/services/bridal-team.jpeg')}}" alt="">
                            </div>
                            <h4 style="color: rgb(212, 254, 255); font-size:20px; font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 50;">Tuxedo Tales & Bridal Twirls: Dress Up Your Love Story with Wedco</h4>
                            <div class="mb-35">
                                <p class="white-text">Sunlight paints diamonds on the groom's cufflinks, a whispered "yes" echoes through lace, and your wedding day stretches before you like a blank canvas. It's a story waiting to be written, and Wedco's your wardrobe fairy godmother, ready to weave your love tale in silk and satin.</p>
                                <p class="white-text">Forget cookie-cutter gowns and predictable suits. We believe attire is an extension of your heart, a whispered promise in every button and bead. For the bride, we'll conjure a gown that sings your name, whether it's a cascading mermaid whisper or a playful tea-length twirl. For the groom, we'll craft a tuxedo that speaks volumes, a crisp suit that makes him walk down the aisle with a swagger that says "forever." This isn't just dressing, it's storytelling, and Wedco's here to drape your love story in the most dazzling chapters imaginable. So let the twirling begin, let's dress your dream!</p>
                            </div>
                            <div class="ttm-featured-wrapper mb-35 res-991-mb-20">
                                <img class="img-fluid" src="{{asset('images/services/grooms-men.jpeg')}}" alt="">
                            </div>
                            <h4 class="mt-15" style="color: rgb(212, 254, 255); font-size:20px; font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 50;">Silk Whispers & Buttonhole Dreams:</h4>
                                <p class="white-text">Imagine whispers of lace echoing your name, sunlight igniting diamonds on a cufflink, and love unfolding in every perfectly tailored stitch. Wedding attire isn't just fabric, it's a whispered promise, a love story woven into buttonholes and bodices.</p>
                                <p class="white-text">Wedco helps you dress the dream, crafting gowns that sing your soul's desires and suits that tell tales of adventure and devotion. Let's paint your wedding canvas with the vibrant hues of style and celebrate love in every thread.</p>
                                <div class="ttm-horizontal_sep width-100 mt-35 mb-25"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 style="color: rgb(212, 254, 255); font-size:20px; font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 50;">Twirl & Toast: Dress Your Love Duet</h4>
                                    <p class="white-text">Picture this: a twirl in a gown that sings your name, a toast raised in a suit that speaks volumes. Wedco's your fashion maestro, harmonizing your wedding attire into a symphony of love and laughter.</p>
                                    <p class="white-text">From whimsical bridal whispers to dapper groom's serenades, we'll dress your dream duet, crafting a love story that shines brighter than any diamond. Let's orchestrate an "I do" that echoes in every stitch and seam.</p>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-darkgrey" href="#" title="" tabindex="0">View More</a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-10">
                                        <img class="img-fluid" src="{{asset('images/services/team.jpeg')}}" alt="image"> 
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