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
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">{{ __('Data Biodata') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <a href="{{ route('biodata.create') }}" class="btn btn-primary d-flex flex-column">Add</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Full name</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Date Of Birth</th>
                                    <th scope="col">Place Of Birth</th>
                                    <th scope="col">Religion</th>
                                    <th scope="col">Addres</th>
                                    <th scope="col">Telephone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Cover</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($biodata as $a)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $a->nama_lengkap }}</td>
                                    <td>{{ $a->jenis_kelamin }}</td>
                                    <td>{{ $a->tanggal_lahir }}</td>
                                    <td>{{ $a->tempat_lahir }}</td>
                                    <td>{{ $a->agama }}</td>
                                    <td>{{ $a->alamat }}</td>
                                    <td>{{ $a->telepon }}</td>
                                    <td>{{ $a->email }}</td>
                                    <td>
                                        @if ($a->cover)

                                        <img src="{{ asset('/image/post/' . $a->cover) }}" width="100" alt="">
                                    </td>
                                        @else
                                        <span class="text-muted">Tidak ada foto</span>
                                        @endif
                                    <td class="d-flex flex-column">
                                        <a href="{{ route('biodata.edit', $a->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('biodata.show', $a->id) }}" class="btn btn-warning">Show</a>
                                        <form action="{{ route('biodata.destroy' , $a->id) }}" method="post" class="d-flex flex-column">
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