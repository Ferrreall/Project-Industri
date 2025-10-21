@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            font-family: monospace;

        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
 <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Show Data Biodata</div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="nama_lengkap"  value="{{ $biodata->nama_lengkap }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Gender</label>
                                <input type="text" class="form-control" name="jenis_kelamin"  value="{{ $biodata->jenis_kelamin }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Date Of Birth</label>
                                <input type="date" class="form-control" name="tanggal_lahir"  value="{{ $biodata->tanggal_lahir }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Place of Birth</label>
                                <input type="text" class="form-control" name="tempat_lahir"  value="{{ $biodata->tempat_lahir }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Religion</label>
                                <input type="text" class="form-control" name="agama"  value="{{ $biodata->agama }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" class="form-control" name="alamat"  value="{{ $biodata->alamat }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Telephone</label>
                                <input type="text" class="form-control" name="telepon"  value="{{ $biodata->telepon }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email"  value="{{ $biodata->email }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Cover</label>
                                <div><img src="{{ asset('/image/post/' . $biodata->cover) }}" width="100" alt=""></div>
                                @error('cover')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <a href="{{ route('biodata.index') }}" class="btn btn-primary">Back</a>
                            </form>
</body>
</html>
@endsection