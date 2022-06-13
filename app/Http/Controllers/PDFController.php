<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Result;
use Barryvdh\DomPDF\Facade\PDF;

class PDFController extends Controller
{
    public function generateInvoicePDF($id,$date)
    {
        $results=Result::where('patient_id',$id)->where('dateresult',$date)->get();
        $patient=Patient::find($id);
        $dates=Result::where('dateresult',$date)->get();
        $pdf = PDF::loadView('myPDF', compact('results','patient','dates','date'));
        return $pdf->download($patient->user->name."|".$date.".pdf");
    }
}