<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <center>
        <h2>Data Post</h2>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Content</th>
            </tr>
            <!-- biar nampil semua data pake foreach -->
            @foreach ($post as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->content }}</td>
            </tr>
            @endforeach
        </table>
    </center>

</body>

</html>