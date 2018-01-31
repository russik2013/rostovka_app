<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\OrderDetails;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index($page_num = 1, $count_on_page = 14){

        $orders = Order::skip($count_on_page * ($page_num - 1)) -> take($count_on_page)
            ->with('details') ->groupBy('id') ->  get();

        foreach ($orders as $order){

            foreach ($order -> details as $detail){

                $order -> all_prise += $detail -> this_tovar_in_order_price;

            }

        }

        $all_order_count = Order::count();

        $pagination = ceil($all_order_count/$count_on_page);

        return view('admin.product.orders', compact('orders', 'pagination'));

    }

    public function orderInfo($id){

        $order = Order::with('details') -> find($id);

        //dd($order);

        return view('admin.product.orderInfo', compact('order'));

    }

    public function deleteOrderDetail(Request $request){

        OrderDetails::find($request -> id) -> delete();

    }


    public function deleteOrder(Request $request){

        Order::find($request -> id) ->details() -> delete();

        Order::find($request -> id)  -> delete();

    }


    public function addOrderDetail(Request $request){

         $ids = [];

         for($i = 0; $i < count($request -> data); $i ++){

             $ids[] = $request -> data[$i]['id'];

         }

         $orderDates = [];

        for($i = 0; $i < count($request -> data); $i ++){

            $orderDates[ $request -> data[$i]['id']] = [$request -> data[$i]['orderID'], $request -> data[$i]['quantity'] , $request -> data[$i]['type']];

        }

        $products = Product::whereIn('id',$ids) -> with('photo') -> get();
        $insert_mass = [];
            foreach ($products as $product) {

                if($orderDates[$product -> id][2] == 'box'){

                    $this_tovar_in_order_price = $product->prise * $product->box_count * $orderDates[$product -> id][1];

                }else {

                    $this_tovar_in_order_price = $product->prise * $product->rostovka_count * $orderDates[$product -> id][1];

                }

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
                        'order_id' => $orderDates[$product -> id][0],
                        'tovar_in_order_count' => $orderDates[$product -> id][1],
                        'this_tovar_in_order_price' => $this_tovar_in_order_price,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                        'image' => $product-> photo->photo_url,
                        'prise_zakup' => $product-> prise_zakup
                    ];


                }

        OrderDetails::insert($insert_mass);

    }
}
