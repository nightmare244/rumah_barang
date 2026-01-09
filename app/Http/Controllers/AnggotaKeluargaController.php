<?php

namespace App\Http\Controllers;

use App\Models\AnggotaKeluarga;
use Illuminate\Http\Request;

class AnggotaKeluargaController extends Controller
{
    public function index()
    {
        $anggotaKeluarga = AnggotaKeluarga::all();
        return view('anggota_keluarga.index', compact('anggotaKeluarga'));
    }

    public function create()
    {
        return view('anggota_keluarga.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'peran' => 'required|string|max:255',
            'usia' => 'required|integer|min:0',
        ]);

        AnggotaKeluarga::create($request->all());

        return redirect()
            ->route('anggota_keluarga.index');
    }

    public function show(AnggotaKeluarga $anggotaKeluarga)
    {
        return view('anggota_keluarga.show', compact('anggotaKeluarga'));
    }

    public function edit(AnggotaKeluarga $anggotaKeluarga)
    {
        return view('anggota_keluarga.edit', compact('anggotaKeluarga'));
    }

    public function update(Request $request, AnggotaKeluarga $anggotaKeluarga)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'peran' => 'required|string|max:255',
            'usia' => 'required|integer|min:0',
        ]);

        $anggotaKeluarga->update($request->all());

        return redirect()
            ->route('anggota_keluarga.index');
            
    }

    public function destroy(AnggotaKeluarga $anggotaKeluarga)
    {
        $anggotaKeluarga->delete();

        return redirect()
            ->route('anggota_keluarga.index');
            
    }
}
