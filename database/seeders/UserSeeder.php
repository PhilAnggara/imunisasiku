<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Septio Angow',
            'username' => 'septioangow',
            'email' => 'septioangow@gmail.com',
            'role' => 'Admin',
            'password' => Hash::make('Admin123')
        ]);
        User::create([
            'name' => 'Rolly Sahelangi',
            'username' => 'rollysahelangi',
            'email' => 'rollysahelangi@gmail.com',
            'role' => 'User',
            'password' => Hash::make('Pengguna123')
        ]);
        User::create([
            'name' => 'Aditya Manansang',
            'username' => 'adityamanansang',
            'email' => 'adityamanansang@gmail.com',
            'role' => 'User',
            'password' => Hash::make('Pengguna123')
        ]);
        User::create([
            'name' => 'Rudolfo Sombouwadil',
            'username' => 'rudolfosombouwadil',
            'email' => 'rudolfosombouwadil@gmail.com',
            'role' => 'User',
            'password' => Hash::make('Pengguna123')
        ]);
    }
}
