<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Student;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $data = [
            'title' => 'Studentų sąrašas',
            'date'  => date('Y-m-d'),
            'students' => Student::with(['city', 'grupe'])->get(),
        ];

        $pdf = Pdf::loadView('pdf.document', $data);
        return $pdf->download('dokumentas.pdf');
    }
}