<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function show(Request $request, $slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $posts = Post::all();
        $socials = Profile::first();

        // dd($socials);

        return Inertia::render('Blog/Single', [
            'post' => $post,
            'posts' => $posts,
            'socials' => $socials,
        ]);
    }

    public function index()
    {
        $socials = Profile::first();
        $posts = Post::all();

        return Inertia::render('Blog', [
            'posts' => $posts,
            'socials' => $socials,
        ]);
    }
}
