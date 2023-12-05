<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LandingController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $socials = Profile::first();

        return Inertia::render(
            'Portfolio',
            [
                'posts' => $posts,
                'socials' => $socials,
            ]
        );
    }
}
