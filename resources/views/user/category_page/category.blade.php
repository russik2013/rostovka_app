@extends('user.markup.markup')
@section('category')
    <div class="categoryPage">
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
                            <form class="product-sort-by col-xl-4 col-md-12 col-sm-12 col-xs-12">
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

                            <div class="pull-right col-xl-4 col-md-12 col-sm-12 col-xs-12">
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
                                        <a href="#!" class="js_tooltip" data-mode="top"
                                           data-tip="Добавить в корзину">
                                            <i class="fa fa-shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#!">Men Fashion</a>
                                    <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a
                                        type
                                        specimen book. It has survived not only five centuries, but also the leap
                                        into
                                        electronic remaining essentially unchanged.
                                    </p>
                                    <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                                    <div class="col-md-12 pull-left">
                                        <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                                        <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item-->
                        </div>
                        <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                            <!--Product Item-->
                            <div class="product-item">
                                <div class="new-label">New</div>
                                <div class="product-item-inner">
                                    <div class="product-img-wrap row row-eq-height">
                                        <a href="#!">
                                            <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="product-button">
                                        <a href="#!" class="js_tooltip" data-mode="top"
                                           data-tip="Добавить в корзину">
                                            <i class="fa fa-shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#!">Men Fashion</a>
                                    <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a
                                        type
                                        specimen book. It has survived not only five centuries, but also the leap
                                        into
                                        electronic remaining essentially unchanged.
                                    </p>
                                    <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                                    <div class="col-md-12 pull-left">
                                        <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                                        <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
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
                                        <a href="#!" class="js_tooltip" data-mode="top"
                                           data-tip="Добавить в корзину">
                                            <i class="fa fa-shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#!">Men Fashion</a>
                                    <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a
                                        type
                                        specimen book. It has survived not only five centuries, but also the leap
                                        into
                                        electronic remaining essentially unchanged.
                                    </p>
                                    <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                                    <div class="col-md-12 pull-left">
                                        <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                                        <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
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
                                        <a href="#!" class="js_tooltip" data-mode="top"
                                           data-tip="Добавить в корзину">
                                            <i class="fa fa-shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#">Men Fashion</a>
                                    <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a
                                        type
                                        specimen book. It has survived not only five centuries, but also the leap
                                        into
                                        electronic remaining essentially unchanged.
                                    </p>
                                    <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                                    <div class="col-md-12 pull-left">
                                        <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                                        <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End Product Item-->
                        </div>
                        <div class="product-item-element col-sm-6 col-md-6 col-lg-4">
                            <!--Product Item-->
                            <div class="product-item">
                                <div class="new-label">New</div>
                                <div class="product-item-inner">
                                    <div class="product-img-wrap row row-eq-height">
                                        <a href="#!">
                                            <img class="img-responsive" src="{{asset('img/product-img/prod2.jpg')}}"
                                                 alt="">
                                        </a>
                                    </div>
                                    <div class="product-button">
                                        <a href="#!" class="js_tooltip" data-mode="top"
                                           data-tip="Добавить в корзину">
                                            <i class="fa fa-shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#!">Men Fashion</a>
                                    <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a
                                        type
                                        specimen book. It has survived not only five centuries, but also the leap
                                        into
                                        electronic remaining essentially unchanged.
                                    </p>
                                    <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                                    <div class="col-md-12 pull-left">
                                        <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                                        <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
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
                                        <a href="#!" class="js_tooltip" data-mode="top"
                                           data-tip="Добавить в корзину">
                                            <i class="fa fa-shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#!">Men Fashion</a>
                                    <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a
                                        type
                                        specimen book. It has survived not only five centuries, but also the leap
                                        into
                                        electronic remaining essentially unchanged.
                                    </p>
                                    <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                                    <div class="col-md-12 pull-left">
                                        <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                                        <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
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
                                        <a href="#!" class="js_tooltip" data-mode="top"
                                           data-tip="Добавить в корзину">
                                            <i class="fa fa-shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#!">Men Fashion</a>
                                    <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a
                                        type
                                        specimen book. It has survived not only five centuries, but also the leap
                                        into
                                        electronic remaining essentially unchanged.
                                    </p>
                                    <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                                    <div class="col-md-12 pull-left">
                                        <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                                        <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
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
                                        <a href="#!" class="js_tooltip" data-mode="top"
                                           data-tip="Добавить в корзину">
                                            <i class="fa fa-shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#!">Men Fashion</a>
                                    <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a
                                        type
                                        specimen book. It has survived not only five centuries, but also the leap
                                        into
                                        electronic remaining essentially unchanged.
                                    </p>
                                    <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                                    <div class="col-md-12 pull-left">
                                        <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                                        <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
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
                                        <a href="#!" class="js_tooltip" data-mode="top"
                                           data-tip="Добавить в корзину">
                                            <i class="fa fa-shopping-bag"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-detail">
                                    <a class="tag" href="#!">Men Fashion</a>
                                    <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                                    <p class="product-description">
                                        When an unknown printer took a galley of type and scrambled it to make a
                                        type
                                        specimen book. It has survived not only five centuries, but also the leap
                                        into
                                        electronic remaining essentially unchanged.
                                    </p>
                                    <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                                    <div class="col-md-12 pull-left">
                                        <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                                        <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
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
                            <a href="#!" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                <i class="fa fa-shopping-bag"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <a class="tag" href="#!">Men Fashion</a>
                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                        <p class="product-description">
                            When an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into
                            electronic remaining essentially unchanged.
                        </p>
                        <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                        <div class="col-md-12 pull-left">
                            <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                            <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
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
                        <p class="product-description">
                            When an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into
                            electronic remaining essentially unchanged.
                        </p>
                        <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                        <div class="col-md-12 pull-left">
                            <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                            <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
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
                            <a href="#!" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                <i class="fa fa-shopping-bag"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <a class="tag" href="#!">Men Fashion</a>
                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                        <p class="product-description">
                            When an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into
                            electronic remaining essentially unchanged.
                        </p>
                        <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                        <div class="col-md-12 pull-left">
                            <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                            <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
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
                            <a href="#!" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                <i class="fa fa-shopping-bag"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <a class="tag" href="#!">Men Fashion</a>
                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                        <p class="product-description">
                            When an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into
                            electronic remaining essentially unchanged.
                        </p>
                        <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                        <div class="col-md-12 pull-left">
                            <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                            <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
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
                            <a href="#!" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                <i class="fa fa-shopping-bag"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <a class="tag" href="#!">Men Fashion</a>
                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                        <p class="product-description">
                            When an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into
                            electronic remaining essentially unchanged.
                        </p>
                        <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                        <div class="col-md-12 pull-left">
                            <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                            <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
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
                            <a href="#!" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                <i class="fa fa-shopping-bag"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <a class="tag" href="#!">Men Fashion</a>
                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                        <p class="product-description">
                            When an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into
                            electronic remaining essentially unchanged.
                        </p>
                        <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                        <div class="col-md-12 pull-left">
                            <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                            <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
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
                            <a href="#!" class="js_tooltip" data-mode="top" data-tip="Добавить в корзину">
                                <i class="fa fa-shopping-bag"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-detail">
                        <a class="tag" href="#!">Men Fashion</a>
                        <p class="product-title"><a href="#!">United Colors of Benetton</a></p>
                        <p class="product-description">
                            When an unknown printer took a galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into
                            electronic remaining essentially unchanged.
                        </p>
                        <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ростовке - <b>8</b> пар</span>
                                                <span class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">В ящике - <b>16</b> пар</span>
                                            </span>
                        <div class="col-md-12 pull-left">
                            <span class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-left">25 - 35</span>
                            <h5 class="item-price col-lg-6 col-md-12 col-sm-12 col-xs-12 pull-right">39 <span>грн</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Carousel -->
    </section>
    </div>
@endsection