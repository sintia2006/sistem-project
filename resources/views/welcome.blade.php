<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Mahasiswa - Sintia Attahira</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #fff5fa;
            color: #633b50;
        }

        .navbar {
            background: #ffffff;
            padding: 18px 7%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 3px 15px rgba(190, 80, 140, 0.12);
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            color: #b83f7d;
        }

        .nav-link {
            text-decoration: none;
            color: #633b50;
            font-weight: bold;
        }

        .container {
            width: 86%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .welcome {
            background: linear-gradient(135deg, #f7c6dd, #fde8f2);
            padding: 35px;
            border-radius: 22px;
            margin-bottom: 25px;
        }

        .welcome h1 {
            margin: 0 0 10px;
            color: #8f315f;
        }

        .welcome p {
            margin: 0;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 30px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 18px;
            box-shadow: 0 5px 20px rgba(190, 80, 140, 0.10);
        }

        .card h3 {
            margin: 0 0 8px;
            color: #b83f7d;
        }

        .card p {
            font-size: 28px;
            font-weight: bold;
            margin: 0;
        }

        .table-box {
            background: white;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(190, 80, 140, 0.10);
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .table-header h2 {
            margin: 0;
            color: #8f315f;
        }

        .btn {
            display: inline-block;
            padding: 10px 16px;
            border-radius: 10px;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-tambah {
            background: #b83f7d;
            color: white;
        }

        .btn-edit {
            background: #fde0ed;
            color: #a52f6b;
        }

        .btn-hapus {
            background: #f8c5d8;
            color: #8f315f;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #f7c6dd;
            color: #633b50;
            padding: 14px;
            text-align: left;
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #f3dce7;
        }

        tr:hover {
            background: #fff8fb;
        }

        .aksi {
            display: flex;
            gap: 7px;
            align-items: center;
        }

        .aksi form {
            margin: 0;
        }

        @media (max-width: 800px) {
            .cards {
                grid-template-columns: 1fr;
            }

            .table-box {
                overflow-x: auto;
            }

            table {
                min-width: 750px;
            }

            .navbar {
                padding: 15px 5%;
            }

            .container {
                width: 92%;
            }
        }
    </style>
</head>

<body>

<nav class="navbar">
    <div class="logo">Sintia Attahira</div>

    <a href="{{ route('mahasiswa.index') }}" class="nav-link">
        Data Mahasiswa
    </a>
</nav>

<div class="container">

    <div class="welcome">
        <h1>Selamat Datang 🌸</h1>
        <p>
            Sistem Pendataan Mahasiswa
        </p>
    </div>

    <div class="cards">

        <div class="card">
            <h3>Total Mahasiswa</h3>
            <p>{{ $mahasiswa->count() }}</p>
        </div>

        <div class="card">
            <h3>Program Studi</h3>
            <p>TI</p>
        </div>

        <div class="card">
            <h3>Status</h3>
            <p>Aktif</p>
        </div>

    </div>

    <div class="table-box">

        <div class="table-header">

            <h2>Data Mahasiswa</h2>

            <a href="{{ route('mahasiswa.create') }}"
               class="btn btn-tambah">
                + Tambah Mahasiswa
            </a>

        </div>

        <table>

            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

            @forelse($mahasiswa as $key => $mhs)

                <tr>
                    <td>{{ $key + 1 }}</td>

                    <td>{{ $mhs->nim }}</td>

                    <td>{{ $mhs->nama }}</td>

                    <td>{{ $mhs->jurusan }}</td>

                    <td>{{ $mhs->alamat }}</td>

                    <td>
                        <div class="aksi">

                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}"
                               class="btn btn-edit">
                                Edit
                            </a>

                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-hapus"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    Hapus
                                </button>

                            </form>

                        </div>
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="6" style="text-align:center;">
                        Belum ada data mahasiswa.
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>