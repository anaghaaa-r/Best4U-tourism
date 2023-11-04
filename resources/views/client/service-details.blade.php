@extends ('layout.app')
@section ('content')
<!-- End Main Header -->

<!--Search Popup-->

<!-- navigation bar -->


<!-- Hidden Navigation Bar -->

<!-- End / Hidden Bar -->


<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset('images/background/banner-1.jpg') }});"></div>

    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>{{ $type->service }}</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Services</li>
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

                            <div class="main-image">
                                <img src="{{ asset('storage/' . $type->thumbnail) }}" alt="" title="">
                            </div>

                            <div class="text-block">
                                <h4>{{ $type->service }}</h4>
                                <p>
                                    {{ $type->description }}
                                </p>
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
                                    <form method="post" action="{{ route('service.enquiry', ['id' => $type->id]) }}" id="enquiry-form">
                                        @csrf
                                        <h5>{{ $type->service }}</h5>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="name" id="name" placeholder="Your Name" required="" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="phone" id="phone" placeholder="Phone" required="" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="email" name="email" id="email" placeholder="E-mail" required="" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <textarea type="comments" name="comments" id="comments" placeholder="Comments"></textarea>
                                            </div>
                                        </div>






                                        <div class="form-group">
                                            <button type="submit" class="theme-btn"><span class="btn-title">Submit</span></button>
                                            <p id="submit-message"></p>
                                        </div>

                                    </form>



                                </div>




                            </div>
                        </div>

                        <section class="subscribe-section style-three no-padding-top">
                            <div class="auto-container">
                                <div class="inner">
                                    <div class="image-layer" style="background-image:url({{ asset('images/background/image-12.jpg') }});"></div>
                                    <div class="title">
                                        <h4>WhatsApp us</h4>
                                        <div class="subtitle">WhatsApp us to Know More</div>

                                        <div class="link-box mt-2">
                                            <a href="https://api.whatsapp.com/send?phone=97142682901?&text=Hello, I would like to know more about your package and services" target="_blank" class="theme-btn btn-style-five2">
                                                <div class="btn-title2"><span class="fab fa-whatsapp"></span> +971 4268 2901</div>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </section>

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


<!-- Main Footer -->

@endsection


<script src="{{ asset('custom/custom-enquiry.js') }}"></script>