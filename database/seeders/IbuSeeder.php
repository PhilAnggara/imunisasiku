<?php

namespace Database\Seeders;

use App\Models\Ibu;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class IbuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name' => 'Ici Cantik',
            'username' => 'icicantik',
            'email' => 'icicantik@gmail.com',
            'role' => 'User',
            'password' => Hash::make('Pengguna123')
        ]);
        User::create([
            'name' => 'Gabby Puspita',
            'username' => 'gabbypuspita',
            'email' => 'gabbypuspita@gmail.com',
            'role' => 'User',
            'password' => Hash::make('Pengguna123')
        ]);

        Ibu::create([
            'id_user' => 2,
            'id_kelurahan' => 7172051002,
            'nama_suami' => 'Aditya Manansang',
            'no_hp' => '6285156457378',
        ]);
        Ibu::create([
            'id_user' => 2,
            'id_kelurahan' => 7171021002,
            'nama_suami' => 'Rudolfo Sombouwadil',
            'no_hp' => '6282187242572',
        ]);
    }
}
