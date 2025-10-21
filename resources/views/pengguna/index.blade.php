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
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">{{ __('Data Pengguna') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <a href="{{ route('pengguna.create') }}" class="btn btn-primary d-flex flex-column">Add</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($pengguna as $data)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td class="d-flex flex-column">
                                        <a href="{{ route('pengguna.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('pengguna.show', $data->id) }}" class="btn btn-warning">Show</a>
                                        <form action="{{ route('pengguna.destroy' , $data->id) }}" method="post" class="d-flex flex-column">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Beneran hapus bang?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
@endsection