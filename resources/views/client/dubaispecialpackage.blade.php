@extends ('layout.app')
@section ('content')


<!-- Main Header -->
<header class="main-header header-style-one">
    <div class="logo-desktop">
        <div class="logo"><a href="index.html" title="Best for you - Tourism L.L.C"><img src="images/logo.png" alt="Best for you - Tourism L.L.C" title="Best for you - Tourism L.L.C"></a></div>
    </div>
    <!-- Header Top -->
    <div class="header-top header-top-one">
        <div class="outer-container">
            <div class="inner clearfix">
                <div class="top-left clearfix">
                    <!--Info-->
                    <div class="info">
                        <ul class="clearfix">
                            <li class="phone"><a href="tel:+97142682901" target="_blank"><span class="icon fa fa-phone-alt"></span> Uae :+971 4268 2901</a></li>
                            <li class="phone"><a href="tel:+919995573232" target="_blank"><span class="icon fa fa-phone-alt"></span> India :+91 999 557 3232</a></li>
                            <li class="email"><a href="mailto:info@best4utourism.com" target="_blank"><span class="icon fa fa-envelope"></span> info@best4utourism.com</a></li>
                        </ul>
                    </div>

                    <div class="top-text"><span class="icon flaticon-surf-1"></span> Water Sports Activities, Experience The Thrill!.</div>
                </div>


            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="outer-container">
            <div class="inner clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="index.html" title="Best for you -  Tourism L.L.C"><img src="images/logo-two.png" alt="Best for you -  Tourism L.L.C" title="Best for you -  Tourism L.L.C"></a></div>
                </div>
                <div class="nav-content clearfix">
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ url('/') }}">Home</a>

                                    </li>
                                    <li><a href="{{ url('/aboutus') }}">About Us</a>

                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            @foreach ($services as $service)
                                            <li><a href="{{ url('/service-detail', ['id' => $service->id]) }}">{{ $service->service }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">Destinatons</a>
                                        <ul>
                                            <li class="dropdown"><a href="gallery-one-col.html">India</a>
                                                <ul>
                                                    <li><a href="northuindia.html">North India</a></li>
                                                    <li><a href="southindia.html">South India</a></li>

                                                </ul>
                                            </li>
                                            <li><a href="srilanka.html">Srilanka</a></li>
                                            <li><a href="maldives.html">Maldives</a></li>
                                            <li><a href="contact.html">Kerala</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Tourism Packages</a>
                                        <ul>
                                            <li><a href="familytour.html">Family Tour</a></li>
                                            <li><a href="honeymoon.html">Honeymoon</a></li>
                                            <li><a href="pilgrimage.html">Pilgrimage</a></li>
                                            <li><a href="medicaltourism.html">Medical Tourism</a></li>
                                        </ul>
                                    </li>
                                    <li class="current"><a href="{{ url('dubaispecialpackage') }}">Dubai Special Package</a></li>
                                    <li><a href="{{ url('blog') }}">Blog</a></li>
                                    <li><a href="{{ url('contactus') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>

                    <div class="other-links clearfix">
                        <!--Book Btn-->
                        <!--<div class="book-btn">
                                <a href="yacht-rent-buy-single.html" class="theme-btn btn-style-one"><div class="btn-title">Book Now</div></a>
                            </div>-->
                        <!--Social Links-->
                        <div class="social-links social-links-one">
                            <ul class="clearfix">
                                <li><a href="https://www.facebook.com/best4utourism" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="https://www.youtube.com/@bestforyoutourism4368" target="_blank"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                        <!--Nav Toggler-->

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img src="images/sticky-logo.png" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right clearfix">
                <!-- Main Menu -->
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->


            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="images/nav-logo.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">

                    <li><a href="https://www.facebook.com/best4utourism" target="_blank"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="https://www.youtube.com/@bestforyoutourism4368" target="_blank"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
<!-- End Main Header -->

<!--Search Popup-->


<!-- Hidden Navigation Bar -->

<!-- End / Hidden Bar -->


<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url(images/background/banner-1.jpg);"></div>

    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>Dubai Special Package</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>

                        <li>Dubai Special Package</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--About Section-->
<section class="yacht-tours-container alternate-bg-two">
    <div class="auto-container">

        <div class="content-container">
            <div class="row clearfix">
                <!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="content-inner">
                        <!--Tour Details-->
                        <div class="results-row">

                            <!--Activity Block-->
                            <div class="activity-block-three">
                                <div class="inner-box clearfix">
                                    <div class="image-box">
                                        <div class="offer-info"><span>-20%</span></div>
                                        <a href="northindiadetail.html"><img src="images/resource/featured-image-61.jpg" alt="" title=""></a>
                                    </div>

                                    <div class="content-box">
                                        <div class="content">

                                            <h4><a href="northindiadetail.html">Birds’ Island in Turkish</a></h4>

                                            <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>

                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><span class="icon flaticon-wall-clock"></span> Duration: 4 Days + 3 Nights</li>
                                                </ul>
                                            </div>
                                            <div class="links-box clearfix">
                                                <div class="link">
                                                    <a href="northindiadetail.html" class="theme-btn btn-style-four"><span class="btn-title">View Details</span></a>
                                                </div>
                                                <div class="link">
                                                    <div class="info-btn-box">
                                                        <div class="theme-btn info-btn"><span class="icon flaticon-information-1"></span></div>
                                                        <div class="info-panel">
                                                            <div class="panel-inner">
                                                                <div class="panel-title">Includes</div>
                                                                <ul class="panel-list">
                                                                    <li>Hotel pick-up/drop-off</li>
                                                                    <li>Free Life Vest</li>
                                                                    <li>Soft Drinks</li>
                                                                    <li>Seafood Barbecue</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pricing">
                                                    <div class="price">
                                                        <div class="price-title">From</div>
                                                        <div class="unit"><span>₹ 2,490</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Activity Block-->
                            <div class="activity-block-three">
                                <div class="inner-box clearfix">
                                    <div class="image-box">
                                        <a href="#yacht-tour-single.html"><img src="images/resource/featured-image-62.jpg" alt="" title=""></a>
                                    </div>

                                    <div class="content-box">
                                        <div class="content">

                                            <h4><a href="northindiadetail.html">Costa Victoria Cochin</a></h4>

                                            <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>

                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><span class="icon flaticon-wall-clock"></span> Duration: 8 Days + 7 Nights</li>
                                                </ul>
                                            </div>
                                            <div class="links-box clearfix">
                                                <div class="link">
                                                    <a href="northindiadetail.html" class="theme-btn btn-style-four"><span class="btn-title">View Details</span></a>
                                                </div>
                                                <div class="link">
                                                    <div class="info-btn-box">
                                                        <div class="theme-btn info-btn"><span class="icon flaticon-information-1"></span></div>
                                                        <div class="info-panel">
                                                            <div class="panel-inner">
                                                                <div class="panel-title">Includes</div>
                                                                <ul class="panel-list">
                                                                    <li>Hotel pick-up/drop-off</li>
                                                                    <li>Free Life Vest</li>
                                                                    <li>Soft Drinks</li>
                                                                    <li>Seafood Barbecue</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pricing">
                                                    <div class="price">
                                                        <div class="price-title">From</div>
                                                        <div class="unit"><span>₹ 5,999</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Activity Block-->
                            <div class="activity-block-three">
                                <div class="inner-box clearfix">
                                    <div class="image-box">
                                        <div class="offer-info"><span>-10%</span></div>
                                        <a href="northindiadetail.html"><img src="images/resource/featured-image-63.jpg" alt="" title=""></a>
                                    </div>

                                    <div class="content-box">
                                        <div class="content">

                                            <h4><a href="northindiadetail.html">Fun Island Resort & Spa</a></h4>

                                            <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>

                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><span class="icon flaticon-wall-clock"></span> Duration: 4 Days + 3 Nights</li>
                                                </ul>
                                            </div>
                                            <div class="links-box clearfix">
                                                <div class="link">
                                                    <a href="northindiadetail.html" class="theme-btn btn-style-four"><span class="btn-title">View Details</span></a>
                                                </div>
                                                <div class="link">
                                                    <div class="info-btn-box">
                                                        <div class="theme-btn info-btn"><span class="icon flaticon-information-1"></span></div>
                                                        <div class="info-panel">
                                                            <div class="panel-inner">
                                                                <div class="panel-title">Includes</div>
                                                                <ul class="panel-list">
                                                                    <li>Hotel pick-up/drop-off</li>
                                                                    <li>Free Life Vest</li>
                                                                    <li>Soft Drinks</li>
                                                                    <li>Seafood Barbecue</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pricing">
                                                    <div class="price">
                                                        <div class="price-title">From</div>
                                                        <div class="unit"><span>₹ 2,490</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Activity Block-->
                            <div class="activity-block-three">
                                <div class="inner-box clearfix">
                                    <div class="image-box">
                                        <a href="northindiadetail.html"><img src="images/resource/featured-image-64.jpg" alt="" title=""></a>
                                    </div>

                                    <div class="content-box">
                                        <div class="content">

                                            <h4><a href="northindiadetail.html">Coco Bodu Hithi Maldives</a></h4>

                                            <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>

                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><span class="icon flaticon-wall-clock"></span> Duration: 4 Days + 3 Nights</li>
                                                </ul>
                                            </div>
                                            <div class="links-box clearfix">
                                                <div class="link">
                                                    <a href="northindiadetail.html" class="theme-btn btn-style-four"><span class="btn-title">View Details</span></a>
                                                </div>
                                                <div class="link">
                                                    <div class="info-btn-box">
                                                        <div class="theme-btn info-btn"><span class="icon flaticon-information-1"></span></div>
                                                        <div class="info-panel">
                                                            <div class="panel-inner">
                                                                <div class="panel-title">Includes</div>
                                                                <ul class="panel-list">
                                                                    <li>Hotel pick-up/drop-off</li>
                                                                    <li>Free Life Vest</li>
                                                                    <li>Soft Drinks</li>
                                                                    <li>Seafood Barbecue</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pricing">
                                                    <div class="price">
                                                        <div class="price-title">From</div>
                                                        <div class="unit"><span>₹ 1,850</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Activity Block-->
                            <div class="activity-block-three">
                                <div class="inner-box clearfix">
                                    <div class="image-box">
                                        <a href="northindiadetail.html"><img src="images/resource/featured-image-65.jpg" alt="" title=""></a>
                                    </div>

                                    <div class="content-box">
                                        <div class="content">

                                            <h4><a href="northindiadetail.html">Birds’ Island in Turkish</a></h4>

                                            <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>

                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><span class="icon flaticon-wall-clock"></span> Duration: 4 Days + 3 Nights</li>
                                                </ul>
                                            </div>
                                            <div class="links-box clearfix">
                                                <div class="link">
                                                    <a href="northindiadetail.html" class="theme-btn btn-style-four"><span class="btn-title">View Details</span></a>
                                                </div>
                                                <div class="link">
                                                    <div class="info-btn-box">
                                                        <div class="theme-btn info-btn"><span class="icon flaticon-information-1"></span></div>
                                                        <div class="info-panel">
                                                            <div class="panel-inner">
                                                                <div class="panel-title">Includes</div>
                                                                <ul class="panel-list">
                                                                    <li>Hotel pick-up/drop-off</li>
                                                                    <li>Free Life Vest</li>
                                                                    <li>Soft Drinks</li>
                                                                    <li>Seafood Barbecue</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pricing">
                                                    <div class="price">
                                                        <div class="price-title">From</div>
                                                        <div class="unit"><span>₹ 2,490</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Activity Block-->
                            <div class="activity-block-three">
                                <div class="inner-box clearfix">
                                    <div class="image-box">
                                        <a href="northindiadetail.html"><img src="images/resource/featured-image-66.jpg" alt="" title=""></a>
                                    </div>

                                    <div class="content-box">
                                        <div class="content">

                                            <h4><a href="northindiadetail.html">Costa Victoria Cochin</a></h4>

                                            <p>We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>

                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><span class="icon flaticon-wall-clock"></span> Duration: 8 Days + 7 Nights</li>
                                                </ul>
                                            </div>
                                            <div class="links-box clearfix">
                                                <div class="link">
                                                    <a href="northindiadetail.html" class="theme-btn btn-style-four"><span class="btn-title">View Details</span></a>
                                                </div>
                                                <div class="link">
                                                    <div class="info-btn-box">
                                                        <div class="theme-btn info-btn"><span class="icon flaticon-information-1"></span></div>
                                                        <div class="info-panel">
                                                            <div class="panel-inner">
                                                                <div class="panel-title">Includes</div>
                                                                <ul class="panel-list">
                                                                    <li>Hotel pick-up/drop-off</li>
                                                                    <li>Free Life Vest</li>
                                                                    <li>Soft Drinks</li>
                                                                    <li>Seafood Barbecue</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pricing">
                                                    <div class="price">
                                                        <div class="price-title">From</div>
                                                        <div class="unit"><span>₹ 5,999</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Pagination-->
                            <div class="pagination-box text-right">
                                <ul class="styled-pagination">
                                    <li><a href="#" class="prev"><span class="icon flaticon-back"></span></a></li>
                                    <li><a href="#" class="active">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#" class="next"><span class="icon flaticon-next"></span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Widgets Side-->
                <div class="widgets-side col-lg-4 col-md-6 col-sm-12">
                    <div class="widgets-content">
                        <!--Widget-->

                        <div class="tour-widget destination-widget carousel-widget">
                            <div class="widget-inner">
                                <div class="tour-widget-title">
                                    <h4>Top Attraction</h4>
                                </div>
                                <div class="destination-carousel single-item-carousel owl-theme owl-carousel">
                                    <!--Destination Block-->
                                    <div class="destination-block-three">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image">
                                                    <a href="northindiadetail.html"><img src="images/resource/featured-image-60.jpg" alt="" title=""></a>
                                                </figure>
                                            </div>
                                            <div class="caption-box">
                                                <div class="inner">
                                                    <div class="price">₹2400</div>
                                                    <div class="title"><a href="northindiadetail.html">Solomon islands</a></div>
                                                    <div class="info"><span class="icon flaticon-wall-clock"></span> Duration: 4D + 5N</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Destination Block-->
                                    <div class="destination-block-three">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image">
                                                    <a href="northindiadetail.html"><img src="images/resource/featured-image-60.jpg" alt="" title=""></a>
                                                </figure>
                                            </div>
                                            <div class="caption-box">
                                                <div class="inner">
                                                    <div class="price">₹3500</div>
                                                    <div class="title"><a href="northindiadetail.html">Greece</a></div>
                                                    <div class="info"><span class="icon flaticon-wall-clock"></span> Duration: 7D + 5N</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Destination Block-->
                                    <div class="destination-block-three">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image">
                                                    <a href="northindiadetail.html"><img src="images/resource/featured-image-60.jpg" alt="" title=""></a>
                                                </figure>
                                            </div>
                                            <div class="caption-box">
                                                <div class="inner">
                                                    <div class="price">₹ 2400</div>
                                                    <div class="title"><a href="northindiadetail.html">Greece</a></div>
                                                    <div class="info"><span class="icon flaticon-wall-clock"></span> Duration: 4D + 5N</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="tour-widget single-booking-widget">
                            <div class="widget-inner">


                                <!--<div class="upper-info clearfix">
                                        <div class="price-info">
                                            
                                            <div class="p-title">Price</div>
                                            <div class="p-amount">$5,999 <span>/ Person</span></div>
                                        </div>
                                    </div>-->
                                <div class="default-form main-booking-form">
                                    <form method="post" action="#">
                                        <h5>Book Your Tour</h5>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="field-name" placeholder="Your Name" required="" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="field-name" placeholder="Phone" required="" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="field-name" placeholder="E-mail" required="" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <select class="custom-select-box" name="field-name">
                                                    <option>No. of Adults</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <select class="custom-select-box" name="field-name">
                                                    <option>No. of Children</option>
                                                    <option>01</option>
                                                    <option>02</option>
                                                    <option>03</option>
                                                    <option>04</option>
                                                    <option>05</option>
                                                </select>
                                            </div>
                                        </div>



                                        <!--<div class="form-group">
                                                <div class="field-label">Additional Services</div>
                                                <div class="field-inner">
                                                    <ul class="additional-services">
                                                        <li><div class="check-block"><input type="checkbox" id="check-1" name="add-service"><label for="check-1">Cooking</label></div></li>
                                                        <li><div class="check-block"><input type="checkbox" id="check-2" name="add-service"><label for="check-2">Driving</label></div></li>
                                                        <li><div class="check-block"><input type="checkbox" id="check-3" name="add-service"><label for="check-3">Sports</label></div></li>
                                                        <li><div class="check-block"><input type="checkbox" id="check-4" name="add-service"><label for="check-4">Fishing</label></div></li>
                                                    </ul>
                                                </div>
                                            </div>-->

                                        <br>



                                        <div class="form-group">
                                            <button type="submit" class="theme-btn"><span class="btn-title">Confirm Your Tour</span></button>
                                        </div>

                                    </form>

                                    <div class="instruction">Do you need suggestion pls contact our expert team.</div>
                                </div>
                            </div>
                        </div>

                        <!--Widget-->


                        <!--Widget-->
                        <div class="tour-widget reviews-widget">
                            <div class="widget-inner">
                                <!--Review Block-->
                                <div class="review-block">
                                    <div class="inner">

                                        <h5 class="rev-title">Any Questions?</h5>
                                        <div class="rev-text">Do not hesitage to give us a call. We are an expert team and we are happy to talk to you.</div>

                                        <div class="rev-info">
                                            <div class="name"><span class="icon flaticon-phone-call"></span><a href="tel:+97142682901" target="_blank"> Uae :+971 4268 2901</a></div>
                                            <div class="name"><span class="icon flaticon-phone-call"></span><a href="tel:+919995573232" target="_blank"> India :+91 999 557 3232</a></div>
                                            <div class="name"><span class="icon flaticon-message"></span><a href="info@best4utourism.com" target="_blank"> info@best4utourism.com</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!--Services Section-->
<!--About Section-->



<!--Activities Section-->


<!--Features Section-->



<!--Pricing Section-->


<!--Testimonials Section-->


<!--News Section-->


@include ('include.footer')

@endsection