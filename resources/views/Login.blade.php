<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Masuk</title>
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('{{ asset("assets/background.jpg") }}') no-repeat center center fixed;
            background-size: cover;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            backdrop-filter: blur(5px);
        }
        .login-box {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: #007bff;
        }
        .form-group a:hover {
            text-decoration: underline;
        }
        .btn {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn:hover {
            background: #0056b3;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Masuk</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="role">Sebagai</label>
                    <select name="role" id="role">
                        <option value="pemilik_kos">Pemilik Kos</option>
                        <option value="penyewa">Penyewa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <a href="#">Lupa Password?</a>
                </div>
                <button type="submit" class="btn">Masuk</button>
            </form>
            <p class="text-center">Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
        </div>
    </div>
</body>
</html>
