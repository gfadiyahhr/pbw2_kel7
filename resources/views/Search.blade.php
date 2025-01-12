<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telkozy - Pencarian Kost</title>
    <link rel="stylesheet" href="{{ asset('assets/styles.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .header img {
            height: 40px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            color: #a52b2b;
            font-weight: bold;
        }

        .search-container {
            text-align: center;
            padding: 40px 20px;
        }

        .search-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #202f70;
        }

        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
        }

        .search-bar input {
            width: 50%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .search-bar button {
            padding: 10px 20px;
            background-color: #a52b2b;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #800000;
        }

        .search-results {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .search-results ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .search-results li {
            display: flex;
            align-items: center;
            padding: 15px 20px;
            border-bottom: 1px solid #f1f1f1;
        }

        .search-results li:last-child {
            border-bottom: none;
        }

        .search-results li svg {
            margin-right: 10px;
            color: #a52b2b;
        }

        .kost-list {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .kost-item {
            background: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            width: 200px;
        }

        .kost-item h3 {
            margin: 0;
            font-size: 18px;
            color: #202f70;
        }

        .kost-item p {
            margin: 5px 0;
            color: #555;
        }

        .kost-item span {
            font-size: 16px;
            color: #a52b2b;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Telkozy</h1>
        <div>
            <img src="{{ asset('assets/user-icon.svg') }}" alt="User Icon">
        </div>
    </div>

    <div class="search-container">
        <h2>Mau nyari kost gimana?</h2>
        <div class="search-bar">
            <input type="text" placeholder="Masukan nama/lokasi kost">
            <button>Cari</button>
        </div>
        <div class="search-results">
            <ul>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
  <path d="M8.515 3.7a.5.5 0 0 1-.933 0L6.418 2H4.5a.5.5 0 0 0 0 1h1.25L8 5l3.25-3H8.5l-.485 1.7z"/>
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zM8 1.75a6.25 6.25 0 1 0 0 12.5 6.25 6.25 0 0 0 0-12.5z"/>
</svg>Kost Sumberjaya</li>
                <li>Sukapura</li>
            </ul>
        </div>
        <div class="kost-list">
            <div class="kost-item">
                <h3>Kost Sumberjaya</h3>
                <p>Sukabirus</p>
                <span>Rp1.500.000/bulan</span>
            </div>
            <div class="kost-item">
                <h3>Kost Sumberjaya</h3>
                <p>Sukabirus</p>
                <span>Rp1.500.000/bulan</span>
            </div>
        </div>
    </div>
</body>
</html>
