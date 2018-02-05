<?php

namespace App\Http\Controllers\Admin\CSV;

use App\Order;
use App\Parsing\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use PHPExcel_Worksheet_Drawing;

class CsvOrderController extends Controller
{


    public function getCsvFileWithOrdersToSend(Request $request){

        $orders = Order::where('created_at', '>', $request -> dataFrom)
            -> where('created_at', '<', $request -> dataTo)
            -> get();

        $data = [];

        foreach ($orders as $order){

                $data[$order -> shipping_method][] = [
                    "№" => count($data) + 1,
                    "Фамилия имя отчество" => $order -> first_name.' '. $order -> last_name,
                    'Город.Номер отделения' => $order -> address,
                    'Номер телефона' => $order -> phone,
                    "Сумма" => '',
                    "Кол-во мест" => '',
                    "Галочка" => ""
                ];

        }

        Excel::create('Russik', function($excel) use($data) {

            foreach ($data as $key => $value){

                $excel->sheet($key, function($sheet) use($value) {

                    $sheet->fromArray($value);

                    $sheet->setWidth('A', 8);
                    $sheet->setWidth('B', 30);
                    $sheet->setWidth('C', 30);
                    $sheet->setWidth('D', 30);
                    $sheet->setWidth('E', 10);
                    $sheet->setWidth('F', 20);
                    $sheet->setWidth('G', 20);
                    $sheet->setWidth('H', 20);
                    $sheet->setWidth('I', 8);

                });


            }



        })->export('xls');

        dd($data);

    }

    public function getCsvFileWithOrdersImages(Request $request){

        $orders = Order::with('details')
            -> where('created_at', '>', $request -> dataFrom)
            -> where('created_at', '<', $request -> dataTo)
            -> get();

        $data = [];

        foreach ($orders as $order){

            foreach ($order -> details as $detail){

                $data[$detail -> manufacturer_name][0] = [

                    Carbon::now(),
                    'Заказчик: Rostovka.net Сергей тел: 0672533305',
                    'Поставщик: '.$detail -> manufacturer_name.' Ул. Зеленая 1299, Оля Ли',
                    'QRкод'

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


                $number = count($data[$detail -> manufacturer_name]);

                $data[$detail -> manufacturer_name][] = [
                    $number,
                    $detail -> order_id,
                    $detail -> image,
                    $detail -> article,
                    $type,
                    $detail -> tovar_in_order_count,
                    $count,
                    (integer)$detail -> prise_zakup,
                    (integer) $detail -> prise_zakup*$detail -> tovar_in_order_count*$count

                ];


            }

        }

        Excel::create('Filename', function($excel) use($data) {

            foreach ($data as $key => $value){

                $excel->sheet($key, function($sheet) use($value) {

                    for($i = 1; $i < count($value)+2; $i ++){

                        if($i > 2)
                            $sheet->setHeight($i, 130);
                        else
                            $sheet->setHeight($i, 25);

                    }

                    $sheet->row(1, $value[0]);
                    $sheet->row(2, array("","Номер заказа",'Фото',"Aртикул","Ящ/рост","Кол-во","Пар в Ящ/рост","Цена за Пару(закуп)","Сумма"));

                    $count = 0;
                    $all_prise = 0;

                    for($i = 1; $i < count($value); $i ++){

                        $sheet->row(2+$i, $value[$i]);

                        $count += $value[$i][6];
                        $all_prise += $value[$i][8];

                    }

                    $sheet->row(2+$i, array("","","","","","",$count,"",$all_prise ));
                        $sheet->setWidth('A', 25);
                        $sheet->setWidth('B', 40);
                        $sheet->setWidth('C', 40);
                        $sheet->setWidth('D', 40);
                        $sheet->setWidth('E', 10);
                        $sheet->setWidth('F', 10);
                        $sheet->setWidth('G', 20);
                        $sheet->setWidth('H', 20);
                        $sheet->setWidth('I', 8);

                    for($i = 1; $i < count($value); $i ++){
                        if(file_exists('image/products/'.$value[$i][2])) {
                            $objDrawing = new PHPExcel_Worksheet_Drawing;
                            $objDrawing->setPath(public_path('../image/products/' . $value[$i][2])); //your image path
                            $objDrawing->setName('imageRussik');
                            $objDrawing->setWorksheet($sheet);
                            $objDrawing->setCoordinates('C' . ($i + 2));
                            $objDrawing->setResizeProportional();
                            $objDrawing->setOffsetX($objDrawing->getWidth() - $objDrawing->getWidth() / 5);
                            $objDrawing->setOffsetY(10);
                            $objDrawing->setOffsetX(30);
                            $objDrawing->setWidth(280);
                            $objDrawing->setHeight(150);
                        }

                    }

                });


            }



        })->export('xls');

    }

    public function getCsvFileWithOrders(Request $request){

       // dd($request -> all());

        $orders = Order::with('details')
            -> where('created_at', '>', $request -> dataFrom)
            -> where('created_at', '<', $request -> dataTo)
            -> get();

        $data = [];

        foreach ($orders as $order){

            foreach ($order -> details as $detail){

                $data[$detail -> manufacturer_name][0] = [

                    Carbon::now(),
                    'Заказчик: Rostovka.net Сергей тел: 0672533305',
                    'Поставщик: '.$detail -> manufacturer_name.' Ул. Зеленая 1299, Оля Ли',
                    'QRкод'

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


                $number = count($data[$detail -> manufacturer_name]);

                $data[$detail -> manufacturer_name][] = [
                    $number,
                    $detail -> order_id,
                    $detail -> image,
                    $detail -> article,
                    $type,
                    $detail -> tovar_in_order_count,
                    $count,
                    (integer)$detail -> prise_zakup,
                    (integer) $detail -> prise_zakup*$detail -> tovar_in_order_count*$count

                ];


            }

        }

        Excel::create('Filename', function($excel) use($data) {

            foreach ($data as $key => $value){

                $excel->sheet($key, function($sheet) use($value) {

                    $sheet->row(1, $value[0]);
                    $sheet->row(2, array("","Номер заказа",'Фото',"Aртикул","Ящ/рост","Кол-во","Пар в Ящ/рост","Цена за Пару(закуп)","Сумма"));

                    $count = 0;
                    $all_prise = 0;

                    for($i = 1; $i < count($value); $i ++){

                        $sheet->row(2+$i, $value[$i]);

                        $count += $value[$i][6];
                        $all_prise += $value[$i][8];

                    }

                    $sheet->row(2+$i, array("","","","","","",$count,"",$all_prise ));
                    $sheet->setWidth('A', 25);
                    $sheet->setWidth('B', 40);
                    $sheet->setWidth('C', 40);
                    $sheet->setWidth('D', 40);
                    $sheet->setWidth('E', 10);
                    $sheet->setWidth('F', 10);
                    $sheet->setWidth('G', 20);
                    $sheet->setWidth('H', 20);
                    $sheet->setWidth('I', 8);

                });


            }



        })->export('xls');

    }
}
