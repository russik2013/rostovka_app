<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="root-site" content="{!!route('root')!!}">

    <title>Rostovka</title>
    <meta name="description" content=""/>
    <meta name="keywords" content="">
    <meta name="author" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">
    <link rel="icon" type="img/png" href="{{asset('img/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('img/favicon.ico')}}">

    <!-- CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/def.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/settings-ver.5.3.1.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/main.css')}}" rel="stylesheet" type="text/css"/>
    @yield('productLibCSS')
</head>
<body class="">

<!-- Overlay -->
<div id="nlpopup_overlay"></div>
<!-- End Newsletter Popup ------------------------------------------------>

<!--Overlay-->
<div class="sidebar_overlay"></div>
<!-- End Sidebar Menu (Cart Menu) -------------------------------------------->

<!-- End Search Overlay Menu ------------------------------------------------>

<!--==========================================-->
<!-- wrapper -->
<!--==========================================-->
<div class="wraper mainPage--Container">
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
                            <a href="login"><i class="fa fa-lock left" aria-hidden="true"></i><span
                                        class="hidden-sm-down">Авторизация</span></a>
                        </li>
                        <li class="dropdown-nav">
                            <a href="#!"><i class="fa fa-user left" aria-hidden="true"></i>
                                <span class="hidden-sm-down">Кабинет</span>
                                <i class="fa fa-angle-down right" aria-hidden="true"></i>
                            </a>
                            <!--Dropdown-->
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="userinfo">Моя информация</a></li>
                                    <li><a href="{{url('/cart')}}">Корзина</a></li>
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
                    <a href="{{url('/')}}">
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
                            <li>
                                <form class="navbar-form" role="search">
                                    <div class="input-group search--box">
                                        <input type="text" class="form-control" placeholder="Поиск" name="q">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </li>

                            <!-- Cart-->
                            <li class="cartBl">
                                <a href="cart">
                                    <div class="cart-icon">
                                        <i aria-hidden="true" class="fa fa-shopping-bag"></i>
                                    </div>

                                    <div class="cart-title">
                                        <span class="cart-count" data-set="cartCount"></span>
                                        /
                                        <span class="cart-price closedSidebar strong" data-set="cart-summ"></span>
                                        <span class="currency-sign">грн</span>
                                    </div>
                                </a>

                                <span class="dropdownCart">
                                    <div class="arrow-up"></div>

                                    <ul id="cartTemplate" data-set="cart-items"></ul>

                                    <span class="cartQuantity">
                                        <span class="summ">Сумма:</span>
                                        <span class="price" data-set="cart-inner-summ">0 <span class="Total--priceCde">грн</span></span>
                                    </span>

                                    <span class="cartButton">
                                        <a href="{{route('cart')}}" class="button">Корзина</a>
                                        <a href="checkout" class="button checkour_cart">Купить</a>
                                    </span>
                                </span>

                            </li>
                        </ul>
                    </div>
                    <!-- End Sidebar Icon -->
                </div>
                <!-- End Right Sidebar Nav -->


                <!-- Navigation Menu -->
                <nav class="navigation-menu">
                    @include('user.markup.header')
                </nav>
                <!-- End Navigation Menu -->

            </div>
        </div>
        <!-- End Header Container -->
    </header>
    <!-- End Header -->

    <!-- Page Content Wraper -->
    <!-- Page Content -->
    @yield('register')
    @yield('login')
    @yield('category')
    @yield('mainPage')
    @yield('billing')
    @yield('product')
    <!-- End Page Content -->
    <!-- End Page Content Wraper -->


    <!-- Footer Section -------------->
    <footer class="footer section-padding">
        <!-- Footer Info -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 mb-sm-45">
                    <div class="footer-block about-us-block">
                        <img src="{{url('img/logo_white.png')}}" width="400" alt="">
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
                <p class="copyright">&copy; Developed & Designed by <a href="http://comnd-x.com/" target="_blank">Commnd+X Studio</a></p>
            </div>
        </div>
        <!-- End Footer Copyright -->
    </footer>
    <!-- End Footer Section -------------->
</div>

<script id="Cart_template" src="{{asset('cartTmpl/cart.html')}}" type="text/x-jquery-tmpl"></script>
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
<script type="text/javascript" src="{{asset('js/bootstrapvalidator.min.js')}}"></script>
<!-- bootstrap js -->

<script type="text/javascript" src="{{asset('js/owl.carousel.js')}}"></script>
<!-- OWL carousel js -->
<!-- Slick Slider js -->
<script type="text/javascript" src="{{asset('js/slick.js')}}"></script>
<!-- Validator -->
@yield('productLib')
<!-- Plugins All js -->
<script type="text/javascript" src="{{asset('js/plugins-all.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.tmpl.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
@yield('mainPage_Lib')
@yield('cartLib')
@yield('auth_reg')
@yield('category__Lib')
@yield('auth_lib')
<script type="text/javascript" src="{{asset('js/cart.js')}}"></script>
<script type="text/javascript" src="{{asset('js/close_tab.js')}}"></script>
<!-- custom js -->
<!-- end jquery -->

</body>
</html>