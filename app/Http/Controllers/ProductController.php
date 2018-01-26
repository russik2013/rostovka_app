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

    public function getSizesMass(){

        return [Size::min('min'),Size::max('max')];

    }

    public function getProductsToCategory(Request $request){

        $orderType = 'desc';
        $order = 'id';
        if(isset($request -> order_type)) {
            if ($request->order_type == 0) {

                $orderType = 'asc';
                $order = 'id';

            }

            if ($request->order_type == 1) {

                $orderType = 'asc';
                $order = 'prise';

            }

            if ($request->order_type == 2) {

                $orderType = 'desc';
                $order = 'prise';

            }
        }


        $sex = $this -> getSex($request -> category_id);

        if($sex == false)
            $sex = $this->sexFilter($request->filters);

        if($sex == false)
            $sex = null;

        if($sex == null) {
            $products = Product::where('category_id', '=', $request->category_id)
                ->whereIn('season_id', $this->seasonFilter($request->filters))
                ->whereIn('type_id', $this->typeFilter($request->filters))
                ->whereIn('manufacturer_id', $this->manufacturerFilter($request->filters))
                ->whereIn('size_id', $this->sizeFilter($request->filters))
                ->whereNull('sex')
                ->skip($request->count_on_page * ($request->page_num - 1))->take($request->count_on_page)
                ->with('photo', 'size')->orderBy($order,$orderType)->get();
        }
        else {
            $products = Product::where('category_id', '=', $request->category_id)
                ->whereIn('season_id', $this->seasonFilter($request->filters))
                ->whereIn('type_id', $this->typeFilter($request->filters))
                ->whereIn('manufacturer_id', $this->manufacturerFilter($request->filters))
                ->whereIn('size_id', $this->sizeFilter($request->filters))
                ->whereIn('sex', $sex)
                ->skip($request->count_on_page * ($request->page_num - 1))->take($request->count_on_page)
                ->with('photo', 'size')->orderBy($order,$orderType)->get();
        }

        foreach ($products as $product){

            $product -> full__price = $product -> prise * $product -> box_count;
            $product -> rostovka__price = $product -> prise * $product -> rostovka_count;
            $product -> types = $product -> type -> name;
            $product -> product_url = url($product ->id.'/product');
        }



        return response($products);

    }

    protected function getSex($category_id){

        if($category_id == 2)
            return array('Мужское');
        if($category_id == 3)
            return array('Женское');

        return false;

    }

    protected function sexFilter($filters){

        $sexs = [];
        if($filters && !empty($filters)) {
            foreach ($filters as $filter) {

                if ($filter[2] == 'sex') {

                    $sexs[] = $filter[1];

                }

            }
        }
        if($sexs)

            return $sexs;

        else return false;

    }

    protected function sizeFilter($filters){

        $sizes_min = 0;
        $sizes_max = 0;

        if($filters && !empty($filters)){

            foreach ($filters as $filter){

                if ($filter[2] == 'size') {

                    if($filter[0] == 'size_min')
                        $sizes_min = $filter[1];

                    if($filter[0] == 'size_max')
                        $sizes_max = $filter[1];

                }

            }

        }



        if($sizes_min != 0 && $sizes_max != 0){
            return Size::where('min', '>=', $sizes_min) -> where('max','<=', $sizes_max)
                ->pluck('id');
        }

        return Size::all() ->pluck('id');

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

        $sex = $this -> getSex($request -> category_id);

        if($sex == false)
            $sex = $this->sexFilter($request->filters);

        if($sex == false)
            $sex = null;

        if($sex == null) {
            $products_count = Product::where('category_id', '=', $request->category_id)
                ->whereIn('season_id', $this->seasonFilter($request->filters))
                ->whereIn('type_id', $this->typeFilter($request->filters))
                ->whereIn('manufacturer_id', $this->manufacturerFilter($request->filters))
                ->whereIn('size_id', $this->sizeFilter($request->filters))
                ->whereNull('sex')
                -> count();
        }
        else {
            $products_count = Product::where('category_id', '=', $request->category_id)
                ->whereIn('season_id', $this->seasonFilter($request->filters))
                ->whereIn('type_id', $this->typeFilter($request->filters))
                ->whereIn('manufacturer_id', $this->manufacturerFilter($request->filters))
                ->whereIn('size_id', $this->sizeFilter($request->filters))
                ->whereIn('sex', $sex)
                -> count();
        }
        $count_of_page = $products_count / $request ->count_on_page;

        return ceil($count_of_page);

    }


    public function getNewsProduct(){

        $products = Product::take(10) ->with('photo','size') ->orderBy('id', 'desc') -> get();
        //$products = Product::take(10)  -> get();
        foreach ($products as $product){
            $product -> full__price = $product -> prise * $product -> box_count;
            $product -> rostovka__price = $product -> prise * $product -> rostovka_count;
            $product -> types = $product -> type -> name;
            $product -> product_url = url($product ->id.'/product');
            //$product -> image_url = $product ->photo->photo_url;

        }

        return $products;

    }

    public function getProduct(Request $request){

        $product = Product::with('photo')  ->find($request->id);

        $product -> full__price = $product -> prise * $product -> box_count;
        $product -> rostovka__price = $product -> prise * $product -> rostovka_count;
        $product -> types = $product -> type -> name;
        $product -> product_url = url($product ->id.'/product');

        return $product;
    }

}
