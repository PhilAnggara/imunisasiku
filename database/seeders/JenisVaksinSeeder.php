<?php

namespace Database\Seeders;

use App\Models\JenisVaksin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisVaksinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisVaksin::create([
            'nama_vaksin' => 'HB 0',
        ]);
        JenisVaksin::create([
            'nama_vaksin' => 'BCG',
        ]);
        JenisVaksin::create([
            'nama_vaksin' => 'Polio',
        ]);
        JenisVaksin::create([
            'nama_vaksin' => 'DPT-HB-Hib 1',
        ]);
        JenisVaksin::create([
            'nama_vaksin' => 'Polio 2',
        ]);
        JenisVaksin::create([
            'nama_vaksin' => 'DPT-HB-Hib 2',
        ]);
        JenisVaksin::create([
            'nama_vaksin' => 'Polio3',
        ]);
        JenisVaksin::create([
            'nama_vaksin' => 'DPT-HB-Hib 3',
        ]);
        JenisVaksin::create([
            'nama_vaksin' => 'Polio 4',
        ]);
        JenisVaksin::create([
            'nama_vaksin' => 'IPV',
        ]);
        JenisVaksin::create([
            'nama_vaksin' => 'Campak',
        ]);
        JenisVaksin::create([
            'nama_vaksin' => 'DPT-HB-Hib Lanjutan',
        ]);
        JenisVaksin::create([
            'nama_vaksin' => 'Campak Lanjutan',
        ]);
    }
}
