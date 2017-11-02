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
                                        <div class="col-md-6">
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
                                                    <label>Скидка</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <input class="form-control border-input" type="number" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>ФИО</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <input class="form-control border-input" type="text" value="Полякова Оксана Владимировна">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <input class="form-control border-input" type="text" value="ksena0283@gmail.com">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>Телефон</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <input class="form-control border-input" type="number" value="0509055848">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>Адрес доставки</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <input class="form-control border-input" type="text" value="Прилуки">
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

                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>Комментарий пользователя</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <textarea class="form-control border-input"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 orderInfo__input">
                                                <div class="col-md-5">
                                                    <label>Комментарий администратора</label>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <textarea class="form-control border-input"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="header">
                                                <h4 class="title">Продукты</h4>
                                            </div>
                                            <div class="col-md-12 product--list">
                                                <table class="table table-condensed">
                                                    <tbody>
                                                        <tr data-id="1">
                                                            <td><img src="{{asset('img/info__productImage.jpg')}}"></td>
                                                            <td><a href="#!">Сапоги Clibee L438 Black</a></td>
                                                            <td>2 280 <span>грн</span></td>
                                                            <td>Ящик</td>
                                                            <td><i class="removePrudct table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></td>
                                                        </tr>
                                                        <tr data-id="2">
                                                            <td><img src="{{asset('img/info__productImage.jpg')}}"></td>
                                                            <td><a href="#!">Сапоги LuX L438 Black</a></td>
                                                            <td>3 280 <span>грн</span></td>
                                                            <td>Ростовка</td>
                                                            <td><i class="removePrudct table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></td>
                                                        </tr>
                                                        <tr data-id="3">
                                                            <td><img src="{{asset('img/info__productImage.jpg')}}"></td>
                                                            <td><a href="#!">Сапоги Free L438 Black</a></td>
                                                            <td>1 280 <span>грн</span></td>
                                                            <td>Ящик</td>
                                                            <td><i class="removePrudct table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></td>
                                                        </tr>
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

@section('product_addLib')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
    <script src="{{url('js/admin/orderInfo.js')}}"></script>
@endsection