<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('{{ asset("assets/background.jpg") }}') no-repeat center center fixed;
            background-size: cover;
        }
        .forgot-password-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            backdrop-filter: blur(5px);
        }
        .forgot-password-box {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .forgot-password-box h2 {
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
        .form-group input {
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
    <div class="forgot-password-container">
        <div class="forgot-password-box">
            <h2>Lupa Password?</h2>
            <p>Masukkan email pada isian di bawah, kami akan mengirimkan tautan untuk me-reset password Anda.</p>
            <p>Pastikan email yang Anda masukkan sesuai dengan akun Anda.</p>
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <button type="submit" class="btn">Kirim</button>
            </form>
        </div>
    </div>
</body>
</html>
