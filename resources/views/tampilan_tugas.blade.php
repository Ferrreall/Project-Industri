<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas CRUD</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #0d0d0d;
            /* hitam pekat */
            color: #f1f1f1;
            font-family: 'Poppins', sans-serif;
        }

        h1 {
            color: #FFD700;
            /* emas */
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
        }

        .card {
            background-color: #1a1a1a;
            border: 1px solid #FFD700;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
        }

        .table thead {
            background: linear-gradient(90deg, #FFD700, #ffcc00);
            color: #000;
            font-weight: 600;
        }

        .table tbody tr:hover {
            background-color: rgba(255, 215, 0, 0.1);
            transition: 0.3s;
        }

        .btn-custom {
            background-color: #FFD700;
            color: #000;
            font-weight: 600;
            border-radius: 25px;
            padding: 8px 20px;
        }

        .btn-custom:hover {
            background-color: #ffcc00;
            color: #111;
        }
    </style>
</head>

<body>

    <div class="container py-5">

        <div class="text-center mb-4">
            <h1>Biodata Siswa Sonic</h1>
            <p class="text-secondary">Daftar informasi siswa yang terdaftar</p>
            <a href="{{ route('tugas.create') }}" class="btn btn-custom">+ Tambah Data</a>
        </div>

        <div class="card shadow-lg border-0">
            <div class="card-body">
                <table class="table table-dark table-hover align-middle text-center">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Tanggal Lahir</th>
                            <th>Tempat Lahir</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tugas as $a)
                        <tr>
                            <td>{{ $a->id }}</td>
                            <td>{{ $a->nama_lengkap }}</td>
                            <td>{{ $a->jenis_kelamin }}</td>
                            <td>{{ $a->tanggal_lahir }}</td>
                            <td>{{ $a->tempat_lahir }}</td>
                            <td>{{ $a->agama }}</td>
                            <td>{{ $a->alamat }}</td>
                            <td>{{ $a->telepon }}</td>
                            <td>{{ $a->email }}</td>
                            <td>
                                <a href="{{ route('tugas.edit', $a->id) }}" class="btn btn-sm btn-custom">Edit</a>

                                <form action="{{ route('tugas.destroy', $a->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>