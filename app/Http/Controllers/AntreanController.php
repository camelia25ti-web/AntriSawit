<?php

namespace App\Http\Controllers;

use App\Models\Antrean;
use Illuminate\Http\Request;

class AntreanController extends Controller
{
    public function index()
    {
        $antreans = Antrean::latest()->get();
        return view('antrean.index', compact('antreans'));
    }

    public function create()
    {
        return view('antrean.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_plat' => 'required',
            'nama_sopir' => 'required',
            'berat_muatan' => 'required|numeric',
        ]);

        Antrean::create($request->all());
        return redirect()->route('antrean.index')->with('success', 'Data antrean truk berhasil ditambahkan!');
    }

    public function edit(Antrean $antrean)
    {
        return view('antrean.edit', compact('antrean'));
    }

    public function update(Request $request, Antrean $antrean)
    {
        $request->validate([
            'nomor_plat' => 'required',
            'nama_sopir' => 'required',
            'berat_muatan' => 'required|numeric',
            'status' => 'required',
        ]);

        $antrean->update($request->all());
        return redirect()->route('antrean.index')->with('success', 'Data antrean berhasil diperbarui!');
    }

    public function destroy(Antrean $antrean)
    {
        $antrean->delete();
        return redirect()->route('antrean.index')->with('success', 'Data antrean berhasil dihapus!');
    }
}
