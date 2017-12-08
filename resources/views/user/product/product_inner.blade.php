@section('productLibCSS')
    <link href="{{asset('css/photoswipre/photoswipe.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/photoswipre/default-skin.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@extends('user.markup.markup')
@section('product')
    <!-- Page Content -->
    <div class="productPage">
        <section id="productID" class="content-page single-product-content" data-id="{{$product -> id}}">

    <!-- Product -->
    <div id="product-detail" class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 product-content sidebar-position-right">
                <div class="row">
                    <!-- Product Image -->
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div class="product-page-image">
                            <!-- Slick Image Slider -->
                            <div class="product-image-slider product-image-gallery" id="product-image-gallery" data-pswp-uid="3">
                                <div class="item">
                                    <a class="product-gallery-item" href="{{asset('img/product-img/prodimage1.jpeg')}}" data-size="" data-med="{{asset('img/product-img/prodimage1.jpeg')}}" data-med-size="">
                                        <img src="{{asset('img/product-img/prodimage1.jpeg')}}" alt="image 1" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="product-gallery-item" href="{{asset('img/product-img/prodImage2.jpeg')}}" data-size="" data-med="{{asset('img/product-img/prodImage2.jpeg')}}" data-med-size="">
                                        <img src="{{asset('img/product-img/prodImage2.jpeg')}}" alt="image 2" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="product-gallery-item" href="{{asset('img/product-img/prodImage3.jpeg')}}" data-size="" data-med="{{asset('img/product-img/prodImage3.jpeg')}}" data-med-size="">
                                        <img src="{{asset('img/product-img/prodImage3.jpeg')}}" alt="image 3" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="product-gallery-item" href="{{asset('img/product-img/prodImage4.jpeg')}}" data-size="" data-med="{{asset('img/product-img/prodImage4.jpeg')}}" data-med-size="">
                                        <img src="{{asset('img/product-img/prodImage4.jpeg')}}" alt="image 4" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="product-gallery-item" href="{{asset('img/product-img/prodImage5.jpg')}}" data-size="" data-med="{{asset('img/product-img/prodImage5.jpg')}}" data-med-size="">
                                        <img src="{{asset('img/product-img/prodImage5.jpg')}}" alt="image 5" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a class="product-gallery-item" href="{{asset('img/product-img/prodimage6.jpg')}}" data-size="" data-med="{{asset('img/product-img/prodimage6.jpg')}}" data-med-size="">
                                        <img src="{{asset('img/product-img/prodimage6.jpg')}}" alt="image 6" />
                                    </a>
                                </div>
                            </div>
                            <!-- End Slick Image Slider -->

                            <a href="javascript:void(0)" id="zoom-images-button" class="zoom-images-button"><i class="fa fa-expand" aria-hidden="true"></i></a>


                        </div>

                        <!-- Slick Thumb Slider -->
                        <div class="product-image-slider-thumbnails">
                            <div class="item">
                                <img src="{{asset('img/product-img/prodimage1.jpeg')}}" alt="image 1" />
                            </div>
                            <div class="item">
                                <img src="{{asset('img/product-img/prodImage2.jpeg')}}" alt="image 1" />
                            </div>
                            <div class="item">
                                <img src="{{asset('img/product-img/prodImage3.jpeg')}}" alt="image 1" />
                            </div>
                            <div class="item">
                                <img src="{{asset('img/product-img/prodImage4.jpeg')}}" alt="image 1" />
                            </div>
                            <div class="item">
                                <img src="{{asset('img/product-img/prodImage5.jpg')}}" alt="image 1" />
                            </div>
                            <div class="item">
                                <img src="{{asset('img/product-img/prodimage6.jpg')}}" alt="image 1" />
                            </div>
                        </div>
                        <!-- End Slick Thumb Slider -->
                    </div>
                    <!-- End Product Image -->

                    <!-- Product Content -->
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-30">
                        <div class="product-page-content">
                            <h2 class="product-title">{{$product -> name}}</h2>
                            <div class="product-meta">
                                <span>Производитель : <span class="sku" itemprop="sku">{{$product -> manufacturer -> name}}</span></span>
                                <span>Категория : <span class="category" itemprop="category"> <a href="#!">{{$product -> category -> name}}</a></span></span>
                                <span>Пар в ростовке: <span class="sku" itemprop="sku">{{$product -> rostovka_count}}</span></span>
                                <span>Пар в ящике : <span class="category" itemprop="category">{{$product -> box_count}}</span></span>
                                <span>Тип : <span class="category" itemprop="category">{{$product -> type -> name}}</span></span>
                                <span>Сезон : <span class="category" itemprop="category">{{$product -> season -> name}}</span></span>
                                <span>Размеры : <span class="category" itemprop="category">{{$product -> size -> name}}</span></span>
                            </div>
                        </div>

                        <div class="product-share">
                            <span>Покажите товар друзьям :</span>
                            <ul>
                                <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://adadadaadad" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://twitter.com/share?url=http://adadadaadad" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://plus.google.com/share?url=http://adadadaadad" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="mailto:?subject=Check this http://adadadaadad" target="_blank"><i class="fa fa-envelope"></i></a></li>
                                <li><a href="http://pinterest.com/pin/create/button/?url=http://adadadaadad" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                        <div class="single-variation-wrap">
                            <div class="product-price">
                                <span class="price">{{$product -> prise}} грн</span>
                            </div>

                            <div class="col-md-12 chooseItem">
                                <div class="radio lft choosed">
                                    <label>
                                        <input type="radio" name="optradio" style="width:25px; height:40px;" checked>Ящик
                                        <span>{{$product -> prise * $product -> box_count}} <sup>грн</sup> <span class="forBag">за 1 ящик</span></span>
                                    </label>

                                </div>
                                <div class="radio rth">
                                    <label>
                                        <input type="radio" name="optradio" style="width:25px; height:40px;">
                                        Ростовка
                                        <span>{{$product -> prise * $product -> rostovka_count}} <sup>грн</sup> <span class="forBag">за 1 ростовку</span></span>
                                    </label>
                                </div>

                                <div class="buttonPrice">
                                    <div class="product-quantity">
                                        <span data-value="+" class="quantity-btn quantityPlus"></span>
                                        <input class="quantity input-lg" step="1" min="1" name="quantity" value="1" title="Quantity" type="number" />
                                        <span data-value="-" class="quantity-btn quantityMinus"></span>
                                    </div>
                                    <button class="btn btn-lg btn-black buyProduct_inner btn-success" onclick="success('Товар добавлен в корзину')"><i class="fa fa-shopping-bag" aria-hidden="true"></i>Купить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 product-sidebar">
                <div class="sidebar-widget-outline product-list widget-product">
                    <h6 class="widget-title">Популярные товары</h6>

                    <ul class="widget-content">

                        <!--Item-->
                        <li>
                            <a class="product-img" href="#">
                                <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                            </a>
                            <div class="product-content">
                                <a class="product-link" href="#">Alpha Block Black Polo Sleem T-Shirt</a>
                                <span class="product-amount">Цена - 399 грн</span>
                            </div>
                        </li>

                        <!--Item-->
                        <li>
                            <a class="product-img" href="#">
                                <img src="{{asset('img/product-img/prod2.jpg')}}" alt="">
                            </a>
                            <div class="product-content">
                                <a class="product-link" href="#">Red Printed Round Neck T-Shirt</a>
                                <span class="product-amount">Цена - 399 грн</span>
                            </div>
                        </li>

                        <!--Item-->
                        <li>
                            <a class="product-img" href="#">
                                <img src="{{asset('img/product-img/prod3.jpg')}}" alt="">
                            </a>
                            <div class="product-content">
                                <a class="product-link" href="#">Maroon Solid Henley T-Shirts</a>
                                <span class="product-amount">Цена - 399 грн</span>
                            </div>
                        </li>

                    </ul>
                </div>
                <div class="sidebar-widget-outline product-banner-icon-text promo-box">
                    <div class="promo-item">
                        <div class="icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <div class="info">
                            <a href="#">
                                <h6 class="normal">Бесплатная доставка</h6>
                            </a>
                            <p>При заказе от 150 грн</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Product -->

    <!-- Product Content Tab -->
    <div class="product-tabs-wrapper container">
        <ul class="product-content-tabs nav nav-tabs" role="tablist">

            <li class="nav-item">
                <a class="active" href="#tab_description" role="tab" data-toggle="tab">Описание</a>
            </li>
        </ul>
        <div class="product-content-Tabs_wraper tab-content container">
            <div id="tab_description" role="tabpanel" class="tab-pane fade in active">
                <!-- Accordian Title -->
                <h6 class="product-collapse-title" data-toggle="collapse" data-target="#tab_description-coll">Description</h6>
                <!-- End Accordian Title -->
                <!-- Accordian Content -->
                <div id="tab_description-coll" class="shop_description product-collapse collapse container">
                    <div class="row">
                        <div class=" col-md-6">
                            <p>
                                Etiam molestie sit amet arcu vel dictum. Integer mattis est nec porta porttitor. Maecenas condimentum sapien eget urna condimentum, non sagittis ante dapibus. Donec congue libero ut ex malesuada auctor. Vivamus at urna et erat aliquam pharetra. Nulla facilisi. Morbi feugiat tortor finibus elit aliquet tempor.
                                Generated 5 paragraphs, 453 words, 3065 bytes of Lorem Ipsum
                            </p>
                            <h4>Vivamus at urna</h4>
                            <ul>
                                <li>Etiam molestie sit amet arcu vel dictum</li>
                                <li>Integer mattis est nec porta porttitor</li>
                                <li>Maecenas condimentum sapien eget urna condimentum</li>
                                <li>Donec congue libero ut ex malesuada auctor</li>
                                <li>Generated 5 paragraphs, 453 words</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p>
                                Etiam molestie sit amet arcu vel dictum. Integer mattis est nec porta porttitor. Maecenas condimentum sapien eget urna condimentum, non sagittis ante dapibus. Donec congue libero ut ex malesuada auctor. Vivamus at urna et erat aliquam pharetra. Nulla facilisi. Morbi feugiat tortor finibus elit aliquet tempor.
                                Generated 5 paragraphs, 453 words, 3065 bytes of Lorem Ipsum
                            </p>
                            <h4>hadding four</h4>
                            <h5>hadding five</h5>
                            <h6>hadding six</h6>
                        </div>
                    </div>
                </div>
                <!-- End Accordian Content -->
            </div>
        </div>
    </div>
    <!-- End Product Content Tab -->

    <!-- Product Carousel -->
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
                                    <a href="#!">
                                        <img src="{{asset('img/product-img/prod2.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="product-show">
                                    <a href="#!" class="js_tooltip" data-mode="top" data-tip="Посмотреть товар">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- item.2 -->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <a href="#!">
                                        <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="product-show">
                                    <a href="#!" class="js_tooltip" data-mode="top" data-tip="Посмотреть товар">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- item.3 -->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <a href="#!">
                                        <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="product-show">
                                    <a href="#!" class="js_tooltip" data-mode="top" data-tip="Посмотреть товар">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- item.4 -->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <a href="#!">
                                        <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="product-show">
                                    <a href="#!" class="js_tooltip" data-mode="top" data-tip="Посмотреть товар">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- item.5 -->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <a href="#!">
                                        <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="product-show">
                                    <a href="#!" class="js_tooltip" data-mode="top" data-tip="Посмотреть товар">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- item.6 -->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <a href="#!">
                                        <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="product-show">
                                    <a href="#!" class="js_tooltip" data-mode="top" data-tip="Посмотреть товар">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- item.7 -->
                        <div class="product-item">
                            <div class="product-item-inner">
                                <div class="product-img-wrap">
                                    <a href="#!">
                                        <img src="{{asset('img/product-img/prod1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="product-show">
                                    <a href="#!" class="js_tooltip" data-mode="top" data-tip="Посмотреть товар">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-detail">
                                <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                <div class="col-md-12 pull-left">
                                    <span class="item-price col-md-6 pull-left">25 - 35</span>
                                    <h5 class="item-price col-md-6 pull-right">39 <span>грн</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    <!-- End Product Carousel -->

</section>
    </div>
<!-- End Page Content -->
@endsection

@section('productLib')
    <script type="text/javascript" src="{{asset('js/photoswipe.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/photoswipe-ui-default.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/photoswipe-core.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/product.js')}}"></script>
@endsection