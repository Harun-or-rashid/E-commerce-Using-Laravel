<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E&E - Electronics eCommerce Bootstrap4 HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/images/favicon.ico">

    <!-- CSS
	============================================ -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/icon-font.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">

    <!-- Modernizer JS -->
    <script src="{{asset('assets')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
@include('frontend.partial.header')
<!-- Header Section Start -->


<!-- Mini Cart Wrap Start -->
<div class="mini-cart-wrap">

    <!-- Mini Cart Top -->
    <div class="mini-cart-top">

        <button class="close-cart">Close Cart<i class="icofont icofont-close"></i></button>

    </div>

    <!-- Mini Cart Products -->
    <ul class="mini-cart-products">
        <li>
            <a class="image"><img src="{{$product->getFirstMediaUrl('products')}}" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Waxon Note Book Pro 5</a>
                <span class="price">Price: $295</span>
                <span class="qty">Qty: 02</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="{{$product->getFirstMediaUrl('products')}}" alt="Product"></a>
            <div class="content">
                <a href="single-product.html" class="title">Aquet Drone D 420</a>
                <span class="price">Price: $275</span>
                <span class="qty">Qty: 01</span>
            </div>
            <button class="remove"><i class="fa fa-trash-o"></i></button>
        </li>
        <li>
            <a class="image"><img src="{{asset('assets')}}/images/product/product-3.png" alt="Product"></a>
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

<!-- Page Banner Section Start -->
<div class="page-banner-section section">
    <div class="page-banner-wrap row row-0 d-flex align-items-center ">

        <!-- Page Banner -->
        <div class="col-lg-4 col-12 order-lg-2 d-flex align-items-center justify-content-center">
            <div class="page-banner">
                <h1>Product Details</h1>
                <p>similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita</p>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">Product Details</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-1">
            <div class="banner"><a href="#"><img src="{{asset('assets')}}/images/banner/banner-15.jpg" alt="Banner"></a></div>
        </div>

        <!-- Banner -->
        <div class="col-lg-4 col-md-6 col-12 order-lg-3">
            <div class="banner"><a href="#"><img src="{{asset('assets')}}/images/banner/banner-14.jpg" alt="Banner"></a></div>
        </div>

    </div>
</div><!-- Page Banner Section End -->

