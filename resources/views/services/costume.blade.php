@extends('navigation_bar')
@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title"> Costume Services</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="/">Home</a>
                            </span>
                            <span class="ttm-bread-sep">&gt;</span>
                            <span style="color: #e7b2ff;"> Costume Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>                    
    </div>
    <!--page-title end-->


    <!--site-main start-->
    <div class="site-main">


        <div class="ttm-row sidebar ttm-sidebar-right clearfix">
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-4 widget-area sidebar-right">
                        <aside class="widget widget-nav-menu">
                            <ul class="widget-menu">
                                <li><a href="lovely-decoration.html"> Lovely Decoration </a></li>
                                <li><a href="live-music-and-dj.html"> Live Music & Dj </a></li>
                                <li><a href="dinner-and-drinks.html"> Dinner & Drinks </a></li>
                                <li><a href="seating-chart.html"> Seating Chart </a></li>
                                <li><a href="responsible-sourcing.html"> Responsible Sourcing </a></li>
                                <li class="active"><a href="costume-services.html"> Costume Services </a></li>
                            </ul>
                        </aside>
                        <aside class="widget widget-banner">
                            <div class="contact_img">
                                <img class="img-fluid" src="images/single-img-09.jpg" alt="single_09">
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
                                                                <option value="popularity">Newyork</option>
                                                                <option value="rating">California</option>
                                                                <option value="date">France</option>
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
                                <img class="img-fluid" src="images/services/services-05.jpg" alt="">
                            </div>
                            <h4>Venue and Stage Decorated</h4>
                            <div class="mb-35">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,&nbsp;<strong>eaque ipsa quae ab illo inventore</strong>&nbsp;veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                            </div>
                            <div class="ttm-featured-wrapper mb-35 res-991-mb-20">
                                <img class="img-fluid" src="images/services/services-07.jpg" alt="">
                            </div>
                            <h4 class="mt-15">Provide best Costume</h4>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <div class="ttm-horizontal_sep width-100 mt-35 mb-25"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4>Fashion Designer</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit, totam rem aperiam,&nbsp;<strong>eaque ipsa quae ab illo inventore</strong>veritatis etqo quasi architecto beatae vitae dicta sunt explicabo&nbsp; Nemo enimjq Letraset sheets containing Lorem Ipsum.</p>
                                    <p>Omnis iste natus error sit voluptatem accusantium doloremque laudantium, but the majority suffered.</p>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-border ttm-icon-btn-right ttm-btn-color-darkgrey" href="#" title="" tabindex="0">View More</a>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mt-10">
                                        <img class="img-fluid" src="images/services/services-06.jpg" alt="image"> 
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