<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class AnakController extends Controller
{
    public function index()
    {
        $items = Anak::all();
        return view('pages.data-anak', [
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
        return 'Test';
    }
}
