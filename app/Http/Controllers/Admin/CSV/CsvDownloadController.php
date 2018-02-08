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

        //dd($request -> all());

        if(Type::where('id', $request -> type_id)->first())
            if(Type::where('id', $request -> type_id) ->first() -> name == 'обувь')
                $type = Type::all()->pluck('id')->toArray();
            else  $type = Type::where('id', $request -> type_id)->pluck('id')->toArray();

        if($request -> season_id == 1)
                $season = Season::all()->pluck('id')->toArray();
            else  $season = Season::where('id', $request -> season_id)->pluck('id')->toArray();


        $products = Product::with('category','manufacturer','season','type', 'size', 'photo')
            -> where('manufacturer_id', $request -> manufacturer_id) ->whereIn('type_id', $type)
            ->whereIn('season_id', $season)-> get();

        if($products -> count() > 0) {
            $data = [];
            $i = 0;
            foreach ($products as $product) {

                $i++;

                if($product->size)
                    $sizes = explode('-', $product->size->name);
                else $sizes = explode('-', 'none-none');

                if($product -> photo)
                    $photo_one = $product -> photo -> photo_url;
                else $photo_one = '';

                $data[] = [

                    "ID" => $product->id,
                    "Артикул" => $product->article,
                    "Бренд" => $product->manufacturer->name,
                    "Размер от" => $sizes[0],
                    "Размер до" => $sizes[1],
                    "Тип обуви" => $product->type->name,
                    "Категория" => $product->category->name,
                    "Пол" => $product->sex,
                    "Сезон" => $product->season->name,
                    "Кол в ящике" => $product->box_count,
                    "Мин. Кол" => $product->rostovka_count,
                    "Цена закупки" => $product->prise_zakup,
                    "Цена продажи" => $product->prise,
                    "Валюта" => $product->currency,
                    "Наличие" => $product->accessibility,
                    "Материал" => $product->material,
                    "Цвет" => "",
                    "Скидка" => $product->discount,
                    "Страна производитель" => "",
                    //"show_product" => $product ->show_product,
                    "Описание" => $product->full_description,
                    "Фото1" => $photo_one,
                    "Фото2" => "",
                    "Фото3" => ""
//                  "tip_vyazki" => $product ->tip_vyazki

                ];

            }

            Excel::create('Filename', function ($excel) use ($data) {

                $excel->sheet('Sheetname', function ($sheet) use ($data) {

                    $sheet->fromArray($data);

                });

            })->export('xls');
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


        $products = Product::with('category','manufacturer','season','type', 'size', 'photo')
            -> where('manufacturer_id', $request -> manufacturer_id) ->whereIn('type_id', $type)
            ->whereIn('season_id', $season)-> get();

//        dd($request ->all());/

        if($products->count() > 0) {
            $data = [];

            foreach ($products as $product) {

                $data[] = [

                    "№" => count($data) + 1,
                    "Фото" => $product->photo->photo_url,
                    "Товар" => $product->name,
                    "артикул" => $product->article,
                    "размер" => $product->size->name,
                    "Пар в ящике" => $product->box_count,
                    "Цена закуп" => $product->prise_zakup,
                    "Цена сайт" => $product->prise,

                ];

            }

            Excel::create('Filename', function ($excel) use ($data) {

                $excel->sheet('Sheetname', function ($sheet) use ($data) {

                    for ($i = 1; $i < count($data) + 1; $i++) {

                        if ($i > 2)
                            $sheet->setHeight($i, 130);
                        else
                            $sheet->setHeight($i, 25);

                    }

                    $sheet->fromArray($data);

                    $sheet->setWidth('A', 25);
                    $sheet->setWidth('B', 40);
                    $sheet->setWidth('C', 40);
                    $sheet->setWidth('D', 40);
                    $sheet->setWidth('E', 10);
                    $sheet->setWidth('F', 10);
                    $sheet->setWidth('G', 20);
                    $sheet->setWidth('H', 20);

                    for ($i = 1; $i < count($data); $i++) {
                        if (file_exists('image/products/' . $data[$i]['Фото'])) {
                            $objDrawing = new PHPExcel_Worksheet_Drawing;
                            $objDrawing->setPath(public_path('../image/products/' . $data[$i]['Фото'])); //your image path
                            $objDrawing->setName('imageRussik');
                            $objDrawing->setWorksheet($sheet);
                            $objDrawing->setCoordinates('B' . ($i + 2));
                            $objDrawing->setResizeProportional();
                            $objDrawing->setOffsetX($objDrawing->getWidth() - $objDrawing->getWidth() / 5);
                            $objDrawing->setOffsetY(10);
                            $objDrawing->setOffsetX(30);
                            $objDrawing->setWidth(280);
                            $objDrawing->setHeight(150);
                        }

                    }

                });

            })->export('xls');
        }else return redirect()->back()->withInput()->withErrors(['msg'=> 'Not find items']);
    }
}
