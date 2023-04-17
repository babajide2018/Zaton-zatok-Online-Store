@include('frontend.includes.header')


    <!-- start page-title -->
    <section class="page-title">
        <div class="page-title-container">
            <div class="page-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <h2>Add Product</h2>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>add Product</li>
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
                            <div class="u-column1 col-1">
                                <h2>Product Details</h2>
                                <form action="{{route('upload-product')}}" class="woocommerce-form woocommerce-form-login login" method="post"  enctype="multipart/form-data">
                                    @csrf
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="username">Product Name&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name"  autocomplete="name" />
                                    </p>
                                        <label for="username">Product Description&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="description"  autocomplete="name" />
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="username">Old Price&nbsp;<span class="">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="old_price" autocomplete="old price" />
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="username">New Price&nbsp;<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="new_price" autocomplete="new price" />
                                    </p>
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="username">Category&nbsp;<span class="required">*</span></label>
                                        <select class="woocommerce-Input woocommerce-Input--text input-text" name="category" id="">
                                            <option value="1">Belts</option>
                                            <option value="2">Jackets</option>
                                            <option value="3">Bags</option>
                                            <option value="4">Shoes</option>
                                        </select>
                                    </p>

                                    <p class="form-row">
                                        <label for="username">Product Image&nbsp;<span class="required">*</span></label>
                                        <input type="file" class="woocommerce-Input woocommerce-Input--text input-text" name="image" />
                                    </p>

                                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Log in">Upload</button>

                                </form>
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
