@section('productsCss')
    <link href="{{url('css/admin/products.css')}}" rel="stylesheet">
@endsection

@extends('admin.main')
@section('products_container')
    <div class="col-md-12">
        <div class="col-md-12 header">
            <h4 class="title">Список товаров</h4>
        </div>
        <div class="col-md-12">
            <div class="header--add--buttons col-md-4 col-sm-12 col-xs-12">
                <select class="sorting__Option col-md-5 col-sm-12 col-xs-12" name="goods">
                    <option value="1">Перчатки</option>
                    <option value="2">Обувь</option>
                </select>

                <select class="sorting__Option col-md-5 col-sm-12 col-xs-12" name="uploadOptions" onChange="getSelect(event)">
                    <option value="upload">Загрузить</option>
                    <option value="edit">Редактировать</option>
                    <option value="delete">Удалить</option>
                </select>

                <div class="col-md-12 inputs--group">
                    <input type="file" data-filename-placement="inside" title="Выбрать фотографии" accept=".zip" class="col-md-5 col-sm-12 col-xs-12" onChange="getFile()">

                    <input type="file" data-filename-placement="inside" title="Выбрать XLS" accept=".xls, .xlsx" class="col-md-5 col-sm-12 col-xs-12" onChange="getFileXls()">
                </div>

                <button class="upload col-md-4 col-sm-12 col-xs-12" >Загрузить</button>
            </div>

            <div class="span12 pull-right col-md-3 col-sm-12 col-xs-12">
                <form id="custom-search-form" class="form-search form-horizontal pull-right col-sm-12 col-xs-12">
                    <div class="input-append col-sm-12 col-xs-12">
                        <input type="text" class="search-query col-sm-12 col-xs-12" placeholder="Поиск">
                        <button type="submit" class="btn"><i class="ti-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="content products--content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="content table-responsive table-full-width">

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Артикул</th>
                                    <th>Название</th>
                                    <th>Категория</th>
                                    <th>Произвоитель</th>
                                    <th>Скидка</th>
                                    <th>Доступность</th>
                                    <th>Дата создания</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="articul"><input value="azlaD123112" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>20.01.1980 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="zxczcassd1231" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>13.02.1990 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="bbrgfd1212" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>09.08.1991 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="azlaD123112" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>05.05.1995 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="fbwd1" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>15.02.1992 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="94388ffs" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>16.02.1990 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="134411dsfs" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>13.02.1990 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="oololalsd" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>13.02.1990 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="0u100u" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>13.02.1990 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="123123dada" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>13.02.1990 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="12313asdad123" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>13.02.1990 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="12314rda12" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>13.02.1990 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="xcxvvsdfsdf" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>13.02.1990 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="articul"><input value="zxcxvvssd1y9" disabled></td>
                                    <td>Dakota</td>
                                    <td>Rice</td>
                                    <td>Madness</td>
                                    <td>10%</td>
                                    <td>нет</td>
                                    <td>13.02.1990 <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
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
@section('productsLib')
    <script src="{{url('js/admin/bootstrap.file-input.js')}}"></script>
    <script src="{{url('js/admin/products.js')}}"></script>
@endsection