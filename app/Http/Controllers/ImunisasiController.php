<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use App\Models\Anak;
use App\Models\Imunisasi;
use App\Models\JenisVaksin;
use Illuminate\Http\Request;

class ImunisasiController extends Controller
{
    public function index()
    {
        $items = Imunisasi::all()->sortDesc();
        $anak = Anak::all();
        $jenisVaksin = JenisVaksin::all();

        return view('pages.imunisasi', [
            'items' => $items,
            'anak' => $anak,
            'jenisVaksin' => $jenisVaksin,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Imunisasi::create($data);
        event(new MyEvent);
        return redirect()->back()->with('success', 'Jadwal berhasil dibuat!');
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
        $data = $request->all();
        Imunisasi::find($id)->update($data);
        event(new MyEvent);
        
        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    public function destroy($id)
    {
        $item = Imunisasi::find($id);
        $item->delete();

        return redirect()->back()->with('success', 'Jadwal berhasil dihapus!');
    }
}
