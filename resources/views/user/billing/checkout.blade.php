@extends('user.markup.markup')
@section('billing')
<!-- Page Content -->
<meta name="checkout_url" content="{!! url('/checkout') !!}">
<div class="logReg_page regPage checkoutPage">
    <section class="content-page">
    <div class="container mb-80">
        <div class="row">
            <div class="col-sm-12">
                <article class="post-8">
                    <form class="product-checkout mt-45" action="{{url('/checkout')}}" method="post" id="contact_form">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>ПЛАТЕЖНЫЕ РЕКВИЗИТЫ</h3>
                                <h5>Оформление заказа</h5>
                                <div class="row">
                                    <fieldset>
                                        <div class="form-field-wrapper form-center col-sm-12 pull-left">
                                            <div class="col-md-6 form-field-wrapper form-group has-feedback">
                                                @if ($errors->has('first_name'))
                                                    <p> {{$errors -> first('first_name')}} </p>
                                                @endif
                                                <label class="col-md-12 control-label">Ваше имя</label>
                                                <div class="col-md-12 inputGroupContainer">

                                                    <div class="input-group">
                                                        <input name="first_name" placeholder="имя" class="input-md form-full-width form-control" type="text" value="{{old('first_name')}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Text input-->

                                            <div class="col-md-6 form-field-wrapper form-group has-feedback">
                                                @if ($errors->has('last_name'))
                                                    <p> {{$errors -> first('last_name')}} </p>
                                                @endif
                                                <label class="col-md-12 control-label">Ваша фамилия</label>
                                                <div class="col-md-12 inputGroupContainer">

                                                    <div class="input-group">
                                                        <input name="last_name" placeholder="фамилия" class="form-control" type="text" value="{{old('last_name')}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Text input-->


                                        <div class="col-md-6 form-field-wrapper form-group has-feedback">
                                            @if ($errors->has('email'))
                                                <p>  {{$errors -> first('email')}} </p>
                                            @endif
                                            <label class="col-md-12 control-label">Ваш E-Mail</label>
                                            <div class="col-md-12 inputGroupContainer">

                                                <div class="input-group">
                                                    <input name="email" placeholder="e-mail" class="form-control" type="text" value="{{old('email')}}">
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Text input-->
                                        <div class="col-md-6 form-field-wrapper form-group has-feedback">
                                            @if ($errors->has('phone'))
                                                <p>   {{$errors -> first('phone')}} </p>
                                            @endif
                                            <label class="col-md-12 control-label">Ваш телефон</label>
                                            <div class="col-md-12 inputGroupContainer">

                                                <div class="input-group">
                                                    <input name="phone" placeholder="063 111 11 11" class="form-control" type="number" value="{{old('phone')}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 form-field-wrapper form-group has-feedback">
                                            @if ($errors->has('address'))
                                                <p>  {{$errors -> first('address')}} </p>
                                            @endif
                                            <label class="col-md-12 control-label">Адрес доставки</label>
                                            <div class="col-md-12 inputGroupContainer">

                                                <div class="input-group">
                                                    <input name="address" placeholder="адрес" class="form-control" type="text" value="{{old('address')}}">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Text input-->
                                        <div class="col-md-12 form-field-wrapper form-group has-feedback">
                                            <label class="col-md-12 control-label">Информация по доставке</label>
                                            <div class="col-md-12 inputGroupContainer">

                                                <div class="input-group">
                                                    <input placeholder="привезти в отделения №3" name="info" class="form-control" type="text" value="">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12 form-field-wrapper form-group has-feedback">
                                            <label class="col-md-12 control-label">Комментарий</label>
                                            <div class="col-md-12 inputGroupContainer">

                                                <div class="input-group">
                                                    <textarea class="commentArea" name="komment"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-order-review">
                                    <h3>Ваш заказ</h3>
                                    <div class="product-checkout-review-order">
                                        <div class="responsive-table">
                                            <table class="">
                                                <tfoot>
                                                <tr class="shipping">
                                                    <th>Доставка</th>
                                                    <td>
                                                        <ul id="shipping_method">
                                                            <li>
                                                                <input name="shipping_method" data-index="0" id="shipping_method_0_legacy_flat_rate" value="legacy_flat_rate" class="shipping_method" checked="checked" type="radio">
                                                                <label for="shipping_method_0_legacy_flat_rate">Новая почта</label>
                                                            </li>
                                                            <li>
                                                                <input name="shipping_method" data-index="0" id="shipping_method_0_legacy_free_shipping" value="legacy_free_shipping" class="shipping_method" type="radio">
                                                                <label for="shipping_method_0_legacy_free_shipping">Delivery</label>
                                                            </li>
                                                            <li>
                                                                <input name="shipping_method" data-index="0" id="shipping_method_0_legacy_local_delivery" value="legacy_local_delivery" class="shipping_method" type="radio">
                                                                <label for="shipping_method_0_legacy_local_delivery">Автолюкс</label>
                                                            </li>
                                                            <li>
                                                                <input name="shipping_method" data-index="0" id="shipping_method_0_legacy_local_InTime" value="legacy_local_delivery" class="shipping_method" type="radio">
                                                                <label for="shipping_method_0_legacy_local_InTime">InTime</label>
                                                            </li>
                                                            <li>
                                                                <input name="shipping_method" data-index="0" id="shipping_method_0_legacy_local_bus" value="legacy_local_delivery" class="shipping_method" type="radio">
                                                                <label for="shipping_method_0_legacy_local_bus">Подвести к автобусу</label>
                                                            </li>
                                                            <li>
                                                                <input name="shipping_method" data-index="0" id="shipping_method_0_legacy_local_your" value="legacy_local_delivery" class="shipping_method" type="radio">
                                                                <label for="shipping_method_0_legacy_local_your">Самовывоз</label>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Сумма</th>
                                                    <td>
                                                        <span class="product-price-amount amount"><span class="currency-sign">$</span>1009.00</span>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div>

                                        <div class="product-checkout-payment">
                                            <span>Оплата</span>
                                            <ul>
                                                <li>
                                                    <input id="payment_method_bacs" name="payment_method" value="bacs" checked="checked" type="radio" />
                                                    <label for="payment_method_bacs">На карту "ПриватБанка"</label>
                                                </li>
                                                <li>
                                                    <input id="payment_method_cod" name="payment_method" value="cod" type="radio" />
                                                    <label for="payment_method_cod">Наличными</label>
                                                </li>
                                            </ul>
                                            <div class="col-md-12 form-field-wrapper form-group has-feedback">
                                                <button type="submit" class="btn btn-warning submit btn btn-md btn-color">Оформить заказ</button>
                                            </div>

                                            <p class="checkout-info">
                                                Вы наш клиент? <strong><a href="login"> Нажмите сюда и авторизуйтесь</a></strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </div>

</section>
</div>
<!-- End Page Content -->
@endsection

@section('auth_reg')
    <script type="text/javascript" src="{{asset('js/auth.js')}}"></script>
@endsection

