<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $project = Project::orderBy('created_at', 'desc')->get();

        return view('admin.pages.project', compact('project'));
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
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['name']);
        $data['client_name'] = $request->client_name;

        $year = Carbon::now()->format('Y');
        $file = $request->file('image');
        $data['image'] = $file
            ? $file->storeAs("project-image/$year", uniqid() . '.' . $file->getClientOriginalExtension(), 'public') : null;

        Project::create($data);

        toast('Project Added', 'success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        $project = Project::where('slug', $project->slug)->first();

        return view('project.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = Project::find($id);


        // dd($id);

        if ($id->image) {
            Storage::disk('public')->delete($id->image);
        }

        $id->delete();
        toast('Project delete successfully', 'success');


        return redirect()->back();
    }
}
