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

                                @foreach($products as $product)
                                    <tr>
                                        <td class="articul"><input value="{{$product -> article}}" disabled></td>
                                        <td>{{$product -> name}}</td>
                                        <td>{{$product -> category -> name}}</td>
                                        <td>{{$product -> manufacturer -> name}}</td>
                                        <td>{{$product -> discount}}</td>

                                        <td>@if($product ->show_product == 1) да @else нет @endif</td>
                                        <td>{{$product -> created_at}} <a href="product_edit"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove__product" href="#!"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                    </tr>

                                    @endforeach
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