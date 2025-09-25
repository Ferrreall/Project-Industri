<?php

use Illuminate\Support\Facades\Route;
use App\Models\biodata;
use App\Models\post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TugasIndustriController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('post', function () {

    // return $post = Post::find(1);

    // menampilkan semua data
    // return $post = post::all();

    // menampilkan data tertentu
    // return $post = Post::where('id','like','%1%')->get();

    // merubah data
    // $post = Post::find(1);
    // $post->content = 'belajar lebih giat lagi';
    // $post->save();
    // return $post;

    // menghapus
    // $post = Post::find(1);
    // $post->delete();
    // return $post;

    // menambahkan data
    // $post = new Post;
    // $post->title = 'menjadi teman yang baik';
    // $post->content = 'menjadi teman yang baik yang baik adalah hal positif';
    // $post->save();
    // return $post;

    // return view('halaman_post', compact('post'));
// });

Route::get('biodata', function () {


    // return $biodatas = Biodatas::find(1);

    // menampilkan semua data
    // $biodata = Biodata::all();
    // return view('tampilan_biodata', compact('biodata'));

    // menampilkan data tertentu
    return $biodata = biodata::where('id', 'like', 1)->get();


    // merubah data
    // $biodatas = Biodatas::find(1);
    // $biodatas->nama_lengkap = 'Tacyon';
    // $biodatas->save();
    // return $biodatas;

    // menghapus
    // $biodatas = Biodatas::find(1);
    // $biodatas->delete();
    // return $biodatas;

    // menambahkan data
    // $biodatas = new biodata;
    // $biodatas->nama_lengkap  = 'Tyrant';
    // $biodatas->jenis_kelamin = 'Laki-laki';
    // $biodatas->tanggal_lahir = '2008-7-9';
    // $biodatas->tempat_lahir  = 'Kokura';
    // $biodatas->agama = 'Islam';
    // $biodatas->alamat = 'Abyys';
    // $biodatas->telepon = '6666666666';
    // $biodatas->email = 'Tyra@gmail.com';
    // $biodatas->save();
    // return $biodatas;
});

// Route::get('post', [PostController::class, 'tampil']);

// Route::get('biodata', [BiodataController::class, 'tampilkan']);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/product',[ProductController::class, 'index'])->name('product');

Route::resource('tugas', TugasIndustriController::class);
