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
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(4)->startOfMonth()->addDay(15),
            'tanggal_imunisasi' => Carbon::now()->subMonth(4)->startOfMonth()->addDay(18),
            'tenaga_medis' => 'dr. Septio Angow',
        ]);
        Imunisasi::create([
            'id_anak' => 2,
            'id_jenis_vaksin' => 1,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(4)->startOfMonth()->addDay(15),
            'tanggal_imunisasi' => Carbon::now()->subMonth(4)->startOfMonth()->addDay(15),
            'tenaga_medis' => 'Adrian Tontong',
        ]);


        Imunisasi::create([
            'id_anak' => 1,
            'id_jenis_vaksin' => 4,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(3)->startOfMonth(),
            'tanggal_imunisasi' => Carbon::now()->subMonth(3)->startOfMonth(),
            'tenaga_medis' => 'Adrian Tontong',
        ]);
        Imunisasi::create([
            'id_anak' => 2,
            'id_jenis_vaksin' => 2,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(3)->startOfMonth(),
            'tanggal_imunisasi' => Carbon::now()->subMonth(3)->startOfMonth(),
            'tenaga_medis' => 'Adrian Tontong',
        ]);


        Imunisasi::create([
            'id_anak' => 1,
            'id_jenis_vaksin' => 5,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(3)->startOfMonth()->addDay(15),
            'tanggal_imunisasi' => Carbon::now()->subMonth(3)->startOfMonth()->addDay(15),
            'tenaga_medis' => 'dr. Septio Angow',
        ]);
        Imunisasi::create([
            'id_anak' => 2,
            'id_jenis_vaksin' => 3,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(3)->startOfMonth()->addDay(15),
            'tanggal_imunisasi' => Carbon::now()->subMonth(3)->startOfMonth()->addDay(18),
            'tenaga_medis' => 'dr. Septio Angow',
        ]);


        Imunisasi::create([
            'id_anak' => 1,
            'id_jenis_vaksin' => 6,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(2)->startOfMonth(),
            'tanggal_imunisasi' => Carbon::now()->subMonth(2)->startOfMonth(),
            'tenaga_medis' => 'Adrian Tontong',
        ]);
        Imunisasi::create([
            'id_anak' => 2,
            'id_jenis_vaksin' => 4,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(2)->startOfMonth(),
            'tanggal_imunisasi' => Carbon::now()->subMonth(2)->startOfMonth(),
            'tenaga_medis' => 'Adrian Tontong',
        ]);


        Imunisasi::create([
            'id_anak' => 1,
            'id_jenis_vaksin' => 7,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(2)->startOfMonth()->addDay(15),
            'tanggal_imunisasi' => Carbon::now()->subMonth(2)->startOfMonth()->addDay(15),
            'tenaga_medis' => 'dr. Septio Angow',
        ]);
        Imunisasi::create([
            'id_anak' => 2,
            'id_jenis_vaksin' => 5,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(2)->startOfMonth()->addDay(15),
            'tanggal_imunisasi' => Carbon::now()->subMonth(2)->startOfMonth()->addDay(15),
            'tenaga_medis' => 'dr. Septio Angow',
        ]);


        Imunisasi::create([
            'id_anak' => 1,
            'id_jenis_vaksin' => 8,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(1)->startOfMonth(),
            'tanggal_imunisasi' => Carbon::now()->subMonth(1)->startOfMonth(),
            'tenaga_medis' => 'Adrian Tontong',
        ]);
        Imunisasi::create([
            'id_anak' => 2,
            'id_jenis_vaksin' => 6,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(1)->startOfMonth(),
            'tanggal_imunisasi' => Carbon::now()->subMonth(1)->startOfMonth(),
            'tenaga_medis' => 'Adrian Tontong',
        ]);


        Imunisasi::create([
            'id_anak' => 1,
            'id_jenis_vaksin' => 9,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(1)->startOfMonth()->addDay(15),
            'tanggal_imunisasi' => Carbon::now()->subMonth(1)->startOfMonth()->addDay(15),
            'tenaga_medis' => 'Adrian Tontong',
        ]);
        Imunisasi::create([
            'id_anak' => 2,
            'id_jenis_vaksin' => 7,
            'tanggal_dijadwalkan' => Carbon::now()->subMonth(1)->startOfMonth()->addDay(15),
            'tanggal_imunisasi' => Carbon::now()->subMonth(1)->startOfMonth()->addDay(15),
            'tenaga_medis' => 'dr. Septio Angow',
        ]);

        
        Imunisasi::create([
            'id_anak' => 1,
            'id_jenis_vaksin' => 10,
            'tanggal_dijadwalkan' => Carbon::now()->addDay(2),
            'tanggal_imunisasi' => null,
            'tenaga_medis' => 'dr. Septio Angow',
        ]);
        Imunisasi::create([
            'id_anak' => 2,
            'id_jenis_vaksin' => 8,
            'tanggal_dijadwalkan' => Carbon::now()->addDay(2),
            'tanggal_imunisasi' => null,
            'tenaga_medis' => 'Adrian Tontong',
        ]);
    }
}
