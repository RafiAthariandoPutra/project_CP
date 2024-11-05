<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{


    public function index()
    {



        return view('Admin.pages.dashboard');
    }

    public function cetak()
    {
        $pdf = Pdf::loadView('Admin.cetak');
        return $pdf->stream('Company Profile' . '.pdf');
    }
}
