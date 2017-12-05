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

    public function getProductsToCategory(Request $request){

        $products = Product::where('category_id', '=', $request -> category_id) -> get();

        foreach ($products as $product){

            $product -> full__price = $product -> prise * $product -> box_count;
            $product -> rostovka__price = $product -> prise * $product -> rostovka_count;
            $product -> types = $product -> type -> name;
        }

        return $products;

    }
}
