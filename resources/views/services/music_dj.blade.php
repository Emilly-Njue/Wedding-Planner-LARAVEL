@extends('navigation_bar')
@section('content')
        <!--page-title-->
        <div class="ttm-page-title-row">
            <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="page-title-heading">
                                <h2 class="title"> Live Music & Dj</h2>
                            </div>
                            <div class="heading-seperator">
                                <span></span>
                            </div>
                            <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="/">Home</a>
                                </span>
                                <span class="ttm-bread-sep">&gt;</span>
                                <span style="color: #e7b2ff;">  Beats & Bliss: Wedco's Soundtrack to Forever</span>
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
                                    <li class="active"><a href="#"> Live Music & Dj </a></li>
                                    <li><a href="{{ route('food') }}"> Dinner & Drinks </a></li>
                                    <li><a href="{{ route('seating') }}"> Seating Chart </a></li>
                                    <li><a href="{{ route('costume') }}"> Costume Services </a></li>
                                </ul>
                            </aside>
                            <aside class="widget widget-banner">
                                <div class="contact_img">
                                    <img class="img-fluid" src="{{asset('images/music-dj.jpeg')}}" alt="single_09">
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
                                <div class="ttm-featured-wrapper mb-35 res-991-mb-40">
                                    <img class="img-fluid" src="{{asset('images/services/wedding-music.jpeg')}}" alt="">
                                </div>
                                <div class="ttm-service-description">
                                    <div class="mb-35 res-991-mb-40">
                                        <p class="white-text" style="font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 100;">Picture this: your love story unfolds on the dance floor, each song a brushstroke painting memories on the canvas of the night. Wedco's DJs aren't just music players, they're architects of sonic dreamscapes, weaving the perfect soundtrack to your forever. From heart-melting first dances to joyous singalongs, we curate the rhythm of your celebration, ensuring every beat reflects the magic of your love. So, raise your glasses, darling, and let the music whisk you away on a whirlwind of laughter, tears, and pure, unadulterated bliss. Wedco - where every note whispers "I do." ✨</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-fluid" src="{{asset('images/services/maestro.jpeg')}}" alt="image"> 
                                        </div>
                                        <div class="col-md-6">
                                            <div class="res-767-mt-30">
                                                <h4 class="white-text" style="color: rgb(212, 254, 255); font-size:20px; font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 50;">Find Your Love Song Maestro</h4>
                                                <p class="white-text" >Forget DJs, find your soul mate on the turntables! Wedco's curated DJ profiles reveal personalities that match your vibe, ensuring your dance floor becomes a love story in every beat.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ttm-horizontal_sep width-100 mt-30 mb-25"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mt-10 res-767-mt-30">
                                                <img class="img-fluid" src="{{asset('images/services/smiles.jpeg')}}" alt="image"> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="res-767-mt-30">
                                                <h4 class="white-text" style="color: rgb(212, 254, 255); font-size:20px; font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 50;">Craft a Symphony of Smiles</h4>
                                                <p class="white-text">From first-kiss ballads to foot-stomping anthems, build the soundtrack of your dreams. Wedco's playlist builder lets you curate the perfect mix, or collaborate with your DJ to weave a love story in every note.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ttm-horizontal_sep width-100 mt-30 mb-25"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mt-10 res-767-mt-30">
                                                <img class="img-fluid" src="{{asset('images/services/whisper.jpeg')}}" alt="image"> 
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="res-767-mt-30">
                                                <h4 class="white-text" style="color: rgb(212, 254, 255); font-size:20px; font-family:'Croissant One', 'Great Vibes', 'Lobster', 'Roboto', 'Rubik'; font-weight: 50;">Let the Music Whisper "I Do"</h4>
                                                <p class="white-text">Wedco's musical matchmakers are your secret weapon. Chat with our experts, get insider tips, and unlock the secrets to a celebration where every beat resonates with your love story.</p>
                                            </div>
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