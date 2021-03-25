
<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8"/>
    <title>{{$title.' - Integrasi Karya' ?? 'BEM PM UDAYANA - Integrasi Karya'}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Shreethemes" name="author" />

    <!-- favicon tab browser -->
    <link rel="shortcut icon" href="/assets/bem_images/icon.png">

    <!-- Bootstrap -->
    <link href="/assets/bem_css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- Icons -->
    <link href="/assets/bem_css/materialdesignicons.min.css" rel="stylesheet" type="text/css"/>

    <!-- Magnific -->
    <link href="/assets/bem_css/magnific-popup.css" rel="stylesheet" type="text/css"/>
    <!-- Swiper -->
    {{-- <link href="/assets/bem_css/blog_css/swiper.min.css" rel="stylesheet" type="text/css"/> --}}

    <!-- Blog Css -->
    {{-- <link href="/assets/bem_css/blog_css/style.css" rel="stylesheet" type="text/css"/> --}}
    <!-- Main Css -->
    <link href="/assets/bem_css/style.css" rel="stylesheet" type="text/css"/>

    <!-- Font Css -->
    <link href="/assets/webfontkit/stylesheet.css" rel="stylesheet" type="text/css"/>

    <!-- Animation Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- fullcalendar -->
    <link rel="stylesheet" href="/assets/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="/assets/fullcalendar/dist/fullcalendar.print.min.css" media="print">

    <!-- CDN and CDNJS for Counter Up-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script src="https://kit.fontawesome.com/846fb5ea74.js" crossorigin="anonymous"></script>

    <!-- Untuk Preloader -->
    <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <style type="text/css">
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }
        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            font: 14px arial;
        }
    </style>

</head>

<body>
    
     <!-- LOADER -->
     <div class="preloader">
        <div class="loading">
            <img src="/assets/bem_images/loader-bem-fix.gif" width="80">
            <p>Harap Tunggu</p>
        </div>
    </div>
    <!-- END LOADER -->
    @include('layouts/header')
    @yield('content')
    @if ($title == 'BEM PM UDAYANA')
     <!-- SOSIAL -->
     <div class="position-relative">
        <div class="attach-icons-hero text-center py-5 py-sm-0">    
            <a href="https://www.instagram.com/bem_udayana/?hl=id"><img src="/assets/bem_images/sosial/instagram.png" class="img-fluid avatar avatar-small my-2 my-sm-0 mx-2 p-3 bg-white rounded-sosial shadow" data-toggle="tooltip" data-placement="top" title="Instagram" alt=""></a>
            <a href="https://twitter.com/bem_udayana"><img src="/assets/bem_images/sosial/twitter.png" class="img-fluid avatar avatar-small my-2 my-sm-0 mx-2 p-3 bg-white rounded-sosial shadow" data-toggle="tooltip" data-placement="top" title="Twitter" alt=""></a>
            <a href="https://www.youtube.com/channel/UCXb4WEhsHyKtMdqPaKJ4okQ"><img src="/assets/bem_images/sosial/youtube.png" class="img-fluid avatar avatar-small my-2 my-sm-0 mx-2 p-3 bg-white rounded-sosial shadow" data-toggle="tooltip" data-placement="top" title="Youtube" alt=""></a>
            <a href="https://open.spotify.com/show/4yP3a4QR1VZ2O1eKSrpNdb?si=MKF2hnCIQ8OQN7BYX2UoNA"><img src="/assets/bem_images/sosial/spotify.png" class="img-fluid avatar avatar-small my-2 my-sm-0 mx-2 p-3 bg-white rounded-sosial shadow" data-toggle="tooltip" data-placement="top" title="Spotify" alt=""></a>
        </div>
    </div>
    <!-- SOSIAL END -->
            
    @endif
    <!-- Footer Start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                    <a class="logo-footer" href="#">
                        <img src="/assets/bem_images/logo-light.png" height="40" alt="">
                    </a>
                    <p class="mt-1">"Bersama Ciptakan Karsa dalam Semangat Reparasi Cita untuk Udayana dan Indonesia"</p>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h5 class="text-light footer-head font-weight-normal">Sekretariat Kami :</h5>
                    <p>Jalan Dr. Goris No. 10, Student Center Lt. 2, Denpasar, Bali, Indonesia<p>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h5 class="text-light footer-head font-weight-normal">Kontak :</h5>
                    <ul class="list-unstyled footer-list mt-2">
                        <li><i data-feather="mail" class="fea icon-sm mr-2"></i><a href="mailto:contact@bemudayana.id" class="text-foot">contact@bemudayana.id</a></li>
                        <li><i data-feather="phone" class="fea icon-sm mr-2"></i><a href="tel:+6281338955721" class="text-foot">081 338 955 721</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <h5 class="text-light footer-head font-weight-normal">Sosial Media</h5>
                    <ul class="list-unstyled footer-list mt-2">
                        <ul class="list-unstyled social-icon social mb-0">
                            <li class="list-inline-item"><a href="https://www.instagram.com/bem_udayana/?hl=id" class="rounded"><i data-feather="instagram" class="fa fa-instagram fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/BEM_Udayana" class="rounded"><i data-feather="twitter" class="fa fa-tweeter fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.youtube.com/channel/UCXb4WEhsHyKtMdqPaKJ4okQ" class="rounded"><i data-feather="youtube" class="fa fa-youtube fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="https://open.spotify.com/show/4yP3a4QR1VZ2O1eKSrpNdb?si=MKF2hnCIQ8OQN7BYX2UoNA" class="rounded"><i class="fa fa-spotify" class="fea icon-sm fea-social"></i></a></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div><!--end container-->
    </footer><!--end footer-->
    <!-- Footer End -->

    <!--Footer Bar-->
    <footer class="footer footer-bar">
        <div class="container text-center">
            <p class="mb-0" style="text-align: center; color: yellow;">© 2020 KOMINFO BEM PM UDAYANA</p>
        </div>
    </footer><!--end footer-->
    <!-- Footer Bar End -->

    <!-- Back to top -->
    <a href="#" class="back-to-top rounded text-center" id="back-to-top">
        <i class="mdi mdi-chevron-up d-block"></i>
    </a>
    <!-- Back to top -->

    <!-- Javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="/assets/bem_js/jquery.min.js"></script>
    <script src="/assets/bem_js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Feather icon -->
    <script src="/assets/bem_js/feather.min.js"></script>

    <!-- Loader -->
    <script>
        $(document).ready(function(){
        $(".preloader").fadeOut();
        })
    </script>


    <!-- Magnific Popup -->
    <script src="/assets/bem_js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/bem_js/magnific.init.js"></script>
    <script src="/assets/bem_js/isotope.js"></script>
    <script src="/assets/bem_js/portfolio.init.js"></script>

    <!-- Main Js -->
    <script src="/assets/bem_js/app.js"></script>

    <!-- Feather icon -->
    <script src="/assets/bem_js/feather.min.js"></script>

    <!-- Swiper -->
    <script src="/assets/bem_js/swiper.min.js"></script>
    <script src="/assets/bem_js/swiper.init.js"></script>


     <script src="/assets/moment/moment.js"></script>
     
     <script>
        AOS.init();
      </script>
    
@yield('footer')
</body>

</html>