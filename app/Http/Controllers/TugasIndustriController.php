<?php

namespace App\Http\Controllers;

use App\Models\TugasIndustri;
use Illuminate\Http\Request;

class TugasIndustriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tugas = TugasIndustri::all();

        return view('tampilan_tugas', compact('tugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('tampilan_tugas');
    }

    /**
     * Store a newly created resource in storage.
     */
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
            'email' => 'required|email|unique:biodatas,email',
        ]);

        TugasIndustri::create($validated);

        return redirect()->route('TugasIndustri.php')->with('success','Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TugasIndustri $tugas_Industri)
    {
        return view('tampilan_tugas', compact('tugas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TugasIndustri $tugas_Industri)
    {
        return view('tampilan_tugas', compact('tugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TugasIndustri $tugas_Industri)
    {
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string|max:255',
            'agama' => 'required|string|max:100',
            'alamat' => 'required|string',
            'telepon' => 'nullable|string|max:30',
            'email' => 'required|email|unique:biodatas,email,'.$tugas_Industri->id,
        ]);

        $tugas_Industri->update($validated);

        return redirect()->route('tampilan_tugas')->with('success','Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TugasIndustri $tugas_Industri)
    {
        $tugas_Industri->delete();
        return redirect()->route('tampilan_tugas')->with('success','Data berhasil dihapus.');
    }
}
