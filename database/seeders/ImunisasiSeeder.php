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
            'tanggal_dijadwalkan' => Carbon::tomorrow(),
            'tanggal_imunisasi' => null,
            'tenaga_medis' => 'Adrian Tontong',
        ]);
    }
}
