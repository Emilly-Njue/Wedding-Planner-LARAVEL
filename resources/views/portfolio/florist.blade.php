@extends('navigation_bar')
@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title"> Best Florists</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/">Home</a>
                            </span>
                            <span class="ttm-bread-sep">&gt;</span>
                            <span style="color: #e7b2ff;">Floral Fairytale</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
    </div>
    <!--page-title end-->


    <!--site-main start-->
    <div class="site-main" style="background: linear-gradient(to right, rgb(21, 1, 45), rgb(64, 0, 48), rgb(73, 0, 44), rgb(0, 0, 0));">


        <section class="ttm-row project-single-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-pf-single-content-wrapper ttm-pf-view-top-image">
                            <div class="ttm-pf-single-content-wrapper-innerbox">
                                <!-- ttm_pf_image-wrapper -->
                                <div class="ttm_pf_image-wrapper">
                                    <img class="img-fluid" src="{{asset('images/portfolio/florist-03.jpeg')}}" alt="portfolio-img">
                                </div><!-- ttm_pf_image-wrapper end -->
                                <div class="row">
                                    <div class="col-md-12 col-lg-5 col-xl-4">
                                        <div class="ttm-pf-single-detail-box">
                                            <div class="ttm-pf-single-title">
                                                <h5>Love in Every Petal</h5>
                                            </div>
                                            <p>We don't just design florals, we create experiences, transforming your wedding day into a sensory feast where every bloom sings a silent serenade to your love.</p>
                                            <ul class="ttm-pf-detailbox-list">
                                                    <li>
                                                        <span><i class="ti ti-notepad ttm-textcolor-skincolor"></i>Title: </span>
                                                        <span class="ttm-pf-right-details">Wedding Event</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="ti-user ttm-textcolor-skincolor"></i> Client: </span>
                                                        <span class="ttm-pf-right-details">YOU!!..</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="ti ti-panel ttm-textcolor-skincolor"></i>Category: </span>
                                                        <span class="ttm-pf-right-details">Commercial</span>
                                                    </li>
                                                    <li>
                                                        <span><i class="ti ti-tag ttm-textcolor-skincolor"></i>Status: </span>
                                                        <span class="ttm-pf-right-details">Good</span>
                                                    </li>
                                                </ul>
                                        </div>
                                        <div class="ttm-viewproject-btn-wrapper mt-30">
                                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor w-100 text-center" href="#">View Project</a>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-7 col-xl-8">
                                        <div class="ttm-pf-single-content-area">
                                            <h3 style="color: rgb(212, 254, 255); font-family: 'Alkatra', 'Croissant One', 'Faster One', 'Great Vibes', 'Lobster', 'Rubik', 'Sail', sans-serif;">Beyond Bouquets: Wedco Paints with Blooms</h3>
                                            <p class="white-text">Forget predictable arrangements and cookie-cutter centerpieces. Wedco's florists are artists, weaving fragrant tales of love with each stem, petal, and leaf. We translate your dreams into vibrant landscapes, crafting floral masterpieces that whisper your love story in a thousand different hues. From cascading garden arches to whimsical boutonnieres, let us paint your wedding day with the intoxicating magic of nature's finest creations.</p>

                                            <h3 class="mt-25" style="color: #e7b2ff;">Moonlit Bouquet: Stargazing & Forget-Me-Nots</h3>
                                            <p class="white-text">Whispers rustle through ancient olive trees, fireflies dance like wedding guests, and your love shimmers beneath a canopy of stars. A single forget-me-not bouquet, bathed in moonlight, rests against your heart, a silent promise echoing in the Tuscan hills. Wedco crafts your "I do" under the Milky Way, where love blooms as eternal as the constellations above. ✨</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-30 res-991-mb-40">
                                                    <img class="img-fluid" src="{{asset('images/services/service-008.jpeg')}}" alt="image">
                                                    </div> 
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-30 res-991-mb-40">
                                                    <img class="img-fluid" src="{{asset('images/services/services-09.jpeg')}}" alt="image">
                                                    </div> 
                                                </div>
                                            </div>
                                            <p class="white-text">So, ditch the cookie-cutter arrangements and let Wedco paint your wedding day with floral masterpieces. We'll design bouquets that are more than just blooms; they'll be love letters, whispered secrets, and vibrant brushstrokes on the canvas of your happily ever after.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="social-media-block mt-10">
                                        <div class="d-sm-flex justify-content-between">
                                            <div class="ttm-social-share-wrapper mt-15">
                                                <h6 class="font-weight-bold m-0 mr-2" style="color: white;">Share </h6>
                                                <ul class="social-icons">
                                                    <li><a href="javascript:void(0)" style="color: white; background-color: transparent;" onmouseover="this.style.backgroundColor='#912c6f';" onmouseout="this.style.backgroundColor='transparent';"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0)" style="color: white; background-color: transparent;" onmouseover="this.style.backgroundColor='#912c6f';" onmouseout="this.style.backgroundColor='transparent';"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0)" style="color: white; background-color: transparent;" onmouseover="this.style.backgroundColor='#912c6f';" onmouseout="this.style.backgroundColor='transparent';"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="javascript:void(0)" style="color: white; background-color: transparent;" onmouseover="this.style.backgroundColor='#912c6f';" onmouseout="this.style.backgroundColor='transparent';"><i class="fa fa-pinterest"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                            </div>
                            <div class="ttm-horizontal_sep width-100 mt-30 mb-30"></div>
                            <div class="d-flex justify-content-between">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark" href="{{ route('bridegroom') }}" style="color: white; background-color: transparent;" onmouseover="this.style.backgroundColor='#912c6f';" onmouseout="this.style.backgroundColor='transparent';">Previous</a>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark" href="{{ route('wedding-bells') }}" style="color: white; background-color: transparent;" onmouseover="this.style.backgroundColor='#912c6f';" onmouseout="this.style.backgroundColor='transparent';">Next</a>
                            </div>
                            <div class="row ttm-pf-single-related-wrapper mb_15">
                                <div class="col-12">
                                    <h4 class="white-text">Related Work</h4>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 business">
                                    <!--featured-imagebox-portfolio-->
                                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                                        <div class="ttm-box-view-content-inner">
                                            <!-- featured-thumbnail -->
                                            <div class="featured-thumbnail"> 
                                                <img class="img-fluid" src="{{asset('images/portfolio/001.jpeg')}}" alt="image"> 
                                            </div><!-- featured-thumbnail end-->
                                            <div class="ttm-media-link">
                                                <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Marketing Strategy" href="{{asset('images/portfolio/001.jpeg')}}" data-rel="prettyPhoto" tabindex="0">
                                                    <i class="ti ti-search"></i>
                                                </a>
                                                <a href="{{ route('wedding-bells') }}" class="ttm_link" tabindex="0">
                                                    <i class="fa fa-random"></i></a>
                                            </div>
                                        </div>
                                        <div class="featured-content featured-content-portfolio">
                                            <div class="featured-title">
                                                <h5><a href="{{ route('wedding-bells') }}" style="color: white;">Wedding Bells</a></h5>
                                            </div>
                                        </div>
                                    </div><!--featured-imagebox-portfolio end-->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 financial">
                                    <!--featured-imagebox-portfolio-->
                                    <div class="featured-imagebox featured-imagebox-portfolio style2">
                                        <div class="ttm-box-view-content-inner">
                                            <!--featured-thumbnail-->
                                            <div class="featured-thumbnail"> 
                                                <img class="img-fluid" src="{{asset('images/portfolio/05.jpeg')}}" alt="image"> 
                                            </div><!--featured-thumbnail end-->
                                            <div class="ttm-media-link">
                                                <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Family Law" href="{{asset('images/portfolio/05.jpeg')}}" data-rel="prettyPhoto" tabindex="0"><i class="ti ti-search"></i></a>
                                                <a href="{{ route('photos') }}" class="ttm_link" tabindex="0">
                                                    <i class="fa fa-random"></i></a>
                                            </div>
                                        </div>
                                        <div class="featured-content featured-content-portfolio">
                                            <div class="featured-title">
                                                <h5><a href="{{ route('photos') }}" style="color: white;">Photo Memories</a></h5>
                                            </div>
                                        </div>
                                    </div><!--featured-imagebox-portfolio end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 


    </div><!-- site-main end -->

@endsection