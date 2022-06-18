<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function beranda()
    {
        return view('pages.beranda');
    }

    public function penerimaImunisasi()
    {
        return view('pages.penerima-imunisasi');
    }
}
