<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="{{url('css/admin/manufacturer/style.css')}}" rel="stylesheet">



    <title>Document</title>
</head>
<body>
<div class="price">
    <h6 class="title">
        Заказ поставщику № 1917 от 03 марта 2018 г.
    </h6>
</div>
<div class="info">
    <p>ФИО: Оксана Олейник</p>
    <p>Телефон: 093-526-00-13</p>
    <p>Адрес : Днепр</p>
    <p>Номер отделения компании перевозчика: 35</p>
    <p>Способы доставки: Новая почта</p>
    <p>Способы оплаты : На карту "ПриватБанк"</p>
</div>
<div class="table">
    <table>
        <tr>
            <th colspan="2">Товар</th>
            <th>Тип</th>
            <th>Количество</th>
            <th>Пар в ящ/рост.</th>
            <th>Размер</th>
            <th>Цена за шт.</th>
            <th>Общая цена</th>
        </tr>

        @foreach($manufacturersOrders as $manufacturersOrder)

        <tr>
            <td><img src="{{url('/images/products/'. $manufacturersOrder -> image)}}" style="width:40px;height: 40px"></td>

            <td>{{$manufacturersOrder -> tovar_name}}</td>
            <td>@if($manufacturersOrder -> tip == "box") Ящик @else ростовка @endif</td>
            <td>{{$manufacturersOrder -> tovar_in_order_count}}</td>
            <td>@if($manufacturersOrder -> tip == "box") {{$manufacturersOrder->box_count}} @else {{$manufacturersOrder->rostovka_count}} @endif</td>
            <td>{{$manufacturersOrder -> size_name}}</td>
            <td>{{$manufacturersOrder -> prise}}</td>
            <td>{{$manufacturersOrder -> this_tovar_in_order_price}}</td>
        </tr>

        @endforeach
    </table>
</div>
<div class="cost">
    <p>Упаковок:</p>
    <p>Кол-во:</p>
    <p>Сумма: <span class="price">1360 грн</span></p>

</div>
</body>
</html>