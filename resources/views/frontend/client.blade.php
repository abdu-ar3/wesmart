<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
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
    @include('frontend.header')
    <!-- /header -->
    <!-- Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Register</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login">
                        <form action="#" class="row">
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">SIGN UP</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content rounded-0 border-0 p-4">
                <div class="modal-header border-0">
                    <h3>Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- hero slider -->
    <section class="hero-section overlay bg-cover" data-background="images/banner/banner-1.jpg">
        <div class="container">
            <div class="hero-slider">
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">To be Literate</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Anak anak merupakan ....</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Apply now</a>
                        </div>
                    </div>
                </div>
                <!-- slider item -->
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Literacy for all</h1>
                            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">TBM forum is a forum for community reading parks throughout Tangerang district</p>
                            <a href="contact.html" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Apply now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /hero slider -->

    <!-- banner-feature -->
    <section class="bg-gray overflow-md-hidden">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-lg-5 align-self-end">

                    <img class="img-fluid w-100" src="{{asset('frontend/images/banner/anak.png')}}" alt="banner-feature">
                </div>
                <div class="col-xl-8 col-lg-7">
                    <div class="row feature-blocks bg-gray justify-content-between">
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Digital Reads</h3>
                            <p>You can read with easy and free access when you login first, and hopefully by reading you can become an educated child. Thank you</p>
                            <!-- kamu bisa membaca dengan akses yang mudah dan gratis saat pertama kali login, dan semoga dengan membaca kamu bisa menjadi anak yang terpelajar. Terima kasih -->
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Profile TBM</h3>
                            <p>In this feature you can find out what tbm is, tbm history, vision and mission, and other interesting things</p>
                            <!-- di fitur ini kamu dapat mengetahui apa itu tbm, sejarah tbm, visi misi, dan hal menarik lain nya -->
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">Help Facilities</h3>
                            <p>We believe that when you enter this site, it means that you are the chosen person to be someone who is useful. That's right!, <b>Yuk bantu tingkatkan literasi dengan berdonasi</b></p>
                        </div>
                        <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
                            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
                            <h3 class="mb-xl-4 mb-lg-3 mb-4">About</h3>
                            <p>Information Center, ...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /banner-feature -->

    <!-- about us -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <h2 class="section-title">About</h2>
                    <p>The Community Reading Gardens Forum (TBM Forum) exists as a forum for gathering and organizing for the founders and managers of the Community Reading Gardens (TBM), literacy activists, communities and the community to jointly make efforts to develop literacy movements in the country. The TBM Forum was established on July 11, 2005 in Solo, Central Java</p>
                    <p>Forum Taman Bacaan Masyarakat (Forum TBM) hadir sebagai wadah berhimpun dan berorganisasi bagi para pendiri dan pengelola Taman Bacaan Masyarakat (TBM), pegiat literasi, komunitas dan masyarakat untuk bersama-sama melakukan ikhtiar mengembangkan gerakan literasi di tanah air. Forum TBM didirikan pada tanggal 11 Juli tahun 2005 di Solo, Jawa Tengah</p>

                </div>
                <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                    <img class="img-fluid w-100" src="{{asset('frontend/images/about/ebook.jpg')}}" alt="about image">
                </div>
            </div>
        </div>
    </section>

    <!-- Digital Reads -->
    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center section-title justify-content-between">
                        <h2 class="mb-0 text-nowrap mr-3">Digital Reads</h2>
                        <div class="border-top w-100 border-primary d-none d-sm-block"></div>
                        <div>
                            <a href="courses.html" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- course list -->
            <div class="row justify-content-center">
                <!-- course item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                                <li class="list-inline-item"><a class="text-color" href="#">Categories</a></li>
                            </ul>
                            <a href="course-single.html">
                                <h4 class="card-title">Story Book</h4>
                            </a>
                            <p class="card-text mb-4">Description</p>
                            <a href="course-single.html" class="btn btn-primary btn-sm">SHOW</a>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                                <li class="list-inline-item"><a class="text-color" href="#">Categories</a></li>
                            </ul>
                            <a href="course-single.html">
                                <h4 class="card-title">Story Book</h4>
                            </a>
                            <p class="card-text mb-4">Description</p>
                            <a href="course-single.html" class="btn btn-primary btn-sm">SHOW</a>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                                <li class="list-inline-item"><a class="text-color" href="#">Categories</a></li>
                            </ul>
                            <a href="course-single.html">
                                <h4 class="card-title">Story Book</h4>
                            </a>
                            <p class="card-text mb-4">Description</p>
                            <a href="course-single.html" class="btn btn-primary btn-sm">SHOW</a>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                                <li class="list-inline-item"><a class="text-color" href="#">Categories</a></li>
                            </ul>
                            <a href="course-single.html">
                                <h4 class="card-title">Story Book</h4>
                            </a>
                            <p class="card-text mb-4">Description</p>
                            <a href="course-single.html" class="btn btn-primary btn-sm">SHOW</a>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                                <li class="list-inline-item"><a class="text-color" href="#">Categories</a></li>
                            </ul>
                            <a href="course-single.html">
                                <h4 class="card-title">Story Book</h4>
                            </a>
                            <p class="card-text mb-4">Description</p>
                            <a href="course-single.html" class="btn btn-primary btn-sm">SHOW</a>
                        </div>
                    </div>
                </div>

                <!-- course item -->
                <div class="col-lg-4 col-sm-6 mb-5">
                    <div class="card p-0 border-primary rounded-0 hover-shadow">
                        <div class="card-body">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
                                <li class="list-inline-item"><a class="text-color" href="#">Categories</a></li>
                            </ul>
                            <a href="course-single.html">
                                <h4 class="card-title">Story Book</h4>
                            </a>
                            <p class="card-text mb-4">Description</p>
                            <a href="course-single.html" class="btn btn-primary btn-sm">SHOW</a>
                        </div>
                    </div>
                </div>


                <!-- /course list -->
                <!-- mobile see all button -->
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="courses.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
                    </div>
                </div>
            </div>
    </section>
    <!-- /courses -->

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

    @yield('js-script')

</body>

</html>