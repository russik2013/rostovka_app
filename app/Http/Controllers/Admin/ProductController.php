<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Requests\ProductRequest;
use App\Manufacturer;
use App\Product;
use App\ProductPhotos;
use App\Season;
use App\Size;
use App\Type;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index($page_num = 1, $count_on_page = 20){

        $manufactures = Manufacturer::all();
        $seasons = Season::all();

        $products = Product::skip($count_on_page * ($page_num - 1)) -> take($count_on_page)
            ->with('category','manufacturer') ->groupBy('id') ->  get();

        $all_product_count = Product::count();

        $pagination = ceil($all_product_count/$count_on_page);

        return view('admin.product.products', compact('products', 'pagination', 'manufactures', 'seasons'));
    }

    public function finder(Request $request){

        return Product::where('name','like', '%'.$request->name.'%') -> with('photo', 'manufacturer', 'category')->get();

    }


    public function delete(Request $request){

        if(Product::find($request -> id) -> photo -> photo_url)

            //dd(Product::find($request -> id) -> photo -> photo_url);
        File::delete('../image/products/'. Product::find($request -> id) -> photo -> photo_url);

        Product::find($request -> id) -> delete();

    }

    public function update(ProductRequest $request){

        $product = Product::find($request -> id);

        if($product){

            $product -> fill($request ->all());

            if($request -> image_url){

                File::delete('../image/products/'. $product -> photo() -> photo_url);

                $request->image_url->move('../image/products', "product_" . Carbon::now() . '.png');

                $productPhoto = ProductPhotos::where('product_id','=', $product -> id) -> first();

                $productPhoto -> photo_url = "product_" . Carbon::now() . '.png';

                $productPhoto -> save();

            }

            $product -> save();

            return response('done', 200);

        }else return response('wrong product id', 404);

    }

    public function edit($id){

        $manufacturer = Manufacturer::all();
        $categories = Category::all();
        $types = Type::all();
        $seasons = Season::all();
        $sizes = Size::all();
        $product = Product::with('photo') -> find($id);

        if($product )

            return view('admin.product.productedit', compact('manufacturer', 'categories', 'types', 'seasons', 'sizes', 'product'));

        else return response('Wrong product id', 404);

    }
}
