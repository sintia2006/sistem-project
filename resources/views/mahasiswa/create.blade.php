<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Siswa - Sintia Attahira</title>

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
            padding: 45px;
        }

        .form-box {
            max-width: 700px;
            background: white;
            padding: 35px;
            border-radius: 22px;
            box-shadow: 0 5px 20px rgba(190, 80, 140, 0.10);
        }

        h1 {
            margin-top: 0;
            color: #8f315f;
        }

        .subtitle {
            color: #8b6578;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 18px;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 13px;
            border: 1px solid #efcddd;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }

        input:focus {
            border-color: #b83f7d;
        }

        .buttons {
            margin-top: 28px;
            display: flex;
            gap: 10px;
        }

        button,
        .btn-kembali {
            padding: 12px 20px;
            border-radius: 10px;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        button {
            border: none;
            background: #b83f7d;
            color: white;
        }

        .btn-kembali {
            background: #fde0ed;
            color: #8f315f;
        }

        button:hover,
        .btn-kembali:hover {
            opacity: 0.85;
        }

        /* MOBILE */

        @media (max-width: 700px) {

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

        <a href="{{ route('mahasiswa.index') }}">
            👩‍🎓 Data Mahasiswa
        </a>

        <a href="{{ route('mahasiswa.create') }}" class="active">
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

    <div class="form-box">

        <h1>Tambah Siswa 🌸</h1>

        <p class="subtitle">
            Silakan isi data mahasiswa dengan lengkap.
        </p>


        <form action="{{ route('mahasiswa.store') }}" method="POST">

            @csrf


            <label>NIM</label>

            <input
                type="text"
                name="nim"
                placeholder="Masukkan NIM"
                required
            >


            <label>Nama Mahasiswa</label>

            <input
                type="text"
                name="nama"
                placeholder="Masukkan nama mahasiswa"
                required
            >


            <label>Jurusan</label>

            <input
                type="text"
                name="jurusan"
                placeholder="Contoh: Teknik Informatika"
                required
            >


            <label>Alamat</label>

            <input
                type="text"
                name="alamat"
                placeholder="Masukkan alamat"
                required
            >


            <div class="buttons">

                <button type="submit">
                    Simpan Data
                </button>

                <a
                    href="{{ route('mahasiswa.index') }}"
                    class="btn-kembali"
                >
                    Kembali
                </a>

            </div>

        </form>

    </div>

</div>


</body>

</html>