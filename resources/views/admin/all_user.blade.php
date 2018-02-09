

@extends('admin.main')
@section('all_user')
<div class="content mainPage--content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Список пользователей</h4>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Имя</th>
                                <th>Фамилия</th>
                                <th>E-mail</th>
                                <th>Место проживания</th>
                                <th>Тип пользователя</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as $client)

                                <tr>
                                    <td>{{$client -> id}}</td>
                                    <td>{{$client -> first_name}}</td>
                                    <td>{{$client -> last_name}}</td>
                                    <td>{{$client -> email}}</td>
                                    <td>{{$client -> city}}</td>
                                    <td>@if($client -> type == "user")Покупатель @elseif($client -> type == "admin") Админ @else Оптовик @endif <a href="{{url('/user_edit/'.$client -> id)}}"><i class="table--icons ti-pencil-alt" data-toggle="tooltip" title="Редактировать"></i></a> <a class="remove"><i class="table--icons ti-trash type-success" aria-label="Try me! Example: success modal" data-toggle="tooltip" title="Удалить"></i></a></td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{$clients -> links()}}
            </div>
        </div>
    </div>
</div>

@endsection