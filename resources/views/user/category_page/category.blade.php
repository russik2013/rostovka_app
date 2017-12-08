@extends('user.markup.markup')
@section('category')
    <meta name="category_id" content="{{$category -> id}}">
    <div class="categoryPage">
        <section class="content-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 push-md-2">
                        <!-- Title -->
                        <div class="list-page-title">
                            <h2 class="">{{$category -> name}}</h2>
                        </div>
                        <!-- End Title -->

                        <!-- Product Filter -->
                        <div class="product-filter-content">
                            <div class="product-filter-content-inner">

                                <!--Product Sort By-->
                                <form class="product-sort-by col-xl-5 col-md-12 col-sm-12 col-xs-12">
                                    <label for="short-by">Сортировка</label>
                                    <select name="short-by" id="short-by" class="nice-select-box">
                                        <option value="default_sorting" selected="selected">Последние поступления
                                        </option>
                                        <option value="price_low_to_high">от дешевого к дорогому</option>
                                        <option value="price_high_to_low">от дорогого к дешевому</option>
                                        <option value="sort_by_newness">по дате</option>
                                    </select>
                                </form>
                                <form class="product-sort-by pull-right col-xl-5 col-md-12 col-sm-12 col-xs-12">
                                    <label for="product-show">на странице по: </label>
                                    <select name="product-show" id="product-show" class="nice-select-box">
                                        <option value="15" selected="selected">9</option>
                                        <option value="18">18</option>
                                        <option value="21">27</option>
                                        <option value="24">36</option>
                                    </select>
                                    <span>товаров</span>
                                </form>
                            </div>
                        </div>
                        <!-- End Product Filter -->

                        <div class="row product-list-item product-list-view">
                            <div id="target" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left productLine">

                            </div>
                        </div>
                        <div class="pagination-wraper">
                            <div class="pagination">
                                <ul class="pagination-numbers">
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
                                        <a href="#" class="next page-number">
                                            <i class="fa fa-angle-double-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-container col-md-2 pull-md-10">
                        <div class="CFBlock">
                            <h6 class="widget-title" data-id="tip">Выбранные фильтры</h6>
                            <ul class="choosedFilter">

                            </ul>

                            <div class="removeallFilters">
                                <span>Сбросить фильтры <i class="fa fa-refresh" aria-hidden="true"></i></span>
                            </div>
                        </div>

                    @include('user.category_page.filters')

                    </div>
                </div>
            </div>
        </section>
    </div>


<script id="template" type="x-jquery-tmpl">
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pull-left product-item" data-id=${dataID}>
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
<span class="col-md-12 pull-left">Ящик - <b>${box}</b> пар</span>
<span class="col-md-12 pull-left">Минимум - <b>${rostovka}</b> пар</span>
</span>
<div class="col-md-12 pull-left goodsCount_price">
<span class="item-price col-md-6 pull-left">${type}</span>
<h5 class="item-price col-md-6 pull-right">${price} <span>грн</span></h5>
</div>

<div class="product-button">
<a href="#!" onclick="success('Товар добавлен в корзину')" data-set="buyButton">
Купить
</a>
</div>
</div>
</div>
</script>
@endsection

@section('category__Lib')
    <script type="text/javascript" src="{{asset('js/productsData.js')}}"></script>
@endsection