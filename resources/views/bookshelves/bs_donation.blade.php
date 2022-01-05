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
    <!-- /hero slider -->

    <!-- page title -->
    <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-inline custom-breadcrumb">
                        <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Bookshelves Donation</a></li>
                        <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                    </ul>
                    <p class="text-lighten">Our information offers a good compromise between sustainable things that offer to the accuracy of the information</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /page title -->

    <!-- Book Donation -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <h2 class="section-title">Bookshelves Donation</h2>
                    <p>You can help advance the Tangerang district by helping to facilitate the Tangerang district tbm forum by providing a bookshelf facility to immediately donate to the tbm forum, because by donating you have given new hope to Tangerang district through a small but meaningful action. Together we are strong, turn on Literacy</p>
                    <p>Kamu dapat membantu memajukan kabupaten tangerang yaitu dengan cara membantu memafilitasi forum tbm kabupaten Tangerang dengan memberikan fasilitas Rak buku untuk segera di donasikan kepada forum tbm, karena dengan menyumbang kamu sudah memberikan harapan baru untuk kabupaten Tangerang melalui sebuah tindakan kecil namun penuh dengan arti. Dengan bersama kita kuat, hidupkan Literasi</p>
                    <a href="{{route('bookshelves.create')}}" class="btn btn-primary-outline">Send Bookshelves</a>
                </div>
                <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
                    <img class="img-fluid w-100" src="{{asset('frontend/images/about/rak-buku.jpg')}}" alt="about image">
                </div>
            </div>
        </div>
    </section>

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