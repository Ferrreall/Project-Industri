<?php

use Illuminate\Support\Facades\Route;
use App\Models\biodata;
use App\Models\post;
use App\Models\Wali;
use App\Models\Mahasiswa;
use App\Models\TugasIndustri;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\TugasIndustriController;
use App\Http\Controllers\RelasiController;


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

// Route::get('biodata', function () {


    // return $biodatas = Biodatas::find(1);

    // menampilkan semua data
    // $biodata = Biodata::all();
    // return view('tampilan_biodata', compact('biodata'));

    // menampilkan data tertentu
    // return $biodata = biodata::where('id', 'like', 1)->get();


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
    // return $tugas;
// });

// Route::get('post', [PostController::class, 'tampil']);

// Route::get('biodata', [BiodataController::class, 'tampilkan']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::resource('tugas', TugasIndustriController::class)->parameters([
    'tugas' => 'tugas'
]);



// Route::get('tugas_hapus', function () {
//     // menghapus
//     $tugas = TugasIndustri::find(22);
//     $tugas->delete();
//     return $tugas;
// });

// Route::get('tugas_buat', function () {
//     $tugas = new TugasIndustri;
//     $tugas->nama_lengkap = 'iritel';
//     $tugas->jenis_kelamin = 'perempuan';
//     $tugas->tanggal_lahir= '2001-9-10';
//     $tugas->tempat_lahir = 'pasuruan';
//     $tugas->agama = 'unknow';
//     $tugas->alamat = 'cicariu';
//     $tugas->telepon = '098881213';
//     $tugas->email = 'iri@gmail.com';
//     $tugas->save();
//     return $tugas;
// });

// Route::get('tugas_ubah', function () {
//    $tugas = TugasIndustri::find(7);
//     $tugas->nama_lengkap = 'aamon';
//     $tugas->jenis_kelamin = 'laki-laki';
//     $tugas->tanggal_lahir= '2031-9-10';
//     $tugas->tempat_lahir = 'apalah';
//     $tugas->agama = 'yes';
//     $tugas->alamat = 'cicariu';
//     $tugas->telepon = '8888888';
//     $tugas->email = 'cuki@gmail.com';
//     $tugas->save();
//     return $tugas;
// });

// Route::get('post',[PostController::class, 'tampilkan']);

Route::resource('post', PostsController::class);

Route::resource('biodata', BiodataController::class);
Route::resource('pengguna', PenggunaController::class);
Route::get('/one-to-one', [RelasiController::class, 'oneToOne']);
Route::get('/wali-ke-mahasiswa', function () {
    $wali = Wali::with('mahasiswa')->first();
    return "{$wali->nama} adalah wali dari {$wali->mahasiswa->nama}";
});

Route::get('/one-to-many', [RelasiController::class, 'oneToMany']);

Route::get('/mahasiswa-ke-dosen', function () {
    $mhs = Mahasiswa::where('nim', '123456')->first();
    return "{$mhs->nama} dibimbing oleh {$mhs->dosen->nama}";
});
