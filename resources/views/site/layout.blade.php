<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{'assets/css/bootstrap.min.css'}})">
    <link rel="stylesheet" href="{{'assets/css/owl.carousel.min.css'}}">
    <link rel="stylesheet" href="{{'assets/css/magnific-popup.css'}}">
    <link rel="stylesheet" href="{{'assets/css/font-awesome.min.css'}}">
    <link rel="stylesheet" href="{{'assets/css/themify-icons.css'}}">
    <link rel="stylesheet" href="{{'assets/css/nice-select.css'}}">
    <link rel="stylesheet" href="{{'assets/css/flaticon.css'}}">
    <link rel="stylesheet" href="{{'assets/css/gijgo.css'}}">
    <link rel="stylesheet" href="{{'assets/css/animate.min.css'}}">
    <link rel="stylesheet" href="{{'assets/css/slick.css'}}">
    <link rel="stylesheet" href="{{'assets/css/slicknav.css'}}">
    <link rel="stylesheet" href="{{'assets/css/style.css'}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">home</a></li>
                                        <li><a href="features.html">Features</a></li>
                                        <li><a href="Pricing.html">Pricing</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                 <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a  href="#">Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
<div class="container">
    @yield('content')
</div>
 <!-- footer start -->
 <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p>
                                Firmament morning sixth subdue darkness
                                creeping gathered divide.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Services
                            </h3>
                            <ul>
                                <li><a href="#">Team management</a></li>
                                <li><a href="#">Collaboration</a></li>
                                <li><a href="#">Todo</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Downloads
                            </h3>
                            <ul>
                                <li>
                                    <a href="#">
                                        Download from Apple Store

                                    </a>
                                </li>
                                <li><a href="#">
                                        Download from Play Store
                                    </a>
                                </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
    <script src="{{'assets/js/vendor/modernizr-3.5.0.min.js'}})"></script>
    <script src="{{'assets/js/vendor/jquery-1.12.4.min.js'}})"></script>
    <script src="{{'assets/js/popper.min.js'}})"></script>
    <script src="{{'assets/js/bootstrap.min.js'}})"></script>
    <script src="{{'assets/js/owl.carousel.min.js'}})"></script>
    <script src="{{'assets/js/isotope.pkgd.min.js'}})"></script>
    <script src="{{'assets/js/ajax-form.js'}})"></script>
    <script src="{{'assets/js/waypoints.min.js'}})"></script>
    <script src="{{'assets/js/jquery.counterup.min.js'}})"></script>
    <script src="{{'assets/js/imagesloaded.pkgd.min.js'}})"></script>
    <script src="{{'assets/js/scrollIt.js'}})"></script>
    <script src="{{'assets/js/jquery.scrollUp.min.js'}})"></script>
    <script src="{{'assets/js/wow.min.js'}})"></script>
    <script src="{{'assets/js/nice-select.min.js'}})"></script>
    <script src="{{'assets/js/jquery.slicknav.min.js'}})"></script>
    <script src="{{'assets/js/jquery.magnific-popup.min.js'}})"></script>
    <script src="{{'assets/js/plugins.js'}})"></script>
    <script src="{{'assets/js/gijgo.min.js'}})"></script>

    <!--contact js-->
    <script src="{{'assets/js/contact.js'}})"></script>
    <script src="{{'assets/js/jquery.ajaxchimp.min.js'}})"></script>
    <script src="{{'assets/js/jquery.form.js'}})"></script>
    <script src="{{'assets/js/jquery.validate.min.js'}})"></script>
    <script src="{{'assets/js/mail-script.js'}})"></script>

    <script src="{{'assets/js/main.js'}})"></script>
</body>
</html>


