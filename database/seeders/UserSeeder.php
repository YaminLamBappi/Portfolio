<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Yamin Arafat',
            'email' => 'yamin@example.com',
            'password' => Hash::make('securepassword123'), // ✅ Hashed password
            'is_admin' => 1,
            'birth_day' => '1998-07-10',
            'job' => 'Full Stack Developer',
            'phone' => '+8801XXXXXXXXX',
            'address' => 'Dhaka, Bangladesh',
            'degree' => 'BSc in CSE',
            'experience' => '2+ Years',
            'profile_pic' => 'profile.jpg', // put this in public/images/
        ]);
    }
}
