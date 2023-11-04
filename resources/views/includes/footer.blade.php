<footer class="main-footer">
    <!--Widgets Section-->
    <div class="widgets-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Column-->
                <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget info-widget">
                        <div class="logo">
                            <a href="#"><img src="{{ asset('images/footer-logo.png') }}" alt=""></a>
                        </div>
                        <div class="info">
                            <ul>
                                <li>
                                    <span class="icon fa fa-map-marker-alt"></span>
                                    Best 4 U Tourism L.L.C,
                                    203- 2nd Floor,
                                    Brass Building,
                                    Near Sharaf DG Metro (Exit No:3),
                                    Burdubai,
                                    Dubai-UAE
                                </li>
                                <li>
                                    <span class="icon fa fa-phone-alt"></span>
                                    Call us <a href="tel:+97142682901" target="_blank">+971 4268 2901</a>
                                </li>
                                <li>
                                    <span class="icon fa fa-envelope"></span>
                                    <a href="mailto:support@sailing.com" target="_blank">info@best4utourism.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="social-links">
                            <ul class="clearfix">
                                <li><a href="#" target="_blank"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#" target="_blank"><span class="fab fa-instagram"></span></a></li>
                                <li><a href="#" target="_blank"><span class="fab fa-youtube"></span></a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-xl-2 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <div class="widget-content">
                            <div class="widget-title">
                                <h4>Main Links</h4>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <ul class="links">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/aboutus') }}">About Us</a></li>
                                        <li><a href="{{ route('dubaispecial') }}">Dubai Special Package</a></li>
                                        <li><a href="{{ url('/blog') }}">Blog</a></li>
                                        <li><a href="{{ url('/contactus') }}">Contact Us</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-xl-2 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <div class="widget-content">
                            <div class="widget-title">
                                <h4>Services</h4>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <ul class="links">
                                        @foreach ($services as $service)
                                        <li><a href="{{ url('/service-detail', ['id' => $service->id]) }}">{{ $service->service }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="column col-xl-2 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <div class="widget-content">
                            <div class="widget-title">
                                <h4>Destinatons</h4>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <ul class="links">
                                        @foreach ($destinations as $destination)
                                        <li><a href="{{ url('/destination', ['id' => $destination->id]) }}">{{ $destination->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="column col-xl-2 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <div class="widget-content">
                            <div class="widget-title">
                                <h4>Tourism Packages</h4>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <ul class="links">
                                        @foreach ($tourismpackages as $tourism)
                                        <li><a href="{{ url('/tourismpackage', ['id' => $tourism->id]) }}">{{ $tourism->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="copyright">Copyright &copy; 2023 Best 4 U Tourism L.L.C. All Rights Reserved.</div>
                <div class="bottom-links"><a href="#">Powered by</a> <a href="http://coperor.in/" target="_blank">Coperor</a></div>
            </div>
        </div>
    </div>

</footer>