@extends ('layout.app')
@section ('content')


<!-- Main Header -->
<header class="main-header header-style-one">
    <div class="logo-desktop">
        <div class="logo"><a href="{{ url('/') }}" title="Best for you - Tourism L.L.C"><img src="images/logo.png" alt="Best for you - Tourism L.L.C" title="Best for you - Tourism L.L.C"></a></div>
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
                    <div class="logo"><a href="{{ url('/') }}" title="Best for you -  Tourism L.L.C"><img src="images/logo-two.png" alt="Best for you -  Tourism L.L.C" title="Best for you -  Tourism L.L.C"></a></div>
                </div>
                <div class="nav-content clearfix">
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="{{ url('/') }}">Home</a>

                                    </li>
                                    <li><a href="{{ ('/aboutus') }}">About Us</a>

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
                                            @foreach ($destinations as $destination)

                                            <li><a href="{{ url('/destination', ['id' => $destination->id]) }}">{{ $destination->title }}</a></li>

                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Tourism Packages</a>
                                        <ul>
                                            @foreach ($tourismpackages as $tourism)

                                            <li><a href="{{ url('/tourismpackage', ['id' => $tourism->id]) }}">{{ $tourism->title }}</a></li>

                                            @endforeach
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('/dubaispecialpackage') }}">Dubai Special Package</a></li>
                                    <li><a href="{{ url('/blog')}}">Blog</a></li>
                                    <li><a href="{{ url('/contactus') }}">Contact Us</a></li>
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
                <a href="{{ url('/') }}" title=""><img src="{{ asset('images/sticky-logo.png') }}" alt="" title=""></a>
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
            <div class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset('images/nav-logo.png') }}" alt="" title=""></a></div>
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
<section class="banner-section banner-one">

    <div class="banner-carousel owl-theme owl-carousel">
        <!-- Slide Item -->
        <div class="slide-item content-right">
            <div class="image-layer" style="background-image: url({{ asset('images/main-slider/1.jpg') }});"></div>
            <div class="auto-container">
                <div class="content-box">

                    <div class="content clearfix">
                        <div class="inner">
                            <h1>Feel the world around you!</h1>
                            <div class="text">Sometimes, even a scene may make enlighten you. It is the philosophy of journey. </div>
                            <div class="links-box clearfix">
                                <a href="#" class="theme-btn btn-style-two">
                                    <div class="btn-title">Explore More</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url({{ asset('images/main-slider/2.jpg') }});"></div>
            <div class="auto-container">
                <div class="content-box">

                    <div class="content clearfix">
                        <div class="inner">
                            <h1>Find a good hotel within your budget</h1>
                            <div class="text">Foresee the pain and trouble that are bound to ensue and equal fail in their duty through weakness. </div>
                            <div class="links-box clearfix">
                                <a href="#" class="theme-btn btn-style-two">
                                    <div class="btn-title">Explore More</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url({{ asset('images/main-slider/3.jpg') }});"></div>
            <div class="auto-container">
                <div class="content-box">

                    <div class="content clearfix">
                        <div class="inner">
                            <h1>Explore Dubai Never Before</h1>
                            <div class="text">Dubai is the most populous city in the UAE and the capital of the Emirate of Dubai</div>
                            <div class="links-box clearfix">
                                <a href="#" class="theme-btn btn-style-two">
                                    <div class="btn-title">Explore More</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Banner Section -->

<!--About Section-->
<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-lg-7 col-md-12 col-sm-12">
                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="upper-row clearfix">
                        <div class="image-box">
                            <figure class="image"><img src="{{ asset('images/resource/about-image-1.jpg') }}" alt="" title=""></figure>
                        </div>
                        <div class="content">
                            <div class="sec-title">
                                <div class="upper-text">Who We Are</div>
                                <h3>Best for you Tourism</h3>
                            </div>
                            <div class="video-link">

                                <div class="text">Feel the world around you! Sometimes, even a scene may make enlighten you. It is the philosophy of journey. Today, the world seems altered after the devastating effect of Covid-19. It comes with newer insights, a changed worldview, and a fresh set of thoughts to look up to the world. Experience the world.</div>
                            </div>
                        </div>
                    </div>
                    <div class="lower-content">

                        <div class="link-box">
                            <a href="#" class="default-link">
                                <span class="icon flaticon-logout"></span> <span class="link-text">More About Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!--Right Column-->
            <div class="right-col col-lg-5 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="book-form-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="title">
                            <h4>Book A Service</h4>
                        </div>
                        <div class="default-form booking-form">
                            <form method="post" action="#">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-label">Your Name</div>
                                        <div class="field-inner">
                                            <input type="text" name="field-name" placeholder="" required="" value="">
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-label">Phone Number</div>
                                        <div class="field-inner">
                                            <input type="text" name="field-name" placeholder="" required="" value="">
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-label">Date</div>
                                        <div class="field-inner">
                                            <input class="datepicker" type="text" name="text" placeholder="" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-label">No.of Adult</div>
                                        <div class="field-inner">
                                            <div class="quantity-spinner">
                                                <div class="inner-box clearfix">
                                                    <button type="button" class="minus">-</button>
                                                    <input type="text" name="product" value="1" class="prod_qty">
                                                    <button type="button" class="plus">+</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-label">Service Needed</div>
                                        <div class="field-inner">
                                            <select class="custom-select-box" name="field-name">
                                                <option>Visa</option>
                                                <option>Ticketing</option>
                                                <option>Travel Insurance</option>
                                                <option>Hotel Booking</option>
                                                <option>Conveyance</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-three"><span class="btn-title">Start Booking</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!--Services Section-->
