@section('productLibCSS')
    <link href="{{asset('css/photoswipre/photoswipe.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/photoswipre/default-skin.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@extends('user.markup.markup')
@section('product')
    <!-- Page Content -->
    <div class="productPage">
        <section id="productID" class="content-page single-product-content" data-prodid="{{$product -> id}}">

            <!-- Product -->
            <div id="product-detail" class="container one--product">
                <div class="row">
                    <div class="col-lg-12 col-md-12 product-content sidebar-position-right">
                        <div class="row">
                            <!-- Product Image -->
                            <div class="col-md-5">
                                <div class="product-page-image">
                                    <!-- Slick Image Slider -->
                                    <div class="product-image-slider product-image-gallery" id="product-image-gallery"
                                         data-pswp-uid="3">
                                        <div class="item">
                                            <a class="product-gallery-item"
                                               href="{{asset('images/products/'.$product -> photo -> photo_url)}}" data-size=""
                                               data-med="{{asset('images/products/'.$product -> photo -> photo_url)}}" data-med-size="">
                                                <img src="{{asset('images/products/'.$product -> photo -> photo_url)}}" alt="image 1"/>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Slick Image Slider -->

                                    <a href="javascript:void(0)" id="zoom-images-button" class="zoom-images-button"><i
                                                class="" aria-hidden="true"></i></a>

                                </div>
                                <!-- End Slick Thumb Slider -->
                            </div>
                            <!-- End Product Image -->

                            <!-- Product Content -->
                            <div class="col-md-5">
                                <div class="product-page-content">
                                    <h2 class="product-title">{{$product -> name}}</h2>
                                    <div class="product-meta">
                                        <span>Производитель : <span class="sku"
                                                                    itemprop="sku">{{$product -> manufacturer -> name}}</span></span>
                                        <span>Категория : <span class="category" itemprop="category"> <a
                                                        href="#!">{{$product -> category -> name}}</a></span></span>
                                        <span>Пар в ростовке: <span class="sku"
                                                                    itemprop="sku">{{$product -> rostovka_count}}</span></span>
                                        <span>Пар в ящике : <span class="category"
                                                                  itemprop="category">{{$product -> box_count}}</span></span>
                                        <span>Тип : <span class="category"
                                                          itemprop="category">{{$product -> type -> name}}</span></span>
                                        <span>Сезон : <span class="category"
                                                            itemprop="category">{{$product -> season -> name}}</span></span>
                                        <span>Размеры : <span class="category"
                                                              itemprop="category">{{$product -> size -> name}}</span></span>



                                        @if($product ->material)
                                            <span>Материал верх : <span class="category"
                                                                        itemprop="category">{{$product -> material}}</span></span>
                                        @endif

                                        @if($product ->material_inside)
                                            <span>Материал внутри : <span class="category"
                                                                          itemprop="category">{{$product -> material_inside}}</span></span>

                                        @endif

                                        @if($product -> material_insoles)
                                            <span>Материал стельки : <span class="category"
                                                                           itemprop="category">{{$product -> material_insoles}}</span></span>

                                        @endif
                                        @if($product ->repeats)
                                            <span>Повторы : <span class="category"
                                                                  itemprop="category">{{$product -> repeats}}</span></span>

                                        @endif
                                        @if($product ->color)
                                            <span>Цвет : <span class="category"
                                                               itemprop="category">{{$product -> color}}</span></span>

                                        @endif





                                    </div>
                                </div>

                                {{--<div class="product-share">--}}
                                    {{--<span>Покажите товар друзьям :</span>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="https://www.facebook.com/sharer/sharer.php?u=http://adadadaadad"--}}
                                               {{--target="_blank"><i class="fa fa-facebook"></i></a></li>--}}
                                        {{--<li><a href="http://twitter.com/share?url=http://adadadaadad" target="_blank"><i--}}
                                                        {{--class="fa fa-twitter"></i></a></li>--}}
                                        {{--<li><a href="http://plus.google.com/share?url=http://adadadaadad"--}}
                                               {{--target="_blank"><i class="fa fa-google-plus"></i></a></li>--}}
                                        {{--<li><a href="mailto:?subject=Check this http://adadadaadad" target="_blank"><i--}}
                                                        {{--class="fa fa-envelope"></i></a></li>--}}
                                        {{--<li><a href="http://pinterest.com/pin/create/button/?url=http://adadadaadad"--}}
                                               {{--target="_blank"><i class="fa fa-pinterest"></i></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                                <div class="single-variation-wrap">
                                    <div class="product-price">
                                        <span class="price">{{$product -> prise}} грн</span>
                                    </div>

                                    <div class="col-md-12 chooseItem">
                                        <div class="radio lft choosed" data-set="boxset">
                                            <label>
                                                <input type="radio" name="optradio" style="width:25px; height:40px;"
                                                       checked onclick="getSelect(event)" data-id="box">в ящике
                                                <span class="boxPrice"><span
                                                            class="iPrice">{{$product -> prise * $product -> box_count}}</span> <sup>грн</sup> <span
                                                            class="forBag">за 1 ящик</span></span>
                                            </label>
                                        </div>


                                        <div class="radio rth disable" data-set="rotovkaset">
                                            <label>
                                                <input type="radio" name="optradio" style="width:25px; height:40px;"
                                                       onclick="getSelect(event)">
                                                минимум
                                                <span><span class="iPrice">{{$product -> prise * $product -> rostovka_count}}</span> <sup>грн</sup> <span
                                                            class="forBag">за 1 ростовку</span></span>
                                            </label>
                                        </div>

                                        <div class="buttonPrice">
                                            <div class="product-quantity">
                                                <span data-value="+" class="quantity-btn quantityPlus"></span>
                                                <input class="quantity input-lg" step="1" min="1" name="quantity"
                                                       value="1" title="Quantity" type="number" disabled/>
                                                <span data-value="-" class="quantity-btn quantityMinus"></span>
                                            </div>
                                            <button class="btn btn-lg btn-black buyProduct_inner btn-success"
                                                    data-set="buyButton" onclick="success('Товар добавлен в корзину')">
                                                <i class="fa fa-shopping-bag" aria-hidden="true"></i>Купить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Product -->

            <!-- Product Content Tab -->
            <div class="product-tabs-wrapper container">
                <h4>Популярные товары</h4>
                <div class="best--seller" id="newest"></div>
            </div>
            <!-- End Product Content Tab -->

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