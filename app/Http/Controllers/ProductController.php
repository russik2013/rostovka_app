<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\ProductRequest;
use App\Manufacturer;
use App\Product;
use App\Season;
use App\Size;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function create(){
        $manufacturers = Manufacturer::all();
        $categories = Category::all();
        $types = Type::all();
        $seasons = Season::all();
        $sizes = Size::all();
        return view('admin.product.add', compact('manufacturers', 'categories', 'types', 'seasons', 'sizes'));

    }

    public function add(ProductRequest $request){



    }

    public function show($id, $number = null){

        $product = Product::find($id);

        return view('user.product.product_inner', compact('product', 'number'));

    }

    public function getProductsToCategory(Request $request){

        $products = Product::where('category_id', '=', $request -> category_id)
            ->whereIn('season_id', $this -> seasonFilter($request ->filters))
            ->whereIn('type_id', $this -> typeFilter($request ->filters))
            ->whereIn('manufacturer_id', $this -> manufacturerFilter($request ->filters))
           ->skip($request -> count_on_page * ($request ->page_num - 1)) -> take($request -> count_on_page)
            ->with('photo') ->groupBy('id') ->  get();



        foreach ($products as $product){

            $product -> full__price = $product -> prise * $product -> box_count;
            $product -> rostovka__price = $product -> prise * $product -> rostovka_count;
            $product -> types = $product -> type -> name;
            $product -> product_url = url($product ->id.'/product');
        }

        return $products;

    }


    protected function seasonFilter($filters){
        $seasons = [];
        if($filters && !empty($filters)) {
            foreach ($filters as $filter) {

                if ($filter[2] == 'season') {

                    $seasons[] = $filter[1];

                }

            }
        }
        if($seasons){
            return Season::whereIn('name', $seasons) -> pluck('id');
        }
        return Season::all() -> pluck('id');
    }

    protected function typeFilter($filters){
        $types = [];
        if($filters  && !empty($filters)) {
            foreach ($filters as $filter) {

                if ($filter[2] == 'tip') {

                    $types[] = $filter[1];

                }

            }
        }

        if($types){
            return Type::whereIn('name', $types) -> pluck('id');
        }

        return Type::all() -> pluck('id');
    }

    protected function manufacturerFilter($filters){
        $manufacturers = [];
        if($filters  && !empty($filters)) {
            foreach ($filters as $filter) {

                if ($filter[2] == 'manufacturers') {

                    $manufacturers[] = $filter[1];

                }

            }
        }

        if($manufacturers){
            return Manufacturer::whereIn('name', $manufacturers) -> pluck('id');
        }
        return Manufacturer::all() -> pluck('id');
    }



    public function getPaginationPageCount(Request $request){

        $products_count = Product::where('category_id', '=', $request -> category_id)
            -> count();
        $count_of_page = $products_count / $request ->count_on_page;

        return ceil($count_of_page);

    }


    public function getNewsProduct(){

        $products = Product::take(10) ->orderBy('id', 'desc') -> get();

        return $products;

    }

    public function getProduct(Request $request){

        $product = Product::find($request->id);

        $product -> full__price = $product -> prise * $product -> box_count;
        $product -> rostovka__price = $product -> prise * $product -> rostovka_count;
        $product -> types = $product -> type -> name;
        $product -> product_url = url($product ->id.'/product');

        return $product;
    }
}
