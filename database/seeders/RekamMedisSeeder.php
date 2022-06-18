<?php

namespace Database\Seeders;

use App\Models\RekamMedis;
use Carbon\Carbon;
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
            'tanggal' => Carbon::now()->subMonth(5)->startOfMonth(),
            'keluhan' => 'Menangis',
            'penanganan' => 'Pemberian obat tidur',
            'ket' => '',
            'tenaga_medis' => 'Adrian Tontong',
        ]);
    }
}
