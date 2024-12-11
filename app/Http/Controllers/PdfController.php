<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{

    public function download()
    {
        $data = [
            [
                'quantity' => 1,
                'description' => '1 Year Subscription',
                'price' => '129.00'
            ]
        ];

        $pdf = Pdf::loadView('pdf.report', compact('data'));
        return $pdf->stream();
    }
}
