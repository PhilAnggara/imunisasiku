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
            'id_kabupaten' => 7172,
            'nama' => 'Priska Manansang',
            'tgl_lahir' => Carbon::now()->subMonth(5)->startOfMonth(),
            'jenis_kelamin' => 'Perempuan',
        ]);
        Anak::create([
            'id_user' => 3,
            'id_kabupaten' => 7171,
            'nama' => 'Sanchez Fernando',
            'tgl_lahir' => Carbon::now()->subMonth(4)->startOfMonth(),
            'jenis_kelamin' => 'Laki-laki',
        ]);
        Anak::create([
            'id_user' => 4,
            'id_kabupaten' => 3216,
            'nama' => 'Willy Angow',
            'tgl_lahir' => Carbon::now()->startOfMonth(),
            'jenis_kelamin' => 'Laki-laki',
        ]);
    }
}
