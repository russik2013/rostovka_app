<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function makeOrder(Request $request){


        print_r($_POST);

        print_r($request -> all());




    }
}
