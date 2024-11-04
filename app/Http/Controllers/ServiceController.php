<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'checkRole:projectAdmin']);
    }


    public function index()
    {

        $service = Service::orderBy('created_at', 'desc')->get();
        return view('admin.pages.service', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

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
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
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
