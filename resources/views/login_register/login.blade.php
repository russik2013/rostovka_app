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
<body class="logReg_page">

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
                <h4 class="cart-total-hedding normal"><span>Total :</span><span class="cart-total-price">$698.00</span></h4>
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
                <img src="img/search-icon-lg.png" alt="" />
            </div>
            <label class="h6 normal search-input-label" for="search-query">Enter keywords to Search Product</label>
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit">
                <img src="img/search-lg-go-icon.png" alt="" />
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
                    <div class="phone"><i class="fa fa-phone left" aria-hidden="true"></i>Customer Support : <b>+77 7565 348 576</b></div>
                </div>
                <!--End Topbar Left-->

                <!--Topbar Right-->
                <div class="topbar-right">
                    <ul class="list-none">
                        <li>
                            <a href="login-register.html"><i class="fa fa-lock left" aria-hidden="true"></i><span class="hidden-sm-down">Login</span></a>
                        </li>
                        <li class="dropdown-nav">
                            <a href="login-register.html"><i class="fa fa-user left" aria-hidden="true"></i><span class="hidden-sm-down">My Account</span><i class="fa fa-angle-down right" aria-hidden="true"></i></a>
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
                                    <li><a href="login-register.html"><i class="fa fa-lock left" aria-hidden="true"></i>Login</a></li>
                                    <li><a href="login-register.html"><i class="fa fa-user left" aria-hidden="true"></i>Create an Account</a></li>
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
                            <a href="#">Home</a>
                            <span>Авторизация / Регистрация</span>
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
                    <div class="col-md-6">
                        <div class="form-border-box">
                            <form action="{{url('/login')}}" method="post" id="contact_form">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="_method" value="POST">
                                <h2 class="normal"><span>Авторизация</span></h2>
                                <p>Lorem ipsum dolor amet, conse adipiscing, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="form-field-wrapper">
                                    <div class="form-group has-error">
                                        @if ($errors->has('login_error'))
                                            @foreach($errors->all() as $error)
                                                <div class="alert alert-danger"> {{ $error }}</div>
                                            @endforeach
                                        @endif
                                    </div>
                                    <label>Введите Email <span class="required">*</span></label>
                                    <input id="author-email" class="input-md form-full-width" name="author" placeholder="email" value="" size="30" aria-required="true" required="" type="email">
                                </div>
                                <div class="form-field-wrapper">
                                    <label>Введите пароль <span class="required">*</span></label>
                                    <input id="author-pass" class="input-md form-full-width" name="author-pass" placeholder="пароль" value="" size="30" aria-required="true" required="" type="password">
                                </div>
                                <div class="form-field-wrapper">
                                    <input name="submit" id="submit" class="submit btn btn-md btn-black" value="Авторизация" type="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-border-box">
                            <form>
                                <h2 class="normal"><span>Регистрация</span></h2>
                                <p>Lorem ipsum dolor amet, conse adipiscing, eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <div class="form-field-wrapper">
                                    <a href="register" class="submit btn btn-md btn-color">Создать аккаунт</a>
                                </div>
                            </form>
                        </div>
                    </div>
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