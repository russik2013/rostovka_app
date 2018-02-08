@extends('user.markup.markup')
@section('category')
    <meta name="category_id" content="{{$category -> id}}">
    <div class="categoryPage" dataID="{{$category -> id}}">
        <section class="content-page">
            <div class="container">
                <div class="row">
                    <div @if($category -> id == 5) class="col-md-12 product--block" style="min-height: 600px;" @else class="col-md-10 push-md-2 product--block" @endif >
                        <!-- Title -->
                        <div class="list-page-title">
                            <h2 class="">{{$category -> name}}</h2>
                            <div class="filter--mobileButton"><i class="fa fa-filter" aria-hidden="true"></i>Фильтры</div>
                        </div>
                        <!-- End Title -->

                        <!-- Product Filter -->
                        <div class="product-filter-content">
                            <div class="product-filter-content-inner">

                                <!--Product Sort By-->
                                <form class="product-sort-by col-xl-5 col-md-12 col-sm-12 col-xs-12">
                                    <label for="short-by">Сортировка</label>
                                    <select name="short-by" id="short-by" class="nice-select-box">
                                        <option value="0" selected="selected">Последние поступления</option>
                                        <option value="1">от дешевого к дорогому</option>
                                        <option value="2">от дорогого к дешевому</option>
                                        {{--<option value="sort_by_newness">по дате</option>--}}
                                    </select>
                                </form>
                                <form class="product-sort-by pull-right col-xl-5 col-md-12 col-sm-12 col-xs-12">
                                    <label for="product-show">на странице по: </label>
                                    <select name="product-show" id="product-show" class="nice-select-box" data-set="selectCount">
                                        <option value="24" selected="selected">24</option>
                                        <option value="36">36</option>
                                        <option value="48">48</option>
                                    </select>
                                    <span>товаров</span>
                                </form>
                            </div>
                        </div>
                        <!-- End Product Filter -->

                        <div class="row product-list-item product-list-view">
                            <ul id="target" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left productLine"></ul>
                        </div>

                        <div class="pagination-wraper">
                            <div id="pagination" onselectstart="return false" onmousedown="return false"></div>
                        </div>
                    </div>

                    <div class="sidebar-container col-md-2 pull-md-10 category--Filters">
                        <div class="close-icon"><i class="fa fa-times-circle" aria-hidden="true"></i></div>
                        <div class="CFBlock">
                            <h6 class="widget-title" data-id="tip">Выбранные фильтры</h6>
                            <ul class="choosedFilter">

                            </ul>

                            <div class="removeallFilters">
                                <span>Сбросить <i class="fa fa-refresh" aria-hidden="true"></i></span>
                            </div>
                        </div>

                        @if($category -> id != 5)
                            @include('user.category_page.filters')

                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>


<script id="template" type="x-jquery-tmpl">
<li class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pull-left product-item" data-id=${real_id}>
<div class="prod--innerSide">
<div class="product-item-inner">
<div class="product-img-wrap">
<a href="${product_url}">
<img class="img-responsive" src="${imgUrl}"alt="">
</a>
</div>
</div>
<div class="product-detail">
<p class="product-title"><a href="${product_url}">${name}</a></p>
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
</script>
@endsection

@section('category__Lib')
    <script type="text/javascript" src="{{asset('js/categoryData.js')}}"></script>
@endsection