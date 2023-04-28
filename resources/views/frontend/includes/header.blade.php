<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from products.wp-ts.com/azedw/html-live/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2023 13:37:55 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="irstheme">

    <title> ZATON - ZATOK </title>

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
                                <li>Contact us: +234*********</li>
                                <li>Mail us: info@zatokzadok.com</li>
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
                        <li class="menu-item current-menu-parent">
                            <a href="/">Home</a>
                        </li>



                        <li class="menu-item">
                            <a href="{{route('shop')}}">Shop</a>
                        </li>
                    </ul>
                </div><!-- end of nav-collapse -->
                <div class="header-right">
                    <div class="my-account-link">
                        <a href="{{route('welcome')}}"><i class="icon-user"></i></a>
                    </div>
                    <div class="wishlist-box">
                        <a href="#"><i class="icon-heart-shape-outline"></i></a>
                    </div>

                    <div class="mini-cart">
                        <button class="cart-toggle-btn"> <i class="icon-large-paper-bag"></i> <span class="cart-count">{{$cart_count}}</span></button>
                        <div class="mini-cart-content">
                            @foreach($mini_cart_products as $mc_product)
                            <div class="mini-cart-items">
                                <div class="mini-cart-item clearfix">
                                    <div class="mini-cart-item-image">
                                        <a href="#"><img src="images/{{$mc_product->product_image}}" alt></a>
                                    </div>
                                    <div class="mini-cart-item-des">
                                        <a href="#">{{$mc_product->product_name}}</a>
                                        <span class="mini-cart-item-quantity">Qty: {{$mc_product->quantity}}</span>
                                        <span class="mini-cart-item-price">₦{{number_format($mc_product->product_price)}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="mini-cart-action clearfix">
                                {{--<span class="mini-checkout-price">Subtotal: $215.14</span>--}}
                                <a href="{{route('view-cart')}}" class="view-cart-btn">View Cart</a>
                                <a href="#" class="checkout-btn">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </header>
    <!-- end of header -->
