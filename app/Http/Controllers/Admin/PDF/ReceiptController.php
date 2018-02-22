<?php

namespace App\Http\Controllers\Admin\PDF;

use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use PDF;

class ReceiptController extends Controller
{
    public function index($id){
        $order = Order::with('details') -> find($id);

//        dd(ceil($order->details() ->count()/8));
//
//        $pages = array();
//        for ($i = 0; $i < ceil($order->details() ->count()/8); $i ++){
//            $data = $order->skip(8 * $i) -> take(8);
//
//            $pages[] = View::make('admin.pdf.support', compact('order'));
//
//        }


        $pages[] = View::make('admin.pdf.support', compact('order'));
        $pages[] = View::make('admin.pdf.support', compact('order'));


        $pdf = PDF::loadView('admin.pdf.invoice', ['pages' => $pages, 'order' => $order]);
        $pdf -> setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

        //$pdf -> setPaper('a4', 'landscape');

        return $pdf->download('invoice.pdf');

    }

    public function show(){

        $order = Order::with('details') -> find(96);

        return view('admin.pdf.invoice', compact('order'));

    }
}
