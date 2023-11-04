@extends ('layout.app')
@section ('content')

<!-- navbar -->


<!--Search Popup-->


<!-- Hidden Navigation Bar -->

<!-- End / Hidden Bar -->


<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset('images/background/banner-1.jpg') }});"></div>

    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>{{ $details->title }}</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li id="tag-text"></li>
                        @if ($model)
                        <li>{{ $model->title }}</li>
                        @endif
                        <li>{{ $details->title }}</li>
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

                            <div class="info-title clearfix">
                                <div class="left-info">
                                    <h3>{{ $details->title }}</h3>
                                    <div class="info">
                                        <span class="icon flaticon-wall-clock"></span>{{ $details->duration }}
                                    </div>
                                </div>

                            </div>

                            <div class="main-image">
                                <img src="{{ asset('storage/' . $details->image) }}" alt="" title="">
                            </div>

                            <!--<div class="specs">
                                    <h4>Depature & Arrival Details</h4>
                                    <table class="specs-table">
                                        <tbody>
                                            <tr>
                                                <td>Depature From</td>
                                                <td>Kochi</td>
                                            </tr>
                                            <tr>
                                                <td>Depature Time</td>
                                                <td>Nov 22,2023 at 08.00am</td>
                                            </tr>
                                            <tr>
                                                <td>Arrival to</td>
                                                <td>Rajasthan</td>
                                            </tr>
                                            <tr>
                                                <td>Arrival time</td>
                                                <td>Nov 23 04.00am [Approx]</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>-->

                            <div class="text-block">
                                <h4>Tour Details</h4>
                                <p>{!! nl2br($details->tour_description) !!}</p>
                            </div>


                            <!--Included Material-->
                            <div class="included-material">
                                <h4>Tour Details</h4>
                                <div class="included-box">
                                    <div class="accordion-box">
                                        <!--Block-->
                                        <div class="accordion block current active-block">
                                            <div class="acc-btn active">Our Highlights<div class="icon flaticon-down-arrow"></div>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="text">
                                                        @foreach (json_decode($details->tour_highlights) as $highlight)
                                                        @if ($highlight == "null")
                                                        <p>NA</p>
                                                        @else
                                                        {{ str_replace(['"', '\\r', '\\n'], '', $highlight) }}<br>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Block-->
                                        <div class="accordion block">
                                            <div class="acc-btn">Package Includes<div class="icon flaticon-down-arrow"></div>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="text">
                                                        @foreach (json_decode($details->package_includes) as $include)
                                                        @if ($include == "null")
                                                        <p>NA</p>
                                                        @else
                                                        {{ str_replace(['"', '\\r', '\\n'], '', $include) }}<br>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Block-->
                                        <div class="accordion block">
                                            <div class="acc-btn">Package Excludes<div class="icon flaticon-down-arrow"></div>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="text">
                                                        @foreach (json_decode($details->package_excludes) as $exclude)
                                                        @if ($exclude == "null")
                                                        <p>NA</p>
                                                        @else
                                                        {{ str_replace(['"', '\\r', '\\n'], '', $exclude) }}<br>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Block-->
                                        <div class="accordion block">
                                            <div class="acc-btn">Cancellation Policy<div class="icon flaticon-down-arrow"></div>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content">
                                                    <div class="text">{!! nl2br($details->cancellation_policy) !!}</div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Block-->


                                    </div>

                                    <div class="instruction">* Some surprise things waiting for you in tour</div>

                                </div>
                            </div>

                            <!--Facility-->
                            <div class="facilities">
                                <h4>Places Covered</h4>
                                <div class="facility-box">
                                    <ul class="clearfix">
                                        @foreach(json_decode($details->places_covered) as $place)
                                        @if ($place == "null")
                                        <p>TBA</p>
                                        @else
                                        <li>{{ str_replace(['"', '\\r', '\\n'], '', $place) }}</li>
                                        @endif
                                        @endforeach
                                    </ul>
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



                    </div>
                </div>

                <!--Widgets Side-->
                <div class="widgets-side col-lg-4 col-md-6 col-sm-12">
                    <div class="widgets-content">
                        <!--Widget-->
                        <div class="tour-widget single-booking-widget">
                            <div class="widget-inner">
                                <!--<div class="upper-info clearfix">
                                        <div class="price-info">
                                            
                                            <div class="p-title">Price</div>
                                            <div class="p-amount">$5,999 <span>/ Person</span></div>
                                        </div>
                                    </div>-->
                                <div class="default-form main-booking-form">
                                    <form method="post" action="{{ route('package.enquiry') }}" id="enquiry-form">
                                        @csrf
                                        <h5>Book Your Tour</h5>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="name" placeholder="Your Name" required="" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="phone" placeholder="Phone" required="" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="email" placeholder="E-mail" required="" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <select class="custom-select-box" name="adults">
                                                    <option>No. of Adults</option>
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="field-inner">
                                                <select class="custom-select-box" name="children">
                                                    <option>No. of Children</option>
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                </select>
                                            </div>
                                        </div>

                                        <input type="hidden" name="type" value="{{ $model->title }}">
                                        <input type="hidden" name="package" value="{{ $details->title }}">



                                        <!--<div class="form-group">
                                                <div class="field-label">Additional Services</div>
                                                <div class="field-inner">
                                                    <ul class="additional-services">
                                                        <li><div class="check-block"><input type="checkbox" id="check-1" name="add-service"><label for="check-1">Cooking</label></div></li>
                                                        <li><div class="check-block"><input type="checkbox" id="check-2" name="add-service"><label for="check-2">Driving</label></div></li>
                                                        <li><div class="check-block"><input type="checkbox" id="check-3" name="add-service"><label for="check-3">Sports</label></div></li>
                                                        <li><div class="check-block"><input type="checkbox" id="check-4" name="add-service"><label for="check-4">Fishing</label></div></li>
                                                    </ul>
                                                </div>
                                            </div>-->

                                        <br>



                                        <div class="form-group">
                                            <button type="submit" class="theme-btn"><span class="btn-title">Confirm Your Tour</span></button>
                                            <p id="submit-message"></p>
                                        </div>

                                    </form>

                                    <div class="instruction">Do you need suggestion pls contact our expert team.</div>
                                </div>
                            </div>
                        </div>

                        <!--Widget-->


                        <!--Widget-->
                        <div class="tour-widget reviews-widget">
                            <div class="widget-inner">
                                <!--Review Block-->
                                <div class="review-block">
                                    <div class="inner">

                                        <h5 class="rev-title">Any Questions?</h5>
                                        <div class="rev-text">Do not hesitage to give us a call. We are an expert team and we are happy to talk to you.</div>

                                        <div class="rev-info">
                                            <div class="name"><span class="icon flaticon-phone-call"></span><a href="tel:+97142682901" target="_blank"> Uae :+971 4268 2901</a></div>
                                            <div class="name"><span class="icon flaticon-phone-call"></span><a href="tel:+919995573232" target="_blank"> India :+91 999 557 3232</a></div>
                                            <div class="name"><span class="icon flaticon-message"></span><a href="info@best4utourism.com" target="_blank"> info@best4utourism.com</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

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




@endsection

<script>
document.addEventListener('DOMContentLoaded', function () {
    const tagText = document.getElementById('tag-text')
    const currentURL = window.location.href;
    console.log(currentURL)
    if (currentURL.includes('destination'))
    {
        tagText.textContent = 'Destinations'
    }
    else if(currentURL.includes('tourismpackage'))
    {
        tagText.textContent = 'Tourism Packages'
    }
    else if(currentURL.includes('dubaispecialpackage'))
    {
        tagText.textContent = 'Dubai Special Package'
    }
    else
    {
        tagText.textContent = '.'
    }
})


</script>

<script src="{{ asset('custom/custom-enquiry.js') }}"></script>