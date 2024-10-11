<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team = Team::orderBy('created_at', 'desc')->get();

        return view('Admin.pages.team', [
            'teams' => $team
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('Admin.pages.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTeamRequest $request)
    {
        $data = $request->validated();


        $data['slug'] = Str::slug($data['name']);
        $year = Carbon::now()->format('Y');
        $file = $request->file('image');
        $data['image'] = $file
            ? $file->storeAs("team-image/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        Team::create($data);

        toast('team created successfully', 'success');

        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //. return view('Admin.pages.team.show', compact('team'));
        $team = Team::where('slug', $team->slug)->first();

        return view('team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        // return view('admin.pages.teams.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        // $data = $request->validated();

        // // Cek jika ada gambar baru yang di-upload
        // if ($request->hasFile('image')) {
        //     // Hapus gambar lama jika ada
        //     if ($team->image) {
        //         Storage::disk('public')->delete($team->image);
        //     }

        //     // Simpan gambar baru
        //     $file = $request->file('image');
        //     $data['image'] = $file->storeAs('team', uniqid() . '.' . $file->getClientOriginalExtension(), 'public');
        // }

        // // Update data tim
        // $team->update($data);

        // toast('Team updated successfully', 'success');
        // return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        if ($team->image) {
            Storage::disk('public')->delete($team->image);
        }

        $team->delete();

        toast('team deleted successfully', 'success');
        return redirect()->route('team.index');
    }
}
