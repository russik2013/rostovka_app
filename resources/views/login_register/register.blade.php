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
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="img/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <!-- CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/def.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/settings-ver.5.3.1.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body class="logReg_page regPage">

<!-- Overlay -->
<div id="nlpopup_overlay"></div>
<!-- End Newsletter Popup ------------------------------------------------>


<!-- Sidebar Menu (Ca<!-- Sidebar Menu (Cart Menu) ------------------------------------------------>
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
                <h4 class="cart-total-hedding normal"><span>Сумма :</span><span class="cart-total-price">$698.00</span>
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
<!-- End Sidebar Menu (Cart Menu) -------------------------------------------->

<!-- Search Overlay Menu ----------------------------------------------------->
<section class="search-overlay-menu">
    <!-- Close Icon -->
    <a href="javascript:void(0)" class="search-overlay-close"></a>
    <!-- End Close Icon -->
    <div class="container">
        <!-- Search Form -->
        <form role="search" id="searchform" action="/search" method="get">
            <div class="search-icon-lg">
                <img src="img/search-icon-lg.png" alt=""/>
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
<!-- End Search Overlay Menu ------------------------------------------------>

<!--==========================================-->
<!-- wrapper -->
<!--==========================================-->
<div class="wraper">
    <!-- Header -->
    <header class="header">
        <!--Topbar-->
        <div class="header-topbar">
            <div class="header-topbar-inner">
                <!--Topbar Left-->
                <div class="topbar-left hidden-sm-down">
                    <div class="phone"><i class="fa fa-phone left" aria-hidden="true"></i>Customer Support : <b>+77 7565
                            348 576</b></div>
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
                            <a href="login-register.html"><i class="fa fa-user left" aria-hidden="true"></i><span
                                        class="hidden-sm-down">My Account</span><i class="fa fa-angle-down right"
                                                                                   aria-hidden="true"></i></a>
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
                        <li class="dropdown-nav">
                            <a href="#">USD<i class="fa fa-angle-down right" aria-hidden="true"></i></a>
                            <!--Dropdown-->
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">GBP</a></li>
                                    <li><a href="#">AUD</a></li>
                                </ul>
                            </div>
                            <!--End Dropdown-->
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
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
        <!-- Bread Crumb -->
        <section class="breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="breadcrumb-link">
                            <a href="#">Главная</a>
                            <span>Регистрация</span>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bread Crumb -->

        <!-- Page Content -->
        <section class="content-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Регистрация</h3>
                        <div class="container">

                            <form class="well form-horizontal" action="{{url('/register')}}" method="post" id="contact_form">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="_method" value="POST">
                                <fieldset>
                                    <div class="form-field-wrapper form-center col-sm-12">
                                        @if ($errors->has('first_name'))


                                           <p> {{$errors -> first('first_name')}} </p>

                                        @endif
                                        <div class="col-md-6 form-field-wrapper form-group has-feedback">
                                            <label class="col-md-12 control-label">Ваше имя</label>
                                            <div class="col-md-12 inputGroupContainer">

                                                <div class="input-group">
                                                    <input name="first_name" placeholder="имя" class="input-md form-full-width form-control" type="text" value="{{old('first_name')}}">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        @if ($errors->has('last_name'))


                                                <p> {{$errors -> first('last_name')}} </p>

                                        @endif
                                        <div class="col-md-6 form-field-wrapper form-group has-feedback">
                                            <label class="col-md-12 control-label">Ваша фамилия</label>
                                            <div class="col-md-12 inputGroupContainer">

                                                <div class="input-group">
                                                    <input name="last_name" placeholder="фамилия" class="form-control" type="text" value="{{old('last_name')}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Text input-->
                                    @if ($errors->has('email'))


                                        <p>  {{$errors -> first('email')}} </p>

                                    @endif
                                    <div class="col-md-6 form-field-wrapper form-group has-feedback">
                                        <label class="col-md-12 control-label">Ваш E-Mail</label>
                                        <div class="col-md-12 inputGroupContainer">

                                            <div class="input-group">
                                                <input name="email" placeholder="e-mail" class="form-control" type="text" value="{{old('email')}}">
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Text input-->
                                    @if ($errors->has('phone'))


                                        <p>   {{$errors -> first('phone')}} </p>

                                    @endif
                                    <div class="col-md-6 form-field-wrapper form-group has-feedback">
                                        <label class="col-md-12 control-label">Ваш телефон</label>
                                        <div class="col-md-12 inputGroupContainer">

                                            <div class="input-group">
                                                <input name="phone" placeholder="(845)555-1212" class="form-control" type="text" value="{{old('phone')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    @if ($errors->has('address'))


                                        <p>  {{$errors -> first('address')}} </p>

                                    @endif
                                    <div class="col-md-6 form-field-wrapper form-group has-feedback">
                                        <label class="col-md-12 control-label">Ваш адрес</label>
                                        <div class="col-md-12 inputGroupContainer">

                                            <div class="input-group">
                                                <input name="address" placeholder="адрес" class="form-control" type="text" value="{{old('address')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    @if ($errors->has('city'))


                                        <p> {{$errors -> first('city')}} </p>

                                    @endif
                                    <div class="col-md-6 form-field-wrapper form-group has-feedback">
                                        <label class="col-md-12 control-label">Ваш город</label>
                                        <div class="col-md-12 inputGroupContainer">

                                            <div class="input-group">
                                                <input name="city" placeholder="город" class="form-control" type="text" value="{{old('city')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Select Basic -->
                                    @if ($errors->has('state'))


                                        <p>  {{$errors -> first('state')}} </p>

                                    @endif
                                    <div class="col-md-6 form-field-wrapper form-group has-feedback">
                                        <label class="col-md-12 control-label">Страна</label>
                                        <div class="col-md-12 selectContainer">

                                            <div class="input-group">
                                                <select name="state" class="form-control selectpicker">
                                                    <option value=" ">выберите вашу страну</option>
                                                    <option>Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>Arizona</option>
                                                    <option>Arkansas</option>
                                                    <option>California</option>
                                                    <option>Colorado</option>
                                                    <option>Connecticut</option>
                                                    <option>Delaware</option>
                                                    <option>District of Columbia</option>
                                                    <option> Florida</option>
                                                    <option>Georgia</option>
                                                    <option>Hawaii</option>
                                                    <option>daho</option>
                                                    <option>Illinois</option>
                                                    <option>Indiana</option>
                                                    <option>Iowa</option>
                                                    <option>Kansas</option>
                                                    <option>Kentucky</option>
                                                    <option>Louisiana</option>
                                                    <option>Maine</option>
                                                    <option>Maryland</option>
                                                    <option>Mass</option>
                                                    <option>Michigan</option>
                                                    <option>Minnesota</option>
                                                    <option>Mississippi</option>
                                                    <option>Missouri</option>
                                                    <option>Montana</option>
                                                    <option>Nebraska</option>
                                                    <option>Nevada</option>
                                                    <option>New Hampshire</option>
                                                    <option>New Jersey</option>
                                                    <option>New Mexico</option>
                                                    <option>New York</option>
                                                    <option>North Carolina</option>
                                                    <option>North Dakota</option>
                                                    <option>Ohio</option>
                                                    <option>Oklahoma</option>
                                                    <option>Oregon</option>
                                                    <option>Pennsylvania</option>
                                                    <option>Rhode Island</option>
                                                    <option>South Carolina</option>
                                                    <option>South Dakota</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option> Uttah</option>
                                                    <option>Vermont</option>
                                                    <option>Virginia</option>
                                                    <option>Washington</option>
                                                    <option>West Virginia</option>
                                                    <option>Wisconsin</option>
                                                    <option>Wyoming</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    @if ($errors->has('zip'))


                                        <p> {{$errors -> first('zip')}} </p>

                                    @endif
                                    <div class="col-md-6 form-field-wrapper form-group has-feedback">
                                        <label class="col-md-12 control-label">Ваш почтовый код</label>
                                        <div class="col-md-12 inputGroupContainer">

                                            <div class="input-group">
                                                <input name="zip" placeholder="почтовый код" class="form-control"
                                                       type="text" value="{{old('zip')}}">
                                            </div>
                                        </div>
                                    </div>

                                    @if ($errors->has('password'))


                                        <p> {{$errors -> first('password')}} </p>

                                    @endif
                                    <div class="col-md-6 form-field-wrapper form-group has-feedback">
                                        <label class="col-md-12 control-label">Ваш пароль</label>
                                        <div class="col-md-12 inputGroupContainer">

                                            <div class="input-group">
                                                <input name="password" placeholder="пароль" class="form-control"
                                                       type="text" value="{{old('password')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Button -->
                                    <div class="col-md-12 form-field-wrapper form-group has-feedback">
                                        <button type="submit" class="btn btn-warning submit btn btn-md btn-color">Зарегистрироваться</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div><!-- /.container -->
                </div>
            </div>
        </section>
        <!-- End Page Content -->
    </div>
    <!-- End Page Content Wraper -->
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
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a
                                    href="mailto:info@sky.com">info@sky.com</a>
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
<!-- Validator -->
<script type="text/javascript"
        src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
<!-- Plugins All js -->
<script type="text/javascript" src="{{asset('js/auth.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
<!-- custom js -->
<!-- end jquery -->
</body>
</html>