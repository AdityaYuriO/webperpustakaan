<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(['name' => 'anggota', 'email' => 'anggota@gmail.com', 'role' => 'anggota', 'status' => 'active', 'password' => 'anggota12345']);
        User::create(['name' => 'petugas', 'email' => 'petugas@gmail.com', 'role' => 'petugas', 'status' => 'active', 'password' => 'petugas12345']);
    }
}
