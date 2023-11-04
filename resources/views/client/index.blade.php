@extends ('layout.app')
@section ('content')


<!-- Main Header -->






<!-- End Main Header -->

<!--Search Popup-->


<!-- Hidden Navigation Bar -->

<!-- End / Hidden Bar -->


<!-- Banner Section -->
<section class="banner-section banner-three">

    <div class="banner-carousel owl-theme owl-carousel">
        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer" style="background-image: url({{ asset('images/main-slider/1.jpg') }});"></div>
            <div class="auto-container">
                <div class="content-box">

                    <div class="content clearfix">
                        <div class="inner">
                            <h1>Feel the world around you!</h1>
                            <div class="text">Sometimes, even a scene may make enlighten you. It is the philosophy of
                                journey. </div>
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
                            <div class="text">Foresee the pain and trouble that are bound to ensue and equal fail in
                                their duty through weakness. </div>
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
                            <div class="text">Dubai is the most populous city in the UAE and the capital of the Emirate
                                of Dubai</div>
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


<section class="featured-services">
    <div class="image-layer" style="background-image: url({{ asset('images/background/image-4.jpg') }});"></div>
    <div class="auto-container">
        <div class="sec-title-two centered with-border">
            <div class="upper-text">Experience in UAE </div>
            <h2>Experience in <strong>UAE</strong></h2>
            <div class="separator"></div>
        </div>
        <div class="row clearfix">
            <!--Featured Service-->
            <div class="featured-service-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="2000ms">
                    <div class="icon-box">
                        <img src="{{ asset('images/dubai.png') }}">
                    </div>
                    <div class="content-box">
                        <div class="title-box">
                            <h4>Dubai Things to Do</h4>
                            <div class="subtitle">Visit Dubai & Experience some thing New</div>
                        </div>
                        <div class="text">Welcome to Amazing City Dubai. Explore top things to do in Dubai & best
                            itineraries to have a perfect holiday to Dubai. </div>
                    </div>
                    <div class="link-box">
                        <a href="#" class="theme-btn btn-style-five">
                            <div class="btn-title">Know More</div>
                        </a>
                    </div>
                </div>
            </div>
            <!--Featured Service-->
            <div class="featured-service-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="2000ms">
                    <div class="icon-box">
                        <img src="{{ asset('images/sharjah.png') }}">
                    </div>
                    <div class="content-box">
                        <div class="title-box">
                            <h4>Sharjah Things To Do</h4>
                            <div class="subtitle">Explore Emirati Culture & heritage</div>
                        </div>
                        <div class="text">We've created many tours of Sharjah's cultural attractions, and an array of
                            heritage-inspired experiences give visitors a unique insight into UAE</div>
                    </div>
                    <div class="link-box">
                        <a href="#" class="theme-btn btn-style-five">
                            <div class="btn-title">Know More</div>
                        </a>
                    </div>
                </div>
            </div>
            <!--Featured Service-->
            <div class="featured-service-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="800ms" data-wow-duration="2000ms">
                    <div class="icon-box">
                        <img src="{{ asset('images/abudhabi.png') }}">
                    </div>
                    <div class="content-box">
                        <div class="title-box">
                            <h4>Abu Dhabi Things to Do</h4>
                            <div class="subtitle">Something New and Unique</div>
                        </div>
                        <div class="text">We don’t wait with what already there in Abu Dhabi that anyone knows. We
                            search new and novel experiencesin every nook and corner of Abu Dhabi with self-experience.
                        </div>
                    </div>
                    <div class="link-box">
                        <a href="#" class="theme-btn btn-style-five">
                            <div class="btn-title">Know More</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--About Section-->



