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

        <nav id="navbar" class="navbar nav-menu">
            <ul>
                <li><a href="{{ url('/admin/dashboard') }}" class="nav-link scrollto"><i class="bx bxs-home"></i> <span>HOME</span></a></li>
                <li><a href="{{ url('/admin/packages') }}" class="nav-link scrollto active"><i class="bx bxs-building-house"></i> <span>PACKAGES</span></a></li>
                <li><a href="{{ url('/admin/services') }}" class="nav-link scrollto"><i class="bx bxs-file-archive"></i> <span>SERVICES</span></a></li>
                <li><a href="{{ url('/admin/blog') }}" class="nav-link scrollto"><i class="bx bxs-file-archive"></i> <span>BLOGS</span></a></li>
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


            <div class="go-back">
                <a href="{{ url('/admin/destinations') }}">
                    <p class="mt-3">
                        <i class="las la-long-arrow-alt-left" style="font-size: 18px;"></i> Back to <b>Destinations</b>
                    </p>
                </a>
            </div>

            <h2>DESTINATION PACKAGES</h2>
            <div>
                <!-- Add Modal -->
                <button type="button" class="btn btn-all mt-2 mb-4" data-bs-toggle="modal" data-bs-target="#PackageAddModal">
                    Add Packages
                </button>

                <!-- Modal -->
                <div class="modal fade" id="PackageAddModal" tabindex="-1" aria-labelledby="PackageAddModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="PackageAddModalLabel">Add Package</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('add.destination.package', ['id' => $model->id]) }}" method="post" class="add-package-form" id="add-package-form" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control mb-2">

                                    <label for="duration">Duration</label>
                                    <input type="text" name="duration" id="duration" class="form-control mb-2">

                                    <label for="thumbnail">Thumbnail Image</label>
                                    <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                                    <p id="dimension-error" style="font-size: 13px; color: brown;"></p>
                                    <p class="mb-2" style="font-size: 13px; color: brown;">*thumbnail dimension should be 370px X 240px</p>

                                    <label for="image">Upload Image</label>
                                    <input type="file" name="image" id="image" class="form-control mb-2">

                                    <label for="tour_description">Tour Description</label>
                                    <textarea name="tour_description" id="tour_description" cols="20" rows="10" class="form-control mb-2"></textarea>

                                    <label for="price">Price</label>
                                    <input type="text" name="price" id="price" class="form-control mb-2">

                                    <label for="places_covered">Places Covered</label>
                                    <textarea name="places_covered" id="places_covered" cols="5" rows="3" class="form-control"></textarea>
                                    <p class="mb-2" style="font-size: 13px; color: brown;">*seperate using either comma or newline, restrain from using both.</p>

                                    <label for="tour_highlights">Tour Highlights</label>
                                    <textarea name="tour_highlights" id="tour_highlights" cols="5" rows="3" class="form-control"></textarea>
                                    <p class="mb-2" style="font-size: 13px; color: brown;">*seperate using either comma or newline, restrain from using both.</p>

                                    <label for="package_includes">Package Includes</label>
                                    <textarea name="package_includes" id="package_includes" cols="5" rows="3" class="form-control"></textarea>
                                    <p class="mb-2" style="font-size: 13px; color: brown;">*seperate using either comma or newline, restrain from using both.</p>

                                    <label for="package_excludes">Package Excludes</label>
                                    <textarea name="package_excludes" id="package_excludes" cols="5" rows="3" class="form-control"></textarea>
                                    <p class="mb-2" style="font-size: 13px; color: brown;">*seperate using either comma or newline, restrain from using both.</p>

                                    <label for="cancellation_policy">Cancellation Policy</label>
                                    <textarea name="cancellation_policy" id="cancellation_policy" cols="20" rows="10" class="form-control mb-2"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-all">Add Package</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <td>Title</td>
                            <td>Duration</td>
                            <td>Thumbnail</td>
                            <td>Image</td>
                            <td>Description</td>
                            <td>Price</td>
                            <td>Places Covered</td>
                            <td>Tour Highlights</td>
                            <td>Package Includes</td>
                            <td>Package Excludes</td>
                            <td>Cancellation Policy</td>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($packages as $package)
                        <tr>
                            <td>{{ $package->title }}</td>
                            <td>{{ $package->duration }}</td>
                            <td><img src="{{ asset('storage/' . $package->thumbnail) }}" alt="thumbnail" height="150px"></td>
                            <td>
                                @if($package->image == NULL)
                                NA
                                @else
                                <img src="{{ asset('storage/' . $package->image) }}" alt="image" height="150px">
                                @endif
                            </td>
                            <td>{!! nl2br($package->tour_description) !!}</td>
                            <td>{{ $package->price }}</td>
                            <td>
                                @foreach (json_decode($package->places_covered) as $place)
                                @if ($place == "null")
                                <p>NA</p>
                                @else
                                {{ str_replace(['"', '\\r', '\\n'], '', $place) }}<br>
                                @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach (json_decode($package->tour_highlights) as $highlight)
                                @if ($highlight == "null")
                                <p>NA</p>
                                @else
                                {{ str_replace(['"', '\\r', '\\n'], '', $highlight) }}<br>
                                @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach (json_decode($package->package_includes) as $include)
                                @if ($include == "null")
                                <p>NA</p>
                                @else
                                {{ str_replace(['"', '\\r', '\\n'], '', $include) }}<br>
                                @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach (json_decode($package->package_excludes) as $exclude)
                                @if ($exclude == "null")
                                <p>NA</p>
                                @else
                                {{ str_replace(['"', '\\r', '\\n'], '', $exclude) }}<br>
                                @endif
                                @endforeach
                            </td>
                            <td>
                                @if ($package->cancellation_policy == null)
                                <p>NA</p>
                                @else
                                {!! nl2br($package->cancellation_policy) !!}
                                @endif
                            </td>
                            <td>

                                <!-- edit -->
                                <a data-bs-toggle="modal" data-bs-target="#PackageEditModal_{{ $package->id }}">
                                    <i class="bx bx-edit"></i>
                                </a>

                                <!-- edit Modal -->
                                <div class="modal fade" id="PackageEditModal_{{ $package->id }}" tabindex="-1" aria-labelledby="PackageEditModal_{{ $package->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="PackageEditModal_{{ $package->id }}Label">Edit Package</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('edit.destination.package', ['destinationId' => $model->id, 'packageId' => $package->id]) }}" method="post" class="edit-package-form" id="edit-package-form" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <label for="title">Title</label>
                                                    <input type="text" name="title" id="title" class="form-control mb-2" value="{{ $package->title }}">

                                                    <label for="duration">Duration</label>
                                                    <input type="text" name="duration" id="duration" class="form-control mb-2" value="{{ $package->duration }}">

                                                    <label for="thumbnail">Thumbnail Image</label>
                                                    <input type="file" name="thumbnail" id="edit-thumbnail" class="form-control">
                                                    <p id="edit-dimension-error" style="font-size: 13px; color: brown;"></p>
                                                    <p class="mb-2" style="font-size: 13px; color: brown;">*thumbnail dimension should be 370px X 240px</p>

                                                    <label for="image">Upload Image</label>
                                                    <input type="file" name="image" id="image" class="form-control mb-2">

                                                    <label for="tour_description">Tour Description</label>
                                                    <textarea name="tour_description" id="tour_description" class="form-control mb-2" cols="30" rows="10">{{ str_replace('/\s+/', ' ', trim($package->tour_description)) }}</textarea>

                                                    <label for="price">Price</label>
                                                    <input type="text" name="price" id="price" class="form-control mb-2" value="{{ $package->price }}">

                                                    <label for="places_covered">Places Covered</label>
                                                    <textarea name="places_covered" id="places_covered" cols="5" rows="3" class="form-control">{{ str_replace(['"', '[', ']', 'null', '\r', '\n'], ' ', $package->places_covered) }}</textarea>
                                                    <p class="mb-2" style="font-size: 13px; color: brown;">*seperate using either comma or newline, restrain from using both.</p>

                                                    <label for="tour_highlights">Tour Highlights</label>
                                                    <textarea name="tour_highlights" id="tour_highlights" cols="5" rows="3" class="form-control">{{ str_replace(['"', '[', ']', 'null', '\r', '\n'], ' ', $package->tour_highlights) }}</textarea>
                                                    <p class="mb-2" style="font-size: 13px; color: brown;">*seperate using either comma or newline, restrain from using both.</p>

                                                    <label for="package_includes">Package Includes</label>
                                                    <textarea name="package_includes" id="package_includes" cols="5" rows="3" class="form-control">{{ str_replace(['"', '[', ']', 'null', '\r', '\n'], ' ', $package->package_includes) }}</textarea>
                                                    <p class="mb-2" style="font-size: 13px; color: brown;">*seperate using either comma or newline, restrain from using both.</p>

                                                    <label for="package_excludes">Package Excludes</label>
                                                    <textarea name="package_excludes" id="package_excludes" cols="5" rows="3" class="form-control">{{ str_replace(['"', '[', ']', 'null', '\r', '\n'], ' ', $package->package_excludes) }}</textarea>
                                                    <p class="mb-2" style="font-size: 13px; color: brown;">*seperate using either comma or newline, restrain from using both.</p>

                                                    <label for="cancellation_policy">Cancellation Policy</label>
                                                    <textarea name="cancellation_policy" id="cancellation_policy" cols="20" rows="10" class="form-control mb-2">{{ str_replace('/\s+/', ' ', trim($package->cancellation_policy)) }}</textarea>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-cancel" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-all">Save changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <!-- delete -->
                                <a data-bs-toggle="modal" data-bs-target="#PackageDeleteModal_{{ $package->id }}">
                                    <i class="bx bx-trash-alt"></i>
                                </a>

                                <!-- delete modal -->
                                <div class="modal fade" id="PackageDeleteModal_{{ $package->id }}" tabindex="-1" aria-labelledby="PackageDeleteModal_{{ $package->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="PackageDeleteModal_{{ $package->id }}Label">Delete Package</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('delete.destination.package', ['destinationId' => $model->id, 'packageId' => $package->id]) }}" method="post" class="delete-package-form" id="delete-package-form" enctype="multipart/form-data">
                                                @method ('DELETE')
                                                @csrf
                                                <div class="modal-body">
                                                    Delete package {{ $package->title }} ?
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
    <script src="{{ asset('admin/js/custom-package.js') }}"></script>

</body>

</html>