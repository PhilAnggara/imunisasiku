<?php

namespace Database\Seeders;

use App\Models\RiwayatPertumbuhan;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RiwayatPertumbuhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RiwayatPertumbuhan::create([
            'id_anak' => 1,
            'bb' => '4.2',
            'tb' => '52.7',
            'lk' => '36.1',
            'tanggal' => Carbon::now()->subMonth(5)->startOfMonth(),
        ]);
        RiwayatPertumbuhan::create([
            'id_anak' => 1,
            'bb' => '5.4',
            'tb' => '57.4',
            'lk' => '38.8',
            'tanggal' => Carbon::now()->subMonth(4)->startOfMonth(),
        ]);
        RiwayatPertumbuhan::create([
            'id_anak' => 1,
            'bb' => '6.5',
            'tb' => '60.9',
            'lk' => '40.5',
            'tanggal' => Carbon::now()->subMonth(3)->startOfMonth(),
        ]);
        RiwayatPertumbuhan::create([
            'id_anak' => 1,
            'bb' => '7.4',
            'tb' => '63.8',
            'lk' => '41.9',
            'tanggal' => Carbon::now()->subMonth(2)->startOfMonth(),
        ]);
        RiwayatPertumbuhan::create([
            'id_anak' => 1,
            'bb' => '8.1',
            'tb' => '66.2',
            'lk' => '43.0',
            'tanggal' => Carbon::now()->subMonth(1)->startOfMonth(),
        ]);
        RiwayatPertumbuhan::create([
            'id_anak' => 1,
            'bb' => '8.7',
            'tb' => '68.2',
            'lk' => '43.9',
            'tanggal' => Carbon::now()->startOfMonth(),
        ]);

        
        RiwayatPertumbuhan::create([
            'id_anak' => 2,
            'bb' => '4.3',
            'tb' => '53.4',
            'lk' => '36.9',
            'tanggal' => Carbon::now()->subMonth(4)->startOfMonth(),
        ]);
        RiwayatPertumbuhan::create([
            'id_anak' => 2,
            'bb' => '5.7',
            'tb' => '58.4',
            'lk' => '39.5',
            'tanggal' => Carbon::now()->subMonth(3)->startOfMonth(),
        ]);
        RiwayatPertumbuhan::create([
            'id_anak' => 2,
            'bb' => '7.0',
            'tb' => '62.2',
            'lk' => '41.3',
            'tanggal' => Carbon::now()->subMonth(2)->startOfMonth(),
        ]);
        RiwayatPertumbuhan::create([
            'id_anak' => 2,
            'bb' => '7.9',
            'tb' => '65.3',
            'lk' => '42.7',
            'tanggal' => Carbon::now()->subMonth(1)->startOfMonth(),
        ]);
        RiwayatPertumbuhan::create([
            'id_anak' => 2,
            'bb' => '8.6',
            'tb' => '67.8',
            'lk' => '43.9',
            'tanggal' => Carbon::now()->startOfMonth(),
        ]);
    }
}
