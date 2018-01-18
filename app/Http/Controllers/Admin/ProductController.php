<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\ProductPhotos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index($page_num = 1, $count_on_page = 20){

        $products = Product::skip($count_on_page * ($page_num - 1)) -> take($count_on_page)
            ->with('category','manufacturer') ->groupBy('id') ->  get();

        $all_product_count = Product::count();

        $pagination = ceil($all_product_count/$count_on_page);

        return view('admin.product.products', compact('products', 'pagination'));
    }

    public function finder(Request $request){

        return Product::where('name','like', '%'.$request->name.'%') -> with('photo', 'manufacturer', 'category')->get();

    }
}
