<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetails;
use App\Product;
use App\TopSale;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function makeOrder(Request $request){

        $order = new Order();

        $order -> fill($request -> all());

        $order -> save();

        $this ->addOrderDetais($request -> tovar, $order -> id);

        $this ->setTopTovar($request -> tovar);

    }

    public function getAllTovarsInOrderIds($tovars){

        $ids = [];

        foreach ($tovars as $tovar){

            $ids[] = $tovar['product_id'];

        }

        return $ids;

    }

    public function addOrderDetais($tovars, $order_id){
        $products = Product::whereIn('id',$this -> getAllTovarsInOrderIds($tovars)) -> get();
        $insert_mass = [];
        foreach ($tovars as $tovar){
            foreach ($products as $product) {
                if ($product->id == $tovar['product_id']) {
                    $insert_mass[] = [
                        'article' => $product->article,
                        'tovar_name' => $product->name,
                        'rostovka_count' => $product->rostovka_count,
                        'box_count' => $product->box_count,
                        'prise' => $product->prise,
                        'manufacturer_name' => $product->manufacturer->name,
                        'category_name' => $product->category->name,
                        'currency' => $product->currency,
                        'full_description' => $product->full_description,
                        'discount' => $product->discount,
                        'accessibility' => $product->accessibility,
                        'type_name' => $product->type->name,
                        'season_name' => $product->season->name,
                        'size_name' => $product->size->name,
                        'order_id' => $order_id,
                        'tovar_in_order_count' => $tovar['quantity'],
                        'this_tovar_in_order_price' => $tovar['quantityPrice'],
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ];


                }
            }

        }
        OrderDetails::insert($insert_mass);


    }


    public function setTopTovar($tovars){

        foreach ($tovars as $tovar){
            $top = TopSale::where('product_id', '=',$tovar['product_id']) -> first();
            if($top){

                $top -> count = $top -> count + $tovar['quantity'];

            }else{

                $top = new TopSale();
                $top -> product_id = $tovar['product_id'];
                $top -> count = $tovar['quantity'];
            }

            $top -> save();

        }

    }

    public function getTopSales(){
        $top = TopSale::orderBy('count','desc') -> take(10) -> pluck('product_id');
        $product = Product::whereIn('id', $top) ->get();

        return $product;
    }
}
