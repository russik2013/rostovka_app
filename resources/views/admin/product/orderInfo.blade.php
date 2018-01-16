@section('orderInfo_Css')
    <link href="{{url('css/admin/edit-user.css')}}" rel="stylesheet">
    <link href="{{url('css/admin/orderInfo.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
@endsection

@extends('admin.main')
@section('orderInfo_content')
    <div class="content product--add">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="row">
                                    <div class="content">
                                        <div class="col-md-5">
                                            <div class="header">
                                                <h4 class="title">Информация о заказе</h4>
                                            </div>
                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>Статус</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <select class="form-control border-input status--select"></select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>ФИО</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <input class="form-control border-input" type="text" value="{{$order -> first_name}} {{ $order -> last_name}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>Телефон</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <input class="form-control border-input" type="number" value="{{$order ->  phone}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <input class="form-control border-input" type="text" value="{{$order ->  email}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>Способ доставки</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <select class="form-control border-input delivery--select"></select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>Способ оплаты</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <select class="form-control border-input payment--select"></select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>Адрес доставки</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <input class="form-control border-input" type="text" value="{{$order -> address}}">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>Номер отделения компании перевозчика</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <input class="form-control border-input" type="text" value="√3">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="header col-md-12">
                                                <div class="col-md-12">
                                                <h4 class="title col-md-4">Продукты</h4>
                                                    <div class="col-md-4 addProduct pull-right">
                                                        <i class="fa fa-plus-square pull-right" data-toggle="tooltip" data-target="#productsModal" title="Добавить товар"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 product--list">

                                                <table class="table table-condensed">
                                                    <tbody>

                                                    @foreach($order -> details as $detail)
                                                        <tr data-id="{{$detail -> id}}">
                                                            <td><img src="{{asset('image/products/'.$detail -> image)}}"></td>
                                                            <td>{{$detail -> article}}</td>
                                                            <td><a href="#!">{{$detail -> tovar_name}}</a></td>
                                                            <td>{{$detail -> this_tovar_in_order_price}}<span>{{$detail -> currency}}</span></td>
                                                            <td>@if(($detail -> this_tovar_in_order_price / $detail -> tovar_in_order_count)/ $detail -> prise == $detail -> box_count)
                                                                    Ящик
                                                                @else
                                                                    Ростовка
                                                                @endif
                                                            </td>
                                                            <td>{{$detail -> tovar_in_order_count}}</td>
                                                            <td><i class="removePrudct table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<div class="modal fade" id="productsModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content col-md-12">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Добавить товар</h4>
            </div>
            <div class="modal-body">
                <div class="form-group col-md-5">
                    <input class="form-control border-input" type="text" placeholder="Введите артикул товара" data-set="searchProduct">
                </div>
                <div class="col-md-2">
                    <button class="search--good">Поиск</button>
                </div>

                <div class="col-md-12 founded--good">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th></th>
                            <th>Фото</th>
                            <th>Артикул</th>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Произвоитель</th>
                            <th>Тип</th>
                            <th>Колличество</th>
                            <th>Цена</th>
                        </tr>
                        </thead>
                        <tbody id="tmpl"></tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer col-md-12">
                <button type="button" class="btn btn-default add--product--in">Добавить</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>

    </div>
</div>

@section('product_addLib')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
    <script src="{{url('js/admin/orderInfo.js')}}"></script>
@endsection