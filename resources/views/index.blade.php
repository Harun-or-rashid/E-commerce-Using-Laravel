<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E&E - Electronics eCommerce Bootstrap4 HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/icon-font.min.css')}}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- Modernizer JS -->
    <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
@include('frontend.partial.header')

<!-- Mini Cart Wrap Start -->
<div class="mini-cart-wrap">

    <!-- Mini Cart Top -->
    <div class="mini-cart-top">

        <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>

    </div>

    <!-- Mini Cart Products -->
    <ul class="mini-cart-products">
        <li>
            <a class="image"><img src="{{asset('assets')}}/images/product/product-1.png" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Waxon Note Book Pro 5</a>
                <span class="price">Price: $295</span>
                <span class="qty">Qty: 02</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="{{asset('assets/images/product/product-2.png')}}" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Aquet Drone D 420</a>
                <span class="price">Price: $275</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="{{asset('assets/images/product/product-3.png')}}" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Game Station X 22</a>
                <span class="price">Price: $295</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
    </ul>

    <!-- Mini Cart Bottom -->
    <div class="mini-cart-bottom">

        <h4 class="sub-total">Total: <span>$1160</span></h4>

        <div class="button">
            <a href="checkout.html">CHECK OUT</a>
        </div>

    </div>

</div><!-- Mini Cart Wrap End -->

<!-- Cart Overlay -->
<div class="cart-overlay"></div>

<!-- Hero Section Start -->
<div class="hero-section section mb-30">
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Hero Slider Start -->
                <div class="hero-slider hero-slider-one">

                    <!-- Hero Item Start -->
                    <div class="hero-item">
                        <div class="row align-items-center justify-content-between">

                            <!-- Hero Content -->
                            <div class="hero-content col">

                                <h2>HURRY UP!</h2>
                                <h1><span>uPhone X</span></h1>
                                <h1>IT’S <span class="big">29%</span> OFF</h1>
                                <a href="#">get it now</a>

                            </div>

                            <!-- Hero Image -->
                            <div class="hero-image col">
                                <img src="{{asset('assets')}}/images/hero/hero-1.png" alt="Hero Image">
                            </div>

                        </div>
                    </div><!-- Hero Item End -->

                    <!-- Hero Item Start -->
                    <div class="hero-item">
                        <div class="row align-items-center justify-content-between">

                            <!-- Hero Content -->
                            <div class="hero-content col">

                                <h2>HURRY UP!</h2>
                                <h1><span>GL G6</span></h1>
                                <h1>IT’S <span class="big">35%</span> OFF</h1>
                                <a href="#">get it now</a>

                            </div>

                            <!-- Hero Image -->
                            <div class="hero-image col">
                                <img src="{{asset('assets')}}/images/hero/hero-2.png" alt="Hero Image">
                            </div>

                        </div>
                    </div><!-- Hero Item End -->

                    <!-- Hero Item Start -->
                    <div class="hero-item">
                        <div class="row align-items-center justify-content-between">

                            <!-- Hero Content -->
                            <div class="hero-content col">

                                <h2>HURRY UP!</h2>
                                <h1><span>MSVII Case</span></h1>
                                <h1>IT’S <span class="big">15%</span> OFF</h1>
                                <a href="#">get it now</a>

                            </div>

                            <!-- Hero Image -->
                            <div class="hero-image col">
                                <img src="{{asset('assets')}}/images/hero/hero-3.png" alt="Hero Image">
                            </div>

                        </div>
                    </div><!-- Hero Item End -->

                </div><!-- Hero Slider End -->

            </div>
        </div>
    </div>
</div><!-- Hero Section End -->

<!-- Banner Section Start -->
<div class="banner-section section mb-60">
    <div class="container">
        <div class="row row-10">

            <!-- Banner -->
            <div class="col-md-8 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{asset('assets')}}/images/banner/banner-1.jpg" alt="Banner"></a></div>
            </div>

            <!-- Banner -->
            <div class="col-md-4 col-12 mb-30">
                <div class="banner"><a href="#"><img src="{{asset('assets')}}/images/banner/banner-2.jpg" alt="Banner"></a></div>
            </div>

        </div>
    </div>
</div><!-- Banner Section End -->

