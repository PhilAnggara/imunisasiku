<?php

namespace App\Http\Controllers;

use App\Models\PanduanIbu;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function beranda()
    {
        if (auth()->user()->role == 'Admin') {
            return view('pages.beranda');
        } else {
            return view('pages.beranda-ibu');
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
