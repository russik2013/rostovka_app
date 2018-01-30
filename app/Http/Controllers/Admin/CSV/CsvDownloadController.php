<?php

namespace App\Http\Controllers\Admin\CSV;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class CsvDownloadController extends Controller
{
    public function getCsvFileWithProduct(Request $request){



        $products = Product::with('category','manufacturer','season','type', 'size', 'photo')
            -> where('manufacturer_id', $request -> manufacturer_id) -> get();


        $data = [];

        foreach ($products as $product){

            $sizes = explode('-',$product ->size -> name);

            $data[] = [

                    "ID" => $product -> id,
                    "Артикул" => $product ->article,
                    "Бренд" => $product ->manufacturer -> name,
                    "Размер от" => $sizes[0],
                    "Размер до" => $sizes[1],
                    "Тип обуви" => $product ->type -> name,
                    "Категория" => $product ->category -> name,
                    "Пол" => $product ->sex,
                    "Сезон" => $product ->season -> name,
                    "Кол в ящике" => $product ->box_count,
                    "Мин. Кол" => $product ->rostovka_count,
                    "Цена продажи" => $product ->prise,
                    "Валюта" => $product ->currency,
                    "Наличие" => $product ->accessibility,
                    "Материал" => $product ->material,
                    "Скидка" => $product ->discount,
                    //"show_product" => $product ->show_product,
                    "Описание" => $product ->full_description,
//                  "tip_vyazki" => $product ->tip_vyazki

            ];

        }

        Excel::create('Filename', function($excel) use($data) {

            $excel->sheet('Sheetname', function($sheet) use($data) {

                $sheet->fromArray($data);

            });

        })->export('xls');


//        "id" => 1205
//    "article" => "bosonozhki_mxm_6446h"
//    "name" => "Босоножки MxM 6446H"
//    "rostovka_count" => 6
//    "box_count" => 12
//    "prise" => 142.0
//    "manufacturer_id" => 2
//    "category_id" => 1
//    "show_product" => 1
//    "currency" => "грн"
//    "full_description" => ""
//    "discount" => "10%"
//    "accessibility" => 1
//    "type_id" => 22
//    "season_id" => 3
//    "size_id" => 6
//    "created_at" => null
//    "updated_at" => null
//    "sex" => null
//    "material" => null
//    "tip_vyazki" => null

    }
}
