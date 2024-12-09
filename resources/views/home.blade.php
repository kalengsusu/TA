<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="/css/nav.css">
    <link rel="stylesheet" href="/css/home.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="/images/logo.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <div class="icon">
                            <li class="nav">
                                <a href="/cart">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="" class="bi bi-cart" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                    </svg>
                                    <p>Keranjang</p>
                                </a>
                            </li>


                            <li class="nav-item dropdown">
                                <a id="" class="nav-link" href="/profile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="grey" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                                    </svg>
                                    {{ Auth::user()->name }}

                                </a>
                            </li>
                        </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="header">
        <img src="/images/header.jpg" alt="">
    </div>
    <div class="konten">
        <h4>Produk</h4>
        <h5 class="container-fluid">Rekomendasi</h5>
        <div class="produk">
            <div class="card-container">
                <div class="recom">
                    <div class="card" style="">
                        <img src="/images/lemper.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lemper</h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>

                    <div class="card" style="">
                        <img src="/images/roti_kukus.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Roti Kukus</h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>

                    <div class="card" style="">
                        <img src="/images/risol.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Risoles Mayonaise</h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>

                    <div class="card" style="">
                        <img src="/images/donat.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Donat</h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>
                </div>
            </div>

            <h5 class="container-fluid">Pilihan lainnya</h5 class="container-fluid">
            <div class="card-container">
                <div class="more">
                    <div class="card" style="">
                        <img src="/images/cum.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cum-cum</h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>

                    <div class="card" style="">
                        <img src="/images/spiku_pandan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Spiku Pandan</h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>

                    <div class="card" style="">
                        <img src="/images/sus.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sus Vla</h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>

                    <div class="card" style="">
                        <img src="/images/nagasari.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nagasari</h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>

                    <div class="card" style="">
                        <img src="/images/sus-buah.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sus Buah</h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>

                    <div class="card" style="">
                        <img src="/images/gabin.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gabin Vla</h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>

                    <div class="card" style="">
                        <img src="/images/marmer.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cake Marmer/h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>

                    <div class="card" style="">
                        <img src="/images/bolu-pelangi.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Bolu Pelangi</h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>

                    <div class="card" style="">
                        <img src="/images/pastel-tutup.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pastel Tutup</h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>

                    <div class="card" style="">
                        <img src="/images/wajik.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Wajik</h5>
                            <p class="card-text">Pre-order 2 Hari</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer class="py-16 text-sm text-black dark:text-white/70">
        <div>
            <p>Kontak :</p>
            <p>081703370735</p>
        </div>
        <div></div>
    </footer>
</body>
</html>
