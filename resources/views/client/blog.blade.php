@extends ('layout.app')
@section ('content')

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
                <h1>Blog</h1>
                <div class="page-nav">
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>

                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--About Section-->
<section class="news-section-three">
    <div class="auto-container">
        <div class="news-list">

            @foreach ($blogs as $blog)
            <!--News Block-->
            
            <div class="news-block-five">
                <div class="inner-box">
                    <div class="row clearfix">
                        <div class="image-column col-lg-5 col-md-12 col-sm-12">
                            <figure class="image">
                                <a href="{{ route('blog.read', ['id' => $blog->id])}}"><img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="" title=""></a>
                                <a href="{{ route('blog.read', ['id' => $blog->id])}}" class="link-layer"><span class="icon flaticon-link-3"></span></a>
                            </figure>
                        </div>
                        <div class="content-column col-lg-7 col-md-12 col-sm-12">
                            <div class="inner">
                                <div class="content">
                                    <div class="meta-info">
                                        <ul class="clearfix">
                                            <li>
                                                <span class="icon fa fa-folder-open"></span>
                                                <a href="{{ url('/blog') }}">BEST FOR YOU STORIES</a>
                                            </li>
                                            <li>
                                                <span class="icon fa fa-user"></span>
                                                <a href="#">By Admin</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3><a href="{{ route('blog.read', ['id' => $blog->id])}}">{{ $blog->title }}</a></h3>
                                    <div class="text">{!! nl2br($blog->preview_text) !!}</div>
                                    <div class="link-box">
                                        <a href="{{ route('blog.read', ['id' => $blog->id])}}">
                                            <span class="icon flaticon-logout"></span>
                                            <span class="link-text">Continue Reading</span>
                                        </a>
                                    </div>

                                </div>
                                <div class="other-info">
                                    <div class="post-date"><span class="day">{{ $blog->created_at->format('d') }}</span><span class="month">{{ $blog->created_at->format('M') }}</span></div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            <!--News Block-->


            <!--News Block-->


            <!--News Block-->


            <!--News Block-->


        </div>

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
</section>


<!--Services Section-->
<!--About Section-->



<!--Activities Section-->


<!--Features Section-->



<!--Pricing Section-->


<!--Testimonials Section-->


<!--News Section-->


@endsection