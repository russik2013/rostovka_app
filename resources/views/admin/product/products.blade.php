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
            <div class="content table-responsive table-full-width">

                <div class="header--add--buttons">
                    <button class="upload--buttons upload_button" data-toggle="tooltip" title="Загрузить товары"><i class="fa fa-upload"></i></button>
                    <button class="remove--buttons" data-toggle="tooltip" title="Удалить товары"><i class="fa fa-trash-o"></i></button>
                    <button class="update--buttons" data-toggle="tooltip" title="Редактировать товары"><i class="fa fa-pencil-square-o"></i></button>
                </div>

                <div class="span12 pull-right">
                    <form id="custom-search-form" class="form-search form-horizontal pull-right">
                        <div class="input-append span12">
                            <input type="text" class="search-query" placeholder="Поиск">
                            <button type="submit" class="btn"><i class="ti-search"></i></button>
                        </div>
                    </form>
                </div>




                {{--<a href="product_add" class="btn btn-wd btn-info btn-fill btn-rotate" type="button">--}}
                {{--Добавить товар--}}
                {{--</a>--}}
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
<div class="modal fade upload_modal" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Загрузить товары</h4>
            </div>
            <div class="modal-body">
                <p>Some text in the modal.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Загрузиить</button>
                <button type="button" class="btn btn-info pull-right" data-dismiss="modal">Отмена</button>
            </div>
        </div>

    </div>
</div>
@section('productsLib')
    <script src="{{url('js/admin/products.js')}}"></script>
@endsection