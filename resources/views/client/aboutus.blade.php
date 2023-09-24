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
                                    <li class="current"><a href="{{ url('/aboutus') }}">About Us</a>

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
                                    <li><a href="{{ url('dubaispecialpackage') }}">Dubai Special Package</a></li>
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
                <h1>About Us</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>

                        <li>About Us</li>
                    </ul>
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
            <div class="left-col col-lg-12 col-md-12 col-sm-12">
                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="upper-row clearfix">
                        <div class="image-box">
                            <figure class="image"><img src="images/resource/about-image-1.jpg" alt="" title=""></figure>
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

                </div>
            </div>

            <div class="text-block">
                <h4>What
                    We Are?</h4>
                <p>BEST FOR YOU- LLC has been a
                    limited liability company based
                    out Dubai, UAE in 2011. We specialize
                    in Tourism and Visa related
                    services focused on UAE. With
                    the increasing demand for global
                    customers, we have extended
                    our service across the world. We
                    provide Visas, Holiday Packages,
                    Study Trip, and many more various
                    destinations.</p>
            </div>


            <div class="text-block">
                <h4>Why More People Preferd us</h4>
                <p>To be precise, everyone would like to make their trip hassle-free
                    and comfortable as well. Likewise, pricing is another critical
                    factor in choosing a tourism service provider. We always keep the
                    stability and work spirit providing the best for the client for a logically
                    reasonable price. We do our job with utmost sincerity and
                    pleasure.</p>
            </div>


            <div class="text-block">
                <h4>Our Philosophy</h4>
                <h5>#MakeYouSmile</h5>
                <p>BEST FOR YOU a self-motivated
                    company with full
                    energy and desire to deliver
                    the best for the clients. A
                    bunch of young talented
                    professionals who are always
                    at your service.</p>
            </div>

            <!--Right Column-->


        </div>
    </div>
</section>


<!--Services Section-->
<!--About Section-->
<section class="about-section-three">
    <div class="bg-image-layer" style="background-image: url(images/background/image-10.jpg);"></div>

    <div class="auto-container">
        <div class="content-outer clearfix">
            <div class="content-inner">
                <div class="video-link wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2500ms">
                    <a href="https://www.youtube.com/watch?v=vd1cZb5M-k8" class="theme-btn lightbox-image"><span class="icon flaticon-media-play-symbol"></span></a>
                </div>
                <h2>“This is the right time to take a Chilled Break
                    Just get to the Seat it’s opened for you
                    ”</h2>
                <!--<div class="info">
                        <div class="name">Justin Homerey</div>
                        <div class="designation">CEO &amp; Founder</div>
                    </div>
                    <div class="signature">
                        <img src="images/resource/signature.png" alt="" title="">
                    </div>-->
            </div>
        </div>

    </div>
</section>


<!--Activities Section-->


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

<section class="subscribe-section style-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
    <div class="auto-container">
        <div class="inner">
            <div class="title">
                <h4>Mail us for Latest Offers</h4>
                <div class="subtitle">>Mail us & Get Updates in Your Inbox </div>
            </div>
            <div class="default-form subscribe-form-two">
                <form method="post" action="#">
                    <div class="row clearfix">
                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="text" name="field-name" placeholder="Your Name" required="" value="">
                            </div>
                        </div>

                        <div class="form-group col-lg-4 col-md-6 col-sm-12">
                            <div class="field-inner">
                                <input type="email" name="field-name" placeholder="Email Address" required="" value="">
                            </div>
                        </div>

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">
                            <button type="submit" class="theme-btn btn-style-three"><span class="btn-title">Mail us Now</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--Testimonials Section-->


<!--News Section-->


@include ('include.footer')


@endsection