<?php

namespace Database\Seeders;

use App\Models\Imunisasi;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImunisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Imunisasi::create([
            'id_anak' => 1,
            'id_jenis_vaksin' => 1,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(5)->startOfMonth()->addDay(15),
            'tanggal_imunisasi' => Carbon::now()->subMonth(5)->startOfMonth()->addDay(15),
            'tenaga_medis' => 'Adrian Tontong',
        ]);
        Imunisasi::create([
            'id_anak' => 1,
            'id_jenis_vaksin' => 2,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(4)->startOfMonth(),
            'tanggal_imunisasi' => Carbon::now()->subMonth(4)->startOfMonth(),
            'tenaga_medis' => 'Adrian Tontong',
        ]);
        Imunisasi::create([
            'id_anak' => 1,
            'id_jenis_vaksin' => 3,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(3)->startOfMonth()->addDay(15),
            'tanggal_imunisasi' => Carbon::now()->subMonth(3)->startOfMonth()->addDay(15),
            'tenaga_medis' => 'Adrian Tontong',
        ]);
    }
}
