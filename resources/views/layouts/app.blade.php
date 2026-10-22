<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Sportiva')</title>

    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    
</head>
<body>

    <nav class="navbar navbar-expand-lg shadow-sm sticky-top">
        <div class="container">
            
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo.png') }}"
                alt="Logo Sportiva"
                style="height: 48px; width: auto;">
            </a>

            <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#menuNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menuNavbar">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    <a class="nav-link" href="{{ url('/#daftar-olahraga') }}">Daftar Olahraga</a>
                    <a class="nav-link" href="{{ route('tentang-kami') }}">Tentang Kami</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <p class="mb-0">&copy; {{ date('Y') }} Sportiva. Kenali Olahragamu, Mulai Aksi Hebatmu!</p>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
