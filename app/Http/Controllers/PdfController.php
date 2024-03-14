<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    //printContract
    public function printContract($loan_code)
    {
        $loan = Loan::where('loan_code',$loan_code)->first();
        $parcels = Parcel::where('loan_id',$loan_code)->get();


        $data = ['loan' => $loan]; // Example data to pass to the PDF

        $pdf = PDF::loadView('pdf.contract', compact('loan','parcels'));
        // $pdf = PDF::loadView('pdf.contract', compact$data);

        return $pdf->stream('invoice.pdf');
    }
}
