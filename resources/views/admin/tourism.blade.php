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
</head>

<body>

    <!-- ======= Mobile nav toggle button ======= -->
    <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <!-- ======= Header ======= -->

    <header id="header" class="d-flex flex-column justify-content-center">

        <!-- <div class="logo">
            <h1><a href="{{ route('dashboard') }}"><img src="{{ asset('img/logo.svg') }}" width="130" height="35"></a></h1>
        </div> -->

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="{{ url('/admin/dashboard') }}" class="nav-link scrollto"><i class="bx bxs-home"></i> <span>HOME</span></a></li>
                <li><a href="{{ url('/admin/destinations') }}" class="nav-link scrollto"><i class="bx bxs-building-house"></i> <span>DESTINATIONS</span></a></li>
                <li><a href="{{ url('/admin/tourismpackages') }}" class="nav-link scrollto active"><i class="bx bxs-briefcase"></i> <span>TOURISM PACKAGES</span></a></li>
                <li><a href="{{ url('/admin/dubaispecialpackages') }}" class="nav-link scrollto"><i class="bx bxs-file-archive"></i> <span>DUBAI SPECIAL PACKAGES</span></a></li>
                <li><a href="{{ url('/admin/services') }}" class="nav-link scrollto"><i class="bx bxs-file-archive"></i> <span>SERVICES</span></a></li>
                <li><a href="{{ url('/change-password') }}" class="nav-link scrollto"><i class="bx bxs-lock-open-alt"></i> <span>CHANGE PASSWORD</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </header>


    <section id="hero" style="padding-bottom: 100px;">

        <div class="main_body px-5">
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

            <h2>TOURISM PACKAGES</h2>
            <div class="row">
                <div class="col-4">
                    <form id="add-tourism-form" action="{{ route('add.tourism') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="title">Tourism Title</label>
                        <input type="text" name="title" id="title" class="form-control mb-3">
                        
                        <button type="submit" class="btn btn-all">Add Tourism</button>
                    </form>
                </div>
            </div>

            <div class="mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Tourism Packages</td>
                            <td>Related Packages</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tourisms as $tourism)
                        <tr>
                            <td>{{ $tourism->id }}</td>
                            <td>
                                <a href="{{ url('/admin/tourismpackages/package', ['id' => $tourism->id]) }}">
                                    {{$tourism->title}}
                                </a>
                            </td>
                            <td>
                                <a href="{{ url('/admin/tourismpackages/package', ['id' => $tourism->id]) }}">
                                    <b>View related packages</b>
                                </a>
                            </td>
                            <td>

                            <!-- edit -->
                            <a data-bs-toggle="modal" data-bs-target="#TourismEditModal_{{ $tourism->id }}">
                                <i class="bx bx-edit"></i>
                            </a>

                            <!-- edit Modal -->
                            <div class="modal fade" id="TourismEditModal_{{ $tourism->id }}" tabindex="-1" aria-labelledby="TourismEditModal_{{ $tourism->id }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="TourismEditModal_{{ $tourism->id }}Label">Edit Tourism</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('edit.tourism', ['id' => $tourism->id]) }}" method="post" id="edit-tourism-form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body">
                                                <label for="title">Tourism Title</label>
                                                <input type="text" name="title" id="title" class="form-control mb-2" value="{{ $tourism->title }}">

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-all" data-bs-dismiss="modal">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- delete -->
                            <a data-bs-toggle="modal" data-bs-target="#TourismDeleteModal_{{ $tourism->id }}">
                                <i class="bx bx-trash-alt"></i>
                            </a>

                            <!-- delete modal -->
                            <div class="modal fade" id="TourismDeleteModal_{{ $tourism->id }}" tabindex="-1" aria-labelledby="TourismDeleteModal_{{ $tourism->id }}Label" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="TourismDeleteModal_{{ $tourism->id }}Label">Delete Tourism Package</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('delete.tourism', ['id' => $tourism->id]) }}" method="post" id="delete-tourism-form" enctype="multipart/form-data">
                                            @method ('DELETE')
                                            @csrf
                                            <div class="modal-body">
                                                Delete package {{ $tourism->title }} ?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-all" data-bs-dismiss="modal">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>

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
    <script src="{{ asset('admin/js/custom-tourism.js') }}"></script>

</body>

</html>