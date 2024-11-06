<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;
use illuminate\Support\Facades\Gate;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    public function index()
    {


        $team = Team::latest()->get();

        return view('Admin.pages.team', [
            'teams' => $team
        ]);
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
        // $team('slug', $team->slug)->first();

        return view('team.show', compact('team'));
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
