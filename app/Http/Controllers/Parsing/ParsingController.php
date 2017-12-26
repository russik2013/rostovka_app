<?php

namespace App\Http\Controllers\Parsing;

use App\Parsing\Category;
use App\Parsing\Manufacturer;



use App\Parsing\Product;
use App\Parsing\ProductAttribute;
use App\Parsing\ProductAttributeOptions;
use App\Parsing\Ref;
use App\ProductPhotos;
use App\Season;
use App\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Manufacturer as Manuf;
use App\Type;


class ParsingController extends Controller
{
    protected $options = [];

    public function index(){
        $inset_array = Manufacturer::all();

        dd($inset_array);


        return view('debug', compact('insert_array'));


//        ini_set('max_execution_time', 300);
//
//        $seasons = Season::all();
//
//        $sizes = Size::all();
//
//        $types = Type::all();
//
//        $skip = 60000;
//        $take = 6000;
//
//
//        $products = Product::skip($skip) -> take($take) -> whereNotNull('image') ->get();
//
//
//        $products_attr = ProductAttribute::whereIn('entity',$products -> pluck('id') -> toArray())
//            ->distinct() -> pluck('value') ->toArray();
//
//
//        $products_attr_options = ProductAttributeOptions::whereIn('id',$products_attr) -> pluck('value', 'id') -> toArray();
//
//
//        $test = ProductAttribute::whereIn('entity',$products -> pluck('id') -> toArray())
//            ->distinct() -> get();
//
//        $test->transform(function ($item, $key) {
//            if($item -> attribute == 'season')
//                $this ->options[$item -> entity]['season'] = $item -> value;
//            if($item -> attribute == 'type')
//                $this ->options[$item -> entity]['type'] = $item -> value;
//            if($item -> attribute == 'size')
//                $this ->options[$item -> entity]['size'] = $item -> value;
//        });
//
//        $categories = Ref::whereIn('product',$products -> pluck('id') -> toArray()) ->pluck('category','product') -> toArray();
//
//        $insert_array = [];
//
//        foreach ($products as $product){
//
//            if(isset($this ->options[ $product -> id ]['season'])) {
//                $season = $seasons->where('name', '=', $products_attr_options[$this->options[$product->id]['season']])->first()->id;
//            }
//            else
//                $season = 0;
//
//            if(isset($this ->options[ $product -> id ]['size']))
//                $size = $sizes -> where('name', '=', $products_attr_options[$this ->options[ $product -> id ]['size']]) -> first() -> id;
//            else
//                $size = 0;
//
//            if(isset($this ->options[ $product -> id ]['type']))
//                $type = $types -> where('name', '=', $products_attr_options[$this ->options[ $product -> id ]['type']]) -> first() -> id;
//            else
//                $type = 0;
//
//            if ($product -> currency_id == 2){
//                $currency = 'дол';
//            }else
//                $currency = 'грн';
//
//            $discount = '0%';
//
//            if($categories[$product -> id] == 5 || $categories[$product -> id] == 4 ||
//                $categories[$product -> id] == 3 ||$categories[$product -> id] == 2 || $product -> manufacturer_id == 3){
//
//                $discount = '10%';
//            }
//
//            $manufacturer_id = $product -> manufacturer_id;
//
//            if($manufacturer_id == null)
//                $manufacturer_id = 0;
//
//
//            $insert_array[] = [ 'article' => $product -> seo_alias,
//                'name' => $product -> name,
//                'rostovka_count' => $product -> in_ros,
//                'box_count' => $product -> in_box,
//                'prise' => $product -> price,
//                'manufacturer_id' => $manufacturer_id,
//                'category_id' => $categories[$product -> id] - 1,
//                'show_product' => 1,
//                'currency' => $currency,
//                'full_description' => $product -> full_description,
//                'discount' => $discount,
//                'accessibility' => $product -> availability,
//                //'image_url' => $product -> image,
//                'type_id' => $type,
//                'season_id' => $season,
//                'size_id' => $size];
//
//        }
//
//        foreach (array_chunk($insert_array,1000) as $t) {
//
//            \App\Product::insert($t);
//
//
//        }
//        $photo_insert = [];
//        $j = 0;
//        $products_photos = $products ->pluck('image') ->toArray();
//
//        for ($i = $skip; $i < 63337; $i++){
//
//            $photo_insert[] = ['photo_url' => $products_photos[$j],
//                               'product_id' => $i + 1];
//
//        $j++;
//        }
//
//        ProductPhotos::insert($photo_insert);





        //dd(Product::all());

    }
}