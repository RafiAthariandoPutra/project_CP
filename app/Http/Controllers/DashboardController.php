<?php

namespace App\Http\Controllers;


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
}
