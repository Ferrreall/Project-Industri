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
                    <div class="card-header">Edit Data Post</div>
                    <div class="card-body">
                        <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf    
                        @method('PUT')
                        <div class="mb-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}">
                                @error('title')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Content</label>
                                <input type="text" class="form-control" name="content" value="{{ $post->content }}">
                                @error('content')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Cover Sebelumnya</label>
                                <div><img src="{{ asset('/image/post/' . $post->cover) }}" width="100" alt=""></td></div>
                                <label>Cover</label>
                                <input type="file" class="form-control" name="cover" placeholder="Cover">
                                @error('cover')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection