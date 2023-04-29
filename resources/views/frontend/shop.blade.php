@include('frontend.includes.header')

    <!-- start page-title -->
    <section class="page-title">
        <div class="page-title-container">
            <div class="page-title-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <h2>Shop</h2>
                            <ol class="breadcrumb">
                                <li><a href="">Home</a></li>
                                <li>Shop</li>
                            </ol>
                        </div>
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div>
        </div>
    </section>
    <!-- end page-title -->


    <!-- start shop-section -->
    <section class="shop-section section-padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="shop-area clearfix">
                        <div class="woocommerce-content-wrap">
                            <div class="woocommerce-content-inner">
                                <div class="woocommerce-toolbar-top">
                                    <p class="woocommerce-result-count">Showing 1–12 of 70 results</p>
                                    <div class="products-sizes">
                                        <a href="#" class="grid-4 active">
                                            <div class="grid-draw">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="grid-draw">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="grid-draw">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </a>
                                        <a href="#" class="grid-3">
                                            <div class="grid-draw">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="grid-draw">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="grid-draw">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </a>
                                        <a href="#" class="list-view">
                                            <div class="grid-draw-line">
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="grid-draw-line">
                                                <span></span>
                                                <span></span>
                                            </div>
                                            <div class="grid-draw-line">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </a>
                                    </div>
                                    <form class="woocommerce-ordering" method="get">
                                        <select name="orderby" class="orderby">
                                            <option value="menu_order" selected='selected'>Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                        <input type="hidden" name="post_type" value="product" />
                                    </form>
                                </div>
                                <ul class="products">

                                    @forelse($products as $product)
                                    <li class="product">
                                        <div class="product-holder">
                                            <div class="product-badge discount">-27%</div>
                                            <a href="#"><img src="images/{{$product->image}}" alt style="height: 300px; width: 300px"></a>
                                            <div class="shop-action-wrap">
                                                <ul class="shop-action">
                                                    <li><a href="#"  title="Quick view!"><i class="fi flaticon-view"></i></a></li>
                                                    <li><a href="#" title="Add to Wishlist!"><i class="fi icon-heart-shape-outline"></i></a></li>

                                                    <li>
                                                        <form action="{{route('add-to-cart')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="product_id" value="{{$product->id}}">
                                                            <button type="submit" class="submit-button" style=" border: none;background: none;padding: 0;cursor: pointer;">
                                                                <a title="Add to cart!"><i class="fi flaticon-shopping-cart"></i></a>
                                                            </button>
                                                        </form>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4><a href="#">{{$product->name}}</a></h4>
                                            <span class="woocommerce-Price-amount amount">
                                                    <ins>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi><span class="woocommerce-Price-currencySymbol">₦</span>{{number_format($product->new_price)}}</bdi>
                                                        </span>
                                                    </ins>
                                                    <del>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi><span class="woocommerce-Price-currencySymbol">₦</span>{{number_format($product->old_price)}}</bdi>
                                                        </span>
                                                    </del>
                                                </span>
                                            <p class="product-description">{{$product->description}}</p>
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
                                                    <div class="thb-product-meta-before">
                                                        <div class="add-to-wishlist">
                                                            <a href="#" class="add_to_wishlist">
                                                                <i class="pe-7s-like"></i>
                                                                <span>Add To Wishlist</span>
                                                            </a>
                                                        </div>
                                                        <div class="product_meta">
                                                            <span class="sku_wrapper">SKU: <span class="sku">71236-1</span></span>
                                                            <span class="posted_in">Categories: <a href="#">{{$product->category_name}}</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end quick-view-single-product -->
                                    </li>
                                    @empty
                                    <p>No Product Available</p>
                                    @endforelse


                                </ul>
                            </div>




                            <div class="pagination-wrapper">
                                <ul class="pg-pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <i class="fi flaticon-back"></i>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <i class="fi flaticon-next"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="shop-sidebar">
                            <div class="widget widget_search">
                                <div class="search-widget">
                                    <form class="searchform">
                                        <div>
                                            <input type="text" placeholder="Search...">
                                            <button type="submit"><i class="ti-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="widget widget_price_filter">
                                <h3>Filter By Price</h3>
                                <div class="filter-price">
                                    <form>
                                        <div id="slider-range"></div>
                                        <p>Price : <input type="text" id="amount"></p>
                                        <button>filter</button>
                                    </form>
                                </div>
                            </div>

                            <div class="widget woocommerce widget_product_categories">
                                <h3>Filter by categories</h3>
                                <ul class="product-categories">
                                    <li class="cat-item cat-parent">
                                        <a href="#">Clothing</a>
                                        <ul class="children">
                                            <li class="cat-item cat-item-213">
                                                <a href="#">Accessories</a>
                                            </li>
                                            <li class="cat-item cat-item-212">
                                                <a href="#">Hoodies</a>
                                            </li>
                                            <li class="cat-item cat-item-211">
                                                <a href="#">Bags</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>



                            <div class="widget woocommerce widget_product_tag_cloud">
                                <h3>Filter by Product tags</h3>
                                <div class="tagcloud">
                                    <a href="#" class="tag-cloud-link">Women</a>
                                    <a href="#" class="tag-cloud-link">Collection</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end shop-section -->


    <!-- start instagram-section -->
@include('frontend.includes.instagram')
    <!-- end instagram-section -->


<!-- start site-footer -->
@include('frontend.includes.footer')
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

<!-- Mirrored from products.wp-ts.com/azedw/html-live/ltr/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Apr 2023 13:38:52 GMT -->
</html>
