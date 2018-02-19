<?php

namespace App\Http\Controllers\Admin\CSV;

use App\Product;
use App\Season;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use PHPExcel_Worksheet_Drawing;

class CsvDownloadController extends Controller
{
    public function getCsvFileWithProduct(Request $request){

        if(Type::where('id', $request -> type_id)->first())
            if(Type::where('id', $request -> type_id) ->first() -> name == 'обувь')
                $type = Type::all()->pluck('id')->toArray();
            else  $type = Type::where('id', $request -> type_id)->pluck('id')->toArray();

        if($request -> season_id == 1)
                $season = Season::all()->pluck('id')->toArray();
            else  $season = Season::where('id', $request -> season_id)->pluck('id')->toArray();


        $accessibility = [0,1];


            if ($request->accessibility == 0) {
                $accessibility = [0];

            }
            if ($request->accessibility == 1) {
                $accessibility = [1];

            }


        $products = Product::with('category','manufacturer','season','type', 'size', 'photo')
            -> where('manufacturer_id', $request -> manufacturer_id) ->whereIn('type_id', $type)
            ->whereIn('season_id', $season) -> whereIn('accessibility',$accessibility)-> get();

        //dd($request -> all(), $season, $type, $products, $accessibility);

        if($products -> count() > 0) {
            $data = [];
            $i = 0;
            foreach ($products as $product) {

                $i++;

//                if($product->size)
//                    $sizes = explode('-', $product->size->name);
//                else $sizes = explode('-', 'none-none');

                if($product -> photo)
                    $photo_one = $product -> photo -> photo_url;
                else $photo_one = '';

                if($product->size)
                    $size = $product->size->name;
                else $size = 'none';

                //dd($product->accessibility);

                $data[] = [

                    "ID" => $product->id,
                    "Артикул" => $product->article,
                    "Цена закупки" => $product->prise_zakup,
                    "Цена продажи" => $product->prise_default,
                    "Наличие" => (string)$product->accessibility,
                    "Бренд" => $product->manufacturer->name,
                    "Размер" => $size,
                    "Тип обуви" => $product->type->name,
                    "Категория" => $product->category->name,
                    "Пол" => $product->sex,
                    "Сезон" => $product->season->name,
                    "Кол в ящике" => $product->box_count,
                    "Мин. Кол" => $product->rostovka_count,
                    "Валюта" => $product->currency,
                    "Скидка" => $product->discount,
                    //"show_product" => $product ->show_product,
                    "Описание" => $product->full_description,

                    "Материал верх" =>$product ->material,
                    "Материал внутри" =>$product ->material_inside,
                    "Материал стельки" =>$product ->material_insoles,
                    "Цвет" =>$product ->color,
                    "Страна производитель" =>$product ->manufacturer_country,
                    "Повторы" =>$product ->repeats,

                    "Фото1" => $photo_one,
                    "Фото2" => "",
                    "Фото3" => ""
//                  "tip_vyazki" => $product ->tip_vyazki

                ];

            }

            Excel::create('Filename', function ($excel) use ($data) {

                $excel->sheet('Sheetname', function ($sheet) use ($data) {

                    for ($i = 1; $i < count($data) + 1; $i++) {

                            $sheet->setHeight($i, 25);

                    }

                    $sheet->fromArray($data);

                });

            })->export('xlsx');
        }else return redirect()->back()->withInput()->withErrors(['msg'=> 'Not find items']);

    }

    public function getCsvFileWithOrdersToManufacturer(Request $request){

        if(Type::where('id', $request -> type_id)->first())
            if(Type::where('id', $request -> type_id) ->first() -> name == 'обувь')
                $type = Type::all()->pluck('id')->toArray();
            else  $type = Type::where('id', $request -> type_id)->pluck('id')->toArray();

        if($request -> season_id == 1)
            $season = Season::all()->pluck('id')->toArray();
        else  $season = Season::where('id', $request -> season_id)->pluck('id')->toArray();

        $accessibility = [0,1];

            if ($request->accessibility == 0) {
                $accessibility = [0];

            }
            if ($request->accessibility == 1) {
                $accessibility = [1];

            }



        $products = Product::with('category','manufacturer','season','type', 'size', 'photo')
            -> where('manufacturer_id', $request -> manufacturer_id) ->whereIn('type_id', $type)
            ->whereIn('season_id', $season)-> whereIn('accessibility',$accessibility)-> get();

        if($products->count() > 0) {
            $data = [];
            $photosData = [];


            foreach ($products as $product) {

                if($product->photo)
                    $photo = $product->photo->photo_url;
                else $photo = "";

                if($product->size)
                    $size = $product->size->name;
                else $size = 'none';

                $data[] = [

                    "Фото" => "",
                    "Товар" => $product->name,
                    "размер" => $size,
                    "Пар в ящике" => $product->box_count,
                    "Цена закуп" => $product->prise_zakup,
                    "Цена сайт" => $product->prise,

                ];
                $photosData[] = ["Фото" => $photo];

            }


            Excel::create('Filename', function ($excel) use ($data, $photosData) {

                $excel->sheet('Sheetname', function ($sheet) use ($data, $photosData) {

                    for ($i = 1; $i < count($data) + 2; $i++) {

                        if ($i > 1)
                            $sheet->setHeight($i, 53);
                        else
                            $sheet->setHeight($i, 25);

                    }


                    $sheet->fromArray($data);
                    $sheet->setWidth('A', 12);
                    $sheet->setWidth('B', 20);
                    $sheet->setWidth('C', 20);
                    $sheet->setWidth('D', 20);
                    $sheet->setWidth('E', 10);
                    $sheet->setWidth('F', 10);
                    $sheet->setWidth('G', 20);
                    $sheet->setWidth('H', 20);

                    for ($i = 1; $i < count($photosData); $i++) {
                        if($photosData[$i]['Фото'] != "")

                        if (file_exists( 'images/products/' . $photosData[$i]['Фото'])) {
                            $objDrawing = new PHPExcel_Worksheet_Drawing;
                            $objDrawing->setPath(public_path('images/products/' . $photosData[$i]['Фото'])); //your image path
                            $objDrawing->setName('imageRussik');
                            $objDrawing->setWorksheet($sheet);
                            $objDrawing->setCoordinates('A' . ($i + 2));
                            $objDrawing->setResizeProportional();
                            $objDrawing->setOffsetX($objDrawing->getWidth() - $objDrawing->getWidth() / 5);
                            $objDrawing->setOffsetY(2);
                            $objDrawing->setOffsetX(10);
                            $objDrawing->setWidth(90);
                            $objDrawing->setHeight(60);
                        }

                    }

                });

            })->export('xls');
        }else return redirect()->back()->withInput()->withErrors(['msg'=> 'Not find items']);
    }
}
