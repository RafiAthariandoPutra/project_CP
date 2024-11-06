<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrustedCompanyRequest;
use App\Http\Requests\TrustedCompanyRequest;
use App\Models\TrustedCompany;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class TrustedCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {


        $trustedCompanies = TrustedCompany::orderBy('created_at', 'desc')->get();
        return view('Admin.pages.trustedcompany', compact('trustedCompanies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTrustedCompanyRequest $request)
    {
        $data = $request->validated();



        // dd($data);
        $year = Carbon::now()->format('Y');

        $file = $request->file(key: 'company_logo');
        $data['company_logo'] = $file?->storeAs("company_logo/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public');

        TrustedCompany::create($data);

        toast('Hero Section Edited successfully', 'success');

        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $id = TrustedCompany::find($id);


        // dd($id);

        if ($id->company_logo) {
            Storage::disk('public')->delete($id->company_logo);
        }

        $id->delete();
        toast('Trusted Company delete successfully', 'success');


        return redirect()->back();
    }
}