<section class="services-section">
    <div class="title-box">
        <div class="image-layer" style="background-image: url({{ asset('images/background/image-1.jpg') }});"></div>
        <div class="auto-container">
            <div class="sec-title centered light with-border">
                <div class="upper-text">What We Do For You</div>
                <h2>Experience Our <strong>Services</strong></h2>
                <div class="separator"></div>
            </div>
        </div>
    </div>
    <div class="auto-container">
        <div class="carousel-outer">
            <!--Services Carousel-->
            <div class="services-carousel owl-theme owl-carousel">

                @foreach ($services as $service)

                <!--Service Block-->
                <div class="service-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="{{ asset('storage/' . $service->thumbnail) }}" alt="" title=""></a>
                        </div>

                        <div class="lower-box">
                            <div class="lower-content">


                                <h4><a href="#">{{ $service->service }}</a></h4>
                                <div class="cat">{{ $service->description }}</div>
                                <div class="link-box">
                                    <a href="{{ url('/service-detail', ['id' => $service->id]) }}" class="default-link">
                                        <span class="icon flaticon-logout"></span> <span class="link-text">Know More</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach


            </div><!--End Services Carousel-->

        </div>
    </div>
</section>

<section class="destinations-two">

    <div class="map-layer" style="background-image: url({{ asset('images/background/map-image.png') }});"></div>

    <div class="auto-container">
        <div class="sec-title centered">
            <h2>Popular <strong>Destinations</strong></h2>
            <div class="lower-text">Where do you want to go?</div>
        </div>

        <div class="destinations-box">
            <div class="outer-box clearfix">

                @foreach ($destinations as $destination)

                <!--Destination Block-->
                <div class="destination-block-two">
                    <div class="inner-box">
                        <div class="image-layer" style="background-image: url({{ asset('storage/' . $destination->image) }});"></div>
                        <div class="image-box">
                            <figure class="image">
                                <a href="#"><img src="{{ asset('storage/' . $destination->image) }}" alt="" title=""></a>
                            </figure>
                        </div>
                        <div class="caption-box">
                            <h4 class="title">{{ $destination->title }}</h4>
                        </div>
                        <div class="hover-box">
                            <div class="hover-inner">
                                <div class="hover-content">
                                    <!-- <div class="tour-info">14 Countries - 46 Tours</div> -->
                                    <h4 class="title">{{ $destination->title }}</h4>
                                    <div class="link-box">
                                        <a href="{{ url('/destination', ['id' => $destination->id]) }}" class="theme-btn btn-style-two">
                                            <div class="btn-title">View All Tours</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach


            </div>
        </div>

        <!--Packages-->

    </div>
</section>


<!--Activities Section-->
<section class="activities-section">
    <div class="auto-container">
        <div class="sec-title centered with-border">
            <div class="upper-text">Best Tour Packages </div>
            <h2>Tourism <strong>Packages </strong></h2>
            <div class="separator"></div>
        </div>
        <div class="carousel-outer">
            <div class="activity-carousel owl-theme owl-carousel">

                @foreach ($packages as $package)
                <!--Activity Block-->
                <div class="activity-block">
                    <div class="inner-box clearfix">
                        <div class="image-box">
                            <!-- <div class="offer-info"><span>-15%</span></div> -->
                            <a href="northindiadetail.html"><img src="{{ asset('storage/' . $package->thumbnail) }}" alt="" title=""></a>
                        </div>

                        <div class="content-box">
                            <div class="content">

                                <h4><a href="#">{{ $package->title }}</a></h4>
                                <p>{!! nl2br($package->tour_description) !!} </p>

                                <div class="info">
                                    <ul class="clearfix">
                                        <li><span class="icon flaticon-wall-clock"></span> Duration: {{ $package->duration }}</li>
                                        <!-- <li><span class="icon flaticon-user-3"></span> Age: 14+ Only</li> -->
                                    </ul>
                                </div>
                                <div class="links-box clearfix">
                                    <div class="link">
                                        <a href="#" class="theme-btn btn-style-four"><span class="btn-title">Online Booking</span></a>
                                    </div>
                                    <div class="link">
                                        <div class="info-btn-box">
                                            <div class="theme-btn info-btn"><span class="icon flaticon-information-1"></span></div>
                                            <div class="info-panel">
                                                <div class="panel-inner">
                                                    <div class="panel-title">Includes</div>
                                                    <ul class="panel-list">
                                                        @foreach (json_decode($package->package_includes) as $include)
                                                        @if ($include == "null")
                                                        <p></p>
                                                        @else
                                                        <li>{{ str_replace(['"', '\\r', '\\n'], '', $include) }}</li>
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing">
                                        <div class="price">
                                            <div class="price-title">From</div>
                                            <div class="unit"><span>{{ $package->price }} /</span> Person</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

        <!-- <div class="see-all clearfix">
            <a href="#" class="theme-btn btn-style-five">
                <div class="btn-title">All Packages</div>
            </a>
        </div> -->
    </div>
