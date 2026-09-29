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

        /* SIDEBAR */

        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 240px;
            height: 100vh;
            background: white;
            padding: 30px 20px;
            box-shadow: 3px 0 15px rgba(190, 80, 140, 0.12);
        }

        .logo {
            text-align: center;
            color: #b83f7d;
            font-size: 21px;
            font-weight: bold;
            margin-bottom: 35px;
        }

        .menu a {
            display: block;
            text-decoration: none;
            color: #633b50;
            padding: 14px 16px;
            border-radius: 10px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .menu a:hover {
            background: #fde0ed;
            color: #b83f7d;
        }

        .menu .active {
            background: #f7c6dd;
            color: #8f315f;
        }

        .logout {
            position: absolute;
            bottom: 30px;
            left: 20px;
            right: 20px;
        }

        .logout a {
            display: block;
            text-align: center;
            text-decoration: none;
            background: #fde0ed;
            color: #8f315f;
            padding: 12px;
            border-radius: 10px;
            font-weight: bold;
        }

        /* CONTENT */

        .content {
            margin-left: 240px;
            padding: 40px;
        }

        .welcome {
            background: linear-gradient(135deg, #f7c6dd, #fde8f2);
            padding: 30px;
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

        /* MOBILE */

        @media (max-width: 800px) {

            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .logout {
                position: static;
                margin-top: 20px;
            }

            .content {
                margin-left: 0;
                padding: 25px;
            }

            .table-box {
                overflow-x: auto;
            }

            table {
                min-width: 750px;
            }

            .table-header {
                gap: 15px;
                flex-wrap: wrap;
            }
        }
    </style>

</head>

<body>


<!-- SIDEBAR -->

<div class="sidebar">

    <div class="logo">
        🌸 Sintia Attahira
    </div>

    <div class="menu">

        <a href="{{ route('dashboard') }}">
            🏠 Dashboard
        </a>

        <a href="{{ route('mahasiswa.index') }}" class="active">
            👩‍🎓 Data Mahasiswa
        </a>

        <a href="{{ route('mahasiswa.create') }}">
            ➕ Tambah Siswa
        </a>

    </div>

    <div class="logout">

        <a href="{{ route('logout') }}">
            🚪 Logout
        </a>

    </div>

</div>


<!-- CONTENT -->

<div class="content">

    <div class="welcome">

        <h1>
            Data Mahasiswa 🌸
        </h1>

        <p>
            Kelola data mahasiswa dengan mudah dan terstruktur.
        </p>

    </div>


    <div class="table-box">

        <div class="table-header">

            <h2>
                Daftar Mahasiswa
            </h2>

            <a
                href="{{ route('mahasiswa.create') }}"
                class="btn btn-tambah"
            >
                + Tambah Siswa
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

                        <td>
                            {{ $key + 1 }}
                        </td>

                        <td>
                            {{ $mhs->nim }}
                        </td>

                        <td>
                            {{ $mhs->nama }}
                        </td>

                        <td>
                            {{ $mhs->jurusan }}
                        </td>

                        <td>
                            {{ $mhs->alamat }}
                        </td>

                        <td>

                            <div class="aksi">

                                <a
                                    href="{{ route('mahasiswa.edit', $mhs->id) }}"
                                    class="btn btn-edit"
                                >
                                    Edit
                                </a>


                                <form
                                    action="{{ route('mahasiswa.destroy', $mhs->id) }}"
                                    method="POST"
                                >

                                    @csrf

                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-hapus"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')"
                                    >
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td
                            colspan="6"
                            style="text-align:center;"
                        >
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