<!-- Feature Product Section Start -->
<div class="product-section section mb-70">
    <div class="container">
        <div class="row">

            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="FEATURED ITEMS"><h1>FEATURED ITEMS</h1></div>
            </div><!-- Section Title End -->

            <!-- Product Tab Filter Start -->
            <div class="col-12 mb-30">
                <div class="product-tab-filter">

                    <!-- Tab Filter Toggle -->
                    <button class="product-tab-filter-toggle">showing: <span></span><i class="icofont icofont-simple-down"></i></button>

                    <!-- Product Tab List -->
                    <ul class="nav product-tab-list">
                        <li><a class="active" data-toggle="tab" href="#tab-one">all</a></li>
                        <li><a data-toggle="tab" href="#tab-two">LAPTOP</a></li>
                        <li><a data-toggle="tab" href="#tab-one">DRONE</a></li>
                        <li><a data-toggle="tab" href="#tab-two">TV & AUDIO</a></li>
                        <li><a data-toggle="tab" href="#tab-one">PHONE & TABLET</a></li>
                        <li><a data-toggle="tab" href="#tab-two">CAMERA & PRINTER</a></li>
                    </ul>

                </div>
            </div><!-- Product Tab Filter End -->

            <!-- Product Tab Content Start -->
            <div class="col-12">
                <div class="tab-content">

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade show active" id="tab-one">

                        <!-- Product Slider Wrap Start -->
                        <div class="product-slider-wrap product-slider-arrow-one">
                            <!-- Product Slider Start -->
                            <div class="product-slider product-slider-4">

                                <div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-1.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Laptop</a>
                                                <h5 class="title"><a href="single-product.html">Zeon Zen 4 Pro</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">$295.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <span class="label sale">sale</span>

                                            <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-2.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Drone</a>
                                                <h5 class="title"><a href="single-product.html">Aquet Drone D 420</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price"><span class="old">$350</span>$275.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-3.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Games</a>
                                                <h5 class="title"><a href="single-product.html">Game Station X 22</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">$295.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-4.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Accessories</a>
                                                <h5 class="title"><a href="single-product.html">Roxxe Headphone Z 75</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">$110.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-5.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Camera</a>
                                                <h5 class="title"><a href="single-product.html">Mony Handycam Z 105</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">$110.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                            </div><!-- Product Slider End -->
                        </div><!-- Product Slider Wrap End -->

                    </div><!-- Tab Pane End -->

                    <!-- Tab Pane Start -->
                    <div class="tab-pane fade" id="tab-two">

                        <!-- Product Slider Wrap Start -->
                        <div class="product-slider-wrap product-slider-arrow-one">
                            <!-- Product Slider Start -->
                            <div class="product-slider product-slider-4">

                                <div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <span class="label sale">sale</span>

                                            <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-6.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Camera</a>
                                                <h5 class="title"><a href="single-product.html">Axor Digital camera</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price"><span class="old">$265</span>$199.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-7.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Camera</a>
                                                <h5 class="title"><a href="single-product.html">Silvex DSLR Camera T 32</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">$580.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <span class="label new">new</span>

                                            <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-8.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Camera</a>
                                                <h5 class="title"><a href="single-product.html">Necta Instant Camera</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">$320.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <span class="label sale">sale</span>

                                            <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-9.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Watch</a>
                                                <h5 class="title"><a href="single-product.html">Mascut Smart Watch</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price"><span class="old">$365</span>$295.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-half-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                                <div class="col pb-20 pt-10">
                                    <!-- Product Start -->
                                    <div class="ee-product">

                                        <!-- Image -->
                                        <div class="image">

                                            <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-10.png" alt="Product Image"></a>

                                            <div class="wishlist-compare">
                                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                            </div>

                                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                        </div>

                                        <!-- Content -->
                                        <div class="content">

                                            <!-- Category & Title -->
                                            <div class="category-title">

                                                <a href="#" class="cat">Watch</a>
                                                <h5 class="title"><a href="single-product.html">Z Bluetooth Headphone</a></h5>

                                            </div>

                                            <!-- Price & Ratting -->
                                            <div class="price-ratting">

                                                <h5 class="price">$189.00</h5>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>

                                            </div>

                                        </div>

                                    </div><!-- Product End -->
                                </div>

                            </div><!-- Product Slider End -->
                        </div><!-- Product Slider Wrap End -->

                    </div><!-- Tab Pane End -->

                </div>
            </div><!-- Product Tab Content End -->

        </div>
    </div>
</div><!-- Feature Product Section End -->

