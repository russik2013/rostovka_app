@section('productsCss')
    <link href="{{url('css/admin/products.css')}}" rel="stylesheet">
@endsection

@extends('admin.main')
@section('products_container')
    <div class="content products--content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Список товаров</h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <div class="span12 pull-right">
                            <form id="custom-search-form" class="form-search form-horizontal pull-right">
                                <div class="input-append span12">
                                    <input type="text" class="search-query" placeholder="Поиск">
                                    <button type="submit" class="btn"><i class="ti-search"></i></button>
                                </div>
                            </form>
                        </div>

                        <a href="product_add" class="btn btn-wd btn-info btn-fill btn-rotate" type="button">
                            Добавить товар
                        </a>

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
    <script src="{{url('js/admin/products.js')}}"></script>
@endsection