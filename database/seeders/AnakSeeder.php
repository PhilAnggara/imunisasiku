<?php

namespace Database\Seeders;

use App\Models\Anak;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Anak::create([
            'id_user' => 2,
            'id_kabupaten' => 7171,
            'id_kelurahan' => 7171021003,
            'nama' => 'Willy Angow',
            'tanggal_lahir' => Carbon::parse('2020-01-01'),
            'nama_ibu' => 'Cici Tamesalah',
            'nama_ayah' => 'Rolly Sahelangi',
            'no_hp' => '6289694888794',
            'status' => 'Menunggu',
        ]);
        Anak::create([
            'id_user' => 2,
            'id_kabupaten' => 7172,
            'id_kelurahan' => 7172051002,
            'nama' => 'Jesika Manansang',
            'tanggal_lahir' => Carbon::parse('2021-03-01'),
            'nama_ibu' => 'Ici Cantik',
            'nama_ayah' => 'Aditya Manansang',
            'no_hp' => '6285156457378',
            'status' => 'Menunggu',
        ]);
        Anak::create([
            'id_user' => 2,
            'id_kabupaten' => 7171,
            'id_kelurahan' => 7171021003,
            'nama' => 'Sanchez Fernando',
            'tanggal_lahir' => Carbon::parse('2020-05-01'),
            'nama_ibu' => 'Rudolfo Sombouwadil',
            'nama_ayah' => 'Gabby Puspita',
            'no_hp' => '6282187242572',
            'status' => 'Menunggu',
        ]);
    }
}