<!-- Best Sell Product Section Start -->
<div class="product-section section mb-60">
    <div class="container">
        <div class="row">

            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="BEST SELLER"><h1>BEST SELLERS</h1></div>
            </div><!-- Section Title End -->

            <div class="col-12">
                <div class="row">

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-5.png" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Camera</a>
                                    <h5 class="title"><a href="single-product.html">Mony Handycam Z 105</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$110.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <span class="label sale">sale</span>

                                <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-6.png" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Camera</a>
                                    <h5 class="title"><a href="single-product.html">Axor Digital camera</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price"><span class="old">$265</span>$199.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-7.png" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Camera</a>
                                    <h5 class="title"><a href="single-product.html">Silvex DSLR Camera T 32</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$580.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <span class="label new">new</span>

                                <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-8.png" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Camera</a>
                                    <h5 class="title"><a href="single-product.html">Necta Instant Camera</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$320.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <span class="label sale">sale</span>

                                <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-9.png" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Watch</a>
                                    <h5 class="title"><a href="single-product.html">Mascut Smart Watch</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price"><span class="old">$365</span>$295.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-10.png" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Watch</a>
                                    <h5 class="title"><a href="single-product.html">Z Bluetooth Headphone</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$189.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <span class="label new">new</span>

                                <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-11.png" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Printer</a>
                                    <h5 class="title"><a href="single-product.html">Pranon Photo Printer Y 25</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$210.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">
                        <!-- Product Start -->
                        <div class="ee-product">

                            <!-- Image -->
                            <div class="image">

                                <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-12.png" alt="Product Image"></a>

                                <div class="wishlist-compare">
                                    <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                    <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                </div>

                                <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            </div>

                            <!-- Content -->
                            <div class="content">

                                <!-- Category & Title -->
                                <div class="category-title">

                                    <a href="#" class="cat">Audio</a>
                                    <h5 class="title"><a href="single-product.html">Roses Speaker Box</a></h5>

                                </div>

                                <!-- Price & Ratting -->
                                <div class="price-ratting">

                                    <h5 class="price">$210.00</h5>
                                    <div class="ratting">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>

                                </div>

                            </div>

                        </div><!-- Product End -->
                    </div>

                </div>
            </div>

        </div>
    </div>
</div><!-- Best Sell Product Section End -->

<!-- Banner Section Start -->
<div class="banner-section section mb-90">
    <div class="container">
        <div class="row">

            <!-- Banner -->
            <div class="col-12">
                <div class="banner"><a href="#"><img src="{{asset('assets')}}/images/banner/banner-3.jpg" alt="Banner"></a></div>
            </div>

        </div>
    </div>
</div><!-- Banner Section End -->

<!-- Feature Section Start -->
<div class="feature-section section mb-60">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <!-- Feature Start -->
                <div class="feature feature-shipping">
                    <div class="feature-wrap">
                        <div class="icon"><img src="{{asset('assets')}}/images/icons/feature-van.png" alt="Feature"></div>
                        <h4>FREE SHIPPING</h4>
                        <p>Start from $100</p>
                    </div>
                </div><!-- Feature End -->
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <!-- Feature Start -->
                <div class="feature feature-guarantee">
                    <div class="feature-wrap">
                        <div class="icon"><img src="{{asset('assets')}}/images/icons/feature-walet.png" alt="Feature"></div>
                        <h4>MONEY BACK GUARANTEE</h4>
                        <p>Back within 15 days</p>
                    </div>
                </div><!-- Feature End -->
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-30">
                <!-- Feature Start -->
                <div class="feature feature-security">
                    <div class="feature-wrap">
                        <div class="icon"><img src="{{asset('assets')}}/images/icons/feature-shield.png" alt="Feature"></div>
                        <h4>SECURE PAYMENTS</h4>
                        <p>Payment Security</p>
                    </div>
                </div><!-- Feature End -->
            </div>

        </div>
    </div>
</div><!-- Feature Section End -->

