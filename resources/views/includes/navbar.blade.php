<header class="main-header header-style-three">
    <!-- Header Top -->
    <div class="header-top header-top-three">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="top-right clearfix">

                    <div class="social-links">
                        <ul class="clearfix">
                            <li><a href="https://www.facebook.com/best4utourism" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            <li><a href="https://www.youtube.com/@bestforyoutourism4368" target="_blank"><span class="fab fa-youtube"></span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="contact-text">
                    <span class="icon fab fa-whatsapp"></span>
                    <span class="txt">Call or WhatsApp us : <a href="https://api.whatsapp.com/send?phone=97142682901?&text=Hello, I would like to know more about your package and services" target="_blank">+971 4268 2901</a></span> |

                    <span class="icon fa fa-envelope"></span>
                    <span class="txt">Mail us : <a href="mailto:info@best4utourism.com" target="_blank">info@best4utourism.com</a></span>
                </div>

                <!--<div class="top-right clearfix">
                        <div class="my-account">
                            <ul class="clearfix">
                                <li><a href="#"><span class="icon flaticon-password"></span> Login</a></li>
                                <li><a href="#"><span class="icon flaticon-user-2"></span> Signup</a></li>
                            </ul>
                        </div>
                    </div>-->
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="{{ url('/') }}" title="Best 4 U Tourism L.L.C."><img src="{{ asset('images/logo.png') }}" alt="Best 4 U Tourism L.L.C." title="Best 4 U Tourism L.L.C."></a></div>
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
                                    <li><a href="{{ asset('/aboutus') }}">About Us</a>

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
                                            <li><a href="{{ url('/destination', ['id' => $destination->id]) }}">{{ $destination->title}}</a></li>
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
                                    <li><a href="{{ route('dubaispecial') }}">Dubai Special Package</a></li>
                                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                                    <li><a href="{{ url('/contactus') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
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
                <a href="{{ url('/') }}" title=""><img src="{{ asset('images/logo.png') }}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right clearfix">
                <!-- Main Menu -->
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!--Search Btn-->



            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset('images/nav-logo.png') }}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>