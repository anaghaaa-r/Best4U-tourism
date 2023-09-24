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
                                    <li><a href="{{ url('dubaispecialpackage') }}">Dubai Special Package</a></li>
                                    <li><a href="{{ url('blog') }}">Blog</a></li>
                                    <li class="current"><a href="{{ url('contactus') }}">Contact Us</a></li>
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
                <a href="{{ url('/') }}" title=""><img src="images/sticky-logo.png" alt="" title=""></a>
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
            <div class="nav-logo"><a href="{{ url('/') }}"><img src="images/nav-logo.png" alt="" title=""></a></div>
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
                <h1>Contact Us</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--About Section-->
<section class="contact-section">
    <div class="auto-container">


        <div class="info-container">
            <div class="row clearfix">
                <!--Info Block-->
                <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="flaticon-address"></span>
                        </div>
                        <div class="title-box">
                            <h4>Address</h4>
                            <div class="subtitle">UAE</div>
                        </div>
                        <div class="content-box">
                            <div class="text">Best 4 U Tourism L.L.C, <br>
                                Office No: 203 - 2nd Floor, Brass Building
                                Near Sharaf DG Metro<br> (Exit No:3),
                                Burdubai,
                                Dubai-UAE</div>
                        </div>

                    </div>
                </div>
                <!--Info Block-->
                <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="flaticon-address"></span>
                        </div>
                        <div class="title-box">
                            <h4>Address</h4>
                            <div class="subtitle">KERALA</div>
                        </div>
                        <div class="content-box">
                            <div class="text">National Residency Shopping Mall<br>
                                Metro Pillar No.450, Bank Junction<br> Edapally, Cochin -24</div>
                        </div>

                    </div>
                </div>
                <!--Info Block-->
                <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="flaticon-email-1"></span>
                        </div>
                        <div class="title-box">
                            <h4>Email</h4>
                            <div class="subtitle">For Ask Anything</div>
                        </div>
                        <div class="content-box">
                            <div class="text"><a href="mailto:info@best4utourism.com" target="_blank">info@best4utourism.com</a> <br> <a href="mailto:sales@best4utourism.com" target="_blank">sales@best4utourism.com</a></div>
                        </div>

                    </div>
                </div>
                <!--Info Block-->
                <div class="info-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="flaticon-phone-call"></span>
                        </div>
                        <div class="title-box">
                            <h4>Call us</h4>
                            <div class="subtitle">FOR ASK ANYTHING</div>
                        </div>
                        <div class="content-box">
                            <div class="text"><a href="tel:042682901" target="_blank">04 268 29 01</a><br>
                                <a href="tel:+971545865417" target="_blank">+971 54 586 5417</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="contact-container">
            <div class="row clearfix">
                <!--Form-->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="sec-title">
                            <h2>Send <strong>Your Message</strong></h2>
                            <div class="lower-text">Don’t Hesitate to Contact US</div>
                        </div>
                        <div class="default-form contact-form">
                            <form method="post" id="contact-form" action="#">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-label">Name</div>
                                        <div class="field-inner">
                                            <input type="text" name="username" placeholder="Your Name" required="" value="">
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-label">Email</div>
                                        <div class="field-inner">
                                            <input type="email" name="email" placeholder="Email Address" required="" value="">
                                        </div>
                                    </div>

                                    <!--<div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <div class="field-label">Subject</div>
                                            <div class="field-inner">
                                                <select class="custom-select-box" name="subject">
                                                    <option>Do you want to discuss about</option>
                                                    <option>Water Surfing</option>
                                                    <option>Yacht Racing</option>
                                                    <option>Boat Sailing</option>
                                                </select>
                                            </div>
                                        </div>-->

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-label">Message</div>
                                        <div class="field-inner">
                                            <textarea name="message" placeholder="Write your message..." required=""></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-three"><span class="btn-title">Send Your Message</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Map-->
                <div class="map-column col-lg-6 col-md-12 col-sm-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28866.777665592836!2d55.297185000000006!3d25.258903!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43c835d66973%3A0xadb22a142746ce7b!2sBest%20For%20You%20HR%20Consultancy!5e0!3m2!1sen!2sus!4v1694772339681!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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