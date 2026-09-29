<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home - Sintia Attahira</title>

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

        .nav-menu {
            display: flex;
            gap: 25px;
        }

        .nav-menu a {
            text-decoration: none;
            color: #633b50;
            font-weight: bold;
        }

        .nav-menu a:hover {
            color: #b83f7d;
        }

        .hero {
            width: 86%;
            max-width: 1100px;
            margin: 50px auto 30px;
            padding: 60px 40px;
            background: linear-gradient(135deg, #f7c6dd, #fde8f2);
            border-radius: 30px;
            text-align: center;
        }

        .hero h1 {
            margin: 0 0 15px;
            font-size: 42px;
            color: #8f315f;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;
            padding: 13px 24px;
            background: #b83f7d;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: bold;
        }

        .btn:hover {
            opacity: 0.85;
        }

        .info {
            width: 86%;
            max-width: 1100px;
            margin: 30px auto 50px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
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
            line-height: 1.6;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #8b6578;
        }

        @media (max-width: 700px) {
            .info {
                grid-template-columns: 1fr;
            }

            .hero {
                padding: 40px 25px;
            }

            .hero h1 {
                font-size: 30px;
            }

            .nav-menu {
                gap: 10px;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">

        <div class="logo">
            Sintia Attahira
        </div>

        <div class="nav-menu">
            <a href="{{ url('/') }}">Home</a>

            <a href="{{ route('mahasiswa.index') }}">
                Data Mahasiswa
            </a>
        </div>

    </nav>


    <section class="hero">

        <h1>Selamat Datang 🌸</h1>

        <p>
            Sistem Pendataan Mahasiswa
            <br>
            Universitas Jabal Ghafur
        </p>

        <a href="{{ route('mahasiswa.index') }}" class="btn">
            Kelola Data Mahasiswa
        </a>

    </section>


    <section class="info">

        <div class="card">
            <h3>📚 Data Mahasiswa</h3>

            <p>
                Mengelola data mahasiswa secara
                terstruktur dan mudah digunakan.
            </p>
        </div>


        <div class="card">
            <h3>✏️ CRUD</h3>

            <p>
                Data dapat ditambah, dilihat,
                diedit, dan dihapus.
            </p>
        </div>


        <div class="card">
            <h3>💻 Laravel</h3>

            <p>
                Sistem dibuat menggunakan
                Laravel dan MySQL.
            </p>
        </div>

    </section>


    <footer>
        © 2026 Sintia Attahira
    </footer>

</body>
</html>