@section('suppliersCss')
    <link href="{{url('css/admin/products.css')}}" rel="stylesheet">
@endsection

@extends('admin.main')
@section('suppliers_container')
    <div class="content products--content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Список поставщиков</h4>
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

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Поставщик</th>
                                    <th>Улица</th>
                                    <th>Номер <br/> контейнера</th>
                                    <th>Имя</th>
                                    <th>Фамилия</th>
                                    <th>Телефон</th>
                                    <th>Cкидка</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>Dakota</th>
                                    <th>Улица</th>
                                    <th>12</th>
                                    <th>Вясилий</th>
                                    <td>Петровч</td>
                                    <td>+380631111111</td>
                                    <td>10%</td>
                                    <td><a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <th>Dakota</th>
                                    <th>Улица</th>
                                    <th>12</th>
                                    <th>Вясилий</th>
                                    <td>Петровч</td>
                                    <td>+380631111111</td>
                                    <td>10%</td>
                                    <td><a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <th>Dakota</th>
                                    <th>Улица</th>
                                    <th>12</th>
                                    <th>Вясилий</th>
                                    <td>Петровч</td>
                                    <td>+380631111111</td>
                                    <td>10%</td>
                                    <td><a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <th>Dakota</th>
                                    <th>Улица</th>
                                    <th>12</th>
                                    <th>Вясилий</th>
                                    <td>Петровч</td>
                                    <td>+380631111111</td>
                                    <td>10%</td>
                                    <td><a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <th>Dakota</th>
                                    <th>Улица</th>
                                    <th>12</th>
                                    <th>Вясилий</th>
                                    <td>Петровч</td>
                                    <td>+380631111111</td>
                                    <td>10%</td>
                                    <td><a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <th>Dakota</th>
                                    <th>Улица</th>
                                    <th>12</th>
                                    <th>Вясилий</th>
                                    <td>Петровч</td>
                                    <td>+380631111111</td>
                                    <td>10%</td>
                                    <td><a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <th>Dakota</th>
                                    <th>Улица</th>
                                    <th>12</th>
                                    <th>Вясилий</th>
                                    <td>Петровч</td>
                                    <td>+380631111111</td>
                                    <td>10%</td>
                                    <td><a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <th>Dakota</th>
                                    <th>Улица</th>
                                    <th>12</th>
                                    <th>Вясилий</th>
                                    <td>Петровч</td>
                                    <td>+380631111111</td>
                                    <td>10%</td>
                                    <td><a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>
                                <tr>
                                    <th>Dakota</th>
                                    <th>Улица</th>
                                    <th>12</th>
                                    <th>Вясилий</th>
                                    <td>Петровч</td>
                                    <td>+380631111111</td>
                                    <td>10%</td>
                                    <td><a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
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

@section('suppliersLib')
    <script src="{{url('js/admin/suppliers.js')}}"></script>
@endsection