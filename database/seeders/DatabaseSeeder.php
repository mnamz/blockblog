<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        Profile::create([
            'name' => 'Your Name',
            'details' => 'Some details about you',
            'facebook_link' => 'https://www.facebook.com/yourprofile',
            'linkedin_link' => 'https://www.linkedin.com/in/yourprofile',
            'instagram_link' => 'https://www.instagram.com/yourprofile',
            'discord_link' => 'https://www.instagram.com/yourprofile',
            'github_link' => 'https://www.instagram.com/yourprofile',
            // 'resume' => '/path resume.pdf',
        ]);

        \App\Models\Post::factory(10)->create();
        \App\Models\Project::factory(10)->create();
    }
}