</section>

<!--Features Section-->
<section class="features-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Feature-->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="octagonWrap">
                            <div class="octagon"></div>
                        </div>
                        <span class="icon flaticon-hand-shake"></span>
                    </div>
                    <div class="content">
                        <h4>PACKUP YOUR
                            BACKPACK
                            AND
                            FORGET
                            EVERYTHING
                            FOR AN
                            EXPLORATION</h4>

                        <div class="link-box">
                            <a href="#" class="default-link">
                                <span class="icon flaticon-logout"></span> <span class="link-text">Know More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature-->
            <div class="feature-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="octagonWrap">
                            <div class="octagon"></div>
                        </div>
                        <span class="icon flaticon-boat-race"></span>
                    </div>
                    <div class="content">
                        <h4>WORLD CLASS QUALITY
                            SERVICE ON AMAZINGLY
                            SMALL PRICE TAG</h4>

                        <div class="link-box">
                            <a href="#" class="default-link">
                                <span class="icon flaticon-wallet"></span> <span class="link-text">Know More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Feature-->
            <div class="feature-block col-lg-4 col-md-12 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <div class="octagonWrap">
                            <div class="octagon"></div>
                        </div>
                        <span class="icon flaticon-location"></span>
                    </div>
                    <div class="content">
                        <h4>WITH US
                            WORLD
                            EXPLORATION
                            IS AS SIMPLE
                            AS MAKING A
                            COFFEE</h4>

                        <div class="link-box">
                            <a href="#" class="default-link">
                                <span class="icon flaticon-logout"></span> <span class="link-text">Know More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Pricing Section-->


