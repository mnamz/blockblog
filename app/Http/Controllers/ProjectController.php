<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Image;

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
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'string',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/project_images');
            $imagePath = str_replace('public/', '', $imagePath);

            $img = Image::make(storage_path("app/public/{$imagePath}"));
            $img->resize(null, 308, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save();
        } else {
            $imagePath = null;
        }

        Project::create([
            'name' => $request->name,
            'slug' => Str::slug($request->slug),
            'description' => $request->description,
            'content' => $request->content,
            'image' => $imagePath,
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
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'string',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete($project->image);
            $imagePath = $request->file('image')->store('public/project_images');
        } else {
            $imagePath = $project->image;
        }


        $project->name = $request->name;
        $project->slug = Str::slug($request->slug);
        $project->description = $request->description;
        $project->content = $request->content;


        $project->update([
            'image' => $imagePath,
        ]);

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
