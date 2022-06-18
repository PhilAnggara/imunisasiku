<?php

namespace App\Http\Controllers;

use App\Models\JadwalImunisasi;
use Illuminate\Http\Request;

class JadwalImunisasiController extends Controller
{
    public function index()
    {
        $items = JadwalImunisasi::all()->sortDesc();

        return view('pages.jadwal', [
            'items' => $items
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
