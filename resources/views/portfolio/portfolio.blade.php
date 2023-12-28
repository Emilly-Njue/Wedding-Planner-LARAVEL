@extends('navigation_bar')
@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Our Portfolio</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/">Home</a>
                            </span>
                            <span class="ttm-bread-sep">&gt;</span>
                            <span style="color: #e7b2ff;">Portfolio</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
    </div>
    <!--page-title end-->


    <!--site-main start-->
    <div class="site-main">


        <section class="ttm-row clearfix">
            <div class="container">
                <!-- row -->
                <div class="row mb_15">
                    <div class="col-lg-12">
                        <div class="ttm-tabs ttm-tab-style-01">
                            <ul class="tabs portfolio-filter">
                                <p style="color: rgb(212, 254, 255); font-size:20px; font-family: 'Alkatra', 'Croissant One', 'Faster One', 'Great Vibes', 'Lobster', 'Rubik', 'Sail', sans-serif;">A Kaleidoscope of Hearts: Unveiling Wedco's Masterpieces</p>

                                <li class="tab active"><a href="#" data-filter="*" style="color: white; background-color: transparent;" onmouseover="this.style.backgroundColor='#6999ff';" onmouseout="this.style.backgroundColor='transparent';">All</a></li>
                                <li class="tab"><a href="#" data-filter=".catering" style="color: white; background-color: transparent;" onmouseover="this.style.backgroundColor='#6999ff';" onmouseout="this.style.backgroundColor='transparent';">Romance</a></li>
                                <li class="tab"><a href="#" data-filter=".stories" style="color: white; background-color: transparent;" onmouseover="this.style.backgroundColor='#6999ff';" onmouseout="this.style.backgroundColor='transparent';">Memories</a></li>
                                <li class="tab"><a href="#" data-filter=".decorate" style="color: white; background-color: transparent;" onmouseover="this.style.backgroundColor='#6999ff';" onmouseout="this.style.backgroundColor='transparent';">Professionals</a></li>
                                <li class="tab"><a href="#" data-filter=".planning" style="color: white; background-color: transparent;" onmouseover="this.style.backgroundColor='#6999ff';" onmouseout="this.style.backgroundColor='transparent';">Celebration</a></li>
                            </ul>
                            <div class="content-tab">
                                <!-- content-inner -->
                                <div class="row isotope-project">
                                    <div class="col-lg-4 col-md-4 col-sm-6 project_item catering">
                                        <!--featured-imagebox-->
                                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                                            <!--ttm-box-view-overlay-->
                                            <div class="ttm-box-view-overlay">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"><img class="img-fluid" src="{{asset('images/portfolio/wedding-bells.jpeg')}}" alt="image"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5><a href="{{ route('wedding-bells') }}">Wedding Bells</a></h5>
                                                    </div>
                                                    <span class="category">Romance, Celebration</span>
                                                </div>
                                            </div><!--ttm-box-view-overlay end-->
                                        </div><!--featured-imagebox end-->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 project_item stories">
                                        <!--featured-imagebox-->
                                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                                            <!--ttm-box-view-overlay-->
                                            <div class="ttm-box-view-overlay">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('images/portfolio/flowers.jpeg')}}" alt="image"></a>
                                                </div><!--featured-thumbnail end-->
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5><a href="{{ route('florist') }}">Best Florists</a></h5>
                                                    </div>
                                                    <span class="category">Celebration, Professionals</span>
                                                </div>
                                            </div><!--ttm-box-view-overlay end-->
                                        </div><!-- featured-imagebox end-->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 project_item decorate">
                                        <!--featured-imagebox-->
                                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                                            <!--ttm-box-view-overlay-->
                                            <div class="ttm-box-view-overlay">
                                                <!--featured-thumbnail-->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('images/portfolio/groom.jpeg')}}" alt="image"></a>
                                                </div><!--featured-thumbnail end-->
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5><a href="{{ route('bridegroom') }}">Bride & Groom</a></h5>
                                                    </div>
                                                    <span class="category">Romance, Memories, Celebration</span>
                                                </div>
                                            </div><!--ttm-box-view-overlay end-->
                                        </div><!--featured-imagebox end-->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 project_item stories">
                                        <!--featured-imagebox-->
                                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                                            <!--ttm-box-view-overlay-->
                                            <div class="ttm-box-view-overlay">
                                                <!--featured-thumbnail-->
                                                <div class="ttm-portfolio-format-video featured-thumbnail">
                                                    <iframe width="1280" height="800" src="https://www.youtube.com/embed/7GWSl1GQSSc" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                                </div><!--featured-thumbnail end-->
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5><a href="{{ route('engagement') }}">Engagement</a></h5>
                                                    </div>
                                                    <span class="category">Romance, Memories, Celebration</span>
                                                </div>
                                            </div><!--ttm-box-view-overlay end-->
                                        </div><!--featured-imagebox end-->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 project_item planning catering">
                                        <!--featured-imagebox-->
                                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                                            <!--ttm-box-view-overlay-->
                                            <div class="ttm-box-view-overlay">
                                                <!--featured-thumbnail-->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('images/portfolio/photos.jpeg')}}" alt="image"></a>
                                                </div><!--featured-thumbnail end-->
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5><a href="{{ route('photos') }}">Photo Memories</a></h5>
                                                    </div>
                                                    <span class="category">Memories, Professionals</span>
                                                </div>
                                            </div><!--ttm-box-view-overlay end-->
                                        </div><!--featured-imagebox end-->
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 project_item catering stories">
                                        <!--featured-imagebox-->
                                        <div class="featured-imagebox featured-imagebox-portfolio style1">
                                            <!--ttm-box-view-overlay-->
                                            <div class="ttm-box-view-overlay">
                                                <!--featured-thumbnail-->
                                                <div class="featured-thumbnail">
                                                    <a href="#"> <img class="img-fluid" src="{{asset('images/portfolio/vows.jpeg')}}" alt="image"></a>
                                                </div><!--featured-thumbnail end-->
                                                <div class="featured-content">
                                                    <div class="featured-title">
                                                        <h5><a href="{{ route('vows') }}">Wedding Vows</a></h5>
                                                    </div>
                                                    <span class="category">Memories, Romance</span>
                                                </div>
                                            </div><!--ttm-box-view-overlay end-->
                                        </div><!--featured-imagebox end-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div><!-- site-main end -->
@endsection