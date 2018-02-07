@extends('user.markup.markup')
@section('search_result')
    <div class="categoryPage" dataID="">
        <section class="content-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 push-md-2 product--block">
                        <div class="row product-list-item product-list-view">
                            <ul class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left productLine">
                                <li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pull-left product-item" data-id=${real_id}>
                                    <div class="prod--innerSide">
                                        <div class="product-item-inner">
                                            <div class="product-img-wrap">
                                                <a href="#!">
                                                    <img class="img-responsive" src="./" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="product-detail">
                                            <p class="product-title"><a href="#!">${name}</a></p>

                                            <span class="col-md-12 pull-left goods_amount">
                                                <span class="col-md-12 pull-left"><b>${box}</b> - в ящике</span>
                                                <span class="col-md-12 pull-left" data-set="minimum"><b>${rostovka}</b> - минимум</span>
                                            </span>

                                            <div class="col-md-12 pull-left goodsCount_price">
                                                <span class="item-price col-md-6 pull-left">${size}</span>
                                                <h5 class="item-price col-md-6 pull-right">${price} <span>грн</span></h5>
                                            </div>

                                            <div class="product-button">
                                                <a href="#!" onclick="success('Товар добавлен в корзину')" data-set="buyButton">
                                                    Купить
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="pagination-wraper">
                            <div id="pagination" onselectstart="return false" onmousedown="return false"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection