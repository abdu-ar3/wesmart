<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('public/assets/img/icon/forumtbm.jpg')}}">
    <title>WeSmart @yield("title")</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/bootstrap/bootstrap.min.css')}}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/slick/slick.css')}}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/themify-icons/themify-icons.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/animate/animate.css')}}">
    <!-- aos -->
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/aos/aos.css')}}">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{asset('public/frontend/plugins/venobox/venobox.css')}}">

    <!-- Main Stylesheet -->
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">

    @yield('css-script')

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>
    <!-- preloader start -->
    <div class="preloader">
        <img src="{{asset('public/frontend/images/preloader.gif')}}" alt="preloader">
    </div>
    <!-- preloader end -->

    <!-- Header -->
    <header class="fixed-top header">
        <!-- top header -->
        <div class="top-header py-2 bg-white">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-4 text-center text-lg-left">
                        <a class="text-color mr-3" href="callto:+443003030266"><strong>Forum_TBM</strong> Kab. Tangerang</a>
                        <ul class="list-inline d-inline">
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-facebook"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-twitter-alt"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-linkedin"></i></a></li>
                            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href="#"><i class="ti-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-8 text-center text-lg-right">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{route('login')}}">login</a></li>
                            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="{{route('register')}}">register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <div class="navigation w-100">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                    <a class="navbar-brand" href="#">We Smart</a>
                    <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav ml-auto text-center">
                            <li class="nav-item @@home">
                                <a class="nav-link" href="{{route('dashboard')}}">Home</a>
                            </li>
                            <li class="nav-item @@about">
                                <a class="nav-link" href="{{route('ftbm')}}">Profile TBM</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('digital_reads')}}">Digital Reads</a>
                            </li>
                            <li class="nav-item dropdown view">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Help Facilities </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('books')}}">Book</a>
                                    <a class="dropdown-item" href="{{route('ebook')}}">E-Book</a>
                                    <a class="dropdown-item" href="{{route('bookshelves_don')}}">Book Shelf</a>
                                    <a class="dropdown-item" href="{{route('donation')}}">Donation Etc</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown view">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Info </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('frontic')}}">IC</a>
                                    <a class="dropdown-item" href="{{route('flash')}}">News Flash</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="teacher.html">Digital Reads</a></li>
                        <li class="list-inline-item text-white h3 font-secondary nasted">Forum TBM</li>
                    </ul>
                    <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- section -->
    <section class="section-sm">
        @foreach ($categories as $category)
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <!-- course thumb -->
                    <img src="http://localhost/wesmart1/storage/app/public/{{$category->image}}" class="img-fluid w-100">
                </div>
            </div>
            <!-- course info -->
            <div class="row align-items-center mb-5">

                <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
                    <h2>SINOPSIS</h2>
                </div>
                <div class="col-xl-6 order-sm-3 order-xl-2 col-12 order-2">
                    <ul class="list-inline text-xl-center">
                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-book text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">E Book</h6>
                                    <p class="mb-0">{{ $category->cnt_book }}</p>
                                </div>
                            </div>
                        </li>

                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-medall text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">Category</h6>
                                    <p class="mb-0">{{ $category->name }}</p>
                                </div>
                            </div>
                        </li>

                        <li class="list-inline-item mr-4 mb-3 mb-sm-0">
                            <div class="d-flex align-items-center">
                                <i class="ti-wallet text-primary icon-md mr-2"></i>
                                <div class="text-left">
                                    <h6 class="mb-0">FEE</h6>
                                    <p class="mb-0">Free (Gratis)</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


                <div class="col-xl-3 text-sm-right text-left order-sm-2 order-3 order-xl-3 col-sm-6 mb-4 mb-xl-0">
                    <a href="{{route('login')}}" class="btn btn-primary">Reads now</a>
                </div>

                <!-- border -->
                <div class="col-12 mt-4 order-4">
                    <div class="border-bottom border-primary"></div>
                </div>
            </div>
            <!-- course details -->

            <div class="row">

                <div class="col-12 mb-4">
                    <h3>Synopsis</h3>

                    <p>{{ $category->sinopsis }}</p>
                </div>
                <div class="col-12 mb-5">
                    <h3>Description</h3>
                    <p>{{ $category->deskripsi }}</p>
                </div>
                <!-- teacher -->
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center flex-wrap">
                        <div class="social-link">
                            <h6 class="d-none d-sm-block">Social Link</h6>
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i class="ti-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i class="ti-linkedin"></i></a></li>
                                <li class="list-inline-item"><a class="d-inline-block text-light p-1" href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="border-bottom border-primary mt-4"></div>
                </div>

            </div>
        </div>
        @endforeach
    </section>
    <!-- /section -->


    <!-- footer -->
    @include('frontend.footer')
    <!-- /footer -->

    <!-- jQuery -->
    <script src="{{asset('public/frontend/plugins/jQuery/jquery.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('public/frontend/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <!-- slick slider -->
    <script src="{{asset('public/frontend/plugins/slick/slick.min.js')}}"></script>
    <!-- aos -->
    <script src="{{asset('public/frontend/plugins/aos/aos.js')}}"></script>
    <!-- venobox popup -->
    <script src="{{asset('public/frontend/plugins/venobox/venobox.min.js')}}"></script>
    <!-- filter -->
    <script src="{{asset('public/frontend/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <!-- Main Script -->
    <script src="{{asset('public/frontend/js/script.js')}}"></script>

</body>

</html>