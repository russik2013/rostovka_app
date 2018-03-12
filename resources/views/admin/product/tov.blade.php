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
                            <h4 class="title">Информация о заказах</h4>
                        </div>

                        <div class="content table-responsive table-full-width">


                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 30%">Поставщик</th>
                                    <th>Заказы</th>
                                </tr>
                                </thead>
                                <tbody>
                                <td>fds</td>
                                <td>fds</td>
                                        <td class="options">
                                            <a class="copy__order" href="#!">
                                                <i class="ti-clipboard" data-toggle="tooltip" title="Clipboard"></i>
                                            </a>
                                        </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{--<ul class="pagination">--}}
                    {{--<li><a href="!#">&laquo;</a></li>--}}
                    {{--@for($i = 1; $i < $pagination + 1; $i++)--}}

                    {{--<li  @if($i == 0)class="active" @endif><a href="{{url('orders/'.$i)}}">{{$i}}</a></li>--}}
                    {{--@endfor--}}
                    {{--<li><a href="!#">&raquo;</a></li>--}}
                    {{--</ul>--}}

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