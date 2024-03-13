<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'patient name',
            'email'=> 'patient@gmail.com',
            'password'=> Hash::make('password'),
            'role'=> 'pasien'
        ]);

        User::create([
            'name'=> 'doctor name',
            'email'=> 'doctor@gmail.com',
            'password'=> Hash::make('password'),
            'role'=> 'dokter'
        ]);

        User::create([
            'name'=> 'admin name',
            'email'=> 'admin@gmail.com',
            'password'=> Hash::make('password'),
            'role'=> 'admin'
        ]);
    }
}
