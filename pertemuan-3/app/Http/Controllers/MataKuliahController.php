<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MataKuliahController extends Controller
{
    public function index(): View
    {
        $mataKuliah = MataKuliah::all();
        return view('matakuliah.index', compact('mataKuliah'));
    }

    public function show(string $id): View
    {
        $matakuliah = MataKuliah::find($id);

        if (!$matakuliah) {
            abort(404);
        }

        return view('matakuliah.show', compact('matakuliah', 'id'));
    }

    public function create(): View
    {
        return view('matakuliah.create');
    }

    public function store(Request $request)
    {
        MataKuliah::save($request->only(['kode', 'nama', 'sks']));
        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil ditambahkan');
    }

    public function edit(string $id): View
    {
        $matakuliah = MataKuliah::find($id);

        if (!$matakuliah) {
            abort(404);
        }

        return view('matakuliah.edit', compact('matakuliah', 'id'));
    }

    public function update(Request $request, string $id)
    {
        MataKuliah::update($id, $request->only(['kode', 'nama', 'sks']));
        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil diubah');
    }

    public function destroy(string $id)
    {
        $mataKuliah = new MataKuliah();
        $mataKuliah->delete($id);

        return redirect()->route('matakuliah.index')->with('success', 'Mata Kuliah berhasil dihapus');
    }
}
