<?php

namespace App\Http\Controllers;

use App\Models\PanduanIbu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function beranda()
    {
        if (auth()->user()->role == 'Admin') {

            return view('pages.beranda');

        } else {
            
            $anak = auth()->user()->anak;
            $bulanIni = Carbon::parse($anak->tgl_lahir)->diffInMonths(Carbon::now()->endOfMonth());

            $namaBulan = collect();
            $bb = collect();
            $tb = collect();
            $lk = collect();
            $data = ['bb'=> $bb, 'tb' => $tb, 'lk' => $lk];
            
            
            $j = 0;
            for ($i = 0; $i <= $bulanIni; $i++) { 

                $namaBulan->push(
                    Carbon::parse($anak->tgl_lahir)->addMonth($i)->isoFormat('MMMM').' ('.$i.' bulan)'
                );

                if (array_key_exists($j, $anak->pertumbuhan->all())) {
                    if (Carbon::parse($anak->pertumbuhan[$j]->tanggal)->isoFormat('MMMM') == Carbon::parse($anak->tgl_lahir)->addMonth($i)->isoFormat('MMMM')) {
                        $bb->push($anak->pertumbuhan[$j]->bb);
                        $tb->push($anak->pertumbuhan[$j]->tb);
                        $lk->push($anak->pertumbuhan[$j]->lk);
                        $j++;
                    } else {
                        $bb->push(null);
                        $tb->push(null);
                        $lk->push(null);
                    }
                }

            }



            return view('pages.beranda-ibu', [
                'anak' => $anak,
                'namaBulan' => $namaBulan,
                'data' => $data,
            ]);
        }
    }

    public function penerimaImunisasi()
    {
        return view('pages.penerima-imunisasi');
    }

    public function panduanIbu()
    {
        $items = PanduanIbu::all()->sortDesc();
        return view('pages.panduan-ibu', [
            'items' => $items
        ]);
    }

    public function article(PanduanIbu $item)
    {
        // $item = PanduanIbu::where('slug', $slug)->first();
        return view('pages.article', [
            'item' => $item
        ]);
    }
}
