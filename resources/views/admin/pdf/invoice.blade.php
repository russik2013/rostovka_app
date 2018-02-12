<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Table</title>

</head>
<body>

<style>

    body { font-family: DejaVu Sans, sans-serif; }

    .table-container {
        max-width: 1100px;
        margin: 0 auto;
        text-align: center;
    }
    .table-container .contacts {
        display: flex;
        flex-direction: row;
    }
    .table-container .contacts ul {
        list-style: none;
        padding: 0;
        width: 50%;
        text-align: right;
    }
    .table-container .contacts ul.table-contacts {
        width: 65%;
    }
    .table-container .contacts ul.detailed-contacts {
        width: 35%;
    }
    .table-container .contacts ul p {
        text-align: right;
    }
    .table-container table {
        border-collapse: collapse;
        width: 100%;
    }
    .table-container table th {
        color: black;
        padding: 10px;
        text-align: center;
        font-weight: normal;
    }
    .table-container table td {
        padding: 10px;
        color: black;
        font-weight: normal;
    }
    .table-container .col1 {
        width: 100px;
    }
    .table-container .col2 {
        width: 500px;
    }
    .table-container .col-normal {
        width: 100px;
    }
    .table-container .bottom-content p {
        text-align: left;
    }
    .table-container .bottom-content .price {
        font-weight: bold;
        font-size: 20px;
    }


</style>

<div class="table-container">
    <div class="table-title">
        <h1>№ заказа 3175</h1>
    </div>
    <div class="contacts">



        <ul class="table-contacts">
            <li><p>ФИО:</p></li>
            <li><p>Телефон:</p></li>
            <li><p>Адрес доставки:</p></li>
            <li><p>Номер отделения компании перевозчика:</p></li>
            <li><p>Способы доставки:</p></li>
            <li><p>Способы оплаты:</p></li>
        </ul>
        <ul class="detailed-contacts">
            <li><p>Володина</p></li>
            <li><p>(097) 990-11-85</p></li>
            <li><p>Днепр</p></li>
            <li><p>Новая Почта, 58</p></li>
            <li><p>Новая Почта</p></li>
            <li><p>На карту "ПриватБанка"</p></li>
        </ul>
    </div>
    <table width="1100" cellpadding="4" cellspacing="0" border="1">
        <tr>
            <th colspan="2">Товар</th>
            <th>Тип</th>
            <th>Кол-во.</th>
            <th>Пар в ящ/рост.</th>
            <th>Цена за шт.</th>
            <th>Общая цена</th>
        </tr>
        <tr>
            <td class="col1">1</td>
            <td class="col2">2</td>
            <td class="col-normal">3</td>
            <td class="col-normal">4</td>
            <td class="col-normal">5</td>
            <td class="col-normal">6</td>
            <td class="col-normal">7</td>
        </tr>
    </table>
    <div class="bottom-content">
        <p>Всего к оплате:</p>
        <p class="price">2560.00 грн.</p>
    </div>
</div>
</body>
</html>