<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Project;
use Inertia\Inertia;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        $projects = Project::all();
        $socials = Profile::first();

        return Inertia::render('Display/Single', [
            'project' => $project,
            'projects' => $projects,
            'socials' => $socials,
        ]);
    }

    public function index()
    {
        $socials = Profile::first();
        $posts = Project::all();

        return Inertia::render('Project', [
            'projects' => $posts,
            'socials' => $socials,
        ]);
    }
}
