<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar</title>
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('{{ asset("assets/background.jpg") }}') no-repeat center center fixed;
            background-size: cover;
        }
        .register-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            backdrop-filter: blur(5px);
        }
        .register-box {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .register-box h2 {
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
    <div class="register-container">
        <div class="register-box">
            <h2>Daftar</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="role">Sebagai</label>
                    <select name="role" id="role">
                        <option value="pemilik_kos">Pemilik Kos</option>
                        <option value="penyewa">Penyewa</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="full_name">Nama Lengkap</label>
                    <input type="text" id="full_name" name="full_name" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                </div>
                <button type="submit" class="btn">Daftar</button>
            </form>
            <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
        </div>
    </div>
</body>
</html>
