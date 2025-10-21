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
                    <div class="card-header">Add Data Biodata</div>
                    <div class="card-body">
                        <form action="{{ route('biodata.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label>Full Name</label>
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                                @error('nama_lengkap')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Gender</label>
                                <input type="radio" name="jenis_kelamin" value=Laki-Laki>Laki-Laki<input type="radio" name=jenis_kelamin value=Perempuan>Perempuan
                                <div>
                                    @error('jenis_kelamin')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label>Date Of Birth</label>
                                <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                @error('tanggal_lahir')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Place Of Birth</label>
                                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir">
                                @error('tempat_lahir')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Religion</label>
                                    <select name="agama" id="" class="form-control">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Konghuchu">Konghucu</option>
                                        <option value="Unknow">Unknow</option>
                                    </select>
                                    @error('agama')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <textarea type="text" class="form-control" name="alamat" placeholder="Alamat"></textarea>
                                @error('alamat')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Telephone</label>
                                <input type="number" class="form-control" name="telepon" placeholder="Telepon">
                                @error('telepon')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                                @error('alamat')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Cover</label>
                                <input type="file" class="form-control" name="cover" placeholder="Cover">
                                @error('cover')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{ route('biodata.index') }}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection