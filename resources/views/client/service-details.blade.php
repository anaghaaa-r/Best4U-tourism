@extends ('layout.app')
@section ('content')

<!-- Main Header -->
<header class="main-header header-style-one">
    <div class="logo-desktop">
        <div class="logo"><a href="{{ url('/') }}" title="Best for you - Tourism L.L.C"><img src="{{ asset('images/logo.png') }}" alt="Best for you - Tourism L.L.C" title="Best for you - Tourism L.L.C"></a></div>
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
                    <div class="logo"><a href="{{ url('/') }}" title="Best for you -  Tourism L.L.C"><img src="{{ asset('images/logo-two.png') }}" alt="Best for you -  Tourism L.L.C" title="Best for you -  Tourism L.L.C"></a></div>
                </div>
                <div class="nav-content clearfix">
                    <div class="nav-outer clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="{{ url('/') }}">Home</a>

                                    </li>
                                    <li><a href="{{ ('/aboutus') }}">About Us</a>

                                    </li>
                                    <li class="dropdown current"><a href="#">Services</a>
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
<section class="page-banner">
    <div class="image-layer" style="background-image: url('{{ asset('images/background/banner-1.jpg') }}');"></div>

    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>{{ $type->service }}</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">Services</a></li>
                        <li>{{ $type->service }}</li>
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
                        <div class="tour-details">

                            <!--<div class="info-title clearfix">
                                    <div class="left-info">
                                        <h3>Visa</h3>
                                        
                                    </div>
                                    
                                </div>-->

                            <div class="main-image">
                                <img src="{{ asset('storage/' . $type->thumbnail) }}" alt="" title="">
                            </div>

                            <div class="text-block">
                                <h4>{{ $type->service }}</h4>
                                <p>{{ $type->description }}</p>
                            </div>





                            <!--Included Material-->


                            <!--Facility-->

                        </div>

                    </div>
                </div>

                <!--Widgets Side-->
                <div class="widgets-side col-lg-4 col-md-6 col-sm-12">
                    <div class="widgets-content">
                        <!--Widget-->
                        <div class="tour-widget single-booking-widget">
                            <div class="widget-inner">

                                <div class="default-form main-booking-form">
                                    <form method="post" action="#">
                                        <h5>{{ $type->service }}</h5>

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
                                                <input type="email" name="field-name" placeholder="E-mail" required="" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <textarea type="comments" name="field-name" placeholder="Comments"></textarea>
                                            </div>
                                        </div>






                                        <div class="form-group">
                                            <button type="submit" class="theme-btn"><span class="btn-title">Submit</span></button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>

                        <!--Widget-->


                        <!--Widget-->


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