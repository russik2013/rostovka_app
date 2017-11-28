@extends('user.markup.markup')
@section('category')
    <div class="categoryPage">
        <section class="content-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 push-md-2">
                        <!-- Title -->
                        <div class="list-page-title">
                            <h2 class="">Детское</h2>
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
                                        <input id="winter" type="checkbox" name="type31" value="Зима">
                                        <label for="winter">
                                            Зима
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="summer" type="checkbox" value="Лето">
                                        <label for="summer">
                                            Лето
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="autumn-spring" type="checkbox" value="Осень-весна">
                                        <label for="autumn-spring">
                                            Осень-весна
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="widget-sidebar widget-filter-size">
                                <h6 class="widget-title" data-id="dimensions">Размеры</h6>
                                <div class="filterInner">

                                </div>
                            </div>

                            <div class="widget-sidebar widget-filter-size">
                                <h6 class="widget-title" data-id="manufacturers">Производители</h6>
                                <div class="filterInner">
                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man1" type="checkbox" value="4Shoes">
                                        <label for="man1">
                                            4Shoes
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man2" type="checkbox" value="Active">
                                        <label for="man2">
                                            Active
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man3" type="checkbox" value="Ai Mei Dui">
                                        <label for="man3">
                                            Ai Mei Dui
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man4" type="checkbox" value="AilAifa">
                                        <label for="man4">
                                            AilAifa
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man5" type="checkbox" value="Alaska">
                                        <label for="man5">
                                            Alaska
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man6" type="checkbox" value="Alemykids">
                                        <label for="man6">
                                            Alemykids
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man7" type="checkbox" value="Alex">
                                        <label for="man7">
                                            Alex
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man8" type="checkbox" value="All Star">
                                        <label for="man8">
                                            All Star
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man9" type="checkbox" value="Apawwa">
                                        <label for="man9">
                                            Apawwa
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man10" type="checkbox" value="BAAS">
                                        <label for="man10">
                                            BAAS
                                        </label>
                                    </div>

                                    <div class="checkbox checkbox-warning checkbox-circle">
                                        <input id="man11" type="checkbox" value="BBTE">
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
        </section>
    </div>


<script id="template" type="x-jquery-tmpl">
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-xs-12 pull-left product-item" data-id=${dataID}>
<div class="product-item-inner">
<div class="product-img-wrap">
<a href="#!">
<img class="img-responsive" src="${imgUrl}"alt="">
</a>
</div>
</div>
<div class="product-detail">
<p class="product-title"><a href="#!">${name}</a></p>
<span class="col-md-12 pull-left goods_amount">
<span class="col-md-12 pull-left">Ящик - <b>${box}</b> пар</span>
<span class="col-md-12 pull-left">Минимум - <b>${rostovka}</b> пар</span>
</span>
<div class="col-md-12 pull-left goodsCount_price">
<span class="item-price col-md-6 pull-left">${type}</span>
<h5 class="item-price col-md-6 pull-right">${price} <span>грн</span></h5>
</div>
<div class="product-button">
<a href="#!" onclick="success('Товар добавлен в корзину')">
Купить
</a>
</div>
</div>
</div>
</script>
@endsection

@section('category__Lib')
    <script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.templates/beta1/jquery.tmpl.min.js"></script>
    <script type="text/javascript" src="{{asset('js/productsData.js')}}"></script>
@endsection