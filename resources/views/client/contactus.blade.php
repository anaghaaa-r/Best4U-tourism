@extends ('layout.app')
@section ('content')

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
                        <li><a href="index.html">Home</a></li>
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
                            <form method="post" id="enquiry-form" action="{{ route('contact.us') }}">
                                @csrf
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-label">Name</div>
                                        <div class="field-inner">
                                            <input type="text" name="name" id="name" placeholder="Your Name" required="" value="">
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-label">Email</div>
                                        <div class="field-inner">
                                            <input type="email" name="email" id="email" placeholder="Email Address" required="" value="">
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
                                            <textarea name="message" id="message" placeholder="Write your message..." required=""></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-three"><span class="btn-title">Send Your Message</span></button>
                                        <p id="submit-message"></p>
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


@endsection

<script src="{{ asset('custom/custom-enquiry.js') }}"></script>