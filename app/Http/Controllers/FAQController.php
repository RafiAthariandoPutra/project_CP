<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Http\Requests\StoreFAQRequest;
use App\Http\Requests\UpdateFAQRequest;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Gate;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {


        $faqs = FAQ::orderBy('created_at', 'desc')->get();

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
}
