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
                <h1>{{ $model->title }}</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Destinatons</li>
                        <li>{{ $model->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--About Section-->
<section class="rent-buy-section">
    <div class="auto-container">

        <div class="lower-filter-row clearfix">

            <!--Filter-->

        </div>

        <div class="results-row">
            <div class="row clearfix">
                @foreach ($packages as $package)

                <!--Rental Block-->
                <div class="rental-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="{{ route('destination.package', ['destinationId' => $model->id, 'packageId' => $package->id]) }}">
                                    <img src="{{ asset('storage/' . $package->thumbnail) }}" alt="" title="">
                                </a>
                            </figure>
                            <!--<div class="price-box">
                                    <div class="price">₹ 7,400</div>
                                    <div class="cycle">Per Day</div>
                                </div>-->
                        </div>
                        <div class="title-box">
                            <div class="more-link-box">
                                <a href="{{ route('destination.package', ['destinationId' => $model->id, 'packageId' => $package->id]) }}" class="theme-btn">View Details</a>
                            </div>
                            <h4><a href="{{ route('destination.package', ['destinationId' => $model->id, 'packageId' => $package->id]) }}">
                                {{ $package->title }}
                            </a></h4>
                            <!--<div class="info">177’ / 53.65 m / Sensation Yacht</div>-->
                        </div>
                        <div class="meta-info">
                            <ul class="clearfix">
                                <li><a href="{{ route('destination.package', ['destinationId' => $model->id, 'packageId' => $package->id]) }}"><span class="icon flaticon-clock"></span>{{ $package->duration }}</a></li>
                                <!-- <li><a href="{{ route('destination.package', ['destinationId' => $model->id, 'packageId' => $package->id]) }}"><span class="icon flaticon-clock"></span> 07 Nights</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>

            <!--Pagination-->
            <div class="pagination-box text-center">
                <ul class="styled-pagination">
                    <li><a href="#" class="prev"><span class="icon flaticon-back"></span></a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#" class="next"><span class="icon flaticon-next"></span></a></li>
                </ul>
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