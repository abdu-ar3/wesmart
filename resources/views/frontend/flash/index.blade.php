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

    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">News Flash</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">Our News Flash</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- notice -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled">
                        <!-- notice item -->
                        <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h3 d-block">Cultivate</span>Reading</div>
                            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                                <a href="https://perpustakaan.kemendagri.go.id/?p=4661" class="h4 mb-3 d-block">Indonesia's Literacy Level in the World is Low</a>
                                <p class="mb-0">Indonesia is ranked 62 out of 70 countries related to literacy levels, or is in the bottom 10 countries that have low literacy levels.</p><br>
                                <p>Indonesia menempati ranking ke 62 dari 70 negara berkaitan dengan tingkat literasi, atau berada 10 negara terbawah yang memiliki tingkat literasi rendah.</p>
                            </div>

                        </li>
                        <!-- notice item -->
                        <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h3 d-block">Cultivate</span>Reading</div>
                            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                                <a href="https://bit.ly/Update_NewsFlash" class="h4 mb-3 d-block">UNESCO data mentions</a>
                                <p class="mb-0">Indonesian people's interest in reading is very concerning, only 0.001 percent. This means that out of 1,000 Indonesians, only 1 person is avid reader</p><br>
                                <p>Data UNESCO menyebutkan, minat baca masyarakat Indonesia sangat memprihatinkan, hanya 0,001 persen. Artinya, dari 1,000 orang Indonesia, cuma 1 orang yang rajin membaca.</p>
                            </div>

                        </li>
                        <!-- notice item -->
                        <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h3 d-block">Cultivate</span>Reading</div>
                            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                                <a class="h4 mb-3 d-block">Lazy to read but chatty on social media</a>
                                <p class="mb-0">Ironically, although interest in reading books is low, wearesocial data as of January 2017 reveals that Indonesians can stare at gadget screens for approximately 9 hours a day.</p>
                                <br>
                                <p>TEKNOLOGI Masyarakat Indonesia: Malas Baca Tapi Cerewet di Medsos <br>
                                    Ironisnya, meski minat baca buku rendah tapi data wearesocial per Januari 2017 mengungkap orang Indonesia bisa menatap layar gadget kurang lebih 9 jam sehari. </p>
                            </div>

                        </li>
                        <!-- notice item -->
                        <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                            <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h3 d-block">Cultivate</span>Reading</div>
                            <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                                <a href="https://hot.liputan6.com/read/4410606/diakui-jadi-penulis-termuda-gadis-ini-sudah-menulis-sejak-usia-5-tahun" class="h4 mb-3 d-block">This girl has been writing since she was 5 years old</a>
                                <p class="mb-0">Small children who are successful at a young age certainly always amaze. His creativity and intelligence have been honed since childhood so that he can produce many works and awards at a very young age.</p><br>
                                <p> Anak kecil yang sukses di usia muda tentunya selalu membuat kagum. Kreativitas dan kecerdasannya sudah diasah sejak kecil sehingga bisa menghasilkan banyak karya dan penghargaan di usia yang masih sangat muda. </p>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- /notice -->

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