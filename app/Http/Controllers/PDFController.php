<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\App;
use Barryvdh\DomPDF\Facade\Pdf;
use App\User;


class PDFController extends Controller
{
   

    public function domppdf()
    {
        $pdf=pdf::loadview('Admin.pdffile');
        return $pdf->stream();

        
    }
}
