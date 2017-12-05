@extends('user.markup.markup')
@section('billing')
    <!-- Page Content -->
<section class="content-page cart-container">
    <div class="container mb-80">
        <div class="row">
            <div class="col-sm-12">
                <article class="post-8">
                    <form class="cart-form" action="#" method="post">
                        <div class="cart-product-table-wrap responsive-table">
                            <table>
                                <thead>
                                <tr>
                                    <th>Товар</th>
                                    <th>Количество</th>
                                    <th>Тип</th>
                                    <th>Цена (рост./ящ.)</th>
                                    <th>Итого</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody id="cartTableInner" data-set="tableCart"></tbody>
                            </table>
                        </div>

                        <div class="col-md-7 col-md-push-7 pull-right tableFooter">
                            <span class="col-md-12 pull-left totalcoseTitle">Итоговая стоимость: </span>
                            <span class="col-md-12 pull-left" data-set="totalCost"></span>

                            <div class="row cart-actions col-md-12 pull-right">
                                <div class="col-md-12">
                                    <a class="col-md-5 pull-right btn btn-lg btn-color" href="{{url('checkout')}}">Оформить заказ</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </div>

</section>
@endsection

@section('cartLib')
    <script type="text/javascript" src="{{asset('js/cartpage.js')}}"></script>
@endsection