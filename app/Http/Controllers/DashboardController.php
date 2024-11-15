<?php

namespace App\Http\Controllers;

use App\Imports\ExcelImportClass;
use App\Models\FAQ;
use App\Models\Hero;
use App\Models\Team;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonal;
use App\Models\TrustedCompany;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{


    public function index()
    {

        return view('Admin.pages.dashboard');
    }

    public function cetak()
    {

        $hero = Hero::get();
        $service = Service::get();
        $project = Project::get();
        $team = Team::get();
        $trustedcompany = TrustedCompany::get();

        $pdf = Pdf::loadView('Admin.cetak', compact('hero', 'trustedcompany', 'service', 'team', 'project'));
        return $pdf->stream('Company Profile' . '.pdf');
    }

    public function import(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        // Get the uploaded file
        $file = $request->file('file');

        // Process the Excel file
        Excel::import(new ExcelImportClass, $file);


        toast('Excel file imported successfully!', 'success');

        return back();
    }
}
