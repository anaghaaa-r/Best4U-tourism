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
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="blog-content">
                    <div class="news-post-details">

                        <!--News Block-->
                        <div class="news-block-six">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image">
                                        <img src="{{ asset('storage/' . $blog->image) }}" alt="" title="">
                                    </figure>
                                    <div class="post-date"><span class="day">{{ $blog->created_at->format('d') }}</span><span class="month">{{ $blog->created_at->format('M') }}</span></div>
                                </div>
                                <div class="content-box">
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
                                                        <a href="{{ url('/blog') }}">By Admin</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3>The Top 20 Honeymoon Destinations</h3>
                                            <div class="text">
                                                <p>{!! nl2br($blog->content) !!}</p>
                                                
                                                <div class="two-column">
                                                    <div class="row clearfix">
                                                        <div class="column col-md-6 col-sm-6 col-xs-12">
                                                            <div class="caption-image">
                                                                <img src="{{ asset('storage/' . $blog->gallery_image) }}" alt="" title="">
                                                                <div class="image-title">{!! nl2br($blog->gallery_image_subtitle) !!} </div>
                                                            </div>
                                                        </div>
                                                        <div class="column col-md-6 col-sm-6 col-xs-12">
                                                            <div class="video-image">
                                                                <a href="{{ $blog->video_url }}" class="lightbox-image"><img src="{{ asset('storage/' . $blog->thumbnail) }}" alt="" title="">
                                                                </a>
                                                                <a href="{{ $blog->video_url }}" class="play-link  lightbox-image"><span class="icon flaticon-play-button-3"></span>{!! nl2br($blog->video_subtitle) !!}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <!-- <div class="post-tags clearfix">
                                            <div class="tag-title">Tags:</div>
                                            <a href="#">Beauty</a>

                                            <a href="#">Free Style</a>
                                            <a href="#">Photography</a>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comments-area">
                            <div class="group-title">
                                <h4>Comments</h4>
                            </div>
                            <div class="comment-box">
                                <div class="comment">
                                    <div class="author-thumb">
                                        <figure class="thumb"><img src="images/resource/author-image-6.jpg" alt=""></figure>
                                    </div>
                                    <div class="info">
                                        <span class="name">Steven Rich,</span>
                                        <span class="date">Nov 26, 2019</span>
                                    </div>
                                    <div class="text">On the other hand, we denounce with righteous indignation dislike men which toil and some great pleasure.</div>

                                    <div class="reply-link"><a href="#">Reply</a></div>

                                </div>
                            </div>

                            <div class="comment-box">
                                <div class="comment reply-comment">
                                    <div class="author-thumb">
                                        <figure class="thumb"><img src="images/resource/author-image-7.jpg" alt=""></figure>
                                    </div>
                                    <div class="info">
                                        <span class="name">William Cobus,</span>
                                        <span class="date">Nov 25, 2019</span>
                                    </div>
                                    <div class="text">Our power of choice is untrammelled and when nothing some of our being to except to obtain some advantage.</div>

                                    <div class="reply-link"><a href="#">Reply</a></div>

                                </div>
                            </div>

                        </div>

                        <div class="leave-comments">
                            <div class="group-title">
                                <h4>Post a Comment</h4>
                                <div class="instruction">Your email address will not be published. Required fields are marked *</div>
                            </div>

                            <div class="default-form comment-form">
                                <form method="post" action="http://st.ourhtmldemo.com/new/sailing-demo/contact.html">
                                    <div class="row clearfix">

                                        <div class="col-md-12 col-sm-12 form-group">
                                            <textarea name="message" placeholder="Your Comments"></textarea>
                                        </div>

                                        <div class="col-md-6 col-sm-12 form-group">
                                            <input type="text" name="username" placeholder="Your Name *" required="">
                                        </div>

                                        <div class="col-md-6 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email *" required="">
                                        </div>

                                        <div class="col-md-12 col-sm-12 form-group">
                                            <button type="submit" class="theme-btn btn-style-five"><span class="btn-title">Submit Now</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                <aside class="sidebar blog-sidebar">
                    <!--Sidebar Widget-->
                    <div class="sidebar-widget search-box">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Search</h4>
                            </div>
                            <form method="post" action="http://st.ourhtmldemo.com/new/sailing-demo/blog.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search.." required="">
                                    <button type="submit"><span class="icon flaticon-magnifying-glass"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--Archives-->


                    <div class="sidebar-widget recent-posts">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Trending Post</h4>
                            </div>

                            <div class="post">
                                <div class="inner">
                                    <figure class="post-thumb"><img src="images/resource/news-thumb-5.jpg" alt=""><a href="#" class="overlink"></a></figure>
                                    <div class="post-date">June 28, 2023</div>
                                    <h5 class="title"><a href="#">Tour With Accomodation</a></h5>
                                </div>
                            </div>

                            <div class="post">
                                <div class="inner">
                                    <figure class="post-thumb"><img src="images/resource/news-thumb-6.jpg" alt=""><a href="#" class="overlink"></a></figure>
                                    <div class="post-date">April 18, 2022</div>
                                    <h5 class="title"><a href="#">Cabin or Bareboat Charter?</a></h5>
                                </div>
                            </div>

                            <div class="post">
                                <div class="inner">
                                    <figure class="post-thumb"><img src="images/resource/news-thumb-7.jpg" alt=""><a href="#" class="overlink"></a></figure>
                                    <div class="post-date">Jan 21, 2021</div>
                                    <h5 class="title"><a href="#">The Top 5 Destinations</a></h5>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="sidebar-widget popular-tags">
                        <div class="widget-inner">
                            <div class="sidebar-title">
                                <h4>Popular Tags</h4>

                            </div>
                            <ul class="tags-list clearfix">
                                <li><a href="#">Beauty</a></li>
                                <li><a href="#">Classic</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Drinks & Food</a></li>
                                <li><a href="#">Designs</a></li>
                                <li><a href="#">Featured</a></li>
                                <li><a href="#">Free Style</a></li>
                                <li><a href="#">Photography</a></li>
                            </ul>
                        </div>
                    </div>

                    <!--Archives-->


                </aside>
            </div>

        </div>
    </div>
</div>


<!--Services Section-->
<!--About Section-->



<!--Activities Section-->


<!--Features Section-->



<!--Pricing Section-->


<!--Testimonials Section-->


<!--News Section-->


@endsection