<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Season;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    public function index(){

        $types = Type::orderBy('name', 'desc')->get();
        $seasons = Season::orderBy('name', 'desc')->get();

        return view('admin.product.editing', compact('types','seasons'));

    }

    public function delete($id){

        Type::find($id)->delete();

        Product::where('type_id', $id) -> delete();

        return redirect()->back();

    }

    public function deleteSeason($id){

        Season::find($id) -> delete();

        Product::where('season_id', $id) -> delete();

        return redirect()->back();

    }
}
