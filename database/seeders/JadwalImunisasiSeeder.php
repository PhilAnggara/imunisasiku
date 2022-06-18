<?php

namespace Database\Seeders;

use App\Models\JadwalImunisasi;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JadwalImunisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JadwalImunisasi::create([
            'id_jenis' => 1,
            'tanggal' => Carbon::today()->subDays(5),
            'jumlah_dibuka' => 10,
            'dokter_perawat' => 'Adrian Tontong',
        ]);
        JadwalImunisasi::create([
            'id_jenis' => 2,
            'tanggal' => Carbon::today()->subDays(4),
            'jumlah_dibuka' => 8,
            'dokter_perawat' => 'Sir John',
        ]);
        JadwalImunisasi::create([
            'id_jenis' => 3,
            'tanggal' => Carbon::today()->subDays(3),
            'jumlah_dibuka' => 5,
            'dokter_perawat' => 'Mner Tontong',
        ]);
        JadwalImunisasi::create([
            'id_jenis' => 4,
            'tanggal' => Carbon::today()->subDays(2),
            'jumlah_dibuka' => 10,
            'dokter_perawat' => 'Jontong',
        ]);
        JadwalImunisasi::create([
            'id_jenis' => 5,
            'tanggal' => Carbon::today()->subDays(1),
            'jumlah_dibuka' => 8,
            'dokter_perawat' => 'Tontong',
        ]);
        JadwalImunisasi::create([
            'id_jenis' => 6,
            'tanggal' => Carbon::today(),
            'jumlah_dibuka' => 7,
            'dokter_perawat' => 'Jonathan Tontong',
        ]);
    }
}
