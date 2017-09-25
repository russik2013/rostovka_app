<?php

namespace App\Http\Controllers;

use App\Category;
use App\Manufacturer;
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

    public function add(Request $request){

        dd($request -> all());


        $rules = [
            'article' => 'required|string',
            'name' => 'required|string',
            'rostovka_count' => 'required|numeric',
            'box_count' => 'required|numeric',
            'prise' => 'required|numeric',
            'manufacturer_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'show_product' => 'required',
            'currency'  => 'required',
            'discount' => 'required|string',
            'accessibility' => 'required',
            'image_url' => 'required|image',
            'type_id' => 'required|numeric',
            'season_id' => 'required|numeric',
            'size_id' => 'required|numeric',
        ];

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

    }
}
