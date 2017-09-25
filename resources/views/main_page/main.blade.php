<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rostovka</title>
    <meta name="description" content="Philos Template"/>
    <meta name="keywords" content="philos, WooCommerce, bootstrap, html template, philos template">
    <meta name="author" content="philos"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <link rel="icon" type="img/png" href="{{asset('img/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('img/favicon.png')}}">

    <!-- CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/def.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/settings-ver.5.3.1.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css"/>
</head>

<body>

<!-- Overlay -->
<div id="nlpopup_overlay"></div>

<section id="sidebar-right" class="sidebar-menu sidebar-right">
    <div class="cart-sidebar-wrap">

        <!-- Cart Headiing -->
        <div class="cart-widget-heading">
            <h4>Shopping Cart</h4>
            <!-- Close Icon -->
            <a href="javascript:void(0)" id="sidebar_close_icon" class="close-icon-white"></a>
            <!-- End Close Icon -->
        </div>
        <!-- End Cart Headiing -->

        <!-- Cart Product Content -->
        <div class="cart-widget-content">
            <div class="cart-widget-product ">

                <!-- Empty Cart -->
                <div class="cart-empty">
                    <p>You have no items in your shopping cart.</p>
                </div>
                <!-- EndEmpty Cart -->

                <!-- Cart Products -->
                <ul class="cart-product-item">

                    <!-- Item -->
                    <li>
                        <!--Item Image-->
                        <a href="#" class="product-image">
                            <img src="{{asset('img/product-img/prod1.jpg')}}" alt=""/></a>

                        <!--Item Content-->
                        <div class="product-content">
                            <!-- Item Linkcollateral -->
                            <a class="product-link" href="#">Alpha Block Black Polo T-Shirt</a>

                            <!-- Item Cart Totle -->
                            <div class="cart-collateral">
                                <span class="qty-cart">1</span>&nbsp;<span>&#215;</span>&nbsp;<span
                                        class="product-price-amount"><span class="currency-sign">$</span>399.00</span>
                            </div>

                            <!-- Item Remove Icon -->
                            <a class="product-remove" href="javascript:void(0)"><i class="fa fa-times-circle"
                                                                                   aria-hidden="true"></i></a>
                        </div>
                    </li>

                    <!-- Item -->
                    <li>
                        <!--Item Image-->
                        <a href="#" class="product-image">
                            <img src="{{asset('img/product-img/prod1.jpg')}}" alt=""/></a>

                        <!--Item Content-->
                        <div class="product-content">
                            <!-- Item Linkcollateral -->
                            <a class="product-link" href="#">Red Printed Round Neck T-Shirt</a>

                            <!-- Item Cart Totle -->
                            <div class="cart-collateral">
                                <span class="qty-cart">2</span>&nbsp;<span>&#215;</span>&nbsp;<span
                                        class="product-price-amount"><span class="currency-sign">$</span>299.00</span>
                            </div>

                            <!-- Item Remove Icon -->
                            <a class="product-remove" href="javascript:void(0)"><i class="fa fa-times-circle"
                                                                                   aria-hidden="true"></i></a>
                        </div>
                    </li>

                </ul>
                <!-- End Cart Products -->

            </div>
        </div>
        <!-- End Cart Product Content -->

        <!-- Cart Footer -->
        <div class="cart-widget-footer">
            <div class="cart-footer-inner">

                <!-- Cart Total -->
                <h4 class="cart-total-hedding normal"><span>Total :</span><span class="cart-total-price">$698.00</span>
                </h4>
                <!-- Cart Total -->

                <!-- Cart Buttons -->
                <div class="cart-action-buttons">
                    <a href="cart.html" class="view-cart btn btn-md btn-gray">Перейти в корзину</a>
                    <a href="checkout.html" class="checkout btn btn-md btn-color">Перейти к покупке</a>
                </div>
                <!-- End Cart Buttons -->

            </div>
        </div>
        <!-- Cart Footer -->
    </div>
</section>

<div class="sidebar_overlay"></div>

