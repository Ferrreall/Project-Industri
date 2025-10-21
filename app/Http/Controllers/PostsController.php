<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //untuk nampilin data, semua

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $post = Post::all();

        //post.index gunanya untuk mengirim data post ke index, jadi si data post bakal masuk ke view index
        //lalu menggunakan compact buat nampilin datanya

        return view('post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     */

    //create dan store itu sepaket, buat nambah butuh 2 itu
    //create hanyak untuk nge return view/hanya menuju ke halaman create
    //store buat proses menambahkan datanya
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ✅ VALIDASI DATA
        $request->validate(
            [
                'title'   => 'required|min:3|string|max:255',
                'content' => 'required|min:5|string|max:255',
            ],
            [
                'title.required' => 'Judul tidak boleh kosong',
                'title.min'      => 'Judul minimal 3 karakter',
                'content.required' => 'Konten tidak boleh kosong',
                'content.min'      => 'Konten minimal 5 karakter',
            ]
        );

        // ✅ SIMPAN DATA
        $post           = new Post;
        $post->title    = $request->title;
        $post->content  = $request->content;
        $post->cover    = $request->cover;

        if ($request->hasFile('cover')) {
            $img  = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('image/post', $name);
            $post->cover = $name;
        }

        $post->save();

        session()->flash('success', 'Data berhasil ditambahkan!');
        return redirect()->route('post.index');
    }


    /**
     * Display the specified resource.
     */

    //show buat nampilin salah satu data
    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */


    //edit update sepaket

    //edit dan update itu sepaket, buat nambah butuh 2 itu
    //edit hanyak untuk nge return view/hanya menuju ke halaman update/edit
    //update buat proses merubah/mengupdate datanya
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // ✅ VALIDASI DATA
        $request->validate(
            [
                'title'   => 'required|min:3|max:255',
                'content' => 'required|min:5|max:255',
            ],
            [
                'title.required' => 'Judul tidak boleh kosong',
                'title.min'      => 'Judul minimal 3 karakter',
                'content.required' => 'Konten tidak boleh kosong',
                'content.min'      => 'Konten minimal 5 karakter',
            ]
        );

        // ✅ UPDATE DATA
        $post           = Post::findOrFail($id);
        $post->title    = $request->title;
        $post->content  = $request->content;

        if ($request->hasFile('cover')) {
            $img  = $request->file('cover');
            $name = rand(1000,9999) . $img->getClientOriginalName();
            $img->move('image/post', $name);
            $post->cover = $name;
        }

        $post->save();

        session()->flash('success', 'Data berhasil diupdate!');
        return redirect()->route('post.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        
        // Hapus file img
        if ($post->cover) {
            $filePath = public_path('image/post/' . $post->cover);
            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }

        $post->delete();
        return redirect()->route('post.index')->with('success', 'Work dihapus bang gg, nice tim');
    }
}
