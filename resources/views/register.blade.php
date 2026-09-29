<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Daftar Akun - Sintia Attahira</title>


    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f7c6dd, #fff5fa);
            color: #633b50;
        }

        .register-box {
            width: 90%;
            max-width: 400px;
            background: white;
            padding: 35px;
            border-radius: 25px;
            box-shadow: 0 8px 30px rgba(190, 80, 140, 0.15);
        }

        .logo {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            color: #b83f7d;
        }

        h2 {
            text-align: center;
            color: #8f315f;
            margin-bottom: 8px;
        }

        .subtitle {
            text-align: center;
            color: #8b6578;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 15px;
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

        button {
            width: 100%;
            margin-top: 25px;
            padding: 13px;
            border: none;
            border-radius: 10px;
            background: #b83f7d;
            color: white;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .login {
            text-align: center;
            margin-top: 20px;
        }

        .login a {
            color: #b83f7d;
            font-weight: bold;
            text-decoration: none;
        }

    </style>

</head>


<body>

<div class="register-box">

    <div class="logo">
        🌸 Sintia Attahira
    </div>

    <h2>Daftar Akun</h2>

    <p class="subtitle">
        Buat akun untuk masuk ke sistem
    </p>


    <form action="{{ route('register.proses') }}" method="POST">

        @csrf


        <label>Username</label>

        <input
            type="text"
            name="username"
            placeholder="Buat username"
            required
        >


        <label>Password</label>

        <input
            type="password"
            name="password"
            placeholder="Buat password"
            required
        >


        <label>Konfirmasi Password</label>

        <input
            type="password"
            name="password_confirmation"
            placeholder="Ulangi password"
            required
        >


        <button type="submit">
            DAFTAR
        </button>

    </form>


    <div class="login">

        Sudah punya akun?

        <a href="{{ route('login') }}">
            Login
        </a>

    </div>

</div>

</body>

</html>