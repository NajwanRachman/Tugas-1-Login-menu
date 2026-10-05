<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Rizky',
            'password' => 'rahasia123',
            'nama_lengkap' => 'Rizky Yanuar Irawan',
        ]);

        User::create([
            'username' => 'Fadell',
            'password' => 'password123',
            'nama_lengkap' => 'Fadell Kia Mutawalli Sofyan',
        ]);
    }
}