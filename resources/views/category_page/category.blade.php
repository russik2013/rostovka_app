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
<body class="categoryPage">

<!-- Overlay -->
<div id="nlpopup_overlay"></div>
<!-- End Newsletter Popup ------------------------------------------------>


<!-- Sidebar Menu (Cart Menu) ------------------------------------------------>
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
<!--Overlay-->
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
                <img src="{{asset('img/search-lg-go-icon.png')}}" alt=""/>
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
        <section class="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="breadcrumb-link">
                            <a href="#!">Главная</a>
                            <span>Для мальчиков</span>
                        </nav>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 push-md-3">
                        <!-- Title -->
                        <div class="list-page-title">
                            <h2 class="">Для мальчиков
                                <small> 120 товаров</small>
                            </h2>
                        </div>
                        <!-- End Title -->

                        <!-- Product Filter -->
                        <div class="product-filter-content">
                            <div class="product-filter-content-inner">

                                <!--Product Filter Button-->

                                <!--Product Sort By-->
                                <form class="product-sort-by">
                                    <label for="short-by">Сортировка</label>
                                    <select name="short-by" id="short-by" class="nice-select-box">
                                        <option value="default_sorting" selected="selected">Поумолчанию</option>
                                        <option value="sort_by_popularity">По популяртности</option>
                                        <option value="sort_by_average_rating">По рейтину</option>
                                        <option value="sort_by_newness">По новинкам</option>
                                        <option value="price_low_to_high">По цене: от меньшего к большему</option>
                                        <option value="price_high_to_low">По цене: от большего к меньшему</option>
                                    </select>
                                </form>

                                <div class="pull-right">
                                    <!--Product Show-->
                                    <form class="product-show">
                                        <label for="product-show">Show</label>
                                        <select name="product-show" id="product-show" class="nice-select-box">
                                            <option value="15" selected="selected">9</option>
                                            <option value="18">18</option>
                                            <option value="21">27</option>
                                            <option value="24">36</option>
                                        </select>
                                    </form>
                                    <!--Product List/Grid Icon-->
                                    <div class="product-view-switcher">
                                        <div class="product-view-icon product-grid-switcher product-view-icon-active">
                                            <a class="" href="#"><i class="fa fa-th" aria-hidden="true"></i></a>
                                        </div>
                                        <div class="product-view-icon product-list-switcher">
                                            <a class="" href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- End Product Filter -->

                        <div class="row product-list-item">
                            <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                                <!--Product Item-->
                                <div class="product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap row row-eq-height">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
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
                                            <a href="#" class="js_tooltip" data-mode="top"
                                               data-tip="Добавить в корзину">
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
                                            When an unknown printer took a galley of type and scrambled it to make a
                                            type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into
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
                                <!-- End Product Item-->
                            </div>
                            <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                                <!--Product Item-->
                                <div class="product-item">
                                    <div class="product-item-inner">
                                        <div class="new-label">New</div>
                                        <div class="product-img-wrap row row-eq-height">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top"
                                               data-tip="Добавить в корзину">
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
                                            When an unknown printer took a galley of type and scrambled it to make a
                                            type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into
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
                                <!-- End Product Item-->
                            </div>
                            <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                                <!--Product Item-->
                                <div class="product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap row row-eq-height">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
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
                                            <a href="#" class="js_tooltip" data-mode="top"
                                               data-tip="Добавить в корзину">
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
                                            When an unknown printer took a galley of type and scrambled it to make a
                                            type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into
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
                                <!-- End Product Item-->
                            </div>
                            <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                                <!--Product Item-->
                                <div class="product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap row row-eq-height">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
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
                                            <a href="#" class="js_tooltip" data-mode="top"
                                               data-tip="Добавить в корзину">
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
                                            When an unknown printer took a galley of type and scrambled it to make a
                                            type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into
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
                                <!-- End Product Item-->
                            </div>
                            <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                                <!--Product Item-->
                                <div class="product-item">
                                    <div class="product-item-inner">
                                        <div class="new-label">New</div>
                                        <div class="product-img-wrap row row-eq-height">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                     alt="">
                                            </a>
                                        </div>
                                        <div class="product-button">
                                            <a href="#" class="js_tooltip" data-mode="top"
                                               data-tip="Добавить в корзину">
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
                                            When an unknown printer took a galley of type and scrambled it to make a
                                            type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into
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
                                <!-- End Product Item-->
                            </div>
                            <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                                <!--Product Item-->
                                <div class="product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap row row-eq-height">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
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
                                            <a href="#" class="js_tooltip" data-mode="top"
                                               data-tip="Добавить в корзину">
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
                                            When an unknown printer took a galley of type and scrambled it to make a
                                            type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into
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
                                <!-- End Product Item-->
                            </div>
                            <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                                <!--Product Item-->
                                <div class="product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap row row-eq-height">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
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
                                            <a href="#" class="js_tooltip" data-mode="top"
                                               data-tip="Добавить в корзину">
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
                                            When an unknown printer took a galley of type and scrambled it to make a
                                            type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into
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
                                <!-- End Product Item-->
                            </div>
                            <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                                <!--Product Item-->
                                <div class="product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap row row-eq-height">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
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
                                            <a href="#" class="js_tooltip" data-mode="top"
                                               data-tip="Добавить в корзину">
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
                                            When an unknown printer took a galley of type and scrambled it to make a
                                            type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into
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
                                <!-- End Product Item-->
                            </div>
                            <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                                <!--Product Item-->
                                <div class="product-item">
                                    <div class="product-item-inner">
                                        <div class="product-img-wrap row row-eq-height">
                                            <a href="#!">
                                                <img class="img-responsive" src="{{asset('img/product-img/prod1.jpg')}}"
                                                     alt="">
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
                                            <a href="#" class="js_tooltip" data-mode="top"
                                               data-tip="Добавить в корзину">
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
                                            When an unknown printer took a galley of type and scrambled it to make a
                                            type
                                            specimen book. It has survived not only five centuries, but also the leap
                                            into
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
                                <!-- End Product Item-->
                            </div>
                        </div>
                        <div class="pagination-wraper">
                            <div class="pagination">
                                <ul class="pagination-numbers">
                                    <!--<li>
                                        <a href="#" class="prev page-number"><i class="fa fa-angle-double-left"></i></a>
                                    </li>-->
                                    <li>
                                        <a href="#" class="page-number current">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-number">2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="page-number">3</a>
                                    </li>
                                    <li>
                                        <span class="page-number dots">...</span>
                                    </li>
                                    <li>
                                        <a href="#" class="page-number">29</a>
                                    </li>
                                    <li>
                                        <a href="#" class="next page-number"><i
                                                    class="fa fa-angle-double-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-container col-md-3 pull-md-9">
                        <div class="submit_onChoose">
                            <button>Сбросить <span class="arrow-left"></span></button>
                        </div>
                        <form id="form1">
                            <!-- Filter By Size -->
                            <div class="widget-sidebar widget-filter-size">
                                <h6 class="widget-title" data-id="tip">Тип</h6>
                                <div class="filterInner">
                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="type1" name="type20" type="checkbox" value="Ботинки">
                                        <label for="type1">
                                            Ботинки
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="type2" name="type21" type="checkbox" value="Босоножки">
                                        <label for="type2">
                                            Босоножки
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="type3" name="type22" type="checkbox" value="Бутсы">
                                        <label for="type3">
                                            Бутсы
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="type4" name="type23" type="checkbox" value="Валенки">
                                        <label for="type4">
                                            Валенки
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="type5" name="type24" type="checkbox" value="Дутики">
                                        <label for="type5">
                                            Дутики
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="type6" name="type25" type="checkbox" value="Кроксы">
                                        <label for="type6">
                                            Кроксы
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="type7" name="type26" type="checkbox" value="Кеды">
                                        <label for="type7">
                                            Кеды
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="type8" name="type27" type="checkbox" value="Кросcовки">
                                        <label for="type8">
                                            Кросcовки
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="type9" name="type28" value="Мокасины" type="checkbox">
                                        <label for="type9">
                                            Мокасины
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="type10" name="type29" value="ПЕРЧАТКИ" type="checkbox">
                                        <label for="type10">
                                            ПЕРЧАТКИ
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="type11" name="type30" value="Пинетки" type="checkbox">
                                        <label for="type11">
                                            Пинетки
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="type12" name="type31" value="Резинов. сапоги" type="checkbox">
                                        <label for="type12">
                                            Резинов. сапоги
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-sidebar widget-filter-size">
                                <h6 class="widget-title" data-id="season">Сезон</h6>
                                <div class="filterInner">
                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="winter" type="checkbox" name="type31">
                                        <label for="winter">
                                            Зима
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="summer" type="checkbox">
                                        <label for="summer">
                                            Лето
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="autumn-spring" type="checkbox">
                                        <label for="autumn-spring">
                                            Осень-весна
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-sidebar widget-filter-size">
                                <h6 class="widget-title" data-id="dimensions">Размеры</h6>
                                <div class="filterInner">
                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="checkbox" type="checkbox">
                                        <label for="checkbox">
                                            12-15
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="checkbox2" type="checkbox">
                                        <label for="checkbox2">
                                            12-14
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3">
                                            14-18
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="checkbox5" type="checkbox">
                                        <label for="checkbox5">
                                            14-29
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="checkbox6" type="checkbox">
                                        <label for="checkbox6">
                                            15-29
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="checkbox7" type="checkbox">
                                        <label for="checkbox7">
                                            12-23
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="checkbox8" type="checkbox">
                                        <label for="checkbox8">
                                            12-30
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="checkbox9" type="checkbox">
                                        <label for="checkbox9">
                                            14-30
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="checkbox10" type="checkbox">
                                        <label for="checkbox10">
                                            14-16
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="checkbox11" type="checkbox">
                                        <label for="checkbox11">
                                            15-20
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-sidebar widget-filter-size">
                                <h6 class="widget-title" data-id="manufacturers">Производители</h6>
                                <div class="filterInner">
                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man1" type="checkbox">
                                        <label for="man1">
                                            4Shoes
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man2" type="checkbox">
                                        <label for="man2">
                                            Active
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man3" type="checkbox">
                                        <label for="man3">
                                            Ai Mei Dui
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man4" type="checkbox">
                                        <label for="man4">
                                            AilAifa
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man5" type="checkbox">
                                        <label for="man5">
                                            Alaska
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man6" type="checkbox">
                                        <label for="man6">
                                            Alemykids
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man7" type="checkbox">
                                        <label for="man7">
                                            Alex
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man8" type="checkbox">
                                        <label for="man8">
                                            All Star
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man9" type="checkbox">
                                        <label for="man9">
                                            Apawwa
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man10" type="checkbox">
                                        <label for="man10">
                                            BAAS
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man11" type="checkbox">
                                        <label for="man11">
                                            BBTE
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Product Carousel -->
            <div class="container product-carousel">
                <h2 class="page-title">ПОПУЛЯРНЫЕ ТОВАРЫ</h2>
                <div id="new-tranding" class="product-item-4 owl-carousel owl-theme nf-carousel-theme1">
                    <!-- item.1 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap row row-eq-height">
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
                    <!-- item.2 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap row row-eq-height">
                                <a href="#!">
                                    <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}" alt="">
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
                    <!-- item.3 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap row row-eq-height">
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
                    <!-- item.4 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap row row-eq-height">
                                <a href="#!">
                                    <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}" alt="">
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
                    <!-- item.5 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap row row-eq-height">
                                <a href="#!">
                                    <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}" alt="">
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
                    <!-- item.6 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap row row-eq-height">
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
                    <!-- item.7 -->
                    <div class="product-item">
                        <div class="product-item-inner">
                            <div class="product-img-wrap row row-eq-height">
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
                </div>
            </div>
            <!-- End Product Carousel -->
        </section>
    </div>
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