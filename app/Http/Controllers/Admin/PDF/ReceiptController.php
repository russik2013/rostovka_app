<?php

namespace App\Http\Controllers\Admin\PDF;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class ReceiptController extends Controller
{
    public function index(){

        $pdf = PDF::loadView('admin.pdf.invoice');
        //$pdf -> setPaper('a4', 'landscape');

        return $pdf->download('invoice.pdf');

    }
}
