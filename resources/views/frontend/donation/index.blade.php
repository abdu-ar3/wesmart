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
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Donation</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">Our Donation</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- notice details -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex">
                        <div class="text-center mr-4">
                            <div class="p-4 bg-primary text-white">
                                <span class="h2 d-block">Let's share</span>
                            </div>
                        </div>
                        <!-- notice content -->
                        <div>
                            <h3 class="mb-4">Make Tangerang Regency happy with literacy</h3>
                            <p>You can help advance Tangerang Regency by donating sincerely, because by donating in the form of materials or money that you will donate will be used as a means of supporting the TBM forum and you have given new hope to Tangerang Regency through a small but meaningful action. Together we are strong, turn on Literacy.</p>
                            <p><b>And whatever you spend, Allah will replace it and He is the best provider of sustenance. (QS. Saba?/34: 39)</b></p>
                            <p><i>If a person dies, his deeds are cut off, except for three things (namely): almsgiving, knowledge that is used, or the prayer of a pious child.? (HR. Muslim no. 1631)</i></p>
                            <p>Send your best donation to Bank Syariah Indonesia No. rec. A/N WanFatma, chairman of the Tangerang Regency TBM Forum. Donations can also be sent via Go-Pay, OVO, DANA or LinkAja addressed to HP No. +62 896-5190-4609 A/N WanFatma.</p>
                            <p>Kamu dapat membantu memajukan kabupaten tangerang yaitu dengan cara memberikan donasi seikhlasnya, karena dengan berdonasi berupa materi ataupun uang yang akan kamu infaqkan akan digunakan sebagai sarana penunjang forum tbm dan kamu sudah memberikan harapan baru untuk kabupaten Tangerang melalui sebuah tindakan kecil namun penuh dengan arti. Dengan bersama kita kuat, hidupkan Literasi</p><b> Dan apa saja yang kamu infakkan, Allah akan menggantinya dan Dia-lah Pemberi rizki yang terbaik. (QS. Saba?/34: 39)</b>
                            <br><br>
                            <p><i>Jika seseorang meninggal dunia, maka terputuslah amalannya kecuali tiga perkara (yaitu): sedekah jariyah, ilmu yang dimanfaatkan, atau do?a anak yang sholeh.? (HR. Muslim no. 1631)</i>
                            </p>

                            <ul class="list-styled mb-5">
                                <li>Jangan bosan jadi orang baik -> Don't get tired of being a good person</li>
                                <li>Kamu lah orang yang tepat! -> You are the right person!</li>
                                <li>Hidupkan literasi -> Turn on literacy</li>
                                <li>E Book Solusi -> E-Book Solution</li>
                            </ul>

                            <p>Kirimkan donasi terbaik kamu ke Bank Syariah Indonesi No. Rek. A/N WanFatma ketua Forum TBM Kabupaten Tangerang. Donasi bisa juga dikirim melalui Go-Pay, OVO, DANA atau LinkAja ditujukan ke No HP +62 896-5190-4609 A/N WanFatma.</p>
                            <a href="https://bit.ly/Connfirm_Don" class="btn btn-primary">Confirmation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /notice details -->


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