<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Telkozy | Aplikasi Pencari Kost Sekitar Telkom University</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">

  <!-- Custom style -->
  <link rel="stylesheet" type="text/css" href="{{ asset('src/style.css') }}" />
  <!-- Icon -->
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
  <header class="header-la-page">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img src="{{ asset('src/img/logo.png') }}" class="logo" alt="Telkozy" />
        </a>
        <h1 class="telkozy">Telkozy</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-outline-primary ms-2" href="{{ url('guest') }}">Guest</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="home" id="home" style="background-color: #fff1f2;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="home-text">
            <h1>Aplikasi Web Pencari Kost sekitar Telkom University</h1>
            <h2>Mau Cari Kost Apa? Kost <span class="auto-type"></span></h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="home-img">
            <img src="{{ asset('src/img/rumah-1.jpg') }}" alt="Test-1" class="rumah-1 img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-content text-center">
      <h3>Telkozy</h3>
      <p>Mitra terpercaya Anda dalam menemukan pilihan kos terbaik. Hubungi kami di platform media sosial untuk informasi lebih lanjut.</p>
      <ul class="socials list-inline">
        <li class="list-inline-item"><a href="#"><i class="ph ph-facebook-logo"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="ph ph-twitter-logo"></i></a></li>
        <li class="list-inline-item"><a href="#"><i class="ph ph-instagram-logo"></i></a></li>
      </ul>
    </div>
    <div class="footer-bottom text-center">
      <p>© 2024 Telkozy. All rights reserved.</p>
    </div>
  </footer>

  <!-- Script Auto-Typed JS -->
  <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
  <script>
    var typed = new Typed(".auto-type", {
      strings: ["Putra", "Putri", "Umum", "Murah"],
      loop: true,
      typeSpeed: 150,
      backSpeed: 150,
    });
  </script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="{{ asset('main.js') }}"></script>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
