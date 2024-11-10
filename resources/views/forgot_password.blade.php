<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Password</title>
    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css') }}">
    <link href="{{ asset('https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&display=swap') }}" rel="stylesheet"/>
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
        .container-lupa-password {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        .container-lupa-password h1 {
            margin-bottom: 20px;
        }
        .container-lupa-password form {
            display: flex;
            flex-direction: column;
        }
        .container-lupa-password form input {
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .container-lupa-password form button {
            padding: 10px;
            background-color: #0D1B46;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .container-lupa-password form button:hover {
            background-color: #0a1433;
        }
    </style>
</head>
<body>
    <div class="container-lupa-password">
        <h1>Lupa Password?</h1>
        <div class="cover-container">
            <form action="{{ url('send_password_reset') }}" method="POST">
                @csrf
                <p>Masukkan email pada isian dibawah, kami akan mengirimkan tautan untuk me-reset password anda.</p>
                <p>Pastikan email yang anda masukkan sesuai dengan akun anda.</p>
                <input type="email" name="email" placeholder="Email" required>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </div>
</body>
</html>
