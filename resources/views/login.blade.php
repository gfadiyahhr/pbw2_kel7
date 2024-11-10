<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk</title>
    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap') }}" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Baloo 2', cursive;
            background: url('{{ asset('src/img/background.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .masuk {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .masuk h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .masuk form {
            display: flex;
            flex-direction: column;
        }
        .masuk form select,
        .masuk form input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .masuk form button {
            padding: 10px;
            background-color: #0D1B46;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .masuk form button:hover {
            background-color: #0a1433;
        }
        .masuk .lupapassword a {
            color: #0D1B46;
            text-decoration: none;
        }
        .masuk .lupapassword a:hover {
            text-decoration: underline;
        }
        .masuk p {
            text-align: center;
        }
        .masuk p a {
            color: #0D1B46;
            text-decoration: none;
        }
        .masuk p a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="masuk">
        <h1>Masuk</h1>
        <p>sebagai</p>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <select id="as_a" name="as_a">
                <option value="1">Pencari Kost</option>
                <option value="2">Pemilik Kost</option>
            </select>
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <p class="lupapassword">
                <a href="{{ route('forgot-password') }}">Lupa Password?</a>
            </p>
            <button type="submit">Masuk</button>
        </form>
        <p>Belum punya akun? <b><a href="{{ route('register') }}" class="login-text">Daftar</a></b></p>
    </div>
</body>

</html>