<section class="search-overlay-menu">
    <!-- Close Icon -->
    <a href="javascript:void(0)" class="search-overlay-close"></a>
    <!-- End Close Icon -->
    <div class="container">
        <!-- Search Form -->
        <form role="search" id="searchform" action="/search" method="get">
            <div class="search-icon-lg">
                <img src="{{asset('img/search-icon-lg.png')}}" alt=""/>
            </div>
            <label class="h6 normal search-input-label" for="search-query">Enter keywords to Search Product</label>
            <input value="" name="q" type="search" placeholder="Search..."/>
            <button type="submit">
                <img src="img/search-lg-go-icon.png" alt=""/>
            </button>
        </form>
        <!-- End Search Form -->

    </div>
</section>

<div class="wraper">
    <!-- Header -->
    <header class="header">
        <!--Topbar-->
        <div class="header-topbar">
            <div class="header-topbar-inner">
                <!--Topbar Left-->
                <div class="topbar-left hidden-sm-down">
                    <div class="phone pull-left">
                        <div class="text-left pull-left">
                            <i class="fa fa-phone left" aria-hidden="true"></i>
                            <b>(067) 25-333-05</b>
                        </div>

                        <div class="text-left pull-left">
                            <i class="fa fa-phone left" aria-hidden="true"></i>
                            <b>(093) 350-43-82 (Viber)</b>
                        </div>
                    </div>
                </div>
                <!--End Topbar Left-->

                <!--Topbar Right-->
                <div class="topbar-right">
                    <ul class="list-none">
                        <li>
                            <a href="login-register.html"><i class="fa fa-lock left" aria-hidden="true"></i><span
                                        class="hidden-sm-down">Login</span></a>
                        </li>
                        <li class="dropdown-nav">
                            <a href="login-register.html"><i class="fa fa-user left" aria-hidden="true"></i>
                                <span class="hidden-sm-down">My Account</span>
                                <i class="fa fa-angle-down right" aria-hidden="true"></i>
                            </a>
                            <!--Dropdown-->
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="login-register.html">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                                <span class="divider"></span>
                                <ul>
                                    <li><a href="login-register.html"><i class="fa fa-lock left" aria-hidden="true"></i>Login</a>
                                    </li>
                                    <li><a href="login-register.html"><i class="fa fa-user left" aria-hidden="true"></i>Create
                                            an Account</a></li>
                                </ul>
                            </div>
                            <!--End Dropdown-->
                        </li>
                    </ul>
                </div>
                <!-- End Topbar Right -->
            </div>
        </div>
        <!--End Topbart-->

        <!-- Header Container -->
        <div id="header-sticky" class="header-main">
            <div class="header-main-inner">
                <!-- Logo -->
                <div class="logo">
                    <a href="#!">
                        <img src="{{asset('img/logo_black.png')}}" alt="Rostovka"/>
                    </a>
                </div>
                <!-- End Logo -->


                <!-- Right Sidebar Nav -->
                <div class="header-rightside-nav">

                    <!-- Sidebar Icon -->
                    <div class="sidebar-icon-nav">
                        <ul class="list-none-ib">
                            <!-- Search-->
                            <li><a id="search-overlay-menu-btn"><i aria-hidden="true" class="fa fa-search"></i></a></li>

                            <!-- Whishlist-->
                            <li><a class="js_whishlist-btn"><i aria-hidden="true" class="fa fa-heart"></i><span
                                            class="countTip">10</span></a></li>

                            <!-- Cart-->
                            <li><a id="sidebar_toggle_btn">
                                    <div class="cart-icon">
                                        <i aria-hidden="true" class="fa fa-shopping-bag"></i>
                                    </div>

                                    <div class="cart-title">
                                        <span class="cart-count">2</span>
                                        /
                                        <span class="cart-price strong">$698.00</span>
                                    </div>
                                </a></li>
                        </ul>
                    </div>
                    <!-- End Sidebar Icon -->
                </div>
                <!-- End Right Sidebar Nav -->


                <!-- Navigation Menu -->
                <nav class="navigation-menu">
                    <ul>
                        <li>
                            <a href="#!">Главная</a>
                        </li>

                        <li>
                            <a href="category">Для мальчиков</a>
                        </li>
                        <li>
                            <a href="category">Для девочек</a>
                            <!-- Drodown Menu ------->
                            <ul class="nav-dropdown js-nav-dropdown">
                                <li class="container">
                                    <ul class="row">
                                        <!--Grid 1-->
                                        <li class="nav-dropdown-grid">
                                            <h6>New In</h6>
                                            <ul>
                                                <li><a href="#">New In Clothing</a></li>
                                                <li><a href="#">New In Shoes<span class="new-label">New</span></a></li>
                                                <li><a href="#">New In Bags</a></li>
                                                <li><a href="#">New In Watches</a></li>
                                                <li><a href="#">New In Accesories</a></li>
                                            </ul>
                                        </li>
                                        <!--Grid 2-->
                                        <li class="nav-dropdown-grid">
                                            <h6>Clothing</h6>
                                            <ul>
                                                <li><a href="#">Polos & Tees</a></li>
                                                <li><a href="#">Casual Shirts</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Casual Trousers</a></li>
                                                <li><a href="#">Formal Shirts<span class="sale-label">Sale</span></a>
                                                </li>
                                                <li><a href="#">Formal Trousers</a></li>
                                                <li><a href="#">Suits & Blazers</a></li>
                                                <li><a href="#">Winter Jackets</a></li>
                                                <li><a href="#">Track wear</a></li>
                                            </ul>
                                        </li>
                                        <!--Grid 3-->
                                        <li class="nav-dropdown-grid">
                                            <h6>ACCESSORIES</h6>
                                            <ul>
                                                <li><a href="#">Mens Jewellery</a></li>
                                                <li><a href="#">Bag</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Watches</a></li>
                                                <li><a href="#">Hair Care</a></li>
                                                <li><a href="#">Ties & Cufflinks</a></li>
                                                <li><a href="#">Perfume</a></li>
                                                <li><a href="#">Belt</a></li>
                                            </ul>
                                        </li>
                                        <!--Grid 4-->
                                        <li class="nav-dropdown-grid">
                                            <h6>Brand</h6>
                                            <ul>
                                                <li><a href="#">Analog</a></li>
                                                <li><a href="#">Chronograph</a></li>
                                                <li><a href="#">Digital</a></li>
                                                <li><a href="#">Watch Cases</a></li>
                                                <li><a href="#">Samsung</a></li>
                                                <li><a href="#">Apple</a></li>
                                                <li><a href="#">Hitachi</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <!-- End Drodown Menu -->
                        </li>
                        <li>
                            <a href="category">Для женщин</a>
                            <!-- Drodown Menu ------->
                            <ul class="nav-dropdown js-nav-dropdown">
                                <li class="container">
                                    <ul class="row">
                                        <!--Grid 1-->
                                        <li class="nav-dropdown-grid">
                                            <h6>New In</h6>
                                            <ul>
                                                <li><a href="#">New In Clothing</a></li>
                                                <li><a href="#">New In Shoes</a></li>
                                                <li><a href="#">New In Bags</a></li>
                                                <li><a href="#">New In Watches</a></li>
                                                <li><a href="#">Sweaters</a></li>
                                                <li><a href="#">Winter Shrugs</a></li>
                                            </ul>
                                        </li>
                                        <!--Grid 2-->
                                        <li class="nav-dropdown-grid">
                                            <h6>Clothing</h6>
                                            <ul>
                                                <li><a href="#">Tops , tees & shirts</a></li>
                                                <li><a href="#">Dresses & Jumpsuits</a></li>
                                                <li><a href="#">Trousers & Jeans</a></li>
                                                <li><a href="#">Leggings & Jeggings</a></li>
                                                <li><a href="#">Capris,Shorts & Skirts</a></li>
                                                <li><a href="#">Winter Jackets</a></li>
                                                <li><a href="#">Clothing Accessories</a></li>
                                                <li><a href="#">Sweaters</a></li>
                                                <li><a href="#">Winter Shrugs</a></li>
                                            </ul>
                                        </li>
                                        <!--Grid 3-->
                                        <li class="nav-dropdown-grid">
                                            <h6>Brand</h6>
                                            <ul>
                                                <li><a href="#">A&C Signature</a></li>
                                                <li><a href="#">Angry Birds</a></li>
                                                <li><a href="#">Macadamia</a></li>
                                                <li><a href="#">Miller & Schweizer</a></li>
                                                <li><a href="#">Stylet</a></li>
                                                <li><a href="#">Van Heusen</a></li>
                                                <li><a href="#">Wrangler</a></li>
                                                <li><a href="#">Wills Lifestyle</a></li>
                                                <li><a href="#">X'Pose</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-dropdown-grid">
                                            <a href="#" class="sub-banner">
                                                <img src="{{asset('img/banner/banner_115145.jpg')}}" alt=""/></a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <!-- End Drodown Menu -->
                        </li>
                        <li>
                            <a href="category">Для мужчин</a>
                            <!-- Drodown Menu ------->
                            <ul class="nav-dropdown js-nav-dropdown">
                                <li class="container">
                                    <ul class="row">
                                        <!--Grid 1-->
                                        <li class="nav-dropdown-grid">
                                            <h6>Kid's</h6>
                                            <ul>
                                                <li><a href="#">Tops & Tunics</a></li>
                                                <li><a href="#">Shorts & Capris</a></li>
                                                <li><a href="#">Twin Sets</a></li>
                                                <li><a href="#">Jeans & Trousers</a></li>
                                                <li><a href="#">Leggings & Jeggings</a></li>
                                                <li><a href="#">Skirts</a></li>
                                                <li><a href="#">Jumpsuits</a></li>
                                                <li><a href="#">Casual Dresses</a></li>
                                                <li><a href="#">Ethnic Wear</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                            <!-- End Drodown Menu -->
                        </li>

                        <li>
                            <a href="category">Акции<span class="nav-label-sale"></span></a>
                        </li>
                    </ul>
                </nav>
                <!-- End Navigation Menu -->

            </div>
        </div>
        <!-- End Header Container -->
    </header>
    <!-- End Header -->

    <!-- Page Content Wraper -->
    <div class="page-content-wraper">
        <!-- Intro -->
        <section id="intro" class="intro">
            <!-- Revolution Slider -->
            <div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
                 data-source="gallery" style="background-color: transparent; padding: 0px;">
                <div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display: none;"
                     data-version="5.3.0.2">
                    <ul>
                        <li class="dark-bg" data-index="rs-1" data-transition="random" data-slotamount="7"
                            data-masterspeed="500" data-thumb="" data-saveperformance="off" data-title="01">
                            <!-- Main Image Layer 0-->
                            <img src="{{asset('img/slide_bg1.jpg')}}" alt="h" title="home-1-slide-1" width="1920"
                                 height="1100" data-bgposition="center center" data-bgfit="cover"
                                 data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina/>
                        </li>
                        <li data-index="rs-2" data-transition="random" data-slotamount="7" data-masterspeed="500"
                            data-thumb="" data-saveperformance="off" data-title="02">
                            <!-- Main Image Layer 0-->
                            <img src="{{asset('img/slide_2.jpg')}}" alt="h" title="home-1-slide-1" width="1920"
                                 height="1100" data-bgposition="center center" data-bgfit="cover"
                                 data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina/>
                            <!-- LAYERS -->
                        </li>
                        <li data-index="rs-3" data-transition="random" data-slotamount="7" data-masterspeed="500"
                            data-thumb="" data-saveperformance="off" data-title="03">
                            <!-- Main Image Layer 0-->
                            <img src="{{asset('img/slide_3.jpg')}}" alt="h" title="home-1-slide-1" width="1920"
                                 height="1100" data-bgposition="center center" data-bgfit="cover"
                                 data-bgrepeat="no-repeat" data-bgparallax="6" class="rev-slidebg" data-no-retina/>
                            <!-- LAYERS -->
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Revolution Slider -->
        </section>
        <!-- End Intro -->

        <!-- Page Content Wraper -->
        <div class="page-content-wraper">

            <!-- Product (Tab with Slider) -->
            <section class="section-padding-b">
                <div class="container larger">
                    <ul class="product-filter nav" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#latest" role="tab" data-toggle="tab">
                                <h2 class="page-title">Новинки</h2>
                            </a>
                        </li>
                        <li class="nav-item last">
                            <a class="nav-link" href="#best-sellar" role="tab" data-toggle="tab">
                                <h2 class="page-title">Топ продаж</h2>
                            </a>
                        </li>
                    </ul>
                    <div class="col-md-12 tab-content">
                        <!-- Tab1 - Latest Product -->
                        <div id="latest" role="tabpanel" class="tab-pane fade in active pull-left">
                            <div class="col-md-12 pull-left productLine">
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                                <div class="productIcons">
                                                    <i class="stamp_leather"></i>
                                                    <i class="stamp_snake"></i>
                                                    <i class="stamp_wool"></i>
                                                    <i class="stamp_backlight"></i>
                                                    <i class="stamp_brakes"></i>
                                                    <i class="stamp_heat-cold"></i>
                                                    <i class="stamp_leatherinsole"></i>
                                                    <i class="stamp_doubleKnitting"></i>
                                                    <i class="stamp_singleKnitting"></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="new-label">New</div>
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 pull-left productLine">
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 pull-left productLine">
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab2 - Best Sellar -->
                        <div id="best-sellar" role="tabpanel" class="tab-pane fade">
                            <div class="col-md-12 pull-left productLine">
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="new-label">New</div>
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 pull-left productLine">
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 pull-left productLine">
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 pull-left product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-detail">
                                        <a class="tag" href="#">Men Fashion</a>
                                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                        <div class="product-rating">
                                            <div class="star-rating" itemprop="reviewRating" itemscope=""
                                                 itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                                <span style="width: 60%"></span>
                                            </div>
                                            <a href="#" class="product-rating-count"><span class="count">3</span>
                                                Reviews</a>
                                        </div>
                                        <p class="product-description">
                                            When an unknown printer took a galley of type and scrambled it to make a type
                                            specimen book. It has survived not only five centuries, but also the leap into
                                            electronic remaining essentially unchanged.
                                        </p>
                                        <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                        <div class="col-md-12 pull-left">
                                            <span class="item-price col-md-6 pull-left">25 - 35</span>
                                            <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Product (Tab with Slider) -->

            <section class="categories">
                <div class="section-padding container-fluid bg-image text-center overlay-light90"
                     data-background-img="img/bg_5.jpg" data-bg-position-x="center center">
                    <div class="container">
                        <h2 class="page-title">категории</h2>
                    </div>
                </div>
                <div class="container cat_block">
                    <div class="row">
                        <!--Left Side-->
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12 mb-30">
                                    <!-- banner No.1 -->
                                    <div class="promo-banner-wrap">
                                        <a href="#" class="promo-image-wrap">
                                            <img src="{{'img/promo-banner4.jpg'}}" alt="Accesories">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 mb-sm-30">
                                    <!-- banner No.2 -->
                                    <div class="promo-banner-wrap">
                                        <a href="#" class="promo-image-wrap">
                                            <img src="{{'img/promo-banner3.jpg'}}" alt="Accesories">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Right Side-->
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-12 mb-30">
                                    <!-- banner No.3 -->
                                    <div class="promo-banner-wrap">
                                        <a href="#" class="promo-image-wrap">
                                            <img src="{{'img/promo-banner2.jpg'}}" alt="Accesories">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 mb-sm-30">
                                    <!-- banner No.4 -->
                                    <div class="promo-banner-wrap">
                                        <a href="#" class="promo-image-wrap">
                                            <img src="{{'img/promo-banner5.jpg'}}" alt="Accesories">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- New Product -->
            <section class="section-padding">
                <div class="container">
                    <h2 class="page-title">Популярные товары</h2>
                </div>
                <div class="container">
                    <div id="new-tranding" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                        <!-- item.1 -->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                </div>
                                <div class="product-button">
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                        <i class="fa fa-shopping-bag"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a class="tag" href="#">Men Fashion</a>
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="product-rating">
                                    <div class="star-rating" itemprop="reviewRating" itemscope=""
                                         itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                        <span style="width: 60%"></span>
                                    </div>
                                    <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                </div>
                                <p class="product-description">
                                    When an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    remaining essentially unchanged.
                                </p>
                                <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- item.2 -->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                </div>
                                <div class="product-button">
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                        <i class="fa fa-shopping-bag"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a class="tag" href="#">Men Fashion</a>
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="product-rating">
                                    <div class="star-rating" itemprop="reviewRating" itemscope=""
                                         itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                        <span style="width: 60%"></span>
                                    </div>
                                    <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                </div>
                                <p class="product-description">
                                    When an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    remaining essentially unchanged.
                                </p>
                                <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- item.3 -->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                </div>
                                <div class="product-button">
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                        <i class="fa fa-shopping-bag"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a class="tag" href="#">Men Fashion</a>
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="product-rating">
                                    <div class="star-rating" itemprop="reviewRating" itemscope=""
                                         itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                        <span style="width: 60%"></span>
                                    </div>
                                    <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                </div>
                                <p class="product-description">
                                    When an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    remaining essentially unchanged.
                                </p>
                                <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- item.4 -->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                </div>
                                <div class="product-button">
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                        <i class="fa fa-shopping-bag"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a class="tag" href="#">Men Fashion</a>
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="product-rating">
                                    <div class="star-rating" itemprop="reviewRating" itemscope=""
                                         itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                        <span style="width: 60%"></span>
                                    </div>
                                    <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                </div>
                                <p class="product-description">
                                    When an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    remaining essentially unchanged.
                                </p>
                                <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- item.5 -->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                </div>
                                <div class="product-button">
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                        <i class="fa fa-shopping-bag"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a class="tag" href="#">Men Fashion</a>
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="product-rating">
                                    <div class="star-rating" itemprop="reviewRating" itemscope=""
                                         itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                        <span style="width: 60%"></span>
                                    </div>
                                    <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                </div>
                                <p class="product-description">
                                    When an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    remaining essentially unchanged.
                                </p>
                                <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- item.6 -->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                </div>
                                <div class="product-button">
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                        <i class="fa fa-shopping-bag"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a class="tag" href="#">Men Fashion</a>
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="product-rating">
                                    <div class="star-rating" itemprop="reviewRating" itemscope=""
                                         itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                        <span style="width: 60%"></span>
                                    </div>
                                    <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                </div>
                                <p class="product-description">
                                    When an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    remaining essentially unchanged.
                                </p>
                                <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- item.7 -->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                </div>
                                <div class="product-button">
                                    <a href="#" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                        <i class="fa fa-shopping-bag"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <a class="tag" href="#">Men Fashion</a>
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="product-rating">
                                    <div class="star-rating" itemprop="reviewRating" itemscope=""
                                         itemtype="http://schema.org/Rating" title="Rated 4 out of 5">
                                        <span style="width: 60%"></span>
                                    </div>
                                    <a href="#" class="product-rating-count"><span class="count">3</span> Reviews</a>
                                </div>
                                <p class="product-description">
                                    When an unknown printer took a galley of type and scrambled it to make a type specimen
                                    book. It has survived not only five centuries, but also the leap into electronic
                                    remaining essentially unchanged.
                                </p>
                                <span class="col-md-12 pull-left goods_amount">
                                            <span class="col-md-6 pull-left">В ростовке - <b>8</b> пар</span>
                                            <span class="col-md-6 pull-left">В ящике - <b>16</b> пар</span>
                                        </span>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39.00 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End New Product -->
        </div>
        <!-- End Page Content Wrapper -->

        <!-- End New Product -->
        <section class="section-padding bg-gray aboutText">
            <div class="container">
                <div class="like-share-inner overlay-black40">
                    <h1 class="normal pull-left">Обувь оптом Украина</h1>
                    <a class="btn btn-primary pull-left" data-toggle="collapse" href="#collapseInfo" aria-expanded="false" aria-controls="collapseExample">
                        Подробнее
                    </a>
                    <ul class="social-icon pull-right">
                        <li>
                            <a href="http://facebook.com/" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://plus.google.com/" target="_blank">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li><a href="https://pinterest.com/" target="_blank">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-12">
                    <div class="collapse" id="collapseInfo">
                        <div class="col-md-12 col-sm-12 mb-xs-12">
                            <p>
                                Окончание сезона – это время обновок. Больше всего это касается обуви, ведь старая уже
                                сносилась или просто надоела. Постает вопрос: где лучше выбрать и приобрести обувь? Это не
                                так просто как кажется на первый взгляд, нужно выбрать качественную, удобную, красивую
                                обувь, которая будет по карману среднестатистическому покупателю. Можно, конечно, поехать на
                                рынок, обходить все прилавки в поисках или поехать на выставку. Но всему этому есть
                                альтернатива, которая поможет сэкономить много вашего времени и сил – это купить обувь оптом
                                в интернете .
                                На сегодняшний день покупка в интернете стала уже привычным явлением. Учитывая загруженность
                                людей, не всегда получается выделить время на поход по магазинам и не всегда последние могут
                                удовлетворить требования покупателя. Плюсы приобретения обуви оптом онлайн велики: выгодная
                                цена, причиной этому является отсутствие дорогущей оплаты аренды помещения; широкий выбор
                                брендов; экономия времени и т.д.
                                На ряду с этим стоят так же и недостатки этой системы. Решившимся пойти на такой риск стоить
                                помнить о возможных проблемах, таких как: неподходящий размер; неудобная колодка; маленькие
                                дефекты, которых не видно на картинке; гарантия и возврат товара, что может возникнуть при
                                покупке товара через посредников.
                                Чтоб избежать таких неприятностей выбирайте официальные сайты, где можно купить обувь оптом,
                                где вам обязательно выдадут чек и гарантию, а так же уточняйте информацию о размерной сетке
                                выбранного бренда. Для надежности стоит так же указать полноту ноги, измеряв обхват своей
                                стопы, с помощью сантиметра, в наиболее широкой ее носочной части.
                                Приближающиеся теплые весенние деньки напоминают нам о том, что пора скинуть тяжелые сапоги
                                и порадовать себя изящными туфельками. Вышеизложенные советы помогут вам избежать неприятных
                                покупок и не испортить себе весеннее настроение.
                            </p>


                            <h5>Обувь оптом в Одессе</h5>
                            <p>
                                Психологи утверждают, что обувь может много рассказать о своем хозяине, наш характер,
                                амбиции и даже мечты может выдать стиль, цвет и даже высота каблука.
                                Благодаря сети Интернет мы можем спокойно посмотреть много брендовой обуви оптом на любой
                                цвет и вкус, а главное выбрать приемлемую для себе цену без особых физических затрат.
                                Так по каким же критерием покупатель выбирает себе обувь
                            </p>
                            <ul>
                                <li>1) Обувь должна быть удобной и красивой. Ведь все хотят носить обувь, которая им
                                    нравится и подходит.
                                </li>
                                <li>2) Стоимость должна соответствовать качеству. Практичные люди всегда покупают
                                    качественную продукцию с расчетом поносить ее не один сезон;
                                </li>
                                <li>3) Продукция должна быть качественной. Неровные, плохо пошитые швы портят обувь.</li>
                                <li>4) И самое главное что влияет на продаваемость, обувь должна быть актуальной и
                                    желательно не один сезон.
                                </li>
                            </ul>

                            <p>
                                Реализатору выгоднее покупать обувь оптом, которая будет хорошо продавалась, а значит
                                соответствовать выше изложенным требованиям.
                                За качество чаще всего отвечает производитель. Например, турецкая продукция высоко ценится
                                на
                                мировом рынке. Примечательно, что Турция не занимается созданием копий, она создает свою,
                                уникальную обувь оптом. А авторские изделия, как известно, имеют особую ценность.
                                Но по качеству всемирно признанной остается Италия, которая использует самые совершенные
                                технологии, что позволяет создавать анатомически правильную обувь, которая долгое время
                                держит
                                свою форму.
                                Для примера можно взять еще одну страну Европы. Великобритания уже на протяжении 135 лет
                                изготовляет ботинки Loake ручной работы. Ни с чем не сравненная история о трех братьев,
                                которые
                                решили создать свою обувь, исключительной она была от других тем, что в 19 веке впервые
                                появилась долговечная обувь.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End Page Content Wrapper -->

    <!-- Footer Section -------------->
    <footer class="footer section-padding">
        <!-- Footer Info -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 mb-sm-45">
                    <div class="footer-block about-us-block">
                        <img src="{{'img/logo_white.png'}}" width="400" alt="">
                        <p>Gumbo beet greens corn soko endive gum gourd. Parsley allot courgette tatsoi pea sprouts fava
                            bean soluta nobis est ses eligendi optio.</p>
                        <ul class="footer-social-icon list-none-ib">
                            <li>
                                <a href="http://facebook.com/" target="_blank">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.com/" target="_blank">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://plus.google.com/" target="_blank">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 mb-sm-45">
                    <div class="footer-block information-block">
                        <h6>Information</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Discount</a></li>
                            <li><a href="#">Latest News</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                            <li><a href="#">Terms &amp; Condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 mb-sm-45">
                    <div class="footer-block links-block">
                        <h6>Our Links</h6>
                        <ul>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Gift Vouchers</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Special Event</a></li>
                            <li><a href="#">Retunrs</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 mb-sm-45">
                    <div class="footer-block extra-block">
                        <h6>Extra</h6>
                        <ul>
                            <li><a href="#">New Collection</a></li>
                            <li><a href="#">Women Dresses</a></li>
                            <li><a href="#">Kids Collection</a></li>
                            <li><a href="#">Mens Collection</a></li>
                            <li><a href="#">Custom Service</a></li>
                            <li><a href="#">Shipping policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="footer-block contact-block">
                        <h6>Contact</h6>
                        <ul>
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>1 Wintergreen Dr. Huntley
                                <br>
                                IL 60142, Usa
                            </li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@sky.com">info@sky.com</a>
                            </li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>(013) 456789</li>
                            <li><i class="fa fa-fax" aria-hidden="true"></i>89567989</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Info -->

        <!-- Footer Copyright -->
        <div class="container">
            <div class="copyrights">
                <p class="copyright">&copy; Developed by <a href="http://micore-studio.com/" target="_blank">MiCore
                        Development</a></p>
            </div>
        </div>
        <!-- End Footer Copyright -->
    </footer>
    <!-- End Footer Section -------------->

</div>

<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
<!-- jquery library js -->
<script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>
<!--modernizr Js-->
<script type="text/javascript" src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution.extension.layeranimation.min.js')}}"></script>
<!--Slider Revolution Js File-->
<script type="text/javascript" src="{{asset('js/tether.min.js')}}"></script>
<!--Bootstrap tooltips require Tether (Tether Js)-->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- bootstrap js -->
<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
<!-- OWL carousel js -->
<script type="text/javascript" src="{{asset('js/slick.js')}}"></script>
<!-- Slick Slider js -->
<script type="text/javascript" src="{{asset('js/plugins-all.js')}}"></script>
<!-- Plugins All js -->
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<!-- custom js -->
<!-- end jquery -->
</body>
</html>