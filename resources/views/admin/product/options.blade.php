@section('optionsCss')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="{{url('css/admin/products.css')}}" rel="stylesheet">
    <link href="{{url('css/admin/options.css')}}" rel="stylesheet">
@endsection

@extends('admin.main')
@section('options_container')
    <div class="content products--content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Свойства товара</h4>
                        </div>

                        <div class="col-md-12 option--Line">
                            <div class="col-md-12">
                                <span class="min--title">Валюта</span>

                                <div class="col-md-12">
                                    <div class="col-md-12 addnewButton ex--rates">
                                        <input class="pull-left filter--inputs exrateName" placeholder="Введите имя валюты">
                                        <input class="pull-left filter--inputs exrateCode" placeholder="Введите знак валюты">
                                        <input class="pull-left filter--inputs exrateCourse" type="number" placeholder="Введите курс">
                                        <button class="pull-left add--newFilter ex_rates__add">Добавить</button>
                                    </div>
                                </div>
                                <div class="col-md-12 Methods pull-right ex--rates--table">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Валюта</th>
                                            <th>Знак</th>
                                            <th>Курс</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr data-id="1">
                                            <td>Доллар</td>
                                            <td>$</td>
                                            <td>26 <i class="table--icons ti-trash type-success removetr" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></td>
                                        </tr>
                                        <tr data-id="2">
                                            <td>Евро</td>
                                            <td>€</td>
                                            <td>32 <i class="table--icons ti-trash type-success removetr" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 option--Line">
                            <div class="col-md-6 deliveryBlock">
                                <span class="min--title">Способы доставки</span>

                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="col-md-12 addnewButton">
                                        <input class="pull-left filter--inputs delivery__val" placeholder="Способ доставки">
                                        <button class="pull-left add--newFilter delivery__method">Добавить</button>
                                    </div>
                                </div>
                                <div class="col-md-5 Methods pull-right deliveryMethods">
                                    <ul>
                                        <li data-id="1">Новая почта <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                        <li data-id="2">Delivery <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                        <li data-id="2">Автолюкс <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                        <li data-id="2">InTime <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                        <li data-id="2">Подвести к автобусу <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                        <li data-id="2">Самовывоз <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 patMethods">
                                <span class="min--title">Способы оплаты</span>

                                <div class="col-md-7 col-sm-12 col-xs-12">
                                    <div class="col-md-12 addnewButton">
                                        <input class="pull-left filter--inputs add__payMethodVal" placeholder="Способ оплаты">
                                        <button class="pull-left add--newFilter add__payMethod">Добавить</button>
                                    </div>
                                </div>
                                <div class="col-md-5 Methods pull-right">
                                    <ul>
                                        <li data-id="1">Наличными <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                        <li data-id="2">На карту "ПриватБанка" <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 save--options">
                        <input type="submit" value="Сохранить">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('optionsLib')
    <script src="{{url('js/admin/options.js')}}"></script>
@endsection