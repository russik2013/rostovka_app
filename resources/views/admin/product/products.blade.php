@section('productsCss')
    <link href="{{url('css/admin/products.css')}}" rel="stylesheet">
@endsection

@extends('admin.main')
@section('products_container')
    <style>
        .table-striped > thead > tr > th, .table-striped > tbody > tr > th, .table-striped > tfoot > tr > th, .table-striped > thead > tr > td, .table-striped > tbody > tr > td, .table-striped > tfoot > tr > td{
            font-size: 14px;
            border: 1px solid #f4f3ef;
            border-top: 0;
            border-bottom: 0;
            text-align: center;
        }
    </style>
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

                    <select class="sorting__Option availability col-md-5 col-sm-12 col-xs-12" name="availability" style="display: none; float: left; margin-right: 5px">
                        <option value="2">Все</option>
                        <option value="1">Да</option>
                        <option value="0">Нет</option>
                    </select>
                </div>

                <button class="upload col-md-4 col-sm-12 col-xs-12" >Загрузить</button>

            </div>

            <div class="span12 pull-right col-md-5 col-sm-12 col-xs-12" style="padding-right: 0;">
                <form id="custom-search-form" class="form-search form-horizontal pull-right col-sm-12 col-xs-12">
                    <div class="input-append col-sm-12 col-xs-12" style="padding-right: 0;">

                        <h4 class="checkCounter" >Выбрано: <span class="countNumber">0</span></h4>
                            <input type="button" class="clearAll" value="Очистить выбор">
                            <input type="button" class="saveAll" value="Сохранить изменения">
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
                        <div class="content table-responsive table-full-width" style="padding: 0;">

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Фото</th>
                                    <th>Артикул</th>
                                    <th>Размеры</th>
                                    <th>Производитель</th>
                                    <th>Цена закупки</th>
                                    <th> Цена</th>
                                    <th>В наличии</tr>
                                <tr>
                                    <th style="width: 50px"><a href="#" id="chooseAll">Выбрать все</a>
                                        <a href="#"id="closeAll"> Отменить все</a></th>
                                    <th></th>
                                    <th>
                                        <input style="border: 1px solid #c5c5c5; max-width: 110px; text-align: center; padding-top: 3px" type="text" value="{{$articleGetParam}}" class="searchArt" placeholder="Поиск">
                                    </th>
                                    <th></th>
                                    <th>
                                        {{--<input style="border: 1px solid #c5c5c5; max-width: 110px; text-align: center; padding-top: 3px"  type="text" class="searchMan" placeholder="Поиск">--}}

                                        <select class="searchMan" style="border: 1px solid #c5c5c5; padding-top: 3px; padding-bottom: 1px; max-width: 110px; text-align: center">
                                            <option value="0">Все</option>
                                            @foreach($manufactures as $manufacture)

                                                <option @if($manufacture -> name == $manufacturerGetParam) selected @endif value="{{$manufacture -> name}}">{{$manufacture -> name}}</option>

                                            @endforeach
                                        </select>

                                    </th>
                                    <th>
                                        <input type="text" class="pricePurchase" style="border: 1px solid #c5c5c5; padding-top: 3px; max-width: 110px; text-align: center" placeholder="Закупка">
                                    </th>

                                    <th>
                                        <input style="border: 1px solid #c5c5c5; max-width: 110px; text-align: center; padding-top: 3px" type="text" class="price" placeholder="Цена">
                                    </th>

                                    <th>
                                        <select class="availability isExist" style="border: 1px solid #c5c5c5; padding-top: 3px; padding-bottom: 1px; max-width: 110px; text-align: center">
                                            <option value="0">Не выбрано</option>
                                            <option value="1">Да</option>
                                            <option value="2">Нет</option>
                                        </select>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>


                                @foreach($products as $product)



                                    <tr data-id="{{$product -> id}}">
                                        <td><input class="checkTov" type="checkbox" value="{{$product -> id}}"> </td>
                                        <td style="max-width: 80px;">
                                            @if($product -> photo )
                                            <img style="width: 70%;margin-bottom: 30px;" src="{{url('/images/products/'. $product -> photo -> photo_url)}}" />
                                                @endif
                                        </td>

                                        <td class="articul productsArt"><input value="{{$product -> article}}" disabled></td>

                                        <td>{{$product -> size -> name}}</td>


                                        <td>{{$product -> manufacturer -> name}}</td>
                                        <td>{{$product -> prise_zakup}}</td>


                                        <td>{{$product -> prise}}</td>


                                        <td>@if($product ->show_product == 1) Да @else Нет @endif</td>

                                        <td>{{$product -> created_at}}  <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    @for($i = 1; $i < $productCount+1; $i ++)

                        @if(isset($_GET['article']) && isset($_GET['manufacturer']))
                            <a href="{{url('products?article='.$_GET['article'].'&manufacturer='.$_GET['manufacturer'].'&page='.$i)}}">{{$i}}</a>

                        @elseif(isset($_GET['article']))
                            <a href="{{url('products?article='.$_GET['article'].'&page='.$i)}}">{{$i}}</a>

                        @elseif(isset($_GET['manufacturer']))
                            <a href="{{url('products?manufacturer='.$_GET['manufacturer'].'&page='.$i)}}">{{$i}}</a>

                            @else
                            <a href="{{url('products?page='.$i)}}">{{$i}}</a>
                            @endif

                    @endfor




                    {{--{{$products->links()}}--}}


                </div>
            </div>
        </div>
    </div>
@endsection
@section('productsLib')
    <script src="{{url('js/admin/bootstrap.file-input.js?n=1')}}"></script>
    <script src="{{url('js/admin/products.js?n=1')}}"></script>
@endsection