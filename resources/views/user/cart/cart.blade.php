@extends('user.markup.markup')
@section('billing')
    <!-- Page Content -->
<section class="content-page">
    <div class="container mb-80">
        <div class="row">
            <div class="col-sm-12">
                <article class="post-8">
                    <form class="cart-form" action="#" method="post">
                        <div class="cart-product-table-wrap responsive-table">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-remove"></th>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name">Продукт</th>
                                    <th class="product-price">Цена</th>
                                    <th class="product-quantity">Количество</th>
                                    <th class="product-subtotal">Всего</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="product-remove">
                                        <a href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a>
                                            <img src="{{asset('img/product-img/prod1.jpg')}}" alt="" /></a>
                                    </td>
                                    <td class="product-name">
                                        <a>Alpha Block Black Polo T-Shirt</a>
                                    </td>
                                    <td class="product-price">
                                        <span class="product-price-amount amount">399 <span class="currency-sign">₴</span></span>
                                    </td>
                                    <td>
                                        <div class="product-quantity">
                                            <span data-value="+" class="quantity-btn quantityPlus"></span>
                                            <input class="quantity input-lg" step="1" min="1" max="9" name="quantity" value="1" title="Quantity" type="number" />
                                            <span data-value="-" class="quantity-btn quantityMinus"></span>
                                        </div>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="product-price-sub_totle amount">399 <span class="currency-sign">₴</span></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="product-remove">
                                        <a href="javascript:void(0)"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                    </td>
                                    <td class="product-thumbnail">
                                        <a><img src="{{asset('img/product-img/prod2.jpg')}}" alt="" /></a>
                                    </td>
                                    <td class="product-name">
                                        <a>Red Printed Round Neck T-Shirt</a>
                                    </td>
                                    <td class="product-price">
                                        <span class="product-price-amount amount">299 <span class="currency-sign">₴</span></span>
                                    </td>
                                    <td>
                                        <div class="product-quantity">
                                            <span data-value="+" class="quantity-btn quantityPlus"></span>
                                            <input class="quantity input-lg" step="1" min="1" max="9" name="quantity" value="2" title="Quantity" type="number" />
                                            <span data-value="-" class="quantity-btn quantityMinus"></span>
                                        </div>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="product-price-sub_totle amount">598 <span class="currency-sign">₴</span></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row cart-actions pull-right">
                            <div class="col-md-12">
                                <a class="btn btn-lg btn-color form-full-width" href="{{url('checkout')}}">Оформить заказ</a>
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
    <script type="text/javascript" src="{{asset('js/cart.js')}}"></script>
@endsection