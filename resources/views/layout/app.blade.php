<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GoEks - Ekstrakurikuler')</title>
    @vite('resources/css/app.css')

    <!-- Google Font: Poppins (Dribbble-like) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- optional: tetap pakai Playfair untuk tagline italic -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
</head>

<body class="antialiased bg-gray-100 text-gray-800 min-h-screen flex flex-col">
    <!-- Header -->
    <header class="shadow mb-6 text-white bg-[#FD4E0F]">
        @yield('header')
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <a href="#" class="flex items-center space-x-3">
                <img src="{{ asset('image/logo.jpg') }}" alt="Logo" class="h-14 md:h-16">
            </a>

            <!-- Desktop nav -->
            <nav class="desktop-nav hidden md:flex items-center space-x-6">
                <a href="/beranda" class="nav-link">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span>Beranda</span>
                </a>

                <a href="#" class="nav-link">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>Ekstrakurikuler</span>
                </a>

                <a href="#" class="nav-link">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>Jadwal</span>
                </a>

                <a href="#" class="nav-link">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    <span>Pendaftaran</span>
                </a>

                <a href="#" class="nav-link">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    <span>Kontak</span>
                </a>
            </nav>

            <div class="auth-actions hidden md:flex items-center space-x-3">
                <a href="#"
                    class="bg-white text-[#FD4E0F] px-4 py-2 rounded-md font-medium border-2 border-white 
                    transition-colors duration-300 hover:bg-[#FD4E0F] hover:text-white">Daftar</a>
                <a href="#"
                    class="bg-[#FD4E0F] text-white px-4 py-2 rounded-md font-medium border-2 border-white transition-colors duration-300 hover:bg-white hover:text-[#FD4E0F]">
                    Masuk
                </a>
            </div>

            <!-- Mobile menu button -->
            <button id="nav-toggle"
                class="mobile-toggle md:hidden inline-flex items-center justify-center p-2 rounded-md text-white focus:outline-none"
                aria-label="Toggle menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile off-canvas sidebar -->
        <div id="mobile-overlay"
            class="fixed inset-0 backdrop-blur-sm bg-black/30 z-40 hidden transition-all duration-300"></div>

        <aside id="mobile-sidebar"
            class="fixed inset-y-0 left-0 z-50 w-72 max-w-full bg-[#FD4E0F]/95 backdrop-blur-sm transform -translate-x-full transition-transform duration-300 ease-in-out">
            <div class="h-16 flex items-center px-4 border-b border-white/20">
                <a href="#" class="flex items-center space-x-3 text-white">
                    <img src="{{ asset('image/ChatGPT_Image_23_Okt_2025__10.06.02-removebg-preview (1).png') }}"
                        alt="Logo" class="h-10">
                    <span class="text-xs leading-tight">Your future awaits you
                    </span>
                </a>
                <button id="mobile-close" class="ml-auto p-2 text-white focus:outline-none" aria-label="Close menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <nav class="px-4 py-4 flex flex-col space-y-2">
                <a href="/beranda"
                    class="text-white/90 group flex items-center space-x-3 p-2 rounded-lg transition-all duration-300 hover:bg-white/10">
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">Beranda</span>
                </a>

                <a href="#"
                    class="text-white/90 group flex items-center space-x-3 p-2 rounded-lg transition-all duration-300 hover:bg-white/10">
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">Ekstrakurikuler</span>
                </a>

                <a href="#"
                    class="text-white/90 group flex items-center space-x-3 p-2 rounded-lg transition-all duration-300 hover:bg-white/10">
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">Jadwal</span>
                </a>

                <a href="#"
                    class="text-white/90 group flex items-center space-x-3 p-2 rounded-lg transition-all duration-300 hover:bg-white/10">
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">Pendaftaran</span>
                </a>

                <a href="#"
                    class="text-white/90 group flex items-center space-x-3 p-2 rounded-lg transition-all duration-300 hover:bg-white/10">
                    <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">Kontak</span>
                </a>

                <div class="mt-4 space-y-2">
                    <a href="#"
                        class="block bg-white text-[#FD4E0F] px-3 py-2 rounded-md text-center border-2 border-white transition-colors duration-300 hover:bg-[#FD4E0F] hover:text-white">
                        Daftar
                    </a>
                    <a href="#"
                        class="block bg-[#FD4E0F] text-white px-3 py-2 rounded-md text-center border-2 border-white transition-colors duration-300 hover:bg-white hover:text-[#FD4E0F]">
                        Masuk
                    </a>
                </div>
            </nav>
        </aside>
    </header>

    <!-- Body -->
    <main class="grow container mx-auto px-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow p-4 text-center text-sm text-gray-600 mt-auto">
        <p>&copy; {{ date('Y') }} GoEks. All Right Reserved</p>
    </footer>

</body>
<script src="{{ asset('js/layout.js') }}"></script>

</html>
