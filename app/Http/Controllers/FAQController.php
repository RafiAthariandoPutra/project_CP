<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Http\Requests\StoreFAQRequest;
use App\Http\Requests\UpdateFAQRequest;
use PhpParser\Node\Stmt\Return_;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'checkRole:socialAdmin']);
    }


    public function index()
    {
        $faqs = FAQ::orderBy('created_at', 'desc')->get();
        dd($faqs);

        return view('Admin.pages.faq', compact('faqs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFAQRequest $request)
    {
        $data = $request->validated();
        FAQ::create($data);

        toast('FAQ Added', 'success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(FAQ $fAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FAQ $fAQ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFAQRequest $request, FAQ $fAQ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FAQ $fAQ)
    {
        //
    }
}
