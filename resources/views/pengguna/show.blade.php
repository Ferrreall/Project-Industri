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
                                <label>Name</label>
                                <input type="text" class="form-control" name="name"  value="{{ $pengguna->name }}" disabled>
                            </div>
                            <a href="{{ route('pengguna.index') }}" class="btn btn-primary">Back</a>
                            </form>
</body>
</html>
@endsection