<!-- Best Deals Product Section Start -->
<div class="product-section section mb-40">
    <div class="container">
        <div class="row">

            <!-- Section Title Start -->
            <div class="col-12 mb-40">
                <div class="section-title-one" data-title="BEST DEALS"><h1>BEST DEALS</h1></div>
            </div><!-- Section Title End -->

            <!-- Product Tab Filter Start-->
            <div class="col-12">
                <div class="offer-product-wrap row">

                    <!-- Product Tab Filter Start -->
                    <div class="col mb-30">
                        <div class="product-tab-filter">
                            <!-- Tab Filter Toggle -->
                            <button class="product-tab-filter-toggle">showing: <span></span><i class="icofont icofont-simple-down"></i></button>

                            <!-- Product Tab List -->
                            <ul class="nav product-tab-list">
                                <li><a class="active" data-toggle="tab" href="#tab-three">all</a></li>
                                <li><a data-toggle="tab" href="#tab-four">LAPTOP</a></li>
                                <li><a data-toggle="tab" href="#tab-three">DRONE</a></li>
                                <li><a data-toggle="tab" href="#tab-four">TV & AUDIO</a></li>
                                <li><a data-toggle="tab" href="#tab-three">PHONE & TABLET</a></li>
                                <li><a data-toggle="tab" href="#tab-four">CAMERA & PRINTER</a></li>
                            </ul>

                        </div>
                    </div><!-- Product Tab Filter End -->

                    <!-- Offer Time Wrap Start -->
                    <div class="col mb-30">
                        <div class="offer-time-wrap" style="background-image: url({{asset('assets')}}/images/bg/offer-products.jpg)">
                            <h1><span>UP TO</span> 55%</h1>
                            <h3>QUALITY & EXCLUSIVE <span>PRODUCTS</span></h3>
                            <h4><span>LIMITED TIME OFFER</span> GET YOUR PRODUCT</h4>
                            <div class="countdown" data-countdown="2019/06/20"></div>
                        </div>
                    </div><!-- Offer Time Wrap End -->

                    <!-- Product Tab Content Start -->
                    <div class="col-12 mb-30">
                        <div class="tab-content">

                            <!-- Tab Pane Start -->
                            <div class="tab-pane fade show active" id="tab-three">

                                <!-- Product Slider Wrap Start -->
                                <div class="product-slider-wrap product-slider-arrow-two">
                                    <!-- Product Slider Start -->
                                    <div class="product-slider product-slider-3">

                                        <div class="col pb-20 pt-10">
                                            <!-- Product Start -->
                                            <div class="ee-product">

                                                <!-- Image -->
                                                <div class="image">

                                                    <span class="label sale">sale</span>

                                                    <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-13.png" alt="Product Image"></a>

                                                    <div class="wishlist-compare">
                                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                    </div>

                                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                </div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Category & Title -->
                                                    <div class="category-title">

                                                        <a href="#" class="cat">Games</a>
                                                        <h5 class="title"><a href="single-product.html">Game Stations PW 25</a></h5>

                                                    </div>

                                                    <!-- Price & Ratting -->
                                                    <div class="price-ratting">

                                                        <h5 class="price"><span class="old">$285</span>$135.35</h5>
                                                        <div class="ratting">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div><!-- Product End -->
                                        </div>

                                        <div class="col pb-20 pt-10">
                                            <!-- Product Start -->
                                            <div class="ee-product">

                                                <!-- Image -->
                                                <div class="image">

                                                    <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-14.png" alt="Product Image"></a>

                                                    <div class="wishlist-compare">
                                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                    </div>

                                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                </div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Category & Title -->
                                                    <div class="category-title">

                                                        <a href="#" class="cat">Kitchen Appliances</a>
                                                        <h5 class="title"><a href="single-product.html">Zorex Coffe Maker</a></h5>

                                                    </div>

                                                    <!-- Price & Ratting -->
                                                    <div class="price-ratting">

                                                        <h5 class="price">$125.00</h5>
                                                        <div class="ratting">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div><!-- Product End -->
                                        </div>

                                        <div class="col pb-20 pt-10">
                                            <!-- Product Start -->
                                            <div class="ee-product">

                                                <!-- Image -->
                                                <div class="image">

                                                    <span class="label sale">sale</span>

                                                    <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-15.png" alt="Product Image"></a>

                                                    <div class="wishlist-compare">
                                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                    </div>

                                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                </div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Category & Title -->
                                                    <div class="category-title">

                                                        <a href="#" class="cat">Home Appliances</a>
                                                        <h5 class="title"><a href="single-product.html">jeilips Steam Iron K 2</a></h5>

                                                    </div>

                                                    <!-- Price & Ratting -->
                                                    <div class="price-ratting">

                                                        <h5 class="price"><span class="old">$365</span>$295.00</h5>
                                                        <div class="ratting">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div><!-- Product End -->
                                        </div>

                                        <div class="col pb-20 pt-10">
                                            <!-- Product Start -->
                                            <div class="ee-product">

                                                <!-- Image -->
                                                <div class="image">

                                                    <span class="label sale">sale</span>

                                                    <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-16.png" alt="Product Image"></a>

                                                    <div class="wishlist-compare">
                                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                    </div>

                                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                </div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Category & Title -->
                                                    <div class="category-title">

                                                        <a href="#" class="cat">Tv & Audio</a>
                                                        <h5 class="title"><a href="single-product.html">Nexo Andriod TV Box</a></h5>

                                                    </div>

                                                    <!-- Price & Ratting -->
                                                    <div class="price-ratting">

                                                        <h5 class="price"><span class="old">$360 </span>$250.00</h5>
                                                        <div class="ratting">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div><!-- Product End -->
                                        </div>

                                        <div class="col pb-20 pt-10">
                                            <!-- Product Start -->
                                            <div class="ee-product">

                                                <!-- Image -->
                                                <div class="image">

                                                    <span class="label new">new</span>

                                                    <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-17.png" alt="Product Image"></a>

                                                    <div class="wishlist-compare">
                                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                    </div>

                                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                </div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Category & Title -->
                                                    <div class="category-title">

                                                        <a href="#" class="cat">Smartphone</a>
                                                        <h5 class="title"><a href="single-product.html">Ornet Note 9</a></h5>

                                                    </div>

                                                    <!-- Price & Ratting -->
                                                    <div class="price-ratting">

                                                        <h5 class="price"><span class="old">$285</span>$230.00</h5>
                                                        <div class="ratting">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div><!-- Product End -->
                                        </div>

                                    </div><!-- Product Slider End -->
                                </div><!-- Product Slider Wrap End -->

                            </div><!-- Tab Pane End -->

                            <!-- Tab Pane Start -->
                            <div class="tab-pane fade" id="tab-four">

                                <!-- Product Slider Wrap Start -->
                                <div class="product-slider-wrap product-slider-arrow-two">
                                    <!-- Product Slider Start -->
                                    <div class="product-slider product-slider-3">

                                        <div class="col pb-20 pt-10">
                                            <!-- Product Start -->
                                            <div class="ee-product">

                                                <!-- Image -->
                                                <div class="image">

                                                    <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-18.png" alt="Product Image"></a>

                                                    <div class="wishlist-compare">
                                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                    </div>

                                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                </div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Category & Title -->
                                                    <div class="category-title">

                                                        <a href="#" class="cat">Tv & Audio</a>
                                                        <h5 class="title"><a href="single-product.html">Xonet Speaker P 9</a></h5>

                                                    </div>

                                                    <!-- Price & Ratting -->
                                                    <div class="price-ratting">

                                                        <h5 class="price">$185.00</h5>
                                                        <div class="ratting">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div><!-- Product End -->
                                        </div>

                                        <div class="col pb-20 pt-10">
                                            <!-- Product Start -->
                                            <div class="ee-product">

                                                <!-- Image -->
                                                <div class="image">

                                                    <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-24.png" alt="Product Image"></a>

                                                    <div class="wishlist-compare">
                                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                    </div>

                                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                </div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Category & Title -->
                                                    <div class="category-title">

                                                        <a href="#" class="cat">Smartphone</a>
                                                        <h5 class="title"><a href="single-product.html">Sany Experia Z5</a></h5>

                                                    </div>

                                                    <!-- Price & Ratting -->
                                                    <div class="price-ratting">

                                                        <h5 class="price">$360.00</h5>
                                                        <div class="ratting">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div><!-- Product End -->
                                        </div>

                                        <div class="col pb-20 pt-10">
                                            <!-- Product Start -->
                                            <div class="ee-product">

                                                <!-- Image -->
                                                <div class="image">

                                                    <span class="label sale">sale</span>

                                                    <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-20.png" alt="Product Image"></a>

                                                    <div class="wishlist-compare">
                                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                    </div>

                                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                </div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Category & Title -->
                                                    <div class="category-title">

                                                        <a href="#" class="cat">Kitchen Appliances</a>
                                                        <h5 class="title"><a href="single-product.html">Jackson Toster V 27</a></h5>

                                                    </div>

                                                    <!-- Price & Ratting -->
                                                    <div class="price-ratting">

                                                        <h5 class="price"><span class="old">$185</span>$135.00</h5>
                                                        <div class="ratting">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div><!-- Product End -->
                                        </div>

                                        <div class="col pb-20 pt-10">
                                            <!-- Product Start -->
                                            <div class="ee-product">

                                                <!-- Image -->
                                                <div class="image">

                                                    <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-21.png" alt="Product Image"></a>

                                                    <div class="wishlist-compare">
                                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                    </div>

                                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                </div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Category & Title -->
                                                    <div class="category-title">

                                                        <a href="#" class="cat">Kitchen Appliances</a>
                                                        <h5 class="title"><a href="single-product.html">mega Juice Maker</a></h5>

                                                    </div>

                                                    <!-- Price & Ratting -->
                                                    <div class="price-ratting">

                                                        <h5 class="price">$125.00</h5>
                                                        <div class="ratting">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div><!-- Product End -->
                                        </div>

                                        <div class="col pb-20 pt-10">
                                            <!-- Product Start -->
                                            <div class="ee-product">

                                                <!-- Image -->
                                                <div class="image">

                                                    <span class="label new">new</span>

                                                    <a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-22.png" alt="Product Image"></a>

                                                    <div class="wishlist-compare">
                                                        <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                                        <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                                                    </div>

                                                    <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                                                </div>

                                                <!-- Content -->
                                                <div class="content">

                                                    <!-- Category & Title -->
                                                    <div class="category-title">

                                                        <a href="#" class="cat">Kitchen Appliances</a>
                                                        <h5 class="title"><a href="single-product.html">shine Microwave Oven</a></h5>

                                                    </div>

                                                    <!-- Price & Ratting -->
                                                    <div class="price-ratting">

                                                        <h5 class="price"><span class="old">$389</span>$245.00</h5>
                                                        <div class="ratting">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </div>

                                                    </div>

                                                </div>

                                            </div><!-- Product End -->
                                        </div>

                                    </div><!-- Product Slider End -->
                                </div><!-- Product Slider Wrap End -->

                            </div><!-- Tab Pane End -->

                        </div>
                    </div><!-- Product Tab Content End -->

                </div>
            </div><!-- Product Tab Filter End-->

        </div>
    </div>
