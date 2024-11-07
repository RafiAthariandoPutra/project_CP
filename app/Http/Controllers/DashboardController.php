<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{


    public function index()
    {

        $nama = auth()->user()->name;
        toast(`Halo $nama`) ;
        toast(`Halo $nama`, 'success');
        return view('Admin.pages.dashboard')->with(`Halo $nama`);

      }

    public function cetak()
    {
        $pdf = Pdf::loadView('Admin.cetak');
        return $pdf->stream('Company Profile' . '.pdf');
    }
}
