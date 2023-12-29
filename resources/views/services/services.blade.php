@extends('navigation_bar')
@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">services</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/">Home</a>
                            </span>
                            <span class="ttm-bread-sep">&gt;</span>
                            <span style="color: #e7b2ff;">services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
    </div>
    <!--page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!--services-section_1-->
        <section class="ttm-row services-section_1 clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-12">
                        <!--section title-->
                        <div class="section-title text-center">
                            <div class="title-header">
                                <h5 style="color: white;font-size: 30px;font-style: italic;">Our Wedding Services</h5>
                                <h2 class="title">Prepare For The Big Day</h2>
                            </div>
                        </div><!--section title end-->
                    </div>
                </div><!--row end-->
                <!--row-->
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--featured-icon-box--> 
                        <div class="featured-icon-box icon-align-top-content text-center style2 box-shadow">
                            <div class="featured-icon"> 
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-style-rounded ttm-icon_element-size-sm">
                                    <i class="flaticon flaticon-action-camera"></i>
                                </div>
                                <div class="ttm-service-icon-dots"></div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-category">Planning</div>
                                <div class="featured-title">
                                    <h5><a href="lovely-decoration.html">Lovely Decoration</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>We always be on time and ready to give you the great service possible.</p>
                                </div>
                                <div class="ttm-di_links">
                                    <a href="{{ route('decoration') }}" class="di_link">
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!--featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--featured-icon-box--> 
                        <div class="featured-icon-box icon-align-top-content text-center style2 box-shadow">
                            <div class="featured-icon">
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-style-rounded ttm-icon_element-size-sm">
                                    <i class="flaticon flaticon-same-sex-marriage"></i>
                                </div>
                                <div class="ttm-service-icon-dots"></div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-category">Wedding Stories</div>
                                <div class="featured-title">
                                    <h5><a href="{{ route('music') }}">Live Music & Dj</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>We vendor one of the top bands for the blissful music according to rituals.</p>
                                </div>
                                <div class="ttm-di_links">
                                    <a href="{{ route('music') }}" class="di_link">
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!--featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--featured-icon-box--> 
                        <div class="featured-icon-box icon-align-top-content text-center style2 box-shadow">
                            <div class="featured-icon-top-icon">
                            <div class="featured-icon"> 
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-style-rounded ttm-icon_element-size-sm">
                                    <i class="flaticon flaticon-dinner-table"></i> 
                                </div>
                                <div class="ttm-service-icon-dots"></div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-category">Planning</div>
                                <div class="featured-title">
                                    <h5><a href="{{ route('food') }}">Dinner & Drinks</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Serve the best food as per culture & ritual as food is important aspect.</p>
                                </div>
                                <div class="ttm-di_links">
                                    <a href="{{ route('food') }}" class="di_link">
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div><!--featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--featured-icon-box--> 
                        <div class="featured-icon-box icon-align-top-content text-center style2 box-shadow">
                            <div class="featured-icon"> 
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-style-rounded ttm-icon_element-size-sm">
                                    <i class="flaticon flaticon-wine"></i>
                                </div>
                                <div class="ttm-service-icon-dots"></div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-category">Dinner</div>
                                <div class="featured-title">
                                    <h5><a href="{{ route('seating') }}">Seating Chart</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>We always be on time and ready to give you the great service possible.</p>
                                </div>
                                <div class="ttm-di_links">
                                    <a href="{{ route('seating') }}" class="di_link">
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div><!--featured-icon-box end-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--featured-icon-box--> 
                        <div class="featured-icon-box icon-align-top-content text-center style2 box-shadow">
                            <div class="featured-icon-top-icon">
                            <div class="featured-icon"> 
                                <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-style-rounded ttm-icon_element-size-sm">
                                    <i class="flaticon flaticon-clothes"></i> 
                                </div>
                                <div class="ttm-service-icon-dots"></div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-category">Planning</div>
                                <div class="featured-title">
                                    <h5><a href="{{ route('costume') }}">Costume Services</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>We always be on time and ready to give you the great service possible.</p>
                                </div>
                                <div class="ttm-di_links">
                                    <a href="{{ route('costume') }}" class="di_link">
                                        <i class="ti ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            </div>
                        </div><!--featured-icon-box end-->
                    </div>
                </div><!--row end-->
            </div>
        </section>
        <!--services-section_1-end-->
    </div><!-- site-main end -->

@endsection