<!--Testimonials Section-->
<section class="testimonials-section">
    <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div>
    <div class="auto-container">
        <div class="sec-title centered light with-border">
            <div class="upper-text">Testimonials</div>
            <h2>Words from <strong>Clients</strong></h2>
            <div class="separator"></div>
        </div>
    </div>
    <div class="carousel-container">
        <div class="carousel-box">
            <div class="testimonial-carousel owl-theme owl-carousel">
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="images/resource/author-image-1.jpg" alt="" title=""></div>
                            <div class="info">
                                <h5>Noah Oliver</h5>
                                <div class="designation">Cruising To The Cyclades</div>
                            </div>
                            <div class="rating">
                                <div class="curve"></div>
                                <div class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="text">The holiday of a life time our gulet adventure in the Greek Islands was without doubt our favourite trip.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="images/resource/author-image-2.jpg" alt="" title=""></div>
                            <div class="info">
                                <h5>Chris Bannan</h5>
                                <div class="designation">Netherland, 2019</div>
                            </div>
                            <div class="rating">
                                <div class="curve"></div>
                                <div class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="text">I first rented a yacht from Sailing in 1996. since then I have spent many holidays Sailing yachts with my family.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="images/resource/author-image-3.jpg" alt="" title=""></div>
                            <div class="info">
                                <h5>Noah Oliver</h5>
                                <div class="designation">Cruising To The Cyclades</div>
                            </div>
                            <div class="rating">
                                <div class="curve"></div>
                                <div class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="text">The holiday of a life time our gulet adventure in the Greek Islands was without doubt our favourite trip.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="images/resource/author-image-1.jpg" alt="" title=""></div>
                            <div class="info">
                                <h5>Noah Oliver</h5>
                                <div class="designation">Cruising To The Cyclades</div>
                            </div>
                            <div class="rating">
                                <div class="curve"></div>
                                <div class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="text">The holiday of a life time our gulet adventure in the Greek Islands was without doubt our favourite trip.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="images/resource/author-image-2.jpg" alt="" title=""></div>
                            <div class="info">
                                <h5>Chris Bannan</h5>
                                <div class="designation">Netherland, 2019</div>
                            </div>
                            <div class="rating">
                                <div class="curve"></div>
                                <div class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="text">I first rented a yacht from Sailing in 1996. since then I have spent many holidays Sailing yachts with my family.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="images/resource/author-image-3.jpg" alt="" title=""></div>
                            <div class="info">
                                <h5>Noah Oliver</h5>
                                <div class="designation">Cruising To The Cyclades</div>
                            </div>
                            <div class="rating">
                                <div class="curve"></div>
                                <div class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="text">The holiday of a life time our gulet adventure in the Greek Islands was without doubt our favourite trip.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="images/resource/author-image-1.jpg" alt="" title=""></div>
                            <div class="info">
                                <h5>Noah Oliver</h5>
                                <div class="designation">Cruising To The Cyclades</div>
                            </div>
                            <div class="rating">
                                <div class="curve"></div>
                                <div class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="text">The holiday of a life time our gulet adventure in the Greek Islands was without doubt our favourite trip.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="images/resource/author-image-2.jpg" alt="" title=""></div>
                            <div class="info">
                                <h5>Chris Bannan</h5>
                                <div class="designation">Netherland, 2019</div>
                            </div>
                            <div class="rating">
                                <div class="curve"></div>
                                <div class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="text">I first rented a yacht from Sailing in 1996. since then I have spent many holidays Sailing yachts with my family.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="images/resource/author-image-3.jpg" alt="" title=""></div>
                            <div class="info">
                                <h5>Noah Oliver</h5>
                                <div class="designation">Cruising To The Cyclades</div>
                            </div>
                            <div class="rating">
                                <div class="curve"></div>
                                <div class="rate">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            </div>
                            <div class="text">The holiday of a life time our gulet adventure in the Greek Islands was without doubt our favourite trip.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--News Section-->
<section class="news-section">
    <div class="auto-container">
        <div class="title-row clearfix">
            <div class="sec-title with-border">
                <div class="upper-text">News & Updates</div>
                <h2>Latest From <strong>Blog</strong></h2>
                <div class="separator"></div>
            </div>
            <div class="link-box">
                <a href="{{ url('/blog')}}" class="theme-btn btn-style-five">
                    <div class="btn-title">Read All news</div>
                </a>
            </div>
        </div>
        <div class="row clearfix">
            <!--News Column-->
            <div class="news-column col-xl-8 col-lg-7 col-md-12">
                <div class="inner">
                    <!--News Block-->
                    <div class="news-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-single.html"><img src="images/resource/news-image-1.jpg" alt="" title=""></a>
                                </figure>
                                <div class="post-date"><span class="day">23</span><span class="month">Nov</span></div>
                            </div>
                            <div class="content">
                                <div class="meta-info">
                                    <ul class="clearfix">
                                        <li>
                                            <span class="icon fa fa-folder-open"></span>
                                            <a href="blog-single.html">Best for you Stories</a>
                                        </li>

                                    </ul>
                                </div>
                                <h4><a href="blog-single.html">The Top 20 Honeymoon Destinations</a></h4>
                                <div class="text">When our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure.</div>
                                <div class="link-box">
                                    <a href="blog-single.html" class="default-link">
                                        <span class="icon flaticon-logout"></span> <span class="link-text">Continue Reading</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image">
                                    <a href="blog-single.html"><img src="images/resource/news-image-2.jpg" alt="" title=""></a>
                                </figure>
                                <div class="post-date"><span class="day">23</span><span class="month">Nov</span></div>
                            </div>
                            <div class="content">
                                <div class="meta-info">
                                    <ul class="clearfix">
                                        <li>
                                            <span class="icon fa fa-folder-open"></span>
                                            <a href="blog-single.html">Best for you Stories</a>
                                        </li>

                                    </ul>
                                </div>
                                <h4><a href="blog-single.html">Best Places To Visit In India</a></h4>
                                <div class="text">When our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure.</div>
                                <div class="link-box">
                                    <a href="blog-single.html" class="default-link">
                                        <span class="icon flaticon-logout"></span> <span class="link-text">Continue Reading</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Form Column-->
            <div class="form-column col-xl-4 col-lg-5 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="subscribe-form-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="title">
                            <h4>Mail Us</h4>
                            <div class="subtitle">Mail us and get latest updates</div>
                        </div>
                        <div class="default-form subscribe-form">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="text" name="field-name" placeholder="Your Name" required="" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="email" name="field-name" placeholder="Email Address" required="" value="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-style-three"><span class="btn-title">Mail Us</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include ('include.footer')



@endsection