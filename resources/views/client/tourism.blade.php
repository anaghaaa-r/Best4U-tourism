@extends ('layout.app')
@section ('content')



<!--Search Popup-->


<!-- Hidden Navigation Bar -->

<!-- End / Hidden Bar -->


<!-- Banner Section -->
<section class="page-banner">
    <div class="image-layer" style="background-image:url({{ asset('images/background/banner-1.jpg') }});"></div>

    <div class="banner-inner">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h1>{{ $model->title }}</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Tourism Packages</li>
                        <li>{{ $model->title }}</li>
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
                        <div class="results-row">

                            @foreach ($packages as $package)
                            <!--Activity Block-->
                            <div class="activity-block-two">
                                <div class="inner-box clearfix">
                                    <div class="image-layer" style="background-image:url({{ asset('storage/' . $package->thumbnail) }});"></div>

                                    <div class="image-box">
                                        <a href="{{ route('tourism.package', ['tourismId' => $model->id, 'packageId' => $package->id]) }}"><img src="{{ asset('storage/' . $package->thumbnail) }}" alt="" title=""></a>
                                    </div>

                                    <div class="content-box">
                                        <div class="content">
                                            <h4><a href="{{ route('tourism.package', ['tourismId' => $model->id, 'packageId' => $package->id]) }}">{{ $package->title }}</a></h4>
                                            <div class="info">
                                                <ul class="clearfix">
                                                    <li><span class="icon flaticon-wall-clock"></span>{{ $package->duration }}</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="links-box clearfix">
                                            <div class="link">
                                                <a href="{{ route('tourism.package', ['tourismId' => $model->id, 'packageId' => $package->id]) }}" class="theme-btn btn-style-two"><span class="btn-title">View Details</span></a>
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
                                                                @if ($key < 4) <li>{{ str_replace(['"', '\\r', '\\n'], '', $include) }}</li>
                                                                    @endif
                                                                    @endif
                                                                    @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="pricing">
                                                <div class="price">
                                                    <div class="price-title">From</div>
                                                    <div class="unit"><span>₹ 2490</span></div>
                                                </div>
                                            </div>-->
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--Pagination-->
                            <div class="pagination-box text-right">
                                <ul class="styled-pagination">
                                    <li><a href="#" class="prev"><span class="icon flaticon-back"></span></a></li>
                                    <li><a href="#" class="active">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#" class="next"><span class="icon flaticon-next"></span></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <!--Widgets Side-->
                <div class="widgets-side col-lg-4 col-md-6 col-sm-12">
                    <div class="widgets-content">
                        <!--Widget-->

                        <div class="tour-widget destination-widget carousel-widget">
                            <div class="widget-inner">
                                <div class="tour-widget-title">
                                    <h4>Top Attraction</h4>
                                </div>
                                <div class="destination-carousel single-item-carousel owl-theme owl-carousel">

                                    @foreach ($destinationpackages as $package)
                                    <!--Destination Block-->
                                    <div class="destination-block-three">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image">
                                                    <a href="{{ route('destination.package', ['destinationId' => $package->destination->id, 'packageId' => $package->id]) }}"><img src="{{ asset('storage/' . $package->thumbnail) }}" alt="{{ $package->title }}" title=""></a>
                                                </figure>
                                            </div>
                                            <div class="caption-box">
                                                <div class="inner">
                                                    <!--<div class="price">₹2400</div>-->
                                                    <div class="title"><a href="{{ route('destination.package', ['destinationId' => $package->destination->id, 'packageId' => $package->id]) }}">{{ $package->title }}</a></div>
                                                    <div class="info"><span class="icon flaticon-wall-clock"></span> {{ $package->duration }}</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                        <div class="tour-widget single-booking-widget">
                            <div class="widget-inner">


                                <!--<div class="upper-info clearfix">
                                        <div class="price-info">
                                            
                                            <div class="p-title">Price</div>
                                            <div class="p-amount">$5,999 <span>/ Person</span></div>
                                        </div>
                                    </div>-->
                                <div class="default-form main-booking-form">
                                    <form method="post" action="{{ route('tourism.enquiry', ['id' => $model->id]) }}" id="enquiry-form">
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
                                                <input type="email" name="email" placeholder="E-mail" required="" value="">
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
                                                <select class="custom-select-box" name="fchildren">
                                                    <option>No. of Children</option>
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                </select>
                                            </div>
                                        </div>



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


<!-- Main Footer -->



@endsection

<script src="{{ asset('custom/custom-enquiry.js') }}"></script>