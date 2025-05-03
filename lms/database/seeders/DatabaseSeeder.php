<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat user dengan role 'admin'
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'role' => 'admin'
        ]);

        // Membuat user dengan role 'guru'
        User::create([
            'name' => 'Guru User',
            'email' => 'guru@example.com',
            'password' => Hash::make('password123'),
            'role' => 'guru'
        ]);

        // Membuat user dengan role 'siswa'
        User::create([
            'name' => 'Siswa User',
            'email' => 'siswa@example.com',
            'password' => Hash::make('password123'),
            'role' => 'siswa'
        ]);
    }
}
