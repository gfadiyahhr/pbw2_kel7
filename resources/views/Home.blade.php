<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telkozy - Beranda</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Header -->
    <header>
        <img src="{{ asset('images/logo-telkozy.png') }}" alt="Telkozy Logo">
        <div class="user-icon">👤</div>
    </header>

    <!-- Search Bar -->
    <div class="search-container">
        <h1>Mau nyari kost gimana?</h1>
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="query" placeholder="Masukkan nama/lokasi kost">
            <button type="submit">Cari</button>
        </form>
    </div>

    <!-- Recommendations Section -->
    <div class="recommendations">
        <h2>Rekomendasi Kost</h2>
        <div class="kost-list">
            @foreach ($kosts as $kost)
            <div class="kost-card">
                <img src="{{ asset('images/kost-placeholder.png') }}" alt="{{ $kost['name'] }}">
                <h3>{{ $kost['name'] }}</h3>
                <p>📍 {{ $kost['location'] }}</p>
                <p class="price">Rp{{ number_format($kost['price'], 0, ',', '.') }}/bulan</p>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Area Kost Section -->
    <div class="area-kost">
        <h2>Area Kost</h2>
        <div class="area-list">
            @foreach ($areas as $area)
            <div class="area-card">
                <img src="{{ asset('images/' . $area['image']) }}" alt="{{ $area['name'] }}">
                <div class="area-name">{{ $area['name'] }}</div>
            </div>
            @endforeach
        </div>
    </div>

</body>
</html>
