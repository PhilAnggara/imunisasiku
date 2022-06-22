<?php

namespace App\Http\Controllers;

use App\Models\PanduanIbu;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PanduanIbuController extends Controller
{
    public function index()
    {
        $items = PanduanIbu::all()->sortDesc();
        return view('pages.panduan-ibu', [
            'items' => $items
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        $data['slug'] = Str::slug($request->title);

        PanduanIbu::create($data);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    public function show(PanduanIbu $item)
    {
        return view('pages.article', [
            'item' => $item
        ]);
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
        $item = PanduanIbu::find($id);
        $title = $item->title;
        $item->delete();

        return redirect()->back()->with('success', $title.' dihapus!');
    }
}
