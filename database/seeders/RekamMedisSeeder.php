<?php

namespace Database\Seeders;

use App\Models\RekamMedis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RekamMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RekamMedis::create([
            'id_anak' => 1,
            'keluhan' => 'Sakit Perut',
            'penanganan' => 'Pemberian Obat',
            'dokter_perawat' => 'Jonathan Tontong',
        ]);
    }
}
