<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('assets/img/icon/forumtbm.jpg')}}">
    <title>WeSmart @yield("title")</title>

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/bootstrap/bootstrap.min.css')}}">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/slick/slick.css')}}">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/themify-icons/themify-icons.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/animate/animate.css')}}">
    <!-- aos -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/aos/aos.css')}}">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{asset('frontend/plugins/venobox/venobox.css')}}">

    <!-- Main Stylesheet -->
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">

    @yield('css-script')

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>
    <!-- preloader start -->
    <div class="preloader">
        <img src="{{asset('frontend/images/preloader.gif')}}" alt="preloader">
    </div>
    <!-- preloader end -->


    <!-- header -->
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
                            <li class="nav-item @@course">
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
    <!-- /header -->

    <!-- hero slider -->
    <!-- /hero slider -->

    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Information Center</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">Our information offers a good compromise between sustainable things that offer to the accuracy of the information</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- Information Center -->
    <section class="section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img class="img-fluid" src="{{asset('frontend/images/scholarship/anak.jpg')}}" alt="scholarship news">
                </div>
                <div class="col-md-6">
                    <h2>Information News</h2>
                    <strong class="mb-4 d-block"><i>Update all activities of the Tangerang Regency tbm forum</i></strong>
                    <p>It is hoped that the information presented in the information center of the Tangerang Regency tbm forum can be used as a medium of accurate and reliable information. <br><br>
                        So that the public can find out all forms of activities that will be carried out by the Tangerang district tbm forum</p>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($events as $event)
                <!-- scholarship item -->
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="card rounded-0 hover-shadow border-top-0 border-left-0 border-right-0">
                        <img class="card-img-top rounded-0" src="{{asset('frontend/images/scholarship/scholarship-item-1.jpg')}}" alt="scholarship-thumb">
                        <div class="card-body">
                            <h4 class="card-title">{{$event->name}}</h4>
                            <p class="mb-1"><i>{{$event->tanggal}}</i> </p>
                            <p class="mb-1">{{$event->deskripsi}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /Information Center -->


    <!-- footer -->
    @include('frontend.footer')
    <!-- /footer -->

    <!-- jQuery -->
    <script src="{{asset('frontend/plugins/jQuery/jquery.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('frontend/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <!-- slick slider -->
    <script src="{{asset('frontend/plugins/slick/slick.min.js')}}"></script>
    <!-- aos -->
    <script src="{{asset('frontend/plugins/aos/aos.js')}}"></script>
    <!-- venobox popup -->
    <script src="{{asset('frontend/plugins/venobox/venobox.min.js')}}"></script>
    <!-- filter -->
    <script src="{{asset('frontend/plugins/filterizr/jquery.filterizr.min.js')}}"></script>
    <!-- google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script src="plugins/google-map/gmap.js"></script>

    <!-- Main Script -->
    <script src="{{asset('frontend/js/script.js')}}"></script>

</body>

</html>