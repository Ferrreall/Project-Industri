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
                    <div class="card-header">Edit Data Pengguna</div>
                    <div class="card-body">
                        <form action="{{ route('pengguna.update', $pengguna->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $pengguna->name }}">
                                @error('name')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection