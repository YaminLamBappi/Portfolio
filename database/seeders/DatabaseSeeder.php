<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed single settings row
        \App\Models\Setting::create([
            'about_title' => 'Software Engineer',
            'about_description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
            'fb_url' => 'https://www.facebook.com/yasser.elgammal/',
            'github_url' => 'https://github.com/YasserElgammal',
            'linkedin_url' => 'https://www.linkedin.com/in/elgammal/',
            'freelance_url' => '#li',
            'cv_url' => '#cv',
            'video_url' => '#video',
            'contact_mail' => 'contact@yamin.dev',
        ]);

        // Seed one real user with hashed password
        \App\Models\User::factory()->create([
            'name' => 'Profile User',
            'email' => 'test@example.com',
            'password' => Hash::make('yourSecurePass123'),  // hashed password
        ]);
    }
}
