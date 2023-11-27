<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('11111111'),
        ])->assignRole('writer','admin');


        User::create([
            'name' => 'user',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('11111111'),
        ])->assignRole('writer','admin');

    }
}
