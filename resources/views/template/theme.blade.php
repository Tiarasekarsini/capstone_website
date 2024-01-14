@php
    $categorys = DB::table('category')
        ->orderBy('id', 'DESC')
        ->get();
@endphp

<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>{{ isset($title) ? $title : env('APP_NAME') }}</title>

    <link rel="icon" type="image/png" sizes="32x32" href="{{ env('APP_URL') }}/assets/images/logo-fav.png">

    <meta name="msapplication-TileColor" content="#fa7070">
    <meta name="theme-color" content="#fa7070">

    <!-- Dependency Styles -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/sasspik/dependencies/bootstrap/css/bootstrap.min.css"
        type="text/css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/sasspik/dependencies/fontawesome/css/all.min.css"
        type="text/css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/sasspik/dependencies/swiper/css/swiper.min.css"
        type="text/css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/sasspik/dependencies/wow/css/animate.css" type="text/css">
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/sasspik/dependencies/magnific-popup/css/magnific-popup.css"
        type="text/css">
    <link rel="stylesheet"
        href="{{ env('APP_URL') }}/assets/sasspik/dependencies/components-elegant-icons/css/elegant-icons.min.css"
        type="text/css">
    <link rel="stylesheet"
        href="{{ env('APP_URL') }}/assets/sasspik/dependencies/simple-line-icons/css/simple-line-icons.css"
        type="text/css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/sasspik/assets/css/app.css" type="text/css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800;900&amp;family=Satisfy&amp;display=swap"
        rel="stylesheet">

    <style>
        .site-header.header-nine {
            background: #7a0606;
        }

        .site-header.header-nine .site-main-menu li a {
            color: #ffffff;
        }

        .banner.banner-nine {
            background: #f8f9fd;
            height: 550px;
            padding-top: 0;
            background-size: cover;
            background-position: center center;
        }

        .blob {
            background: #7a0606;
        }

        .blobs .blob-center {
            background: #7a0606;
        }
    </style>

</head>

<body id="home-version-6" class="home-version-6" data-style="default">

    <a href="#main_content" data-type="section-switch" class="return-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <div class="page-loader">
        <div class="loader">
            <!-- Loader -->
            <div class="blobs">
                <div class="blob-center"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                        <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7"
                            result="goo" />
                        <feBlend in="SourceGraphic" in2="goo" />
                    </filter>
                </defs>
            </svg>

        </div>
    </div><!-- /.page-loader -->

    <div id="main_content">


        <!--=========================-->
        <!--=        Navbar         =-->
        <!--=========================-->
        <header class="site-header header-nine header_trans-fixed" data-top="992">
            <div class="container">
                <div class="header-inner">
                    <div class="toggle-menu">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                    <!-- /.toggle-menu -->

                    <div class="site-mobile-logo">
                        <a href="{{ env('APP_URL') }}" class="logo">
                            <img src="{{ env('APP_URL') }}/assets/images/logo.png" alt="site logo" class="main-logo">
                            <img src="{{ env('APP_URL') }}/assets/images/logo.png" alt="site logo" class="sticky-logo">
                        </a>
                    </div>

                    <nav class="site-nav">
                        <div class="close-menu">
                            <span>Tutup</span>
                            <i class="ei ei-icon_close"></i>
                        </div>

                        <div class="site-logo">
                            <a href="{{ env('APP_URL') }}" class="logo">
                                <img src="{{ env('APP_URL') }}/assets/images/logo.png" alt="site logo"
                                    class="main-logo">
                                <img src="{{ env('APP_URL') }}/assets/images/logo.png" alt="site logo"
                                    class="sticky-logo">
                            </a>
                        </div>
                        <!-- /.site-logo -->

                        <div class="menu-wrapper" data-top="992">
                            <ul class="site-main-menu">
                                <li><a href="{{ env('APP_URL') }}/">Home</a></li>
                                @foreach ($categorys as $c)
                                    <li><a
                                            href="{{ env('APP_URL') }}/category/{{ $c->id }}">{{ $c->category }}</a>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
                        <!-- /.menu-wrapper -->

                    </nav><!-- /.site-nav -->
                </div><!-- /.header-inner -->
            </div><!-- /.container -->
        </header><!-- /.site-header -->

        @yield('konten')

        <!--=========================-->
        <!--=        Footer         =-->
        <!--=========================-->
        <footer id="footer">
            <div class="container">
                <div class="site-info" style="justify-content: center">
                    <div class="copyright">
                        <p>© {{ date('Y') }} All Rights Reserved. <a href="{{ url('login') }}">Login</a></p>
                    </div>
                </div><!-- /.site-info -->
            </div><!-- /.container -->
        </footer>

    </div><!-- /#site -->

    <!-- Dependency Scripts -->
    <script src="{{ env('APP_URL') }}/assets/sasspik/dependencies/jquery/jquery.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/sasspik/dependencies/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/sasspik/dependencies/swiper/js/swiper.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/sasspik/dependencies/jquery.appear/jquery.appear.js"></script>
    <script src="{{ env('APP_URL') }}/assets/sasspik/dependencies/wow/js/wow.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/sasspik/dependencies/countUp.js/countUp.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/sasspik/dependencies/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/sasspik/dependencies/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/sasspik/dependencies/jquery.parallax-scroll/js/jquery.parallax-scroll.js">
    </script>
    <script src="{{ env('APP_URL') }}/assets/sasspik/dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/sasspik/dependencies/gmap3/js/gmap3.min.js"></script>


    <!-- Site Scripts -->
    <script src="{{ env('APP_URL') }}/assets/sasspik/assets/js/header.js"></script>
    <script src="{{ env('APP_URL') }}/assets/sasspik/assets/js/app.js"></script>

</body>

</html>
