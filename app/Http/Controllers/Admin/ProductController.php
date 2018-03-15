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

        $manufactures = Manufacturer::orderBy('name','asc') -> get();
        $seasons = Season::where('id', '!=', 5) ->orderBy('name','asc') -> get();
        $types = Type::where('id', '!=', 28)->orderBy('name','asc') -> get();

        if(isset($_GET['manufacturer']))
        $manufacturerId = Manufacturer:: where('name', "like", "%".$_GET['manufacturer']."%")
            -> pluck('id')->toArray();
        else $manufacturerId = Manufacturer::all() -> pluck('id')->toArray();



        if($name != "") {
            if( isset($_GET['article'])) {
                $products = Product::with('category', 'manufacturer', 'photo')->
                where('article', "like", "%" . $_GET['article'] . "%")->
                where('name', "like", "%" . $name . "%")->
                whereIn('manufacturer_id', $manufacturerId)->
                orderBy('id', 'desc')->paginate(15);
            }else {
                $products = Product::with('category', 'manufacturer', 'photo')->
                where('name', "like", "%" . $name . "%")->
                whereIn('manufacturer_id', $manufacturerId)->
                orderBy('id', 'desc')->paginate(15);
            }
        }
        else{
            if(isset($_GET['article'])){
                $products = Product::with('category', 'manufacturer', 'photo')->
                where('article', "like", "%" . $_GET['article'] . "%")->
                whereIn('manufacturer_id', $manufacturerId)->
                orderBy('id', 'desc')->paginate(15);
            }else
                $products = Product::with('category','manufacturer', 'photo')->
                whereIn('manufacturer_id', $manufacturerId)->
                orderBy('id', 'desc') ->paginate(15);
        }

        return view('admin.product.products', compact('products', 'manufactures', 'seasons', 'types'));
    }

    public function finder(Request $request){

        $products = Product::where('name','like', '%'.$request->name.'%') -> with('photo', 'manufacturer', 'category')->get();

        foreach ($products as $product){

            if($product -> manufacturer ->koorse != "" && $product -> manufacturer ->koorse != 0){

                $product->prise_default *= $product -> manufacturer ->koorse;

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

    public function tovarMultiUpdate(Request $request){

        dd($request -> all());

        $products = Product::whereIn('id', $request -> save) -> get();
        $manufacturers = Manufacturer::all();

        foreach ($request -> save as $item){

            foreach ($products as $product){

                if($item == $product -> id){

                    if($request ->price) {

                        $priseWithDiscount = $request->price;

                        $manufacturersInfoToProduct = $manufacturers->find($product->manufacturer_id);


                        if ($manufacturersInfoToProduct->koorse != "" && $manufacturersInfoToProduct->koorse != 0 && $product->currency == "дол") {

                            $priseWithDiscount *= $manufacturersInfoToProduct->koorse;

                        }

                        if ($manufacturersInfoToProduct->discount != "" && $manufacturersInfoToProduct->discount != 0) {


                            $hrivna_discount = explode("грн", $manufacturersInfoToProduct->discount);

                            if (isset($hrivna_discount[1])) {

                                $priseWithDiscount = $priseWithDiscount - $hrivna_discount[0];
                            }

                            $prozent_discount = explode("%", $manufacturersInfoToProduct->discount);

                            if (isset($prozent_discount[1])) {

                                $priseWithDiscount = $priseWithDiscount - ($priseWithDiscount * ($prozent_discount[0] / 100));
                            }

                        }

                        if ($product->discount != "" && $product->discount != 0) {


                            $hrivna_discount = explode("грн", $product->discount);

                            if (isset($hrivna_discount[1])) {

                                $priseWithDiscount = $priseWithDiscount - $hrivna_discount[0];
                            }

                            $prozent_discount = explode("%", $product->discount);


                            if (isset($prozent_discount[1])) {

                                $priseWithDiscount = $priseWithDiscount - ($priseWithDiscount * ($prozent_discount[0] / 100));
                            }

                        }

                        $product->prise = $priseWithDiscount;
                        $product->prise_default = $request->price;

                    }

                    if($request->pricePurchase)
                    $product->prise_zakup = $request->pricePurchase;

                    if($request -> availability == 1) {
                        $product->show_product = 1;
                        $product->accessibility = 1;
                    }
                    if($request -> availability == 2) {
                        $product->show_product = 0;
                        $product->accessibility = 0;
                    }

                    $product -> save();


                }

            }
            //$insertArray = ['prise' => ]


        }
        return response('done');

    }
}
