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