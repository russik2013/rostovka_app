<?php

namespace App\Http\Controllers\Admin;

use App\Manufacturer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SuppliersController extends Controller
{
    public function index(){

        $manufacturers = Manufacturer::groupBy('id') ->paginate(15);

        return view('admin.product.suppliers', compact('manufacturers'));

    }

    public function edit($id){

        $manufacturer = Manufacturer::find($id);

        if($manufacturer)

            return view('admin.product.supplier_edit', compact('manufacturer'));

        else return redirect() -> back();



    }
}
