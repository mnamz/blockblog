<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        return Inertia::render(
            'Project/Index',
            [
                'projects' => $projects
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render(
            'Project/Create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'string',
            'content' => 'required',
        ]);
        Project::create([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'description' => $request->description,
            'content' => $request->content,
            'user_id' => Auth::user()->id,
        ]);
        sleep(1);

        return redirect()->route('projects.index')->with('message', 'Project Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return Inertia::render(
            'Project/Edit',
            [
                'project' => $project
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'string',
            'content' => 'required',
        ]);

        $project->name = $request->name;
        $project->slug = Str::slug($request->slug);
        $project->description = $request->description;
        $project->content = $request->content;
        $project->save();
        sleep(1);

        return redirect()->route('projects.index')->with('message', 'Project updated successfully');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        sleep(1);

        return redirect()->route('projects.index')->with('message', 'Project delete successfully');
    }
}
