{{--@section('suppliersCss')--}}
    {{--<link href="{{url('css/admin/products.css')}}" rel="stylesheet">--}}
{{--@endsection--}}

@extends('admin.main')
@section('editingFilters')
    <div class="content products--content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Редактированиие фильтров</h4>
                        </div>

                        <div class="content table-responsive table-full-width">
                            <div class="col-md-6 pull-left" style="margin-top: 30px; padding: 0">
                                <table class="table table-striped">
                                    <tbody>
                                    @foreach($types as $type)

                                        <tr data-id="{{$type -> id}}">
                                            <td class="articul productsArt" style="display: none;"><input value="{{$type -> id}}" disabled></td>
                                            <th>{{$type -> name}}</th>
                                            <td><a class="remove__product" href="{{url('/type/'.$type->id)}}"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                        </tr>

                                    @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{--@section('suppliersLib')--}}
    {{--<script src="{{url('js/suppliers.js')}}"></script>--}}
{{--@endsection--}}