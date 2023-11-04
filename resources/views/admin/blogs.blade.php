<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>BEST4Utourism - Admin Panel</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('favicon.ico') }}" rel="icon">
    <link href="{{ asset('admin/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/lineawesome/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">

    <!-- summernote -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <!-- flaticon -->


</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex flex-column justify-content-center">

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="{{ url('/admin/dashboard') }}" class="nav-link scrollto"><i class="bx bxs-home"></i> <span>HOME</span></a></li>
                <li><a href="{{ url('/admin/packages') }}" class="nav-link scrollto"><i class="bx bxs-building-house"></i> <span>PACKAGES</span></a></li>
                <li><a href="{{ url('/admin/services') }}" class="nav-link scrollto"><i class="bx bxs-file-archive"></i> <span>SERVICES</span></a></li>
                <li><a href="{{ url('/admin/blog') }}" class="nav-link scrollto active"><i class="bx bxs-file-archive"></i> <span>BLOGS</span></a></li>
                <li><a href="{{ url('/change-password') }}" class="nav-link scrollto"><i class="bx bxs-lock-open-alt"></i> <span>CHANGE PASSWORD</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" style="padding-bottom: 100px;">
        <!-- home -->
        <div class="main_body">

            <!-- Logout Modal -->
            <div class="text-end">
                <button class="btn logout-button" data-bs-toggle="modal" data-bs-target="#LogOutModal">
                    <i class="las la-power-off"></i>
                </button>
            </div>

            <!-- Logout Modal -->
            <div class="modal fade" id="LogOutModal" tabindex="-1" aria-labelledby="LogOutModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to logout ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                            <form method="post" action="{{ route('admin.logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-all" data-bs-dismiss="modal">LogOut</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="text-dark">BLOGS</h2>
            <!-- tabs -->
            <div class="row">
                <div class="col-6">
                    <div class="tab-container">
                        <ul class="nav nav-tabs" id="myTab" style="margin-left: 10px">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" data-tab-id="blog" id="blog-tab" data-bs-toggle="tab" data-bs-target="#blog" type="button" role="tab" aria-selected="true">
                                    <b>BLOGS</b>
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" data-tab-id="add-blog" id="add-blog-tab" data-bs-toggle="tab" data-bs-target="#add-blog" type="button" role="tab" aria-selected="false">
                                    <b>ADD BLOG</b>
                                </button>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>



            <!-- content -->
            <div class="tab-content" style="margin-left: 10px; margin-top: 50px">

                <!-- VIEW BLOGS -->
                <div class="tab-pane fade show active" role="tabpanel" id="blog" aria-labelledby="blog-tab">

                    @if (count($blogs) <= 0) <h5>NO BLOGS TO VIEW</h5>

                        @endif

                        @foreach ($blogs as $blog)
                        <div class="news-block-five">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <div class="image-column col-lg-5 col-md-12 col-sm-12">
                                        <figure class="image">
                                            <a href="{{ route('blog.details', ['id' => $blog->id]) }}"><img src="{{ asset('storage/' . $blog->thumbnail)}}" alt="" title=""></a>
                                            <a href="{{ route('blog.details', ['id' => $blog->id]) }}" class="link-layer"><span class="icon las la-link"></span></a>
                                        </figure>
                                    </div>
                                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                                        <div class="inner">
                                            <div class="content">
                                                <h3><a href="{{ route('blog.details', ['id' => $blog->id]) }}">{{ $blog->title }}</a></h3>
                                                <div class="text">{!! nl2br($blog->preview_text) !!}</div>
                                                <div class="link-box">
                                                    <a href="{{ route('blog.details', ['id' => $blog->id]) }}">
                                                        <span class="icon las la-sign-out-alt"></span>
                                                        <span class="link-text">View / Edit Blog</span>
                                                    </a>
                                                </div>

                                                <!-- update preview -->
                                                <button type="submit" class="btn-all mt-3" data-bs-toggle="modal" data-bs-target="#PreviewUpdateModal_{{ $blog->id }}">
                                                    Update Blog Preview
                                                </button>

                                                <!-- update preview modal -->
                                                <div class="modal fade" id="PreviewUpdateModal_{{ $blog->id }}" tabindex="-1" aria-labelledby="PreviewUpdateModal_{{ $blog->id }}Label" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="PreviewUpdateModal_{{ $blog->id }}Label">Update Preview Details</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <form action="{{ route('edit.blog.preview', ['id' => $blog->id]) }}" method="post" id="edit-blog-preview" class="edit-blog-preview" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="modal-body my-4">
                                                                    <label for="title">Title</label>
                                                                    <input type="text" name="title" id="title" class="form-control mb-3" value="{{ $blog->title }}">

                                                                    <label for="thumbnail" class="mt-3">Update Thumbnail image</label>
                                                                    <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                                                                    <p class="mb-3" style="font-size: 13px; color: brown;">*thumbnail dimension should be 440px X 300px</p>

                                                                    <label for="image">Blog Preview Text</label>
                                                                    <textarea name="preview_text" id="preview_text" cols="30" rows="10" class="form-control preview_text">
                                                                    {!! nl2br($blog->preview_text) !!}
                                                                </textarea>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-all" data-bs-dismiss="modal">Save Changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- delete -->
                                                <button type="submit" class="btn-all mt-3" data-bs-toggle="modal" data-bs-target="#PreviewDeleteModal_{{ $blog->id }}">
                                                    Delete blog
                                                </button>

                                                <!-- update preview modal -->
                                                <div class="modal fade" id="PreviewDeleteModal_{{ $blog->id }}" tabindex="-1" aria-labelledby="PreviewDeleteModal_{{ $blog->id }}Label" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="PreviewDeleteModal_{{ $blog->id }}Label">Update Preview Details</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body my-4">
                                                                <p>Are you sure you want to delete?</p>
                                                            </div>
                                                            <form action="{{route('delete.blog',['id' => $blog->id])}}" method="post" id="delete-blog" class="delete-blog">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                                                                    <button type="submit" class="btn btn-all" data-bs-dismiss="modal">Delete blog</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="other-info">
                                                <div class="post-date"><span class="day">
                                                        {{ $blog->created_at->format('d') }}
                                                    </span>
                                                    <span class="month">
                                                        {{ $blog->created_at->format('M') }}
                                                    </span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
                <!-- END VIEW BLOGS -->


                <!-- ADD BLOG -->
                <div class="tab-pane fade" role="tabpanel" id="add-blog" aria-labelledby="add-blog-tab">
                    <h4>ADD BLOGS</h4>

                    <div class="mt-3">
                        <form action="{{ route('add.blog') }}" method="post" id="add-blog-form" class="add-blog-form" enctype="multipart/form-data">
                            @csrf
                            <label for="thumbnail">Upload Blog Thumbnail <span style="font-size: 18px; color: brown;">*</span></label>
                            <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                            <p class="mb-3" style="font-size: 13px; color: brown;">*thumbnail dimension should be 440px X 300px</p>

                            <label for="title">Blog Title <span style="font-size: 18px; color: brown;">*</span></label>
                            <input type="text" name="title" id="title" class="form-control mb-3">

                            <label for="image">Upload Blog Image</label>
                            <input type="file" name="image" id="image" class="form-control mb-3">

                            <label for="image">Blog Preview Text</label>
                            <textarea name="preview_text" id="preview_text" cols="30" rows="10" class="form-control preview_text"></textarea>

                            <label for="content" class="mt-3">Blog Content <span style="font-size: 18px; color: brown;">*</span></label>
                            <textarea name="content" id="content" cols="30" rows="10" class="form-control mb-3"></textarea>

                            <label for="gallery_image" class="mt-3">Upload Image to Gallery</label>
                            <input type="file" name="gallery_image" id="gallery_image" class="form-control mb-3">

                            <label for="gallery_image_subtitle">Gallery Image Subtitle</label>
                            <input type="text" name="gallery_image_subtitle" id="gallery_image_subtitle" class="form-control mb-3">

                            <label for="video_url">Youtube Video URL</label>
                            <input type="text" name="video_url" id="video_url" class="form-control mb-3">

                            <label for="video_subtitle">Video Subtitle</label>
                            <input type="text" name="video_subtitle" id="video_subtitle" class="form-control mb-3">

                            <button type="submit" class="btn-all w-100 mt-5">Add Blog</button>
                        </form>
                    </div>
                </div>
                <!-- END ADD BLOG -->

            </div>

        </div>



    </section>
    <!-- End Hero -->

    <!-- <footer id="footer" class="fixed-bottom">
        <div class="container">
            <div class="credits">
                Powered by <a href="https://coperor.in/" target="_blank">Coperor</a>
                <span class="version">Ver 2.0</span>
            </div>
        </div>
    </footer> -->




    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>




    <!-- trim content -->
    <script>

    </script>

    <!-- summernote -->
    <script>
        $('.preview_text').summernote({
            placeholder: 'Your Blog Preview here. Keep it short.',
            height: 200
        });
        $('#content').summernote({
            placeholder: 'Your blog post starts here...',
            tabsize: 2,
            height: 350
        });

        var insertGroup = $('.note-insert')
        insertGroup.hide();
    </script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('admin/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('admin/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script src="{{ asset('admin/js/custom-logout.js') }}"></script>
    <script src="{{ asset('admin/js/custom-blog.js') }}"></script>

</body>

</html>