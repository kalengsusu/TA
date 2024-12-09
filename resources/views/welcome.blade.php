<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="/css/welcome.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="">
                            <img src="/images/logo.png" alt="">
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/home') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Home
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class=" login rounded-md px-2 text-white "
                                    >
                                        <p>Login</p>
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>
                    <div class="header">
                        <img src="/images/header.jpg" alt="">
                    </div>
                    <div class="konten">
                        <h4>Tentang Kami</h4>
                        <hr>
                        <div class="container">
                            <p>Website ini menawarkan berbagai macam jajanan pasar yang pastinya memiliki rasa yang nikmat, dengan harga sangat terjangkau. Segera coba dijamin ketagihan.</p>
                            <div class="about" style="">
                                <img src="/images/sus.jpeg" class="card-img-top" alt="...">
                            </div>

                        </div>
                        <h4>Produk</h4>
                        <h5 class="container-fluid">Favorit</h5>
                        <div class="produk">
                            <div class="card-container">
                                <div class="card" style="">
                                    <img src="/images/lemper.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Lemper</h5>
                                        <p class="card-text">Lemper dengan isian ayam yang sangat gurih dan nikmat.</p>
                                    </div>
                                </div>

                                <div class="card" style="">
                                    <img src="/images/roti_kukus.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Roti Kukus</h5>
                                        <p class="card-text">Kue yang manis dan bertekstur lembut.</p>
                                    </div>
                                </div>

                                <div class="card" style="">
                                    <img src="/images/risol.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Risoles Mayonaise</h5>
                                        <p class="card-text">Risoles nikmat dangen isian yang lumer dilidah.</p>
                                    </div>
                                </div>

                                <div class="card" style="">
                                    <img src="/images/donat.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Donat</h5>
                                        <p class="card-text">Tekstur yang empuk yang dipadukan meses.</p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <footer class="py-16 text-sm text-black dark:text-white/70">
                        <div>
                            <p>Kontak :</p>
                            <p>081703370735</p>
                        </div>
                        <div></div>
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
