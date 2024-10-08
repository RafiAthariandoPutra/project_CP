<?php

namespace App\Http\Controllers;

use App\Models\Testimonal;
use App\Http\Requests\StoreTestimonalRequest;
use App\Http\Requests\UpdateTestimonalRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class TestimonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonal = Testimonal::orderBy('created_at', 'desc')->get();

        return view('Admin.pages.testimonal', compact('testimonal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonalRequest $request)
    {
        $data = $request->validated();

        $year = Carbon::now()->format('Y');
        $file = $request->file('client_image');
        $data['client_image'] = $file
            ? $file->storeAs("client_image/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        // dd($data);

        Testimonal::create($data);

        toast('Testimonal Added', 'success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonal $testimonal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonal $testimonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonalRequest $request, Testimonal $testimonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $id = Testimonal::find($id);


        // dd($id);

        if ($id->icon) {
            Storage::disk('public')->delete($id->icon);
        }

        $id->delete();
        toast('Testimonal delete successfully', 'success');


        return redirect()->back();
    }
}
