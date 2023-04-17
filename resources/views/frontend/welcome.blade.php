<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from products.wp-ts.com/azedw/html-live/ltr/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2023 13:38:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <title>Zaton Zatok </title>

    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/icomoon.css" rel="stylesheet">
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/bootstrap-touchspin.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- start page-wrapper -->
<div class="page-wrapper">
    <div class="body-overlay"></div>

    <!-- start preloader -->
    <div class="preloader">
        <div class="sk-chase">
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
            <div class="sk-chase-dot"></div>
        </div>
    </div>
    <!-- end preloader -->

    <!-- Start header -->
    <header id="header" class="site-header header-style-1">
        <div class="topbar">
            <div class="topbar-text">
                <p>Join our showroom and get 25 % off ! Coupon code : Bangbang45</p>
            </div>
        </div> <!-- end topbar -->

        <nav class="navigation navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="assets/images/logo.png" alt></a>
                </div>
                <div class="header-left">
                    <div class="side-info-bars">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="side-info-content">
                        <button class="btn side-info-close-btn"><i class="ti-close"></i></button>
                        <div class="logo">
                            <img src="assets/images/slidbar-logo.png" alt>
                        </div>
                        <div class="text">
                            <p>Covered the whole of her lower arm towards the viewer gregor then turned to look out the window</p>
                            <ul class="info">
                                <li>Contact us: ++8801682530219</li>
                                <li>Mail us: eoard@gmail.com</li>
                            </ul>
                            <ul class="social-links">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                <li><a href="#"><i class="ti-vimeo-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="search-area">
                        <form>
                            <button type="submit"><i class="fi flaticon-search"></i></button>
                            <input type="text" placeholder="Search for..">
                        </form>
                    </div>
                </div>
                <div id="navbar" class="navbar-collapse collapse navigation-holder">
                    <button class="close-navbar"><i class="ti-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li class="menu-item">
                            <a href="/">Home</a>
                        </li>



                        <li class="menu-item">
                            <a href="/shop">Shop</a>
                        </li>
                    </ul>
                </div><!-- end of nav-collapse -->
                <div class="header-right">
                    <div class="my-account-link">
                        <a href="{{route('welcome')}}"><i class="icon-user"></i></a>
                    </div>

                </div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->

<!-- start page-title -->
<section class="page-title">
    <div class="page-title-container">
        <div class="page-title-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h2>My account</h2>
                        <ol class="breadcrumb">
                            <li><a href="">Home</a></li>
                            <li>My account</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div>
    </div>
</section>
<!-- end page-title -->


<!-- start my-account-section -->
<section class="my-account-section">
    <div class="container-1410">
        <div class="row">




            <div class="col-xs-12">
                <div class="woocommerce">
                    <div class="woocommerce-notices-wrapper"></div>


                    <div class="u-columns col2-set" id="customer_login">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <div class="u-column1 col-1">

                            <h2>Welcome {{auth()->user()->name}}</h2>

                            <a href="{{route('logout')}}">Logout</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end my-account-section -->




<!-- start site-footer -->
<footer class="site-footer">
    <div class="container-1410">
        <div class="row widget-area">
            <div class="col-lg-4 col-xs-6  widget-col about-widget-col">
                <div class="widget newsletter-widget">
                    <div class="inner">
                        <h3>Sign Up Now & Get 10% Off</h3>
                        <p>Get timely updates from your favorite products</p>
                        <form>
                            <div class="input-1">
                                <input type="email" class="form-control" placeholder="Email Address *" required>
                            </div>
                            <div class="submit clearfix">
                                <button type="submit">Subcribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-6 widget-col">
                <div class="widget contact-widget">
                    <h3>Contact info</h3>
                    <ul>
                        <li>Phone: 888-999-000-1425</li>
                        <li>Email: azedw@mail.com</li>
                        <li>Address: 22/1 natinoal city austria, dreem land, Huwai</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-xs-6 widget-col">
                <div class="widget company-widget">
                    <h3>Company</h3>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Best services</a></li>
                        <li><a href="#">Recent insight</a></li>
                        <li><a href="#">Shipping guid</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-xs-6 widget-col">
                <div class="widget payment-widget">
                    <h3>Payment & Shipping</h3>
                    <ul>
                        <li><a href="#">Payment method</a></li>
                        <li><a href="#">Tearms of use</a></li>
                        <li><a href="#">Shipping policy</a></li>
                        <li><a href="#">Shipping guide</a></li>
                        <li><a href="#">Return policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- end container -->

    <div class="lower-footer">
        <div class="container-1410">
            <div class="row">
                <div class="col-xs-12">
                    <div class="lower-footer-inner clearfix">
                        <div>
                            <p>&copy; 2021 WP Studio , All Rights Reserved</p>
                        </div>
                        <div class="social">
                            <ul class="clearfix">
                                <li><a href="#" title="Facebook">fb</a></li>
                                <li><a href="#" title="Twitter">tw</a></li>
                                <li><a href="#" title="Instagram">ig</a></li>
                                <li><a href="#" title="Pinterest">pr</a></li>
                            </ul>
                        </div>
                        <div class="extra-link">
                            <ul>
                                <li><a href="#">Privacy </a></li>
                                <li><a href="#">Terms</a></li>
                                <li><a href="#">Promo T&amp;Cs Apply</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end site-footer -->


</div>
<!-- end of page-wrapper -->



<!-- All JavaScript files
================================================== -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins for this template -->
<script src="assets/js/jquery-plugin-collection.js"></script>

<!-- Custom script for this template -->
<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from products.wp-ts.com/azedw/html-live/ltr/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2023 13:39:01 GMT -->
</html>
