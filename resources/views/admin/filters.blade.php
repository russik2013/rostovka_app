@section('filterPage_Css')
    <link href="{{url('css/admin/filterPage.css')}}" rel="stylesheet">
@endsection

@extends('admin.main')
@section('filterPage_content')
    <div class="content filter_content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Фильтры</h4>
                                </div>
                                <div class="content">
                                    <div class="col-md-2">
                                        <span class="min--title">Тип</span>
                                        <ul>
                                            <li data-id="1">Ботинки <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="2">Босоножки <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="3">Бутсы <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="4">Валенки <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="5">Дутики <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="6">Кроксы <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="7">Кеды <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                        </ul>
                                        <input class="pull-left filter--inputs" placeholder="Введите тип"> <button class="pull-right add--newFilter">Добавить</button>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <span class="min--title">Сезон</span>
                                        <ul>
                                            <li data-id="1-2">Зима <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="2-2">Лето <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="3-2">Осень-весна <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                        </ul>

                                        <input class="pull-left filter--inputs" placeholder="Введите сезон"> <button class="pull-right add--newFilter">Добавить</button>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <span class="min--title">Размеры</span>
                                        <ul>
                                            <li data-id="1-3">12-15 <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="2-3">12-14 <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="3-3">14-18 <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="4-4">14-29 <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="5-5">15-29 <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="6-6">12-23 <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="7-7">12-30 <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                        </ul>

                                        <input class="pull-left filter--inputs" placeholder="Введите размер"> <button class="pull-right add--newFilter">Добавить</button>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col-md-2">
                                        <span class="min--title">Производители</span>
                                        <ul>
                                            <li data-id="1-4">4Shoes <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="2-4">Active <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="3-4">Ai Mei Dui <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="4-4">AilAifa <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="5-4">Alaska <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="6-4">Alemykids <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="7-4">Alex <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="8-4">All Star <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="9-4">Apawwa <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="10-4">BAAS <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                            <li data-id="11-4">BBTE <a class="remove__Filter" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></li>
                                        </ul>

                                        <input class="pull-left filter--inputs" placeholder="Введите производителя"> <button class="pull-right add--newFilter">Добавить</button>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-info btn-fill btn-wd" type="submit">Сохранить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('filterPage_Lib')
    <script src="{{url('js/admin/filterPage.js')}}"></script>
@endsection