<!-- Single Product Section Start -->
<div class="product-section section mt-90 mb-90">
    <div class="container">

        <div class="row mb-90">

            <div class="col-lg-6 col-12 mb-50">

                <!-- Image -->
                <div class="single-product-image thumb-right">

                    <div class="tab-content">
                        <div id="single-image-1" class="tab-pane fade show active big-image-slider">
                            <div class="big-image"><img src="{{$product->getFirstMediaUrl('products')}}" alt="Big Image"><a href="{{asset('assets')}}/images/single-product/big-1.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{$product->getFirstMediaUrl('products')}}" alt="Big Image"><a href="{{asset('assets')}}/images/single-product/big-2.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{$product->getFirstMediaUrl('products')}}" alt="Big Image"><a href="{{asset('assets')}}/images/single-product/big-3.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>
                        <div id="single-image-2" class="tab-pane fade big-image-slider">
                            <div class="big-image"><img src="{{$product->getFirstMediaUrl('products')}}" alt="Big Image"><a href="{{$product->getFirstMediaUrl('products')}}"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{$product->getFirstMediaUrl('products')}}" alt="Big Image"><a href="{{asset('assets')}}/images/single-product/big-9.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{asset('assets')}}/images/single-product/big-9.png" alt="Big Image"><a href="{{asset('assets')}}/images/single-product/big-9.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>
                        <div id="single-image-3" class="tab-pane fade big-image-slider">
                            <div class="big-image"><img src="{{$product->getFirstMediaUrl('products')}}" alt="Big Image"><a href="{{asset('assets')}}/images/single-product/big-13.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{$product->getFirstMediaUrl('products')}}" alt="Big Image"><a href="{{asset('assets')}}/images/single-product/big-14.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                            <div class="big-image"><img src="{{asset('assets')}}/images/single-product/big-15.png" alt="Big Image"><a href="{{asset('assets')}}/images/single-product/big-15.png" class="big-image-popup"><i class="fa fa-search-plus"></i></a></div>
                        </div>
                    </div>

                    <div class="thumb-image-slider nav" data-vertical="true">
                        <a class="thumb-image active" data-toggle="tab" href="#single-image-1"><img src="{{asset('assets')}}/images/single-product/thumb-1.png" alt="Thumbnail Image"></a>
                        <a class="thumb-image" data-toggle="tab" href="#single-image-2"><img src="{{asset('assets')}}/images/single-product/thumb-2.png" alt="Thumbnail Image"></a>
                        <a class="thumb-image" data-toggle="tab" href="#single-image-3"><img src="{{asset('assets')}}/images/single-product/thumb-3.png" alt="Thumbnail Image"></a>
                    </div>

                </div>

            </div>

            <div class="col-lg-6 col-12 mb-50">

                <!-- Content -->
                <div class="single-product-content">

                    <!-- Category & Title -->
                    <div class="head-content">

                        <div class="category-title">
                            <a href="#" class="cat">{{$product->name}}</a>
                            <h5 class="title">{{$product->title}}</h5>
                        </div>

                        <h5 class="price">{{$product->price}}</h5>

                    </div>

                    <div class="single-product-description">

                        <div class="ratting">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                        <div class="desc">
                            <p class="justify-content-center">{{$product->description}}</p>
                        </div>

                        <span class="availability">Availability: <span>In Stock</span></span>

                        <div class="quantity-colors">

                            <div class="quantity">
                                <h5>Quantity</h5>
                                <div class="pro-qty"><input type="text" value="1"></div>
                            </div>

                            <div class="colors">
                                <h5>Color</h5>
                                <select class="nice-select">
                                    <option>red</option>
                                    <option>black</option>
                                    <option>yellow</option>
                                    <option>grey</option>
                                </select>
                            </div>

                        </div>

                        <div class="actions">

                            <a href="#" class="add-to-cart"><i class="ti-shopping-cart"></i><span>ADD TO CART</span></a>

                            <div class="wishlist-compare">
                                <a href="#" data-tooltip="Compare"><i class="ti-control-shuffle"></i></a>
                                <a href="#" data-tooltip="Wishlist"><i class="ti-heart"></i></a>
                            </div>

                        </div>

                        <div class="tags">

                            <h5>Tags:</h5>
                            <a href="#">Electronic</a>
                            <a href="#">Smartphone</a>
                            <a href="#">Phone</a>
                            <a href="#">Charger</a>
                            <a href="#">Powerbank</a>

                        </div>

                        <div class="share">

                            <h5>Share: </h5>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="row">

            <div class="col-lg-10 col-12 ml-auto mr-auto">

                <ul class="single-product-tab-list nav">
                    <li><a href="#product-description" class="active" data-toggle="tab" >description</a></li>
                    <li><a href="#product-specifications" data-toggle="tab" >specifications</a></li>
                    <li><a href="#product-reviews" data-toggle="tab" >reviews</a></li>
                </ul>

                <div class="single-product-tab-content tab-content">
                    <div class="tab-pane fade show active" id="product-description">

                        <div class="row">
                            <div class="single-product-description-content col-lg-8 col-12">
                                <p class="card-body">
                                    {{$product->description}}
                                </p>
                            </div>
                            <div class="single-product-description-image col-lg-4 col-12">
                                <img src="{{$product->getFirstMediaUrl('products')}}">
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="product-specifications">
                        <div class="single-product-specification">
                            <ul>
                                <li>Full HD Camcorder</li>
                                <li>Dual Video Recording</li>
                                <li>X type battery operation</li>
                                <li>Full HD Camcorder</li>
                                <li>Dual Video Recording</li>
                                <li>X type battery operation</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="product-reviews">

                        <div class="product-ratting-wrap">
                            <div class="pro-avg-ratting">
                                <h4>4.5 <span>(Overall)</span></h4>
                                <span>Based on 9 Comments</span>
                            </div>
                            <div class="ratting-list">
                                <div class="sin-list float-left">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="sin-list float-left">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(3)</span>
                                </div>
                                <div class="sin-list float-left">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(1)</span>
                                </div>
                                <div class="sin-list float-left">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(0)</span>
                                </div>
                                <div class="sin-list float-left">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(0)</span>
                                </div>
                            </div>
                            <div class="rattings-wrapper">

                                <div class="sin-rattings">
                                    <div class="ratting-author">
                                        <h3>Cristopher Lee</h3>
                                        <div class="ratting-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(5)</span>
                                        </div>
                                    </div>
                                    <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                </div>

                                <div class="sin-rattings">
                                    <div class="ratting-author">
                                        <h3>Nirob Khan</h3>
                                        <div class="ratting-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(5)</span>
                                        </div>
                                    </div>
                                    <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                </div>

                                <div class="sin-rattings">
                                    <div class="ratting-author">
                                        <h3>MD.ZENAUL ISLAM</h3>
                                        <div class="ratting-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span>(5)</span>
                                        </div>
                                    </div>
                                    <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia res eos qui ratione voluptatem sequi Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli</p>
                                </div>

                            </div>
                            <div class="ratting-form-wrapper fix">
                                <h3>Add your Comments</h3>
                                <form action="#">
                                    <div class="ratting-form row">
                                        <div class="col-12 mb-15">
                                            <h5>Rating:</h5>
                                            <div class="ratting-star fix">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mb-15">
                                            <label for="name">Name:</label>
                                            <input id="name" placeholder="Name" type="text">
                                        </div>
                                        <div class="col-md-6 col-12 mb-15">
                                            <label for="email">Email:</label>
                                            <input id="email" placeholder="Email" type="text">
                                        </div>
                                        <div class="col-12 mb-15">
                                            <label for="your-review">Your Review:</label>
                                            <textarea name="review" id="your-review" placeholder="Write a review"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <input value="add review" type="submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div><!-- Single Product Section End -->




<!-- Subscribe Section Start -->


<!-- Footer Section Start -->
@include('frontend.partial.footer')


<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Popper JS -->
<script src="{{asset('assets')}}/js/popper.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
<!-- Plugins JS -->
<script src="{{asset('assets')}}/js/plugins.js"></script>

<!-- Main JS -->
<script src="{{asset('assets')}}/js/main.js"></script>

</body>

</html>