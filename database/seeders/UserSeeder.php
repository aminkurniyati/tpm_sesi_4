<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Admin",
            "email" => "one@gmail.com",
            "password" => Hash::make("12345678"),
            'role' => 'admin',
            'created_at' => Carbon::now()
        ]);
  
        User::create([
            "name" => "User",
            "email" => "two@gmail.com",
            "password" => Hash::make("87654321"),
            'role' => 'User',
            'created_at' => Carbon::now()
        ]);
    }
}
