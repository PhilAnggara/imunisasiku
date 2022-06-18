<?php

namespace Database\Seeders;

use App\Models\Imunisasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AnakSeeder::class,
            JadwalImunisasiSeeder::class,
            JenisImunisasiSeeder::class,
            ImunisasiSeeder::class,
            RekamMedisSeeder::class,
        ]);
    }
}
