<?php

namespace App\Http\Controllers\Admin\CSV;

use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class CsvOrderController extends Controller
{
    public function getCsvFileWithOrders(Request $request){

        $orders = Order::with('details')
            -> where('created_at', '>', $request -> dataFrom)
            -> where('created_at', '<', $request -> dataTo)
            -> get();

        //dd($orders, $request -> dataFrom, $request -> dataTo);

        $data = [];

        foreach ($orders as $order){

            foreach ($order -> details as $detail){

                $data[$detail -> manufacturer_name][0] = [

                    "" => Carbon::now(),
                    "Номер заказа" => 'Заказчик: Rostovka.net Сергей тел: 0672533305',
                    "Фото" => 'Поставщик: '.$detail -> manufacturer_name.' Ул. Зеленая 1299, Оля Ли',
                    "Aртикул" =>'QRкод'

                ];

            }

        }


        foreach ($orders as $order){

            foreach ($order -> details as $detail){

                if(($detail -> this_tovar_in_order_price / $detail -> tovar_in_order_count)/ $detail -> prise == $detail -> box_count)
                    $type = 'ящ';
                else
                    $type = 'рост';

                if($type == 'ящ')
                    $count = $detail -> box_count;
                else $count = $detail -> rostovka_count;

                if(!isset($data[$detail -> manufacturer_name])){

                    $count = 1;

                }else {

                    $count = count($data[$detail -> manufacturer_name]) + 1;
                }

                $data[$detail -> manufacturer_name][] = [
                    "" => $count,
                    "Номер заказа" => $detail -> order_id,
                    "Фото" => $detail -> image,
                    "Aртикул" => $detail -> article,
                    "Ящ/рост" => $type,
                    "Кол-во" => $detail -> tovar_in_order_count,
                    "Пар в Ящ/рост" => $count,
                    "Цена за Пару(закуп)" => (integer)$detail -> prise_zakup,
                    "Сумма" => (integer) $detail -> prise_zakup*$detail -> tovar_in_order_count*$count

                ];

            }

        }



        Excel::create('Filename', function($excel) use($data) {

            foreach ($data as $key => $value){

                $excel->sheet($key, function($sheet) use($value) {


                    $sheet->fromArray($value);

                });

            }



        })->export('xls');

    }
}
