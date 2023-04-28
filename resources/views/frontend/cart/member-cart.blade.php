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
                    <a class="navbar-brand" href=""><img src="assets/images/logo.png" alt></a>
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
                            <a href="shop">Shop</a>
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
                            <h2>Cart</h2>
                            <ol class="breadcrumb">
                                <li><a href="/">Home</a></li>
                                <li>Cart</li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div>
    </section>
    <!-- end page-title -->


    <!-- start cart-section -->
    <section class="cart-section woocommerce-cart section-padding">
        <div class="container-1410">
            <div class="row">
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
                <div class="col col-xs-12">
                    <div class="woocommerce">
                        <form action="{{ route('update-cart') }}" method="POST" data-form="update-cart">
                            @csrf
                            <table class="shop_table shop_table_responsive cart">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($carts as $cart)
                                    <tr class="cart_item">

                                        <td class="product-remove">
                                            <form action="{{route('remove-from-cart')}}">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$cart->id}}">
                                                <button type="submit" class="remove-btn">
                                                    <a  class="remove" title="Remove this item" data-product_sku="">&times;</a>
                                                </button>
                                            </form>

                                            <style>
                                                .remove-btn {
                                                    border: none;
                                                    background-color: transparent;
                                                    padding: 0;
                                                    margin: 0;
                                                    cursor: pointer;
                                                }
                                                .remove-btn a {
                                                    display: none;
                                                }
                                            </style>
                                        </td>
                                        <td class="product-thumbnail">
                                            <a href="#">
                                                <img width="57" height="70" src="images/{{ $cart->product_image }}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="#"  />
                                            </a>
                                        </td>
                                        <td class="product-name" data-title="Product">
                                            <a href="">{{ $cart->product_name }}</a>
                                        </td>
                                        <td class="product-price" data-title="Price">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₦ </span>{{ number_format($cart->product_price) }}</span>
                                        </td>
                                        <td class="product-quantity" data-title="Quantity">
                                            <div class="quantity">
                                                <input type="number" step="1" min="0" name="cart[{{ $cart->id }}][qty]" value="{{ $cart->total_quantity }}" title="Qty" class="product-count input-text qty text js-quantity" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal" data-title="Total">
                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">₦ </span><span class="js-total">{{ number_format($cart->product_price * $cart->total_quantity) }}</span></span>
                                        </td>
                                    </tr>
                                @empty
                                    <p>Your Cart is Empty</p>
                                @endforelse
                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                            <label for="coupon_code">Coupon:</label>
                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" />
                                            <input type="submit" class="button" name="apply_coupon" value="Apply Coupon" />
                                        </div>


                                            <button type="submit" class="button" name="update_cart" value="{{ __('Update Cart') }}">{{ __('Update Cart') }}</button>


                                        <input type="hidden" id="_wpnonce" name="_wpnonce" value="918724a9c2" />
                                        <input type="hidden" name="_wp_http_referer" value="/wp/?page_id=5" />
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>
                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script>
                            $(function() {
                                // Calculate the initial total price
                                var totalPrice = 0;
                                $('.js-total').each(function() {
                                    totalPrice += parseFloat($(this).text().replace(/[^0-9.-]+/g,""));
                                });
                                $('#total').val(totalPrice.toLocaleString()); // set input value
                                $('#new-form-total').val(totalPrice.toLocaleString()); // set input value for new form

                                // When the quantity input changes
                                $('.js-quantity').change(function() {
                                    // Get the product price from the previous td element
                                    var productPrice = $(this).closest('td').prev().find('.woocommerce-Price-amount').text().replace(/[^0-9.-]+/g,"");

                                    // Calculate the new total price
                                    var newTotal = productPrice * $(this).val();

                                    // Update the total price display
                                    $(this).closest('td').next().find('.js-total').text(newTotal);

                                    // Recalculate the total
                                    totalPrice = 0;
                                    $('.js-total').each(function() {
                                        totalPrice += parseFloat($(this).text().replace(/[^0-9.-]+/g,""));
                                    });
                                    $('#total').val(totalPrice.toLocaleString()); // set input value
                                    $('#new-form-total').val(totalPrice.toLocaleString()); // set input value for new form
                                });
                            });
                        </script>

                        <div class="cart-collaterals">
                            <div class="cart_totals calculated_shipping">
                                <h2>Cart Totals</h2>
                                <table class="shop_table shop_table_responsive">
                                    <tr class="cart-total">
                                        <th>Total</th>
                                        <td data-title="Subtotal">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol"></span>
                                                <input type="text" id="total" name="total" readonly> <!-- input field -->
                                            </span>
                                        </td>
                                    </tr>

                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td data-title="Shipping">
                                            Free Shipping
                                            <input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0" value="free_shipping:1" class="shipping_method" />
                                        </td>
                                    </tr>
                                </table>

                                <div class="wc-proceed-to-checkout">
                                        <div class="form-submit">
                                            <form action="{{route('checkout')}}" >
                                                @csrf
                                                <input type="hidden" id="new-form-total" name="new_form_total" readonly>
                                            <button type="submit">Proceed to Checkout </button>
                                            </form>
                                        </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart-section -->
    <script src="https://js.paystack.co/v1/inline.js"></script>

    <!-- start instagram-section -->
    <section class="instagram-section">
        <div class="container-1410">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="instagram-inner">
                        <div class="instagram-text">
                            <h3>Follow our instagram</h3>
                            <p>@aviwp.studio</p>
                        </div>
                        <div class="instagram-grids clearfix">
                            <div class="grid">
                                <a href="#"><img src="assets/images/instagram/1.jpg" alt></a>
                            </div>
                            <div class="grid">
                                <a href="#"><img src="assets/images/instagram/3.jpg" alt></a>
                            </div>
                            <div class="grid">
                                <a href="#"><img src="assets/images/instagram/4.jpg" alt></a>
                            </div>
                            <div class="grid">
                                <a href="#"><img src="assets/images/instagram/2.jpg" alt></a>
                            </div>
                            <div class="grid">
                                <a href="#"><img src="assets/images/instagram/5.jpg" alt></a>
                            </div>
                            <div class="grid">
                                <a href="#"><img src="assets/images/instagram/6.jpg" alt></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end instagram-section -->


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

<!-- Mirrored from products.wp-ts.com/azedw/html-live/ltr/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2023 13:38:58 GMT -->
</html>
