<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        'nama'      => 'Admin Utama',
        'username'  => 'admin123',
        'password'  => Hash::make('12345678'),
        'role'      => 'admin'
       ]);
    }
}