<!--Services Section-->


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
                        <div class="image-layer" style="background-image: url({{ asset('storage/' . $destination->image) }});">
                        </div>
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ url('/destination', ['id' => $destination->id]) }}"><img src="{{ asset('storage/' . $destination->image) }}" alt="" title=""></a>
                            </figure>
                        </div>
                        <div class="caption-box">
                            <h4 class="title">{{ $destination->title }}</h4>
                        </div>
                        <div class="hover-box">
                            <div class="hover-inner">
                                <div class="hover-content">
                                    <!--<div class="tour-info">14 Countries  -  46 Tours</div>-->
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
                            <a href="{{ route('tourism.package', ['tourismId' => $package->tourism->id, 'packageId' => $package->id]) }}"><img src="{{ asset('storage/' . $package->thumbnail) }}" alt="" title=""></a>
                        </div>

                        <div class="content-box">
                            <div class="content">

                                <h4><a href="{{ route('tourism.package', ['tourismId' => $package->tourism->id, 'packageId' => $package->id]) }}">{{ $package->title }}</a></h4>
                                <p>{{ $package->tour_description }}</p>

                                <div class="info">
                                    <ul class="clearfix">
                                        <li><span class="icon flaticon-wall-clock"></span> Duration: {{ $package->dur5ation }}</li>
                                    </ul>
                                </div>
                                <div class="links-box clearfix">
                                    <div class="link">
                                        <a href="{{ route('tourism.package', ['tourismId' => $package->tourism->id, 'packageId' => $package->id]) }}" class="theme-btn btn-style-four"><span class="btn-title">Online
                                                Booking</span></a>
                                    </div>
                                    <div class="link">
                                        <div class="info-btn-box">
                                            <div class="theme-btn info-btn"><span class="icon flaticon-information-1"></span></div>
                                            <div class="info-panel">
                                                <div class="panel-inner">
                                                    <div class="panel-title">Includes</div>
                                                    <ul class="panel-list">
                                                        @foreach (json_decode($package->package_includes) as $key => $include)
                                                        @if ($include == "null")
                                                        <p>NA</p>
                                                        @else
                                                        @if ($key < 4) 
                                                        <li>{{ str_replace(['"', '\\r', '\\n'], '', $include) }}</li>
                                                        @endif
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div class="pricing">
                                            <div class="price">
                                                <div class="price-title">From</div>
                                                <div class="unit"><span>₹ 2450 /</span> Person</div>
                                            </div>
                                        </div>-->
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
                            <a href="{{ url('/service-detail', ['id' => $service->id]) }}"><img src="{{ asset('storage/' . $service->thumbnail) }}" alt="" title=""></a>
                        </div>

                        <div class="lower-box">
                            <div class="lower-content">


                                <h4><a href="{{ url('/service-detail', ['id' => $service->id]) }}">{{ $service->service }}</a></h4>
                                <div class="cat">{{ $service->description }}</div>
                                <div class="link-box">
                                    <a href="{{ url('/service-detail', ['id' => $service->id]) }}" class="default-link">
                                        <span class="icon flaticon-logout"></span> <span class="link-text">Know
                                            More</span>
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
                            <div class="image"><img src="{{ asset('images/resource/author-image-1.jpg') }}" alt="" title=""></div>
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
                            <div class="text">The holiday of a life time our gulet adventure in the Greek Islands was
                                without doubt our favourite trip.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="{{ asset('images/resource/author-image-2.jpg') }}" alt="" title=""></div>
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
                            <div class="text">I first rented a yacht from Sailing in 1996. since then I have spent many
                                holidays Sailing yachts with my family.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="{{ asset('images/resource/author-image-3.jpg') }}" alt="" title=""></div>
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
                            <div class="text">The holiday of a life time our gulet adventure in the Greek Islands was
                                without doubt our favourite trip.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="{{ asset('images/resource/author-image-1.jpg') }}" alt="" title=""></div>
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
                            <div class="text">The holiday of a life time our gulet adventure in the Greek Islands was
                                without doubt our favourite trip.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="{{ asset('images/resource/author-image-2.jpg') }}" alt="" title=""></div>
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
                            <div class="text">I first rented a yacht from Sailing in 1996. since then I have spent many
                                holidays Sailing yachts with my family.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="{{ asset('images/resource/author-image-3.jpg') }}" alt="" title=""></div>
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
                            <div class="text">The holiday of a life time our gulet adventure in the Greek Islands was
                                without doubt our favourite trip.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="{{ asset('images/resource/author-image-1.jpg') }}" alt="" title=""></div>
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
                            <div class="text">The holiday of a life time our gulet adventure in the Greek Islands was
                                without doubt our favourite trip.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="{{ asset('images/resource/author-image-2.jpg') }}" alt="" title=""></div>
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
                            <div class="text">I first rented a yacht from Sailing in 1996. since then I have spent many
                                holidays Sailing yachts with my family.</div>
                        </div>
                    </div>
                </div>
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="content">
                            <div class="icon-box"><span class="flaticon-quote-1"></span></div>
                            <div class="image"><img src="{{ asset('images/resource/author-image-3.jpg') }}" alt="" title=""></div>
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
                            <div class="text">The holiday of a life time our gulet adventure in the Greek Islands was
                                without doubt our favourite trip.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="fluid-section">
    <div class="image-layer left-layer" style="background-image: url(images/background/image-6.jpg);"></div>
    <div class="image-layer right-layer" style="background-image: url(images/background/image-7.jpg);"></div>
    <div class="shapes">
        <div class="shape one"></div>
        <div class="shape two"></div>
    </div>
    <div class="outer-container clearfix">
        <!--Column-->
        <div class="column left-column clearfix">
            <div class="image-layer left-layer" style="background-image: url(images/background/image-6.jpg);"></div>
            <div class="inner">
                <div class="content">
                    <div class="subtitle">trouble finding what you need</div>
                    <h2>Call Our Experts Now</h2>
                    <div class="link-box">
                        <a href="tel:+97142682901" target="_blank" class="theme-btn btn-style-two">
                            <div class="btn-title">+971 4268 2901</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--Column-->
        <div class="column right-column clearfix">
            <div class="image-layer left-layer" style="background-image: url(images/background/image-7.jpg);"></div>
            <div class="inner">
                <div class="content">
                    <div class="subtitle">Plan to visit Dubai</div>
                    <h2>DUBAI SPECIAL PACKAGE</h2>
                    <div class="link-box">
                        <a href="https://api.whatsapp.com/send?phone=97142682901?&text=Hello, I would like to know more about your DUBAI SPECIAL PACKAGE" target="_blank" class="theme-btn btn-style-two">
                            <div class="btn-title">Whatsapp Now</div>
                        </a>
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
                <a href="{{ url('/blog') }}" class="theme-btn btn-style-five">
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
                                    <a href="blog-single.html"><img src="{{ asset('images/resource/news-image-1.jpg') }}" alt="" title=""></a>
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
                                <div class="text">When our power of choice is untrammelled and when nothing prevents our
                                    being able to do what we like best, every pleasure.</div>
                                <div class="link-box">
                                    <a href="blog-single.html" class="default-link">
                                        <span class="icon flaticon-logout"></span> <span class="link-text">Continue
                                            Reading</span>
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
                                    <a href="blog-single.html"><img src="{{ asset('images/resource/news-image-2.jpg') }}" alt="" title=""></a>
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
                                <div class="text">When our power of choice is untrammelled and when nothing prevents our
                                    being able to do what we like best, every pleasure.</div>
                                <div class="link-box">
                                    <a href="blog-single.html" class="default-link">
                                        <span class="icon flaticon-logout"></span> <span class="link-text">Continue
                                            Reading</span>
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
                            <h4>Book a Service</h4>
                            <div class="subtitle">Book our service now</div>
                        </div>
                        <div class="default-form subscribe-form">


                            <form method="post" action="{{ route('home.booking') }}" id="enquiry-form">
                                @csrf
                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="text" name="name" id="name" placeholder="Your Name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="text" name="mobile" id="mobile" placeholder="Mobile">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="field-inner">
                                        <input type="email" name="email" id="email" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="theme-btn btn-style-three"><span class="btn-title">Book
                                            Now</span></button>
                                            <p id="submit-message"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Footer -->


@endsection

<script src="{{ asset('custom/custom-enquiry.js') }}"></script>