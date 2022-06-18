<?php

namespace Database\Seeders;

use App\Models\JenisImunisasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisImunisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisImunisasi::create([
            'nama_imunisasi' => 'Hepatitis B'
        ]);
        JenisImunisasi::create([
            'nama_imunisasi' => 'Polio'
        ]);
        JenisImunisasi::create([
            'nama_imunisasi' => 'BCG'
        ]);
        JenisImunisasi::create([
            'nama_imunisasi' => 'Campak Rubella'
        ]);
        JenisImunisasi::create([
            'nama_imunisasi' => 'DPT-HB-HiB'
        ]);
        JenisImunisasi::create([
            'nama_imunisasi' => 'DBD'
        ]);
    }
}
