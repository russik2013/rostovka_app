@section('ordersCss')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="{{url('css/admin/products.css')}}" rel="stylesheet">
    <link href="{{url('css/admin/orders.css')}}" rel="stylesheet">
@endsection

@extends('admin.main')
@section('orders_container')
    <div class="content products--content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Список заказов</h4>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <div class="col-md-12 pull-left datePicker">
                                <span class="min--title pull-left col-md-12">Cписок заказов за период (PDF)</span>
                                <div class="col-md-5 datePicker__Block">
                                    <label for="from">с </label>
                                    <input type="text" id="from" name="from">
                                    <label for="to"> по </label>
                                    <input type="text" id="to" name="to">
                                </div>

                                <div class="col-md-5">
                                    <select class="sorting__Option" name="options">
                                        <option value="1">Респределить по доставк</option>
                                        <option value="2">Респределить по производителю</option>
                                    </select>

                                    <select class="image__Option" name="options">
                                        <option value="1">Без фотографий</option>
                                        <option value="2">С фотографиями</option>
                                    </select>
                                </div>

                                <div class="col-md-2 pull-right">
                                    <button class="pull-right">Скачать</button>
                                </div>
                            </div>
                            <div class="col-md-12 span12 pull-right" style="margin-top: 20px">
                                <form id="custom-search-form" class="form-search form-horizontal pull-right">
                                    <div class="input-append span12">
                                        <input type="text" class="search-query" placeholder="Поиск">
                                        <button type="submit" class="btn"><i class="ti-search"></i></button>
                                    </div>
                                </form>
                            </div>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="identification">ID</th>
                                    <th>ФИО</th>
                                    <th>Способ доставки</th>
                                    <th>Способ оплаты</th>
                                    <th>К оплате</th>
                                    <th>Оплачен</th>
                                    <th>Дата</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="articul"><input value="1" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Иван Иваныч Иванов</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td class="paid--Status">да</td>
                                    <td>20.01.1980</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="2" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Ив Ив</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td>нет</td>
                                    <td>13.02.1990</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="3" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Моф Афанас</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td class="paid--Status">да</td>
                                    <td>09.08.1991</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="4" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Ростислав Комиссаров</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td>нет</td>
                                    <td>05.05.1995</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="5" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Сергей Горшков</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td>нет</td>
                                    <td>15.02.1992</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="6" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Леонид Копылов</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td>нет</td>
                                    <td>16.02.1990</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="7" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Максим Рыбаков</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td>нет</td>
                                    <td>13.02.1990</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="8" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Иван Корнилов</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td>нет</td>
                                    <td>13.02.1990</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="9" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Роман Агафонов</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td class="paid--Status">да</td>
                                    <td>13.02.1990</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="10" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Никита Иванов</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td>нет</td>
                                    <td>13.02.1990</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="11" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Владимир Самойлов</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td>нет</td>
                                    <td>13.02.1990</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="12" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Виктор Игнатьев</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td class="paid--Status">да</td>
                                    <td>13.02.1990</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="13" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Валентин Носков</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td>нет</td>
                                    <td>13.02.1990</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="14" disabled></td>
                                    <td class="costomer--Info"><a href="#!">Степан Макаров</a></td>
                                    <td>Новая почта</td>
                                    <td>На карту "ПриватБанка"</td>
                                    <td>3200</td>
                                    <td>нет</td>
                                    <td>13.02.1990</td>
                                    <td class="options">
                                        <a href="#!">
                                            <i class="ti-printer" data-toggle="tooltip" title="PDF"></i>
                                        </a>
                                        <a href="orderInfo">
                                            <i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i>
                                        </a>

                                        <a class="remove__order" href="#!">
                                            <i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <ul class="pagination">
                        <li><a href="!#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="!#">3</a></li>
                        <li><a href="!#">4</a></li>
                        <li><a href="!#">5</a></li>
                        <li><a href="!#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('ordersLib')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{url('js/admin/orders.js')}}"></script>
    <script src="{{url('js/admin/datepicker-ru.js')}}"></script>
@endsection