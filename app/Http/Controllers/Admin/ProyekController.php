<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proyek;
use Illuminate\Http\Request;

class ProyekController extends Controller
{
    public function index()
    {
        $proyeks = Proyek::all();
        return view('admin.proyek.index', compact('proyeks'));
    }

    public function create()
    {
        return view('admin.proyek.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        Proyek::create($request->all());
        return redirect()->route('admin.proyek.index')->with('success', 'Proyek berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $proyek = Proyek::findOrFail($id);
        return view('admin.proyek.edit', compact('proyek'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $proyek = Proyek::findOrFail($id);
        $proyek->update($request->all());
        return redirect()->route('admin.proyek.index')->with('success', 'Proyek berhasil diupdate.');
    }

    public function destroy($id)
    {
        $proyek = Proyek::findOrFail($id);
        $proyek->delete();
        return redirect()->route('admin.proyek.index')->with('success', 'Proyek berhasil dihapus.');
    }
}
