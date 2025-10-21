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
                    <div class="card-header">{{ __('Data Post') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <a href="{{ route('post.create') }}" class="btn btn-primary">Add</a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Content</th>
                                    <th scope="col">Cover</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($post as $ib)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $ib->title }}</td>
                                    <td>{{ $ib->content }}</td>
                                    <td><img src="{{ asset('/image/post/' . $ib->cover) }}" width="100" alt=""></td>
                                    <td>
                                        <a href="{{ route('post.edit', $ib->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ route('post.show', $ib->id) }}" class="btn btn-warning">Show</a>
                                        <form action="{{ route('post.destroy' , $ib->id) }}" method="post">
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