<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $pengguna = Pengguna::all();

        //pengguna.index gunanya untuk mengirim data pengguna ke index, jadi si data pengguna bakal masuk ke view index
        //lalu menggunakan compact buat nampilin datanya

        return view('pengguna.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  // ✅ VALIDASI DATA
        // $request->validate(
        //     [
        //         'name'   => 'required|min:2|string|max:255',
        //     ],
        //     [
        //         'name.required' => 'Nama tidak boleh kosong',
        //         'name.min'      => 'Nama minimal 3 karakter',
        //     ]
        // );

        // ✅ SIMPAN DATA
        $pengguna           = new Pengguna;
        $pengguna->name     = $request->name;

        // if ($request->hasFile('cover')) {
        //     $img  = $request->file('cover');
        //     $name = rand(1000,9999) . $img->getClientOriginalName();
        //     $img->move('image/pengguna', $name);
        //     $pengguna->cover = $name;
        // }

        $pengguna->save();

        session()->flash('success', 'Data berhasil ditambahkan!');
        return redirect()->route('pengguna.index');
    }

    /**
     * Display the specified resource.
     */
     public function show(string $id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('pengguna.show', compact('pengguna'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pengguna = Pengguna::findOrFail($id);
        return view('pengguna.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(Request $request, string $id)
    {
        // ✅ VALIDASI DATA
        $request->validate(
            [
                'name'   => 'required|min:3|max:255',
            ],
            [
                'name.required' => 'Nama tidak boleh kosong',
                'name.min'      => 'Nama minimal 3 karakter',
            ]
        );

        // ✅ UPDATE DATA
        $pengguna           = Pengguna::findOrFail($id);
        $pengguna->name    = $request->name;

        // if ($request->hasFile('cover')) {
        //     $img  = $request->file('cover');
        //     $name = rand(1000,9999) . $img->getClientOriginalName();
        //     $img->move('image/post', $name);
        //     $post->cover = $name;
        // }

        $pengguna->save();

        session()->flash('success', 'Data berhasil diupdate!');
        return redirect()->route('pengguna.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pengguna = Pengguna::findOrFail($id);
        
        // Hapus file img
        // if ($post->cover) {
        //     $filePath = public_path('image/post/' . $post->cover);
        //     if (File::exists($filePath)) {
        //         File::delete($filePath);
        //     }
        // }

        $pengguna->delete();
        return redirect()->route('pengguna.index')->with('success', 'Work dihapus bang gg, nice tim');
    }
}
