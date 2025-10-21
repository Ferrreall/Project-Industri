<?php

namespace App\Http\Controllers;

use App\Models\TugasIndustri;
use Illuminate\Http\Request;

class TugasIndustriController extends Controller
{
    public function index()
    {
        $tugas = TugasIndustri::all();
        return view('tampilan_tugas', compact('tugas'));
    }

    public function create()
    {
        return view('tugas_create'); // form tambah data
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'agama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'telepon' => 'nullable|string|max:30',
            'email' => 'required|email|unique:tugas_industris,email',
        ]);

        TugasIndustri::create($validated);

        return redirect()->route('tugas.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(TugasIndustri $tugas)
    {
        //
    }

    public function edit(TugasIndustri $tugas)
    {
        return view('tugas_edit', compact('tugas'));
    }

    public function update(Request $request, TugasIndustri $tugas)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'agama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'telepon' => 'nullable|string|max:30',
            'email' => 'required|email|unique:tugas_industris,email,'.$tugas->id,
        ]);

        $tugas->update($validated);

        return redirect()->route('tugas.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(TugasIndustri $tugas)
    {
        $tugas->delete();
        return redirect()->route('tugas.index')->with('success', 'Data berhasil dihapus.');
    }
}
