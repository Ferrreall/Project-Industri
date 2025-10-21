<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Biodata;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $biodata = Biodata::all();

        //biodata.index gunanya untuk mengirim data biodata ke index, jadi si data biodata bakal masuk ke view index
        //lalu menggunakan compact buat nampilin datanya

        return view('biodata.index', compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_lengkap'       => 'required|string|min:2|max:220',
                'jenis_kelamin'      => 'required|max:220',
                'tanggal_lahir'      => 'required|date|min:2|max:220',
                'tempat_lahir'       => 'required|string|min:2|max:220',
                'agama'              => 'required|max:220',
                'alamat'             => 'required|string|min:2|max:220',
                'telepon'            => 'required|string|min:2|max:220',
                'email'              => 'required|string|min:2|max:220',
                'cover'              => 'required',

            ],
            [
                'nama_lengkap.required'     => 'Nama Lengkap tidak boleh kosong',
                'nama_lengkap.min'          => 'Nama Lengkap minimal 2 karakter',
                'jenis_kelamin.required'    => 'Jenis Kelamin tidak boleh kosong',
                'tanggal_lahir.required'    => 'Tanggal Lahir tidak boleh kosong',
                'tempat_lahir.required'     => 'Tempat Lahir tidak boleh kosong',
                'tempat_lahir.min'          => 'Tempat Lahir minimal 2 karakter',
                'agama.required'            => 'Agama tidak boleh kosong',
                'alamat.required'           => 'Alamat tidak boleh kosong',
                'alamat.min'                => 'Alamat minimal 2 karakter',
                'telepon.required'          => 'Telepon tidak boleh kosong',
                'telepon.min'               => 'Telepon minimal 2 karakter',
                'email.required'            => 'Email tidak boleh kosong',
                'email.min'                 => 'Email minimal 2 karakter',
                'cover.required'            => 'Cover tidak boleh kosong',
            ]
        );


        $biodata                    = new Biodata;
        $biodata->nama_lengkap      = $request->nama_lengkap;
        $biodata->jenis_kelamin     = $request->jenis_kelamin;
        $biodata->tanggal_lahir     = $request->tanggal_lahir;
        $biodata->tempat_lahir      = $request->tempat_lahir;
        $biodata->agama             = $request->agama;
        $biodata->alamat            = $request->alamat;
        $biodata->telepon           = $request->telepon;
        $biodata->email             = $request->email;
        $biodata->cover             = $request->cover;


        if ($request->hasFile('cover')) {
            $img  = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('image/post', $name);
            $biodata->cover = $name;
        }

        $biodata->save();

        session()->flash('success', 'Work bang gg, nice tim');

        return redirect()->route('biodata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.show', compact('biodata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biodata = Biodata::findOrFail($id);
        return view('biodata.edit', compact('biodata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate(
            [
                'nama_lengkap'       => 'required|string|min:2|max:220',
                'jenis_kelamin'      => 'required|max:220',
                'tanggal_lahir'      => 'required|date|min:2|max:220',
                'tempat_lahir'       => 'required|string|min:2|max:220',
                'agama'              => 'required|max:220',
                'alamat'             => 'required|string|min:2|max:220',
                'telepon'            => 'required|string|min:2|max:220',
                'email'              => 'required|string|min:2|max:220',
                'cover'              => 'required',


            ],
            [
                'nama_lengkap.required'     => 'Nama Lengkap tidak boleh kosong',
                'nama_lengkap.min'          => 'Nama Lengkap minimal 2 karakter',
                'jenis_kelamin.required'    => 'Jenis Kelamin tidak boleh kosong',
                'tanggal_lahir.required'    => 'Tanggal Lahir tidak boleh kosong',
                'tempat_lahir.required'     => 'Tempat Lahir tidak boleh kosong',
                'tempat_lahir.min'          => 'Tempat Lahir minimal 2 karakter',
                'agama.required'            => 'Agama tidak boleh kosong',
                'alamat.required'           => 'Alamat tidak boleh kosong',
                'alamat.min'                => 'Alamat minimal 2 karakter',
                'telepon.required'          => 'Telepon tidak boleh kosong',
                'telepon.min'               => 'Telepon minimal 2 karakter',
                'email.required'            => 'Email tidak boleh kosong',
                'email.min'                 => 'Email minimal 2 karakter',
                'cover.required'            => 'Cover tidak boleh kosong',
            ]
        );


        $biodata                    = Biodata::findOrFail($id);
        $biodata->nama_lengkap      = $request->nama_lengkap;
        $biodata->jenis_kelamin     = $request->jenis_kelamin;
        $biodata->tanggal_lahir     = $request->tanggal_lahir;
        $biodata->tempat_lahir      = $request->tempat_lahir;
        $biodata->agama             = $request->agama;
        $biodata->alamat            = $request->alamat;
        $biodata->telepon           = $request->telepon;
        $biodata->email             = $request->email;
        $biodata->cover             = $request->cover;

        if ($request->hasFile('cover')) {
            $img  = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('image/post', $name);
            $biodata->cover = $name;
        }

        $biodata->save();

        session()->flash('success', 'Work diubah bang gg, nice tim');

        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biodata = Biodata::findOrFail($id);

        if ($biodata->cover) {
            $filePath = public_path('image/post/' . $biodata->cover);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }

        $biodata->delete();
        return redirect()->route('biodata.index')->with('success', 'Work dihapus bang gg, nice tim');
    }
}
