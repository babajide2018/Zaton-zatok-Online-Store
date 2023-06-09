@include('frontend.includes.header')

    <!-- start of hero -->
    <section class="hero-slider hero-style-1">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-1.jpg">
                        <div class="container-1410">
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>Zaton Zatok</p>
                            </div>
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>Great Leather Wears</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#" class="theme-btn-s7">Shop Now</a>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-2.jpg">
                        <div class="container-1410">
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>Zaton Zatok</p>
                            </div>
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>Women Designs</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#" class="theme-btn-s4">Shop Now</a>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div><!-- end swiper-slide -->

                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="assets/images/slider/slide-3.jpg">
                        <div class="container-1410">
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>Zaton Zatok</p>
                            </div>
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2><span>Trendy</span> Collection</h2>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#" class="theme-btn-s4">Shop Now</a>
                            </div>
                        </div>
                    </div> <!-- end slide-inner -->
                </div> <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->

            <!-- Control -->
            <div class="control-slider swiper-control">
                <div></div>
                <div class="swiper-pagination"></div>
                <div>
                    <div class="swiper-button-next">
                        <svg class="slider-nav slider-nav-progress" viewBox="0 0 46 46">
                            <g class="slider-nav-path-progress-color">
                                <path d="M0.5,23a22.5,22.5 0 1,0 45,0a22.5,22.5 0 1,0 -45,0" />
                            </g>
                        </svg>
                        <svg class="slider-nav slider-nav-transparent sw-ar-rt" viewBox="0 0 46 46">
                            <circle class="slider-nav-path" cx="23" cy="23" r="22.5"/>
                        </svg>
                    </div>
                    <div class="swiper-button-prev">
                        <svg class="slider-nav slider-nav-transparent sw-ar-lf" viewBox="0 0 46 46">
                            <circle class="slider-nav-path" cx="23" cy="23" r="22.5"/>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- /Control -->
        </div>
    </section>
    <!-- end of hero slider -->


    <!-- start featured-proeducts-section-s2 -->
    <section class="featured-proeducts-section-s2 section-padding">
        <div class="container-1410">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="product-grids clearfix">
                        <div class="grid">
                            <div class="img-holder">
                                <a href="#"><img src="assets/images/feature-product/img-4.jpg" alt></a>
                            </div>
                            <div class="details">
                                <h3>Leather Belts</h3>
                                <a href="#" class="shop-btn">Shop Now</a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <a href="#"><img src="assets/images/feature-product/img-11.jpg" alt></a>
                            </div>
                            <div class="details">
                                <h3>Leather Bags</h3>
                                <a href="#" class="shop-btn">Shop Now</a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="img-holder">
                                <a href="#"><img src="assets/images/feature-product/img-7.jpg" alt></a>
                            </div>
                            <div class="details">
                                <h3>Leather Jackets</h3>
                                <a href="#" class="shop-btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container-1410 -->
    </section>
    <!-- end featured-proeducts-section-s2 -->


    <!-- start trendy-product-section -->
    <section class="trendy-product-section section-padding">
        <div class="container-1410">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title-s2">
                        <h2>Recent products</h2>
                    </div>
                    <a href="#" class="more-products">More products</a>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="products-wrapper">
                        <ul class="products product-row-slider">
                            @foreach($products as $product)

                            <li class="product">
                                <div class="product-holder">
                                    <div class="product-badge discount">-27%</div>
                                    <a href="#"><img src="images/{{$product->image}}" alt></a>

                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="#">{{$product->name}}</a></h4>
                                    <span class="woocommerce-Price-amount amount">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">₦</span>{{$product->new_price}}</bdi>
                                                </span>
                                            </ins>
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">₦</span>{{$product->old_price}}</bdi>
                                                </span>
                                            </del>
                                        </span>
                                </div>
                                <div class="quick-view-single-product">
                                    <div class="view-single-product-inner clearfix">
                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                        <div class="img-holder">
                                            <img src="images/{{$product->image}}" alt>
                                        </div>
                                        <div class="product-details">
                                            <h4>{{$product->name}}</h4>
                                            <div class="price">
                                                <span class="current">₦ {{$product->new_price}}</span>
                                                <span class="old">₦ {{$product->old_price}}</span>
                                            </div>
                                            <div class="rating">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                <span>(2 Customer review)</span>
                                            </div>
                                            <p>{{$product->description}}</p>
                                            <div class="product-option">
                                                <form class="form">
                                                    <div class="product-row">
                                                        <div>
                                                            <input id="product-count" class="product-count" type="text" value="1" name="product-count">
                                                        </div>
                                                        <div>
                                                            <form  action="{{route('add-to-cart')}}" class="form" method="post">
                                                                @csrf
                                                                <div class="product-row">
                                                                    <div>
                                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                        <input id="product-count" class="product-count" type="text" placeholder="1" name="quantity">
                                                                    </div>
                                                                    <div>
                                                                        <button type="submit">Add to cart</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="thb-product-meta-before">
                                                <div class="add-to-wishlist">
                                                    <a href="#" class="add_to_wishlist">
                                                        <i class="pe-7s-like"></i>
                                                        <span>Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="product_meta">
                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end quick-view-single-product -->
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- end container-1410 -->
    </section>
    <!-- end trendy-product-section -->



    <!-- start category-section-area -->
    <section class="category-section-area section-padding">
        <div class="container-1410">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title-s3">
                        <h2>Zaton-Zatok Categories</h2>
                        <p>Our campaigns, the latest trends and new collections</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col col-xs-12">
                    <div class="all-cat">
                        <ul class="clearfix">
                            <li><a href="#"><i class="fi flaticon-jacket-1"></i> <span>Jakets</span></a></li>
                            <li><a href="#"><i class="fi flaticon-jacket-2"></i> <span>Coats</span></a></li>
                            <li><a href="#"><i class="fi flaticon-pants"></i> <span>Trousers</span></a></li>
                            <li><a href="#"><i class="fi flaticon-dress"></i> <span>Tops</span></a></li>
                            <li><a href="#"><i class="fi flaticon-polo-shirt"></i> <span>T-shirts</span></a></li>
                            <li><a href="#"><i class="fi flaticon-dress-1"></i> <span>Skirts</span></a></li>
                            <li><a href="#"><i class="fi flaticon-bride-dress"></i> <span>Bridals</span></a></li>
                            <li><a href="#"><i class="fi flaticon-coat"></i> <span>Swetters</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- end container-1410 -->
    </section>
    <!-- end category-section-area -->


    <!-- start cta-section -->
    <section class="cta-section">
        <div class="container-1410">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="content-area">
                        <span>Trending</span>
                        <h3>New fashion</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nisi distinctio magni, iure deserunt doloribus optio</p>
                        <a href="#" class="theme-btn-s2">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end cta-section -->


    <!-- start best-seller-section -->
    {{--<section class="best-seller-section section-padding">
        <div class="container-1410">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="section-title-s2">
                        <h2>Best seller</h2>
                    </div>
                    <a href="#" class="more-products">More products</a>
                </div>
            </div>
            <div class="row">
                <div class="col col-xs-12">
                    <div class="products-wrapper">
                        <ul class="products product-row-slider">
                            <li class="product">
                                <div class="product-holder">
                                    <div class="product-badge discount">-27%</div>
                                    <a href="#"><img src="assets/images/shop/img-7.jpg" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="#">Cotton Short Sleeve</a></h4>
                                    <span class="woocommerce-Price-amount amount">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>79</bdi>
                                                </span>
                                            </ins>
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>129</bdi>
                                                </span>
                                            </del>
                                        </span>
                                </div>
                                <div class="quick-view-single-product">
                                    <div class="view-single-product-inner clearfix">
                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                        <div class="img-holder">
                                            <img src="assets/images/shop/img-7.jpg" alt>
                                        </div>
                                        <div class="product-details">
                                            <h4>Cotton Short Sleeve</h4>
                                            <div class="price">
                                                <span class="current">$45.00</span>
                                                <span class="old">$55.00</span>
                                            </div>
                                            <div class="rating">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                <span>(2 Customer review)</span>
                                            </div>
                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                            <div class="product-option">
                                                <form class="form">
                                                    <div class="product-row">
                                                        <div>
                                                            <input class="product-count" type="text" value="1" name="product-count">
                                                        </div>
                                                        <div>
                                                            <button type="submit">Add to cart</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="thb-product-meta-before">
                                                <div class="add-to-wishlist">
                                                    <a href="#" class="add_to_wishlist">
                                                        <i class="pe-7s-like"></i>
                                                        <span>Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="product_meta">
                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end quick-view-single-product -->
                            </li>
                            <li class="product">
                                <div class="product-holder">
                                    <a href="#"><img src="assets/images/shop/img-8.jpg" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="#">Women's shot skirt</a></h4>
                                    <span class="woocommerce-Price-amount amount">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>150</bdi>
                                                </span>
                                            </ins>
                                        </span>
                                </div>
                                <div class="quick-view-single-product">
                                    <div class="view-single-product-inner clearfix">
                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                        <div class="img-holder">
                                            <img src="assets/images/shop/img-8.jpg" alt>
                                        </div>
                                        <div class="product-details">
                                            <h4>Women's shot skirt</h4>
                                            <div class="price">
                                                <span class="current">$45.00</span>
                                                <span class="old">$55.00</span>
                                            </div>
                                            <div class="rating">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                <span>(2 Customer review)</span>
                                            </div>
                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                            <div class="product-option">
                                                <form class="form">
                                                    <div class="product-row">
                                                        <div>
                                                            <input class="product-count" type="text" value="1" name="product-count-2">
                                                        </div>
                                                        <div>
                                                            <button type="submit">Add to cart</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="thb-product-meta-before">
                                                <div class="add-to-wishlist">
                                                    <a href="#" class="add_to_wishlist">
                                                        <i class="pe-7s-like"></i>
                                                        <span>Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="product_meta">
                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end quick-view-single-product -->
                            </li>
                            <li class="product">
                                <div class="product-holder">
                                    <a href="#"><img src="assets/images/shop/img-9.jpg" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="#">Sleeve cotton t-shirt</a></h4>
                                    <span class="woocommerce-Price-amount amount">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>147</bdi>
                                                </span>
                                            </ins>
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>200</bdi>
                                                </span>
                                            </del>
                                        </span>
                                </div>
                                <div class="quick-view-single-product">
                                    <div class="view-single-product-inner clearfix">
                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                        <div class="img-holder">
                                            <img src="assets/images/shop/img-9.jpg" alt>
                                        </div>
                                        <div class="product-details">
                                            <h4>Sleeve cotton t-shirt</h4>
                                            <div class="price">
                                                <span class="current">$45.00</span>
                                                <span class="old">$55.00</span>
                                            </div>
                                            <div class="rating">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                <span>(2 Customer review)</span>
                                            </div>
                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                            <div class="product-option">
                                                <form class="form">
                                                    <div class="product-row">
                                                        <div>
                                                            <input class="product-count" type="text" value="1" name="product-count-3">
                                                        </div>
                                                        <div>
                                                            <button type="submit">Add to cart</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="thb-product-meta-before">
                                                <div class="add-to-wishlist">
                                                    <a href="#" class="add_to_wishlist">
                                                        <i class="pe-7s-like"></i>
                                                        <span>Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="product_meta">
                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end quick-view-single-product -->
                            </li>
                            <li class="product">
                                <div class="product-holder">
                                    <a href="#"><img src="assets/images/shop/img-10.jpg" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="#">Elegant tops</a></h4>
                                    <span class="woocommerce-Price-amount amount">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>79</bdi>
                                                </span>
                                            </ins>
                                        </span>
                                </div>
                                <div class="quick-view-single-product">
                                    <div class="view-single-product-inner clearfix">
                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                        <div class="img-holder">
                                            <img src="assets/images/shop/img-10.jpg" alt>
                                        </div>
                                        <div class="product-details">
                                            <h4>Elegant tops</h4>
                                            <div class="price">
                                                <span class="current">$45.00</span>
                                                <span class="old">$55.00</span>
                                            </div>
                                            <div class="rating">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                <span>(2 Customer review)</span>
                                            </div>
                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                            <div class="product-option">
                                                <form class="form">
                                                    <div class="product-row">
                                                        <div>
                                                            <input class="product-count" type="text" value="1" name="product-count-4">
                                                        </div>
                                                        <div>
                                                            <button type="submit">Add to cart</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="thb-product-meta-before">
                                                <div class="add-to-wishlist">
                                                    <a href="#" class="add_to_wishlist">
                                                        <i class="pe-7s-like"></i>
                                                        <span>Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="product_meta">
                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end quick-view-single-product -->
                            </li>
                            <li class="product">
                                <div class="product-holder">
                                    <a href="#"><img src="assets/images/shop/img-11.jpg" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="#">Women Modern Shot Pant</a></h4>
                                    <span class="woocommerce-Price-amount amount">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>179</bdi>
                                                </span>
                                            </ins>
                                        </span>
                                </div>
                                <div class="quick-view-single-product">
                                    <div class="view-single-product-inner clearfix">
                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                        <div class="img-holder">
                                            <img src="assets/images/shop/img-11.jpg" alt>
                                        </div>
                                        <div class="product-details">
                                            <h4>Two Colure Hoodie</h4>
                                            <div class="price">
                                                <span class="current">$45.00</span>
                                                <span class="old">$55.00</span>
                                            </div>
                                            <div class="rating">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                <span>(2 Customer review)</span>
                                            </div>
                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                            <div class="product-option">
                                                <form class="form">
                                                    <div class="product-row">
                                                        <div>
                                                            <input class="product-count" type="text" value="1" name="product-count-5">
                                                        </div>
                                                        <div>
                                                            <button type="submit">Add to cart</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="thb-product-meta-before">
                                                <div class="add-to-wishlist">
                                                    <a href="#" class="add_to_wishlist">
                                                        <i class="pe-7s-like"></i>
                                                        <span>Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="product_meta">
                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end quick-view-single-product -->
                            </li>
                            <li class="product">
                                <div class="product-holder">
                                    <a href="#"><img src="assets/images/shop/img-12.jpg" alt></a>
                                    <div class="shop-action-wrap">
                                        <ul class="shop-action">
                                            <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                            <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>
                                            <li><a href="#" title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h4><a href="#">Blue Jeans Pant for Men</a></h4>
                                    <span class="woocommerce-Price-amount amount">
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <bdi><span class="woocommerce-Price-currencySymbol">$</span>179</bdi>
                                                </span>
                                            </ins>
                                        </span>
                                </div>
                                <div class="quick-view-single-product">
                                    <div class="view-single-product-inner clearfix">
                                        <button class="btn quick-view-single-product-close-btn"><i class="pe-7s-close-circle"></i></button>
                                        <div class="img-holder">
                                            <img src="assets/images/shop/img-12.jpg" alt>
                                        </div>
                                        <div class="product-details">
                                            <h4>Two Colure Hoodie</h4>
                                            <div class="price">
                                                <span class="current">$45.00</span>
                                                <span class="old">$55.00</span>
                                            </div>
                                            <div class="rating">
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star"></i>
                                                <i class="fi flaticon-star-social-favorite-middle-full"></i>
                                                <span>(2 Customer review)</span>
                                            </div>
                                            <p>Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly</p>
                                            <div class="product-option">
                                                <form class="form">
                                                    <div class="product-row">
                                                        <div>
                                                            <input class="product-count" type="text" value="1" name="product-count-6">
                                                        </div>
                                                        <div>
                                                            <button type="submit">Add to cart</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="thb-product-meta-before">
                                                <div class="add-to-wishlist">
                                                    <a href="#" class="add_to_wishlist">
                                                        <i class="pe-7s-like"></i>
                                                        <span>Add To Wishlist</span>
                                                    </a>
                                                </div>
                                                <div class="product_meta">
                                                    <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                    <span class="posted_in">Categories: <a href="#">Clothing</a>, <a href="#">Tops</a>, <a href="#">Women</a></span>
                                                    <span class="tagged_as">Tags: <a href="#">Button</a>, <a href="#">Red</a>, <a href="#">Tshirt</a></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end quick-view-single-product -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- end container-1410 -->
    </section>--}}
    <!-- end best-seller-section -->



<!-- start instagram-section -->
@include('frontend.includes.instagram')
<!-- end instagram-section -->


    <!-- start site-footer -->
@include('frontend.includes.footer')
    <!-- end site-footer -->


    <!-- start newsletter-popup-area-section -->
    {{--<section class="newsletter-popup-area-section">
        <div class="newsletter-popup-area">
            <div class="newsletter-popup-ineer">
                <button class="btn newsletter-close-btn"><i class="pe-7s-close-circle"></i></button>
                <div class="img-holder">
                    <img src="assets/images/newsletter.jpg" alt>
                </div>

                <div class="details">
                    <h4>Get 25% discount shipped to your inbox</h4>
                    <p>Subscribe to the Zango eCommerce newsletter to receive timely updates to your favorite products</p>
                    <form>
                        <div>
                            <input type="email" placeholder="Enter your email" />
                            <button type="submit">Subscribe</button>
                        </div>
                        <div>
                            <label class="checkbox-holder"> Don't show this popup again!
                                <input type="checkbox" class="show-message">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- end newsletter-popup-area-section -->

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

<!-- Mirrored from products.wp-ts.com/azedw/html-live/ltr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2023 13:37:59 GMT -->
</html>
