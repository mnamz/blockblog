<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::first();

        return Inertia::render('Site/Show', [
            'profile' => $profiles,
        ]);
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
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'details' => 'nullable|string',
        //     'facebook_link' => 'nullable|string',
        //     'linkedin_link' => 'nullable|string',
        //     'instagram_link' => 'nullable|string',
        //     // 'resume' => 'nullable|string',
        // ]);

        // Profile::create([
        //     'name' => $request->name,
        //     'details' => $request->details,
        //     'facebook_link' => $request->facebook_link,
        //     'linkedin_link' => $request->linkedin_link,
        //     'instagram_link' => $request->instagram_link,
        // ]);

        // return redirect()->route('site.settings');
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $profile = Profile::first();

        $request->validate([
            'name' => 'required|string',
            'details' => 'nullable|string',
            'facebook_link' => 'nullable|string',
            'linkedin_link' => 'nullable|string',
            'instagram_link' => 'nullable|string',
            // 'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profile->name = $request->name;
        $profile->details = $request->details;
        $profile->facebook_link = $request->facebook_link;
        $profile->linkedin_link = $request->linkedin_link;
        $profile->instagram_link = $request->instagram_link;
        $profile->discord_link = $request->discord_link;
        $profile->github_link = $request->github_link;
        // if ($request->hasFile('photo')) {
        //     Storage::delete($profile->photo);
        //     $profile->photo = $request->file('photo')->store('profile-photos', 'public');
        // } else {
        //     $profile->photo = $request->file('photo')->store('profile-photos', 'public');
        // }
        $profile->save();
        sleep(1);

        return redirect()->route('dashboard')->with('message', 'Profile updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
