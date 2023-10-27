<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/home7-shoes.html   11 Nov 2019 12:28:16 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Belle Multipurpose Bootstrap 4 Html Template</title>
<meta name="description" content="description">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" href="{{asset('acceuil/belle_1/assets/images/favicon.png')}}" />
<!-- Plugins CSS -->
<link rel="stylesheet" href="{{asset('acceuil/belle_1/assets/css/plugins.css')}}">
<!-- Bootstap CSS -->
<link rel="stylesheet" href="{{asset('acceuil/belle_1/assets/css/bootstrap.min.css')}}">
<!-- Main Style CSS -->
<link rel="stylesheet" href="{{asset('acceuil/belle_1/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('acceuil/belle_1/assets/css/responsive.css')}}">
</head>
<body class="template-index belle home7-shoes">
<div id="pre-loader">
    <img src="{{asset('acceuil/belle_1/assets/images/loader.gif')}}" alt="Loading..." />
</div>
<div class="pageWrapper">
	<!--Search Form Drawer-->
	<div class="search">
        <div class="search__form">
            <form class="search-bar__form" action="#">
                <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
            </form>
            <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
        </div>
    </div>
    <!--End Search Form Drawer-->
    <!-- Le header se trouve dans le dossier acceuil puis fichier header -->
       @include('acceuil.header')
    <!--Mobile Menu-->
       @include('acceuil.mobile')
	<!--End Mobile Menu-->
    
    <!--Body Content-->
    <div id="page-content">
    	<!--Home slider-->
    	<div class="slideshow slideshow-wrapper pb-section sliderFull">
        	<div class="home-slideshow">
            	<div class="slide slideshow--medium">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="assets/images/slideshow-banners/home7-banner1.jpg" src="{{asset('acceuil/belle_1/assets/images/slideshow-banners/home7-banner1.jpg')}}" alt="Modern Sophistication" title="Modern Sophistication" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content classic left">
                            	<div class="container">
                                    <div class="wrap-caption left">
                                        <h2 class="h1 mega-title slideshow__title">Modern Sophistication</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Ecco Sharp comfort and innovation</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide slideshow--medium">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="assets/images/slideshow-banners/home7-banner2.jpg" src="{{asset('acceuil/belle_1/assets/images/slideshow-banners/home7-banner2.jpg')}}" alt="New Season Styles" title="New Season Styles" />
                        <div class="slideshow__text-wrap slideshow__overlay classic middle">
                            <div class="slideshow__text-content classic middle">
                            	<div class="container">
                                    <div class="wrap-caption right">
                                        <h2 class="h1 mega-title slideshow__title">New Season Styles</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Break all boundaries with our new arrival footwears</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Home slider-->
        
        <!--Shop the Latest &   Greatest Shoes testest-->
        <div class="section"> 
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Shop the Latest &amp; Greatest Shoes</h2>
                            <p>Shop The most popular shoes from belle store</p>
                        </div>
                    </div>
            	</div>
                <div class="grid-products grid-products-hover-btn">
	                <div class="productSlider-style1">
                        <div class="col-12 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-layout-2.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product1.jpg')}}" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product1.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product1-1.jpg')}}" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product1-1.jpg')}}" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-2.html">Camoscio Zip Heel</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="old-price">$500.00</span>
                                        <span class="price">$600.00</span>
                                    </div>
                                    <!-- End product price -->
                                    
                                    <!-- product button -->
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                        </form>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-layout-2.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product2.jpg')}}" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product2.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product2-1.jpg')}}" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product2-1.jpg')}}" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-2.html">Camoscio Heel</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$748.00</span>
                                    </div>
                                    <!-- product button -->
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                        </form>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-layout-2.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/home7-product3.jpg" src="assets/images/product-images/home7-product3.jpg" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="assets/images/product-images/home7-product3-1.jpg" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product3-1.jpg')}}" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-2.html">Aqualina Sandal</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$471.51</span>
                                    </div>
                                    <!-- product button -->
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                        </form>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-layout-2.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product4.jpg')}}" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product4.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product4-1.jpg')}}" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product4-1.jpg')}}" alt="image" title="product">
                                    <!-- End hover image -->
                                    <!-- product label -->
                                    <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                    <!-- End product label -->
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-2.html">Glove Heel</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$629.55</span>
                                    </div>
                                    <!-- product button -->
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                        </form>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-layout-2.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product5.jpg')}}" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product5.jpg')}}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product5-1.jpg')}}" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product5-1.jpg')}}" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-2.html">Aqualina Sandal</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$471.51</span>
                                    </div>
                                    <!-- product button -->
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                        </form>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                        <div class="col-12 item grid-view-item style2">
                        	<div class="grid-view_image">
                                <!-- start product image -->
                                <a href="product-layout-2.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="grid-view-item__image primary blur-up lazyload" data-src="assets/images/product-images/home7-product6.jpg" src="assets/images/product-images/home7-product6.jpg" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="grid-view-item__image hover blur-up lazyload" data-src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product6-1.jpg')}}" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product6-1.jpg')}}" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--start product details -->
                                <div class="product-details hoverDetails text-center mobile">
                                    <!-- product name -->
                                    <div class="product-name">
                                        <a href="product-layout-2.html">Avalon Sandal</a>
                                    </div>
                                    <!-- End product name -->
                                    <!-- product price -->
                                    <div class="product-price">
                                        <span class="price">$420.00</span>
                                    </div>
                                    <!-- product button -->
                                    <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <!-- Start product button -->
                                        <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                            <button class="btn cartIcon btn-addto-cart" type="button" tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                        </form>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- end product button -->
                                </div>
                                <!-- End product details -->
                            </div>
                        </div>
                	</div>
                </div>
            </div>
        </div>
        <!--End Shop the Latest & Greatest Shoes-->
        
        <!--Logo teff Slider-->
        <div class="section logo-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                		<div class="logo-bar">
                    <div class="logo-bar__item">
                        <img src="{{asset('acceuil/belle_1/assets/images/logo/brandlogo1.png')}}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{asset('acceuil/belle_1/assets/images/logo/brandlogo2.png')}}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{asset('acceuil/belle_1/assets/images/logo/brandlogo3.png')}}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{asset('acceuil/belle_1/assets/images/logo/brandlogo4.png')}}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{asset('acceuil/belle_1/assets/images/logo/brandlogo5.png')}}" alt="" title="" />
                    </div>
                    <div class="logo-bar__item">
                        <img src="{{asset('acceuil/belle_1/assets/images/logo/brandlogo6.png')}}" alt="" title="" />
                    </div>
                </div>
                	</div>
                </div>
            </div>
        </div>
        <!--End Logo Slider-->
       
        <!--Trendy Collection-->
        <div class="section custom-content-style1">
        	<div class="container">
            	<div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 class="h2">Trendy Collection</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mb-4">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="custom-text text-center">
                            <h4 class="h3">
                                <a href="#">Warm layers, fall colors and trendy styles are here for fall!</a>   
                            </h4>
                            <div class="rte-setting"><p>UP TO 60% OFF </p></div>
                            <a class="btn" href="#">Shop Women's</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="custom-text text-center">
                            <img class="blur-up lazyload" data-src="{{asset('acceuil/belle_1/assets/images/collection/shoes-collection1.jpg')}}" src="{{asset('acceuil/belle_1/assets/images/collection/shoes-collection1.jpg')}}" alt="" title="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="custom-text text-center">
                            <img class="blur-up lazyload" data-src="{{asset('acceuil/belle_1/assets/images/collection/shoes-collection2.jpg')}}" src="{{asset('acceuil/belle_1/assets/images/collection/shoes-collection2.jpg')}}" alt="" title="">
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="custom-text text-center">
                            <img class="blur-up lazyload" data-src="{{asset('acceuil/belle_1/assets/images/collection/shoes-collection3.jpg')}}" src="{{asset('acceuil/belle_1/assets/images/collection/shoes-collection3.jpg')}}" alt="" title="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="custom-text text-center">
                            <h4 class="h3">
                                <a href="#">Stay warm and look cool in fall styles for guys!</a>   
                            </h4>
                            <div class="rte-setting"><p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, velit...</p></div>
                            <a class="btn" href="#">Shop Women's</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Trendy Collection-->
        
        <!--Three Column Products-->
        <div class="section three-column-pro">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    	<div class="section-header text-left">
                            <h2 class="h2">Most Popular</h2>
                        </div>
                        <div class="grid">
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image">
                                    <a class="grid-view-item__link" href="#">
                                        <img class="grid-view-item__image blur-up lazyload" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Camoscio Zip Heel</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product2.jpg')}}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Camoscio Heel</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product3.jpg')}}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Aqualina Sandal</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    	<div class="section-header text-left">
                            <h2 class="h2">Weekly Top Seller</h2>
                        </div>
                        <div class="grid">
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image">
                                    <a class="grid-view-item__link" href="#">
                                        <img class="grid-view-item__image blur-up lazyload" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product4.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">White Sneaker</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product5.jpg')}}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Suede Loafers - Black/Blue</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product6.jpg')}}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Stiro Oxford in Slate</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                    	<div class="section-header text-left">
                            <h2 class="h2">Flash Sale</h2>
                        </div>
                        <div class="grid">
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image">
                                    <a class="grid-view-item__link" href="#">
                                        <img class="grid-view-item__image blur-up lazyload" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Camoscio Zip Heel</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$173.60</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product2.jpg')}}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Camoscio Heel</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$378.00</span></span></div>
                                </div>
                              </div>
                            </div>
                            <div class="grid__item">
                              <div class="mini-list-item">
                                <div class="mini-view_image"> <a class="grid-view-item__link" href="#"><img class="grid-view-item__image blur-up lazyload" src="{{asset('acceuil/belle_1/assets/images/product-images/home7-product3.jpg')}}" alt=""></a> </div>
                                <div class="details"> <a class="grid-view-item__title" href="#">Aqualina Sandal</a>
                                  <div class="grid-view-item__meta"><span class="product-price__price"><span class="money">$278.60</span></span></div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>    
        <!--End Three Column Products-->
        
    </div><!--End Body Content-->
    
    <!--Footer-->
    <footer id="footer" class="footer-4">
        <div class="newsletter-section">
            <div class="container">
                <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                            <div class="display-table">
                                <div class="display-table-cell footer-newsletter">
                                    <div class="section-header text-center">
                                        <label class="h2"><span>sign up for </span>newsletter</label>
                                    </div>
                                    <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                                            <span class="input-group__btn">
                                                <button type="submit" class="btn newsletter__submit" name="commit" id="Subscribe"><span class="newsletter__submit-text--large">Subscribe</span></button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social">
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i class="icon icon-pinterest"></i> <span class="icon__fallback-text">Pinterest</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i class="icon icon-tumblr-alt"></i> <span class="icon__fallback-text">Tumblr</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i class="icon icon-youtube"></i> <span class="icon__fallback-text">YouTube</span></a></li>
                                    <li><a class="social-icons__link" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i class="icon icon-vimeo-alt"></i> <span class="icon__fallback-text">Vimeo</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>    
        </div>
        <div class="site-footer">
            <div class="container">
                <!--Footer Links-->
                <div class="footer-top">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                            <h4 class="h4">Quick Shop</h4>
                            <ul>
                                <li><a href="#">Women</a></li>
                                <li><a href="#">Men</a></li>
                                <li><a href="#">Kids</a></li>
                                <li><a href="#">Sportswear</a></li>
                                <li><a href="#">Sale</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                            <h4 class="h4">Informations</h4>
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Privacy policy</a></li>
                                <li><a href="#">Terms &amp; condition</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                            <h4 class="h4">Customer Services</h4>
                            <ul>
                                <li><a href="#">Request Personal Data</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Support Center</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                            <h4 class="h4">Pages</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Lookbook</a></li>
                                <li><a href="#">404</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--End Footer Links-->
                <hr>
                <div class="footer-bottom">
                    <div class="row">
                        <!--Footer Copyright-->
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 copyright text-center"><span></span> <a href="templateshub.net">Templates Hub</a></div>
                        <!--End Footer Copyright-->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
    <!--Quick View popup-->
    <div class="modal fade quick-view-popup" id="content_quickview">
    	<div class="modal-dialog">
        	<div class="modal-content">
            	<div class="modal-body">
                    <div id="ProductSection-product-template" class="product-template__container prstyle1">
                <div class="product-single">
                <!-- Start model close -->
                <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right" title="close"><span class="icon icon anm anm-times-l"></span></a>
                <!-- End model close -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="product-details-img">
                            <div class="pl-20">
                                <img src="{{asset('acceuil/belle_1/assets/images/product-detail-page/camelia-reversible-big1.jpg')}}" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="product-single__meta">
                                <h2 class="product-single__title">Product Quick View Popup</h2>
                                <div class="prInfoRow">
                                    <div class="product-stock"> <span class="instock ">In Stock</span> <span class="outstock hide">Unavailable</span> </div>
                                    <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                                </div>
                                <p class="product-single__price product-single__price-product-template">
                                    <span class="visually-hidden">Regular price</span>
                                    <s id="ComparePrice-product-template"><span class="money">$600.00</span></s>
                                    <span class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                        <span id="ProductPrice-product-template"><span class="money">$500.00</span></span>
                                    </span>
                                </p>
                                <div class="product-single__description rte">
                                    Belle Multipurpose Bootstrap 4 Html Template that will give you and your customers a smooth shopping experience which can be used for various kinds of stores such as fashion,...
                                </div>
                                
                            <form method="post" action="http://annimexweb.com/cart/add" id="product_form_10508262282" accept-charset="UTF-8" class="product-form product-form-product-template hidedropdown" enctype="multipart/form-data">
                                <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                    <div class="product-form__item">
                                      <label class="header">Color: <span class="slVariant">Red</span></label>
                                      <div data-value="Red" class="swatch-element color red available">
                                        <input class="swatchInput" id="swatch-0-red" type="radio" name="option-0" value="Red">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-red" style="background-image:url(assets/images/product-detail-page/variant1-1.jpg);" title="Red"></label>
                                      </div>
                                      <div data-value="Blue" class="swatch-element color blue available">
                                        <input class="swatchInput" id="swatch-0-blue" type="radio" name="option-0" value="Blue">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-blue" style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);" title="Blue"></label>
                                      </div>
                                      <div data-value="Green" class="swatch-element color green available">
                                        <input class="swatchInput" id="swatch-0-green" type="radio" name="option-0" value="Green">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-green" style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);" title="Green"></label>
                                      </div>
                                      <div data-value="Gray" class="swatch-element color gray available">
                                        <input class="swatchInput" id="swatch-0-gray" type="radio" name="option-0" value="Gray">
                                        <label class="swatchLbl color medium rectangle" for="swatch-0-gray" style="background-image:url(assets/images/product-detail-page/variant1-4.jpg);" title="Gray"></label>
                                      </div>
                                    </div>
                                </div>
                                <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                    <div class="product-form__item">
                                      <label class="header">Size: <span class="slVariant">XS</span></label>
                                      <div data-value="XS" class="swatch-element xs available">
                                        <input class="swatchInput" id="swatch-1-xs" type="radio" name="option-1" value="XS">
                                        <label class="swatchLbl medium rectangle" for="swatch-1-xs" title="XS">XS</label>
                                      </div>
                                      <div data-value="S" class="swatch-element s available">
                                        <input class="swatchInput" id="swatch-1-s" type="radio" name="option-1" value="S">
                                        <label class="swatchLbl medium rectangle" for="swatch-1-s" title="S">S</label>
                                      </div>
                                      <div data-value="M" class="swatch-element m available">
                                        <input class="swatchInput" id="swatch-1-m" type="radio" name="option-1" value="M">
                                        <label class="swatchLbl medium rectangle" for="swatch-1-m" title="M">M</label>
                                      </div>
                                      <div data-value="L" class="swatch-element l available">
                                        <input class="swatchInput" id="swatch-1-l" type="radio" name="option-1" value="L">
                                        <label class="swatchLbl medium rectangle" for="swatch-1-l" title="L">L</label>
                                      </div>
                                    </div>
                                </div>
                                <!-- Product Action -->
                                <div class="product-action clearfix">
                                    <div class="product-form__item--quantity">
                                        <div class="wrapQtyBtn">
                                            <div class="qtyField">
                                                <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>                                
                                    <div class="product-form__item--submit">
                                        <button type="button" name="add" class="btn product-form__cart-submit">
                                            <span>Add to cart</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- End Product Action -->
                            </form>
                            <div class="display-table shareRow">
                                    <div class="display-table-cell">
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                </div>
            </div>
                <!--End-product-single-->
                </div>
            </div>
        		</div>
        	</div>
        </div>
    </div>
    <!--End Quick View popup-->
    
    <!-- Newsletter Popup -->
	<div class="newsletter-wrap" id="popup-container">
      <div id="popup-window">
        <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
        <!-- Modal content-->
        <div class="display-table splash-bg">
          <div class="display-table-cell width40"><img src="assets/images/newsletter-img.jpg" alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
          <div class="display-table-cell width60 text-center">
            <div class="newsletter-left">
              <h2>Join Our Mailing List</h2>
              <p>Sign Up for our exclusive email list and be the first to know about new products and special offers</p>
              <form action="#" method="post">
                <div class="input-group">
                  <input type="email" class="input-group__field newsletter__input" name="EMAIL" value="" placeholder="Email address" required="">
                  <span class="input-group__btn">
                  <button type="submit" class="btn newsletter__submit" name="commit" id="subscribeBtn"> <span class="newsletter__submit-text--large">Subscribe</span> </button>
                  </span> </div>
              </form>
              <ul class="list--inline site-footer__social-icons social-icons">
                <li><a class="social-icons__link" href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
	<!-- End Newsletter Popup -->
    
     <!-- Including Jquery -->
     <script src="{{asset('acceuil/belle_1/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
     <script src="{{asset('acceuil/belle_1/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
     <script src="{{asset('acceuil/belle_1/assets/js/vendor/jquery.cookie.js')}}"></script>
     <script src="{{asset('acceuil/belle_1/assets/js/vendor/wow.min.js')}}"></script>
     <!-- Including Javascript -->
     <script src="{{asset('acceuil/belle_1/assets/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('acceuil/belle_1/assets/js/plugins.js')}}"></script>
     <script src="{{asset('acceuil/belle_1/assets/js/popper.min.js')}}"></script>
     <script src="{{asset('acceuil/belle_1/assets/js/lazysizes.js')}}"></script>
     <script src="{{asset('acceuil/belle_1/assets/js/main.js')}}"></script>
     <!--For Newsletter Popup-->
     <script>
		jQuery(document).ready(function(){  
		  jQuery('.closepopup').on('click', function () {
			  jQuery('#popup-container').fadeOut();
			  jQuery('#modalOverly').fadeOut();
		  });
		  
		  var visits = jQuery.cookie('visits') || 0;
		  visits++;
		  jQuery.cookie('visits', visits, { expires: 1, path: '/' });
		  console.debug(jQuery.cookie('visits')); 
		  if ( jQuery.cookie('visits') > 1 ) {
			jQuery('#modalOverly').hide();
			jQuery('#popup-container').hide();
		  } else {
			  var pageHeight = jQuery(document).height();
			  jQuery('<div id="modalOverly"></div>').insertBefore('body');
			  jQuery('#modalOverly').css("height", pageHeight);
			  jQuery('#popup-container').show();
		  }
		  if (jQuery.cookie('noShowWelcome')) { jQuery('#popup-container').hide(); jQuery('#active-popup').hide(); }
		}); 
		
		jQuery(document).mouseup(function(e){
		  var container = jQuery('#popup-container');
		  if( !container.is(e.target)&& container.has(e.target).length === 0)
		  {
			container.fadeOut();
			jQuery('#modalOverly').fadeIn(200);
			jQuery('#modalOverly').hide();
		  }
		});
	</script>
    <!--End For Newsletter Popup-->
</div>
</body>

<!-- belle/home7-shoes.html   11 Nov 2019 12:30:10 GMT -->
</html>