</div><!-- Best Deals Product Section End -->

{{--<!-- New Arrival Product Section Start -->--}}
{{--<div class="product-section section mb-60">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}

{{--<!-- Section Title Start -->--}}
{{--<div class="col-12 mb-40">--}}
{{--<div class="section-title-one" data-title="NEW ARRIVAL"><h1>NEW ARRIVAL</h1></div>--}}
{{--</div><!-- Section Title End -->--}}

{{--<div class="col-12">--}}
{{--<div class="row">--}}

{{--<div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">--}}
{{--<!-- Product Start -->--}}
{{--<div class="ee-product">--}}

{{--<!-- Image -->--}}
{{--<div class="image">--}}

{{--<span class="label sale">sale</span>--}}

{{--<a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-16.png" alt="Product Image"></a>--}}

{{--<div class="wishlist-compare">--}}
{{--<a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>--}}
{{--<a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>--}}
{{--</div>--}}

{{--<a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>--}}

{{--</div>--}}

{{--<!-- Content -->--}}
{{--<div class="content">--}}

{{--<!-- Category & Title -->--}}
{{--<div class="category-title">--}}

{{--<a href="#" class="cat">Tv & Audio</a>--}}
{{--<h5 class="title"><a href="single-product.html">Nexo Andriod TV Box</a></h5>--}}

{{--</div>--}}

{{--<!-- Price & Ratting -->--}}
{{--<div class="price-ratting">--}}

{{--<h5 class="price"><span class="old">$360 </span>$250.00</h5>--}}
{{--<div class="ratting">--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star-half-o"></i>--}}
{{--</div>--}}

{{--</div>--}}

{{--</div>--}}

{{--</div><!-- Product End -->--}}
{{--</div>--}}

{{--<div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">--}}
{{--<!-- Product Start -->--}}
{{--<div class="ee-product">--}}

{{--<!-- Image -->--}}
{{--<div class="image">--}}

{{--<span class="label new">new</span>--}}

{{--<a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-17.png" alt="Product Image"></a>--}}

{{--<div class="wishlist-compare">--}}
{{--<a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>--}}
{{--<a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>--}}
{{--</div>--}}

{{--<a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>--}}

{{--</div>--}}

{{--<!-- Content -->--}}
{{--<div class="content">--}}

{{--<!-- Category & Title -->--}}
{{--<div class="category-title">--}}

{{--<a href="#" class="cat">Smartphone</a>--}}
{{--<h5 class="title"><a href="single-product.html">Ornet Note 9</a></h5>--}}

{{--</div>--}}

{{--<!-- Price & Ratting -->--}}
{{--<div class="price-ratting">--}}

{{--<h5 class="price"><span class="old">$285</span>$230.00</h5>--}}
{{--<div class="ratting">--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--</div>--}}

{{--</div>--}}

{{--</div>--}}

{{--</div><!-- Product End -->--}}
{{--</div>--}}

{{--<div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">--}}
{{--<!-- Product Start -->--}}
{{--<div class="ee-product">--}}

{{--<!-- Image -->--}}
{{--<div class="image">--}}

{{--<a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-18.png" alt="Product Image"></a>--}}

{{--<div class="wishlist-compare">--}}
{{--<a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>--}}
{{--<a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>--}}
{{--</div>--}}

{{--<a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>--}}

{{--</div>--}}

{{--<!-- Content -->--}}
{{--<div class="content">--}}

{{--<!-- Category & Title -->--}}
{{--<div class="category-title">--}}

{{--<a href="#" class="cat">Tv & Audio</a>--}}
{{--<h5 class="title"><a href="single-product.html">Xonet Speaker P 9</a></h5>--}}

{{--</div>--}}

{{--<!-- Price & Ratting -->--}}
{{--<div class="price-ratting">--}}

{{--<h5 class="price">$185.00</h5>--}}
{{--<div class="ratting">--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star-half-o"></i>--}}
{{--<i class="fa fa-star-o"></i>--}}
{{--</div>--}}

{{--</div>--}}

{{--</div>--}}

{{--</div><!-- Product End -->--}}
{{--</div>--}}

{{--<div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">--}}
{{--<!-- Product Start -->--}}
{{--<div class="ee-product">--}}

{{--<!-- Image -->--}}
{{--<div class="image">--}}

{{--<span class="label sale">sale</span>--}}

{{--<a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-19.png" alt="Product Image"></a>--}}

{{--<div class="wishlist-compare">--}}
{{--<a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>--}}
{{--<a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>--}}
{{--</div>--}}

{{--<a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>--}}

{{--</div>--}}

{{--<!-- Content -->--}}
{{--<div class="content">--}}

{{--<!-- Category & Title -->--}}
{{--<div class="category-title">--}}

{{--<a href="#" class="cat">Smartphone</a>--}}
{{--<h5 class="title"><a href="single-product.html">flex P 3310</a></h5>--}}

{{--</div>--}}

{{--<!-- Price & Ratting -->--}}
{{--<div class="price-ratting">--}}

{{--<h5 class="price"><span class="old">$220</span>$180.00</h5>--}}
{{--<div class="ratting">--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star-half-o"></i>--}}
{{--<i class="fa fa-star-o"></i>--}}
{{--</div>--}}

{{--</div>--}}

{{--</div>--}}

{{--</div><!-- Product End -->--}}
{{--</div>--}}

{{--<div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">--}}
{{--<!-- Product Start -->--}}
{{--<div class="ee-product">--}}

{{--<!-- Image -->--}}
{{--<div class="image">--}}

{{--<span class="label sale">sale</span>--}}

{{--<a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-20.png" alt="Product Image"></a>--}}

{{--<div class="wishlist-compare">--}}
{{--<a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>--}}
{{--<a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>--}}
{{--</div>--}}

{{--<a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>--}}

{{--</div>--}}

{{--<!-- Content -->--}}
{{--<div class="content">--}}

{{--<!-- Category & Title -->--}}
{{--<div class="category-title">--}}

{{--<a href="#" class="cat">Kitchen Appliances</a>--}}
{{--<h5 class="title"><a href="single-product.html">Jackson Toster V 27</a></h5>--}}

{{--</div>--}}

{{--<!-- Price & Ratting -->--}}
{{--<div class="price-ratting">--}}

{{--<h5 class="price"><span class="old">$185</span>$135.00</h5>--}}
{{--<div class="ratting">--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--</div>--}}

{{--</div>--}}

{{--</div>--}}

{{--</div><!-- Product End -->--}}
{{--</div>--}}

{{--<div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">--}}
{{--<!-- Product Start -->--}}
{{--<div class="ee-product">--}}

{{--<!-- Image -->--}}
{{--<div class="image">--}}

{{--<a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-21.png" alt="Product Image"></a>--}}

{{--<div class="wishlist-compare">--}}
{{--<a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>--}}
{{--<a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>--}}
{{--</div>--}}

{{--<a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>--}}

{{--</div>--}}

{{--<!-- Content -->--}}
{{--<div class="content">--}}

{{--<!-- Category & Title -->--}}
{{--<div class="category-title">--}}

{{--<a href="#" class="cat">Kitchen Appliances</a>--}}
{{--<h5 class="title"><a href="single-product.html">mega Juice Maker</a></h5>--}}

{{--</div>--}}

{{--<!-- Price & Ratting -->--}}
{{--<div class="price-ratting">--}}

{{--<h5 class="price">$125.00</h5>--}}
{{--<div class="ratting">--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star-half-o"></i>--}}
{{--</div>--}}

{{--</div>--}}

{{--</div>--}}

{{--</div><!-- Product End -->--}}
{{--</div>--}}

{{--<div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">--}}
{{--<!-- Product Start -->--}}
{{--<div class="ee-product">--}}

{{--<!-- Image -->--}}
{{--<div class="image">--}}

{{--<span class="label new">new</span>--}}

{{--<a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-22.png" alt="Product Image"></a>--}}

{{--<div class="wishlist-compare">--}}
{{--<a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>--}}
{{--<a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>--}}
{{--</div>--}}

{{--<a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>--}}

{{--</div>--}}

{{--<!-- Content -->--}}
{{--<div class="content">--}}

{{--<!-- Category & Title -->--}}
{{--<div class="category-title">--}}

{{--<a href="#" class="cat">Kitchen Appliances</a>--}}
{{--<h5 class="title"><a href="single-product.html">shine Microwave Oven</a></h5>--}}

{{--</div>--}}

{{--<!-- Price & Ratting -->--}}
{{--<div class="price-ratting">--}}

{{--<h5 class="price"><span class="old">$389</span>$245.00</h5>--}}
{{--<div class="ratting">--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star-o"></i>--}}
{{--</div>--}}

{{--</div>--}}

{{--</div>--}}

{{--</div><!-- Product End -->--}}
{{--</div>--}}

{{--<div class="col-xl-3 col-lg-4 col-md-6 col-12 pb-30 pt-10">--}}
{{--<!-- Product Start -->--}}
{{--<div class="ee-product">--}}

{{--<!-- Image -->--}}
{{--<div class="image">--}}

{{--<a href="single-product.html" class="img"><img src="{{asset('assets')}}/images/product/product-23.png" alt="Product Image"></a>--}}

{{--<div class="wishlist-compare">--}}
{{--<a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>--}}
{{--<a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>--}}
{{--</div>--}}

{{--<a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>--}}

{{--</div>--}}

{{--<!-- Content -->--}}
{{--<div class="content">--}}

{{--<!-- Category & Title -->--}}
{{--<div class="category-title">--}}

{{--<a href="#" class="cat">Kitchen Appliances</a>--}}
{{--<h5 class="title"><a href="single-product.html">Auto Rice Cooker</a></h5>--}}

{{--</div>--}}

{{--<!-- Price & Ratting -->--}}
{{--<div class="price-ratting">--}}

{{--<h5 class="price">$130.00</h5>--}}
{{--<div class="ratting">--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star"></i>--}}
{{--<i class="fa fa-star-o"></i>--}}
{{--</div>--}}

{{--</div>--}}

{{--</div>--}}

{{--</div><!-- Product End -->--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div><!-- New Arrival Product Section End -->--}}

{{--<!-- Banner Section Start -->--}}
{{--<div class="banner-section section mb-60">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}

{{--<!-- Banner -->--}}
{{--<div class="col-md-4 col-12 mb-30">--}}
{{--<div class="banner"><a href="#"><img src="{{asset('assets')}}/images/banner/banner-4.jpg" alt="Banner"></a></div>--}}
{{--</div>--}}

{{--<!-- Banner -->--}}
{{--<div class="col-md-4 col-12 mb-30">--}}
{{--<div class="banner"><a href="#"><img src="{{asset('assets')}}/images/banner/banner-5.jpg" alt="Banner"></a></div>--}}
{{--</div>--}}

{{--<!-- Banner -->--}}
{{--<div class="col-md-4 col-12 mb-30">--}}
{{--<div class="banner"><a href="#"><img src="{{asset('assets')}}/images/banner/banner-6.jpg" alt="Banner"></a></div>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div><!-- Banner Section End -->--}}

{{--<!-- Brands Section Start -->--}}
{{--<div class="brands-section section mb-90">--}}
{{--<div class="container">--}}
{{--<div class="row">--}}

{{--<!-- Brand Slider Start -->--}}
{{--<div class="brand-slider col">--}}
{{--<div class="brand-item col"><img src="{{asset('assets')}}/images/brands/brand-1.png" alt="Brands"></div>--}}
{{--<div class="brand-item col"><img src="{{asset('assets')}}/images/brands/brand-2.png" alt="Brands"></div>--}}
{{--<div class="brand-item col"><img src="{{asset('assets')}}/images/brands/brand-3.png" alt="Brands"></div>--}}
{{--<div class="brand-item col"><img src="{{asset('assets')}}/images/brands/brand-4.png" alt="Brands"></div>--}}
{{--<div class="brand-item col"><img src="{{asset('assets')}}/images/brands/brand-5.png" alt="Brands"></div>--}}
{{--</div><!-- Brand Slider End -->--}}

{{--</div>--}}
{{--</div>--}}
{{--</div><!-- Brands Section End -->--}}

<!-- Subscribe Section Start -->
<div class="subscribe-section section bg-gray pt-55 pb-55">
    <div class="container">
        <div class="row align-items-center">

            <!-- Mailchimp Subscribe Content Start -->
            <div class="col-lg-6 col-12 mb-15 mt-15">
                <div class="subscribe-content">
                    <h2>SUBSCRIBE <span>OUR NEWSLETTER</span></h2>
                    <h2><span>TO GET LATEST</span> PRODUCT UPDATE</h2>
                </div>
            </div><!-- Mailchimp Subscribe Content End -->


            <!-- Mailchimp Subscribe Form Start -->
            <div class="col-lg-6 col-12 mb-15 mt-15">

                <form class="subscribe-form" action="#">
                    <input type="email" autocomplete="off" placeholder="Enter your email here" />
                    <button >subscribe</button>
                </form>
                <!-- mailchimp-alerts Start -->
                <div class="mailchimp-alerts text-centre">
                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                </div><!-- mailchimp-alerts end -->

            </div><!-- Mailchimp Subscribe Form End -->

        </div>
    </div>
</div><!-- Subscribe Section End -->

<!-- Footer Section Start -->
@include('frontend.partial.footer')

<!-- Popup Subscribe Section Start -->
<div class="popup-subscribe-section section bg-gray pt-55 pb-55" data-modal="popup-modal">

    <!-- Popup Subscribe Wrap Start -->
    <div class="popup-subscribe-wrap">

        <button class="close-popup">X</button>

        <!-- Popup Subscribe Banner -->
        <div class="popup-subscribe-banner banner">
            <a href="#"><img src="{{asset('assets')}}/images/banner/banner-7.jpg" alt="Banner"></a>
        </div>

        <!-- Popup Subscribe Form Wrap Start -->
        <div class="popup-subscribe-form-wrap">

            <h1>SUBSCRIBE <br>OUR NEWSLETTER</h1>
            <h4>Get latest product update...</h4>

            <!-- Newsletter Form -->
            <form action="#" method="post" class="popup-subscribe-form validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <label for="popup_subscribe" class="d-none">Subscribe to our mailing list</label>
                    <input type="email" value="" name="EMAIL" class="email" id="popup_subscribe" placeholder="Enter your email here" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                    <button type="submit" name="subscribe" id="" class="button">subscribe</button>
                </div>
            </form>

            <p>Be the first in the by getting special deals and offers send directly to your inbox.</p>

        </div><!-- Popup Subscribe Form Wrap End -->

    </div><!-- Popup Subscribe Wrap End -->

</div><!-- Popup Subscribe Section End -->


<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Plugins JS -->
<script src="{{asset('assets/js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>