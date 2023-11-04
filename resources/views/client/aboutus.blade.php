@extends ('layout.app')
@section ('content')


<!-- Main Header -->



<!--Search Popup-->


<!-- Hidden Navigation Bar -->

<!-- End / Hidden Bar -->


<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset('images/background/banner-1.jpg') }});"></div>

    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>About Us</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>

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
    <div class="bg-image-layer" style="background-image: url({{ asset('images/background/image-10.jpg') }});"></div>

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


<!-- Main Footer -->


@endsection