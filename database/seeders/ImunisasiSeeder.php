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
            'id_jadwal' => 5,
            'tanggal' => Carbon::today()->subDays(1),
            'selesai' => true,
        ]);
        Imunisasi::create([
            'id_anak' => 2,
            'id_jadwal' => 5,
            'tanggal' => Carbon::today()->subDays(1),
            'selesai' => true,
        ]);
        Imunisasi::create([
            'id_anak' => 1,
            'id_jadwal' => 6,
            'tanggal' => Carbon::today(),
            'selesai' => false,
        ]);
        Imunisasi::create([
            'id_anak' => 3,
            'id_jadwal' => 7,
            'tanggal' => Carbon::today()->addDay(),
            'selesai' => false,
        ]);
    }
}
