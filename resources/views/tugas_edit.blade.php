@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Data Siswa</h1>
   <form action="{{ route('tugas.update', $tugas) }}" method="POST">
    @csrf
    @method('PUT')
        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" value="{{ $tugas->nama_lengkap }}" required>
        </div>
        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="Laki-laki" {{ $tugas->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $tugas->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $tugas->tanggal_lahir }}" required>
        </div>
        <div class="mb-3">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" value="{{ $tugas->tempat_lahir }}" required>
        </div>
        <div class="mb-3">
            <label>Agama</label>
            <input type="text" name="agama" class="form-control" value="{{ $tugas->agama }}" required>
        </div>
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $tugas->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $tugas->telepon }}">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $tugas->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('tugas.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
