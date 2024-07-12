<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? '' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 
    <style>
        .navbar-brand {
            font-weight: bold;
            color: #ff6347; /* Warna merah jambu */
        }
        .navbar-nav .nav-link {
            font-weight: bold;
            color: #6c757d; /* Warna abu-abu tua */
        }
        .navbar-nav .nav-link:hover {
            color: #ff6347; /* Warna abu-abu muda saat hover */
        }
       
        .softlens-card {
            border: none;
            transition: transform 0.2s;
        }
        .softlens-card:hover {
            transform: scale(1.05);
        }
        .softlens-card img {
            border-radius: 10px;
        }
        
        .navbar {
            background-color: #2c2c2c; /* Warna gelap untuk background header */
        }
        .navbar-toggler-icon {
            color: #fff; /* Warna putih untuk icon toggler */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">SPK Pemilihan Softlens</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kriteria.index') }}">Kriteria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('alternatif.index') }}">Alternatif</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('nilai.index') }}">Nilai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('hitung.index') }}">Hitung</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container my-3">
        <h1>{{ $title ?? '' }}</h1>
        @yield('content')
    </div>
</body>

</html>