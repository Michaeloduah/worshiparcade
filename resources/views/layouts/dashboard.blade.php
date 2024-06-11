@if (auth()->user()->is_admin == 1)
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Admin - Worship Arcade</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        {{-- Datatable --}}

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">



        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>


        {{-- datatable --}}

        {{-- chart --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        {{-- chart --}}

        <!-- Favicons -->
        <link href="{{ asset('assets/img/logo.svg') }}" rel="icon">
        <link href="{{ asset('assets/img/logo.svg') }}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
            rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  
    </head>

    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="{{ route('dashboard.dashboard') }}" class="logo d-flex align-items-center">
                    <img src="{{ asset('assets/img/logo.svg') }}" alt="">
                    <span class="d-none d-lg-block">WorshipArcade</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn"></i>
            </div>
            <!-- End Logo -->

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">
                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <img src="{{ asset('storage/'. $user->image)}}" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ $user->name }}</span>
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            <li class="dropdown-header">
                                <h6>Kevin Anderson</h6>
                                <span>Web Designer</span>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="">
                                    <i class="bi bi-person"></i>
                                    <span>My Profile</span>
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">

            <ul class="sidebar-nav" id="sidebar-nav">

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('dashboard.dashboard') }}">
                        <i class="bi bi-house-heart"></i>
                        <span>Home</span>
                    </a>
                </li><!-- End Dashboard Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#payment" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-wallet2"></i><span>Payments</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="payment" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li class="nav-heading">Payments</li>
                        <li>
                            <a href="{{ route('dashboard.payment.index') }}">
                                <i class="bi bi-circle"></i><span>Overview</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.payment.offering') }}">
                                <i class="bi bi-circle"></i><span>Offering Payments</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.payment.tithe') }}">
                                <i class="bi bi-circle"></i><span>Tithe Payments</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.payment.church-project') }}">
                                <i class="bi bi-circle"></i><span>Church Project Payments</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.payment.prophetic-seed') }}">
                                <i class="bi bi-circle"></i><span>Prophetic Seeds Payments</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Payments Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#news" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-newspaper"></i><span>News</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="news" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li class="nav-heading">News</li>
                        <li>
                            <a href="{{ route('dashboard.news.index') }}">
                                <i class="bi bi-circle"></i><span>News</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.news.add-news') }}">
                                <i class="bi bi-circle"></i><span>Add News</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End News Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#Event" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-calendar4-event"></i></i><span>Events</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="Event" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li class="nav-heading">Events</li>
                        <li>
                            <a href="{{ route('dashboard.event.index') }}">
                                <i class="bi bi-circle"></i><span>Events</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.event.add-event') }}">
                                <i class="bi bi-circle"></i><span>Add Event</span>
                            </a>
                        </li>

                        <li class="nav-heading">Event Category</li>
                        <li>
                            <a href="{{ route('dashboard.event-category.index') }}">
                                <i class="bi bi-circle"></i><span>Event Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.event-category.eventCategory') }}">
                                <i class="bi bi-circle"></i><span>Add Event Categories</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Events Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#devotional" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-journal-album"></i><span>Devotional</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="devotional" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li class="nav-heading">Devotionals</li>
                        <li>
                            <a href="{{ route('dashboard.devotion.index') }}">
                                <i class="bi bi-circle"></i><span>Devotionals</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.devotion.add-devotion') }}">
                                <i class="bi bi-circle"></i><span>Add Devotionals</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Devotional Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#prayers" data-bs-toggle="collapse"
                        href="#">
                        <i class="bi bi-journal-plus"></i><span>Prayers</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="prayers" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li class="nav-heading">Prayers</li>
                        <li>
                            <a href="{{ route('dashboard.prayer.index') }}">
                                <i class="bi bi-circle"></i><span>Prayers</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.prayer.add-prayer') }}">
                                <i class="bi bi-circle"></i><span>Add Prayers</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Prayer Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#sermon" data-bs-toggle="collapse" href="#">
                      <i class="bi bi-envelope-plus"></i></i><span>Sermon</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="sermon" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li class="nav-heading">Sermons</li>
                        <li>
                            <a href="{{ route('dashboard.devotion.index') }}">
                                <i class="bi bi-circle"></i><span>Sermons</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('dashboard.devotion.add-devotion') }}">
                                <i class="bi bi-circle"></i><span>Add Sermon</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Sermons Nav -->
                <hr>

                <li class="nav-heading">Tools</li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="">
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                    </a>
                </li><!-- End Profile Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                    </a>
                </li><!-- End Contact Page Nav -->

            </ul>

        </aside><!-- End Sidebar-->

        <main id="main" class="main">

            <div class="pagetitle">
                <h1>Dashboard</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <!-- End Page Title -->

            @yield('content')

        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
                &copy; Copyright <strong><span>WorshipArcade</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/chart.js/chart.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('assets/js/main.js') }}"></script>

        {{-- datatable --}}
        <script src="{{ asset('assets/js/app.js') }}"></script>
    </body>
@else
@endif
