<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Project;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LandingController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $socials = Profile::first();
        $projects = Project::all();

        return Inertia::render(
            'Portfolio',
            [
                'posts' => $posts,
                'projects' => $projects,
                'socials' => $socials,
            ]
        );
    }
}
