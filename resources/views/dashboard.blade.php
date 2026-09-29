<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard - Sintia Attahira</title>


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
            background: white;
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

        .logout {
            text-decoration: none;
            background: #fde0ed;
            color: #8f315f;
            padding: 10px 16px;
            border-radius: 10px;
            font-weight: bold;
        }

        .container {
            width: 86%;
            max-width: 1100px;
            margin: 40px auto;
        }

        .welcome {
            background: linear-gradient(135deg, #f7c6dd, #fde8f2);
            padding: 40px;
            border-radius: 25px;
            margin-bottom: 25px;
        }

        .welcome h1 {
            margin: 0 0 12px;
            color: #8f315f;
        }

        .welcome p {
            font-size: 17px;
            line-height: 1.7;
        }

        .quote {
            background: white;
            padding: 25px;
            border-radius: 20px;
            margin-bottom: 25px;
            box-shadow: 0 5px 20px rgba(190, 80, 140, 0.10);
        }

        .quote h2 {
            color: #b83f7d;
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
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(190, 80, 140, 0.10);
        }

        .card h3 {
            color: #b83f7d;
        }

        .card p {
            font-size: 28px;
            font-weight: bold;
        }

        .menu {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            text-decoration: none;
            background: #b83f7d;
            color: white;
            padding: 13px 20px;
            border-radius: 10px;
            font-weight: bold;
        }

        .btn-secondary {
            background: #fde0ed;
            color: #8f315f;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #8b6578;
        }

        @media (max-width: 700px) {

            .cards {
                grid-template-columns: 1fr;
            }

            .container {
                width: 92%;
            }

        }

    </style>

</head>


<body>


<nav class="navbar">

    <div class="logo">
        🌸 Sintia Attahira
    </div>

    <a href="{{ route('logout') }}" class="logout">
        Logout
    </a>

</nav>


<div class="container">


    <div class="welcome">

        <h1>
            Selamat Datang, {{ session('username') }} 🌸
        </h1>

        <p>
            Selamat datang di Dashboard Sistem Pendataan Mahasiswa.
            Terus belajar, terus berkembang, dan jangan takut mencoba
            hal baru.
        </p>

    </div>


    <div class="quote">

        <h2>
            ✨ Semangat Belajar!
        </h2>

        <p>
            "Belajar tidak harus langsung sempurna.
            Yang penting terus mencoba, terus berlatih,
            dan jangan menyerah."
        </p>

    </div>


    <div class="cards">


        <div class="card">

            <h3>
                👩‍🎓 Total Mahasiswa
            </h3>

            <p>
                {{ $jumlahMahasiswa }}
            </p>

        </div>


        <div class="card">

            <h3>
                📚 Sistem
            </h3>

            <p>
                CRUD
            </p>

        </div>


        <div class="card">

            <h3>
                💻 Framework
            </h3>

            <p>
                Laravel
            </p>

        </div>


    </div>


    <div class="menu">

        <a
            href="{{ route('mahasiswa.index') }}"
            class="btn"
        >
            📋 Data Mahasiswa
        </a>


        <a
            href="{{ route('mahasiswa.create') }}"
            class="btn btn-secondary"
        >
            ➕ Tambah Mahasiswa
        </a>

    </div>


</div>


<footer>

    © 2026 Sintia Attahira

</footer>


</body>

</html>