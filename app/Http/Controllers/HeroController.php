<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Http\Requests\StoreHeroRequest;
use App\Http\Requests\UpdateHeroRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;

class HeroController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {



        $hero = Hero::first();

        return view('Admin.pages.hero', compact('hero'));
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
    public function store(StoreHeroRequest $request)
    {

        $hero = Hero::first();

        $data = $request->validated();

        $year = Carbon::now()->format('Y');
        $file = $request->file(key: 'hero_image');
        $data['hero_image'] = $file?->storeAs("hero_image/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public');

        Hero::where('id', $hero->id)->update($data);

        toast('Hero Section Edited successfully', 'success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hero $hero)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroRequest $request, Hero $hero)
    {
        $hero = Hero::first();

        $data = $request->validated();

        $year = Carbon::now()->format('Y');
        $file = $request->file(key: 'hero_image');
        $data['hero_image'] = $file?->storeAs("hero_image/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public');

        Hero::where('id', $hero->id)->update($data);

        toast('Trusted Company Added', 'success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
