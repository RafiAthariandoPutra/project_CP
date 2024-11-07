<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        

        $service = Service::orderBy('created_at', 'desc')->get();
        return view('admin.pages.service', compact('service'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();

        // dd($request);
        $year = Carbon::now()->format('Y');
        $file = $request->file(key: 'icon');
        $data['icon'] = $file
            ? $file->storeAs("icon/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        Service::create($data);

        toast('Service Added', 'success');

        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {

        $id = Service::find($id);


        // dd($id);

        if ($id->icon) {
            Storage::disk('public')->delete($id->icon);
        }

        $id->delete();
        toast('Service delete successfully', 'success');


        return redirect()->back();
    }
}
