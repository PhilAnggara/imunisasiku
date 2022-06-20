<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnakRequest;
use App\Http\Requests\UploadRequest;
use App\Models\Anak;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AnakController extends Controller
{
    public function index()
    {
        $anak = auth()->user()->anak;
        
        return view('pages.anak', [
            'anak' => $anak
        ]);
    }

    public function create()
    {
        //
    }

    public function store(AnakRequest $request)
    {
        $data = $request->all();
        $data['id_user'] = auth()->user()->id;

        dd($data);
        
        Anak::create($data);

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(AnakRequest $request, $id)
    {
        // 
    }

    public function destroy($id)
    {
        return 'Test';
    }

    public function uploadFoto(UploadRequest $request, $id)
    {
        $foto = $request->file('foto')->store('images/anak', 'public');
        Anak::find($id)->update(['foto' => $foto]);

        return redirect()->back()->with('success', 'Foto Berhasil Diupload!');
    }
    
    public function hapusFoto($id)
    {
        Anak::find($id)->update(['foto' => null]);

        return redirect()->back()->with('success', 'Foto Berhasil Dihapus!');
    }
}
