<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon -->
	<link rel="shortcut icon" type="image/png">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/meanmenu.min.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>
<body>
    <div id="app">
        <div class="loader">
            <div class="loader-inner">
                <div class="circle"></div>
            </div>
        </div>        
        <!-- header -->
        <div class="top-header-area" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <div class="main-menu-wrap">
                            <!-- logo -->
                            <div class="site-logo">
                                <a href="index.html">
                                    <img src="{{ asset('frontend/img/logo.png')}}" alt="">
                                </a>
                            </div>
                            <!-- logo -->

                            <!-- menu start -->
                            <nav class="main-menu">
                                <ul>
                                    <li><a href="{{ route('frontend.index') }}">Home</a></li>
                                    <li><a href="{{ route('frontend.about') }}">About</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('frontend.about') }}">About</a></li>
                                            <li><a href="{{ route('frontend.cart') }}">Cart</a></li>
                                            <li><a href="{{ route('frontend.checkout') }}">Check Out</a></li>
                                            <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                                            <li><a href="{{ route('frontend.shop') }}">Shop</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                                    <li><a href="{{ route('frontend.shop') }}">Shop</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('frontend.shop') }}">Shop</a></li>
                                            <li><a href="{{ route('frontend.checkout') }}">Check Out</a></li>
                                            <li><a href="{{ route('frontend.singleProduct') }}">Single Product</a></li>
                                            <li><a href="{{ route('frontend.cart') }}">Cart</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="header-icons">
                                            <a class="shopping-cart" href="{{ route('frontend.cart') }}"><i class="fas fa-shopping-cart"></i></a>
                                            <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                            <div class="mobile-menu"></div>
                            <!-- menu end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->

        <!-- search area -->
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <span class="close-btn"><i class="fas fa-window-close"></i></span>
                        <div class="search-bar">
                            <div class="search-bar-tablecell">
                                <h3>Search For:</h3>
                                <input type="text" placeholder="Keywords">
                                <button type="submit">Search <i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end search area -->

            @yield('content')

        <!-- logo carousel -->
        <div class="logo-carousel-section">
            <div class="d-flex justify-content-around">
                <div class="single-logo-item">
                    <img src="{{asset('frontend/img/company-logos/1.png')}}" alt="">
                </div>
                <div class="single-logo-item">
                    <img src="{{asset('frontend/img/company-logos/2.png')}}" alt="">
                </div>
                <div class="single-logo-item">
                    <img src="{{asset('frontend/img/company-logos/3.png')}}" alt="">
                </div>
                <div class="single-logo-item">
                    <img src="{{asset('frontend/img/company-logos/4.png')}}" alt="">
                </div>
                <div class="single-logo-item">
                    <img src="{{asset('frontend/img/company-logos/5.png')}}" alt="">
                </div>
            </div>
        </div>
        <!-- end logo carousel -->

    	<!-- footer -->
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box about-widget">
                            <h2 class="widget-title">About us</h2>
                            <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box get-in-touch">
                            <h2 class="widget-title">Get in Touch</h2>
                            <ul>
                                <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                                <li>support@fruitkha.com</li>
                                <li>+00 111 222 3333</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box pages">
                            <h2 class="widget-title">Pages</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Shop</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box subscribe">
                            <h2 class="widget-title">Subscribe</h2>
                            <p>Subscribe to our mailing list to get the latest updates.</p>
                            <form action="index.html">
                                <input type="email" placeholder="Email">
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer -->  

        <!-- copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
                            Distributed By - <a href="https://themewagon.com/">Themewagon</a>
                        </p>
                    </div>
                    <div class="col-lg-6 text-right col-md-12">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end copyright -->
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    
	<script src="{{ asset('frontend/js/jquery-1.11.3.min.js')}}"></script>
	<script src="{{ asset('frontend/bootstrap/js/bootstrap.min.js')}}"></script> 
	<script src="{{ asset('frontend/js/jquery.countdown.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<script src="{{ asset('frontend/js/waypoints.js')}}"></script>
	<script src="{{ asset('frontend/js/owl.carousel.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('frontend/js/jquery.meanmenu.min.js')}}"></script>
	<script src="{{ asset('frontend/js/sticker.js')}}"></script>
	<script src="{{ asset('frontend/js/main.js')}}"></script>
</body>
</html>
