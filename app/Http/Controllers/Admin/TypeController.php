<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    public function index(){

        $types = Type::orderBy('name', 'desc')->get();

        return view('admin.product.editing', compact('types'));

    }

    public function delete($id){

        Type::find($id)->delete();

        Product::where('type_id', $id) -> delete();

        return redirect()->back();

    }
}
