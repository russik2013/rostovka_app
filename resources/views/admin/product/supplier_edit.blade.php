@section('edit_userCss')
    <link href="{{url('css/admin/edit-user.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
@endsection

@extends('admin.main')
@section('edit_user')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Редактирование поставщика - <b>Dakota</b></h4>
                                </div>
                                <div class="content">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label>ID</label>
                                                    <input class="form-control border-input" data-userid="{{$client -> id}}" disabled="" type="text" value="{{$client -> id}}">
                                                </div>
                                            </div>

                                            <div class="col-md-5 product--add">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Улица</label>
                                                        <input class="form-control border-input" type="text" placeholder="Улица" data-userEmail="stree" value="Улица какая-то 1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email адрес</label>
                                                    <input class="form-control border-input" type="email" placeholder="Email адрес" data-userEmail="userEmail" value="{{$client -> email}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Имя</label>
                                                    <input class="form-control border-input" type="text" placeholder="Имя" data-userName="userName" value="{{$client -> first_name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Фамилия</label>
                                                    <input class="form-control border-input" type="text" placeholder="Фамилия" data-userLastName="userLastName" value="{{$client -> last_name}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Адрес</label>
                                                    <input class="form-control border-input" placeholder="Адрес доставки" data-userAddress="userAddress" type="text" value="{{$client -> address}}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Город</label>
                                                    <input class="form-control border-input" placeholder="Город" data-userCity="userCity" type="text" value="{{$client -> city}}">
                                                </div>
                                            </div>
                                        </div>

                                        {{--<div class="row">--}}
                                        {{----}}
                                        {{--<div class="col-md-4">--}}
                                        {{--<div class="form-group">--}}
                                        {{--<label>Country</label>--}}
                                        {{--<input class="form-control border-input" placeholder="Country" type="text" value="Australia">--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4">--}}
                                        {{--<div class="form-group">--}}
                                        {{--<label>Postal Code</label>--}}
                                        {{--<input class="form-control border-input" placeholder="ZIP Code" type="number">--}}
                                        {{--</div>--}}
                                        {{--</div>--}}
                                        {{--</div>--}}

                                        <div class="text-center">
                                            <button class="btn btn-info btn-fill btn-wd" type="submit">Обновить профиль</button>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<div class="successful_Buy modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header">
                <div class="icon-box">
                    <i class="fa fa-check-circle"></i>
                </div>
            </div>
            <div class="modal-body">
                <p class="text-center">Пользователь обновлен</p>
                <p class="text-center min--info"></p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

@section('edit_userLib')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
    <script src="{{url('js/admin/user_edit.js')}}"></script>
@endsection