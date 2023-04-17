@include('frontend.includes.header')


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
                                <h2>Login</h2>
                                <form action="{{ route('login') }}" class="woocommerce-form woocommerce-form-login login" method="post">
                                    @csrf
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="username">Email address&nbsp;<span class="required">*</span></label>
                                        <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email"  autocomplete="email" />
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="password">Password&nbsp;<span class="required">*</span></label>
                                        <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
                                    </p>
                                    <p class="form-row">
                                        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Remember me</span>
                                        </label>
                                        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="f0e969fd27" /><input type="hidden" name="_wp_http_referer" value="/my-account/" />               <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Log in</button>
                                    </p>

                                </form>
                            </div>
                            <div class="u-column2 col-2">
                                <h2>Register</h2>
                                <form action="{{ route('register') }}" method="post" class="woocommerce-form woocommerce-form-register register"  >
                                    @csrf
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="reg_email">Name&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name"  autocomplete="name" />
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="reg_email">Email&nbsp;<span class="required">*</span></label>
                                        <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email"  autocomplete="email" />
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="phone">Phone&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="phone" autocomplete="phone" />
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="address">Address&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="address" autocomplete="address" />
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="password">Password&nbsp;<span class="required">*</span></label>
                                        <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password"  autocomplete="password" />
                                    </p>
                                    <p>A password will be sent to your email address.</p>
                                    <div class="woocommerce-privacy-policy-text">
                                        <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="woocommerce-privacy-policy-link" target="_blank">privacy policy</a>.</p>
                                    </div>
                                    <p class="woocommerce-form-row form-row">
                                        <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="2361821e0b" /><input type="hidden" name="_wp_http_referer" value="/my-account/" />
                                        <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="Register">Register</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end my-account-section -->


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

<!-- Mirrored from products.wp-ts.com/azedw/html-live/ltr/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2023 13:39:01 GMT -->
</html>
