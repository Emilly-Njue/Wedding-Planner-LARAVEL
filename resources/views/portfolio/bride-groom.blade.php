@extends('navigation_bar')
@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title"> Bride & Groom</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/">Home</a>
                            </span>
                            <span class="ttm-bread-sep">&gt;</span>
                            <span style="color: #e7b2ff;">Bride & Groom</span>
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
                        <div class="ttm-pf-single-content-wrapper ttm-pf-view-left-image">
                            <div class="ttm-pf-single-content-wrapper-innerbox">
                                <!-- ttm_pf_image-wrapper -->
                                <div class="ttm_pf_image-wrapper">
                                    <img class="img-fluid" src="{{asset('images/portfolio/004.jpeg')}}" alt="portfolio-img">
                                </div><!-- ttm_pf_image-wrapper end -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="ttm-pf-single-content-area">
                                            <div class="pb-15">
                                                <h3 style="color: rgb(212, 254, 255); font-family: 'Alkatra', 'Croissant One', 'Faster One', 'Great Vibes', 'Lobster', 'Rubik', 'Sail', sans-serif;">Where Love Blooms: Crafting Your Dream Wedding with Wedco</h3>
                                                <p class="white-text">Love stories come in all shapes and sizes, each as unique as the couple whispering their "I do." But one thing unites them all: the desire to celebrate their extraordinary journey with a wedding that reflects their one-of-a-kind love.
                                                This is where Wedco steps in, not just as a wedding planner, but as your partner in crafting a day that blooms with your unique love story. Whether you crave a sun-drenched garden soiree or an elegant ballroom affair, we're here to translate your dreams into a reality that transcends mere ceremonies and receptions.</p>
                                                <p class="white-text">Intrigued? Dive deeper and discover how Wedco can transform your vision into a masterpiece of love, laughter, and lasting memories...</p>
                                            </div>
                                            <h3 style="color: #e7b2ff;">Forget Fairytale, Craft Your Reality</h3>
                                            <p class="mb-30" style="color:white;">Forget Prince Charming, you're the queen of your own happily ever after. Wedco's your trusty dragon, helping you slay boring weddings and forge an epic love story celebration.</p>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-30 res-991-mb-40">
                                                    <img class="img-fluid" src="{{asset('images/services/008.jpeg')}}" alt="image">
                                                    </div> 
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-30 res-991-mb-40">
                                                    <img class="img-fluid" src="{{asset('images/services/009.jpeg')}}" alt="image">
                                                    </div> 
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="mb-30 res-991-mb-40">
                                                    <img class="img-fluid" src="{{asset('images/services/010.jpeg')}}" alt="image">
                                                    </div> 
                                                </div>
                                            </div>
                                            <p class="white-text">So raise your champagne flute, darling, and let's toast to conquering checklists, slaying stress, and crafting an "I do" that echoes in your hearts forever. Wedco's your hype squad, let's make your love story legendary.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="social-media-block mt-10 res-991-mt-40">
                                    <div class="d-sm-flex justify-content-between">
                                        <div class="ttm-social-share-wrapper mt-15">
                                            <h6 class="font-weight-bold m-0 mr-2" style="color:white;">Share </h6>
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
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark" href="{{ route('engagement') }}"style="color: white; background-color: transparent;" onmouseover="this.style.backgroundColor='#912c6f';" onmouseout="this.style.backgroundColor='transparent';">Previous</a>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-btn-color-dark" href="{{ route('vows') }}" style="color: white; background-color: transparent;" onmouseover="this.style.backgroundColor='#912c6f';" onmouseout="this.style.backgroundColor='transparent';">Next</a>
                                </div>
                            </div>
                            <div class="row ttm-pf-single-related-wrapper mb_15">
                            <div class="col-12">
                                <h4 style="color: white;">Related Work</h4>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 project_item banners commercial">
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
                            <div class="col-lg-4 col-md-4 col-sm-12 project_item banners residential">
                                <!--featured-imagebox-portfolio-->
                                <div class="featured-imagebox featured-imagebox-portfolio style2">
                                    <div class="ttm-box-view-content-inner">
                                        <!--featured-thumbnail-->
                                        <div class="ttm-portfolio-format-video featured-thumbnail">
                                            <iframe width="1280" height="800" src="https://www.youtube.com/embed/7GWSl1GQSSc" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                        </div><!-- featured-thumbnail end-->
                                    </div>
                                    <div class="featured-content featured-content-portfolio">
                                        <div class="featured-title">
                                            <h5><a href="{{ route('engagement') }}" style="color: white;">Engagement</a></h5>
                                        </div>
                                    </div>
                                </div><!--featured-imagebox-portfolio end-->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 project_item printing residential">
                                <!--featured-imagebox-portfolio-->
                                <div class="featured-imagebox featured-imagebox-portfolio style2">
                                    <div class="ttm-box-view-content-inner">
                                        <!--featured-thumbnail-->
                                        <div class="featured-thumbnail"> 
                                            <img class="img-fluid" src="{{asset('images/portfolio/003.jpeg')}}" alt="image"> 
                                        </div><!--featured-thumbnail end-->
                                        <div class="ttm-media-link">
                                            <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="Financial Planning" href="{{asset('images/portfolio/003.jpeg')}}" data-rel="prettyPhoto" tabindex="0">
                                                <i class="ti ti-search"></i>
                                            </a>
                                            <a href="{{ route('bridegroom') }}" class="ttm_link" tabindex="0">
                                                <i class="fa fa-random"></i></a>
                                        </div>
                                    </div>
                                    <div class="featured-content featured-content-portfolio">
                                        <div class="featured-title">
                                            <h5><a href="{{ route('bridegroom') }}" style="color: white;">Bride & Groom</a></h5>
                                        </div>
                                    </div>
                                </div><!--featured-imagebox-portfolio end-->
                            </div>
                        </div><!-- row end-->
                        </div>
                    </div>
                </div>
            </div>
        </section> 


    </div><!-- site-main end -->

@endsection