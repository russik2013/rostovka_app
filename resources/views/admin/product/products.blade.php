@section('productsCss')
    <link href="{{url('css/admin/products.css')}}" rel="stylesheet">
@endsection

@extends('admin.main')
@section('products_container')
    <div class="col-md-12 ">
        <div class="col-md-12 header">
            <h4 class="title">Список товаров</h4>
        </div>

        @if($errors->any())
            <h4 class="back--error">{{$errors->first()}}</h4>
        @endif
        <div class="col-md-12">
            <div class="header--add--buttons col-md-4 col-sm-12 col-xs-12">
                <select class="sorting__Option col-md-5 col-sm-12 col-xs-12" name="goods">
                    <option value="1">Обувь</option>
                    <option value="2">Перчатки</option>
                </select>

                <select class="sorting__Option col-md-5 col-sm-12 col-xs-12" name="uploadOptions" onChange="getSelect(event)">
                    <option value="upload">Загрузить</option>
                    <option value="download">Скачать</option>
                    <option value="edit">Редактировать</option>
                    <option value="delete">Удалить</option>
                </select>

                <div class="col-md-12 inputs--group">
                    <input type="file" id="archive" data-filename-placement="inside" name="zip" title="Выбрать фотографии" accept=".zip" class="col-md-5 col-sm-12 col-xs-12" onChange="getFile()">

                    <input type="file" id="xslsx" data-filename-placement="inside" name="xlsx" title="Выбрать XLS" accept=".xls, .xlsx" class="col-md-5 col-sm-12 col-xs-12" onChange="getFileXls()">

                    <select class="sorting__Option manufacturer_Options col-md-5 col-sm-12 col-xs-12" name="manufactures" onChange="getManufactures(event)" style="display: none; float: left; margin-right: 5px;">
                        <option value="0">Все</option>
                        @foreach($manufactures as $manufacture)

                            <option value="{{$manufacture -> id}}">{{$manufacture -> name}}</option>

                        @endforeach
                    </select>

                    <select class="sorting__Option seasone_Options col-md-5 col-sm-12 col-xs-12" name="season" onChange="getSeason(event)" style="display: none">

                        <option value="5">Все</option>

                        @foreach($seasons as $season)

                            <option value="{{$season -> id}}">{{$season -> name}}</option>

                        @endforeach
                    </select>

                    <select class="sorting__Option type_Options col-md-5 col-sm-12 col-xs-12" name="manufactures" onChange="getManufactures(event)" style="display: none; float: left; margin-right: 5px;">

                        <option value="28">Все</option>

                        @foreach($types as $type)

                            <option value="{{$type -> id}}">{{$type -> name}}</option>

                        @endforeach
                    </select>

                    <select class="sorting__Option availability col-md-5 col-sm-12 col-xs-12" name="availability" style="display: none; float: left; margin-right: 5px;">
                        <option value="2">Все</option>
                        <option value="1">Да</option>
                        <option value="0">Нет</option>
                    </select>
                </div>

                <button class="upload col-md-4 col-sm-12 col-xs-12" >Загрузить</button>
            </div>

            <div class="span12 pull-right col-md-3 col-sm-12 col-xs-12" style="padding-right: 0;">
                <form id="custom-search-form" class="form-search form-horizontal pull-right col-sm-12 col-xs-12">
                    <div class="input-append col-sm-12 col-xs-12" style="padding-right: 0;">
                        <input type="text" class="search-query col-sm-12 col-xs-12" placeholder="Поиск">
                        <button type="submit" class="btn"><i class="ti-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="content products--content produtsTablePage">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="content table-responsive table-full-width">

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Фото</th>
                                    <th>Артикул</th>
                                    <th>Размеры</th>
                                    <th>Категория</th>
                                    <th>Произвоитель</th>
                                    <th>Скидка</th>
                                    <th>Цена</th>
                                    <th>Цена закупки</th>
                                    <th>В наличии</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($products as $product)



                                    <tr data-id="{{$product -> id}}">
                                        <td style="max-width: 80px;">
                                            @if($product -> photo )
                                            <img style="width: 70%;margin-bottom: 30px;" src="{{url('/images/products/'. $product -> photo -> photo_url)}}" />
                                                @endif
                                        </td>

                                        <td class="articul productsArt"><input value="{{$product -> article}}" disabled></td>

                                        <td>{{$product -> size -> name}}</td>

                                        <td>{{$product -> category -> name}}</td>

                                        <td>{{$product -> manufacturer -> name}}</td>

                                        <td>{{$product -> discount}}</td>

                                        <td>{{$product -> prise}}</td>

                                        <td>{{$product -> prise_zakup}}</td>

                                        <td>@if($product ->show_product == 1) Да @else Нет @endif</td>

                                        <td>{{$product -> created_at}}  <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    {{$products->links()}}


                </div>
            </div>
        </div>
    </div>
@endsection
@section('productsLib')
    <script src="{{url('js/admin/bootstrap.file-input.js')}}"></script>
    <script src="{{url('js/admin/products.js')}}"></script>
@endsection