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
                    <div class="card-header">Show Data Post</div>
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $post->title }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Content</label>
                                <input type="text" class="form-control" name="content" value="{{ $post->content }}" disabled>
                            </div>
                            <div class="mb-3">
                                <label>Cover</label>
                                <div><img src="{{ asset('/image/post/' . $post->cover) }}" width="100" alt=""></td></div>
                                @error('cover')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <a href="{{ route('post.index') }}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
@endsection