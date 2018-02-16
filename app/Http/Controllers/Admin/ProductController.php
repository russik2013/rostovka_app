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
    public function index($name = ""){

        $manufactures = Manufacturer::all();
        $seasons = Season::all();
        $types = Type::all();

        if($name != "")

            $products = Product::with('category','manufacturer', 'photo') ->
            where('name', "like", "%".$name."%")
                ->orderBy('id', 'desc') ->paginate(15);

        else
            $products = Product::with('category','manufacturer', 'photo')  ->orderBy('id', 'desc') ->paginate(15);

        //dd($products -> get());

        return view('admin.product.products', compact('products', 'manufactures', 'seasons', 'types'));
    }

    public function finder(Request $request){

        $products = Product::where('name','like', '%'.$request->name.'%') -> with('photo', 'manufacturer', 'category')->get();

        foreach ($products as $product){


            if($product -> manufacturer ->koorse != "" || $product -> manufacturer ->koorse != 0){

                $product->prise *= $product -> manufacturer ->koorse;

            }

            if($product -> manufacturer ->discount !="" || $product -> manufacturer ->discount != 0) {

                $hrivna_discount = explode("грн",$product -> manufacturer ->discount);

                if(isset($hrivna_discount[1])){

                    $product->prise = $product->prise - $hrivna_discount[0];
                }

                $prozent_discount = explode("%",$product -> manufacturer ->discount);

                if(isset($prozent_discount[1])){

                    $product->prise = $product->prise - ( $product->prise * ($prozent_discount[0]/100) );
                }

            }

            if($product ->discount !="" || $product -> discount != 0) {

                $hrivna_discount = explode("грн",$product ->discount);

                if(isset($hrivna_discount[1])){

                    $product->prise =  $product->prise - $hrivna_discount[0];
                }

                $prozent_discount = explode("%",$product -> discount);

                if(isset($prozent_discount[1])){


                    $product->prise =  $product->prise - ( $product->prise * ($prozent_discount[0]/100) ) ;
                }

            }

        }


        return $products;


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
