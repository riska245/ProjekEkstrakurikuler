<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GoEks - Ekstrakurikuler')</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- Google Font: Poppins (Dribbble-like) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- optional: tetap pakai Playfair untuk tagline italic -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/page/tentang/tentang.css') }}">
</head>

<body class="antialiased bg-gray-100 text-gray-800 min-h-screen flex flex-col">
    <!-- Preloader -->
    <div id="preloader" class="fixed inset-0 z-50 flex items-center justify-center bg-white">
        <div class="flex flex-col items-center space-y-4">
            <!-- Animasi lingkaran -->
            <div class="w-12 h-12 border-4 border-[#FD4E0F] border-t-transparent rounded-full animate-spin"></div>
            <p class="text-[#FD4E0F] font-semibold">Memuat...</p>
        </div>
    </div>

    <!-- Header -->
    <header class="shadow mb-6 text-white bg-[#FD4E0F]">
        @yield('header')
        <div class="container mx-auto flex items-center justify-between px-4 py-3">
            <a href="/" class="flex items-center space-x-3">
                <img src="{{ asset('image/logo.jpg') }}" alt="Logo" class="h-18">
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

                <a href="/tentang-kami" class="nav-link">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span>Tentang Kami</span>
                </a>

                <a href="#" class="nav-link">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 21h8m-4-4v4m7-18H5a2 2 0 00-2 2v3a5 5 0 005 5h8a5 5 0 005-5V5a2 2 0 00-2-2z" />
                    </svg>
                    <span>Ekstrakurikuler</span>
                </a>

                <a href="#" class="nav-link">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    <span>Pendaftaran</span>
                </a>
            </nav>

            <div class="auth-actions hidden md:flex items-center space-x-3">
                <div id="guest-actions" class="hidden">
                    <a href="/daftar"
                        class="bg-white text-[#FD4E0F] px-4 py-2 rounded-md font-medium border-2 trans border-white transition-colors duration-300 hover:bg-[#FD4E0F] hover:text-white">Daftar</a>
                    <a href="/masuk"
                        class="bg-[#FD4E0F] text-white px-4 py-2 rounded-md font-medium border-2 border-white hover:bg-white transition-colors duration-300 hover:text-[#FD4E0F]">Masuk</a>
                </div>
                <div id="user-actions" class="flex items-center gap-3">

                    <span id="user-name" class="text-white font-medium truncate"></span>

                    <button onclick="logout()"
                        class=" cursor-pointer flex items-center gap-1.5 bg-[#FD4E0F] text-white px-4 py-2 rounded-md border-2 border-white transition-all duration-300 hover:bg-white hover:text-[#FD4E0F] focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                        </svg>
                        <span class="whitespace-nowrap">Keluar</span>
                    </button>

                </div>

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
                <a href="/beranda" class="flex items-center space-x-3 text-white">
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
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                    </svg>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">Beranda</span>
                </a>

                <a href="/tentang-kami"
                    class="text-white/90 group flex items-center space-x-3 p-2 rounded-lg transition-all duration-300 hover:bg-white/10">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">Tentang Kami</span>
                </a>

                <a href="#"
                    class="text-white/90 group flex items-center space-x-3 p-2 rounded-lg transition-all duration-300 hover:bg-white/10">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 21h8m-4-4v4m7-18H5a2 2 0 00-2 2v3a5 5 0 005 5h8a5 5 0 005-5V5a2 2 0 00-2-2z" />
                    </svg>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">Ekstrakurikuler</span>
                </a>

                <a href="#"
                    class="text-white/90 group flex items-center space-x-3 p-2 rounded-lg transition-all duration-300 hover:bg-white/10">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    <span class="transition-transform duration-300 group-hover:translate-x-1">Pendaftaran</span>
                </a>

                <div id="mobile-user-actions" class="hidden flex-col mt-4 space-y-2">
                    <span id="mobile-user-name"
                        class="block text-center text-white font-medium px-3 py-2 rounded-md truncate min-h-8"></span>
                    <button onclick="logout()"
                        class="w-full flex items-center justify-center gap-2 bg-[#FD4E0F] text-white px-3 py-2 rounded-md text-center border-2 border-white transition-colors duration-300 hover:bg-white hover:text-[#FD4E0F] cursor-pointer">
                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="h-5 w-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
                        </svg>
                        Keluar
                    </button>
                </div>


                <div id="mobile-guest-actions" class="flex flex-col mt-4 space-y-2">
                    <a href="/daftar"
                        class="block bg-white text-[#FD4E0F] px-3 py-2 rounded-md text-center border-2 border-white transition-colors duration-300 hover:bg-[#FD4E0F] hover:text-white">
                        Daftar
                    </a>
                    <a href="/masuk"
                        class="block bg-[#FD4E0F] text-white px-3 py-2 rounded-md text-center border-2 border-white transition-colors duration-300 hover:bg-white hover:text-[#FD4E0F]">
                        Masuk
                    </a>
                </div>

            </nav>
        </aside>
    </header>

    <!-- Body -->
    <main class="grow container mx-auto px-4" id="content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white shadow-md p-6 md:p-8 text-center text-gray-600 mt-auto">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4 max-w-6xl mx-auto">

            <!-- Logo & Teks -->
            <div class="text-sm">
                <p>&copy; {{ date('Y') }}
                    <span class="font-semibold text-[#FD4E0F]">GoEks</span>. All Rights Reserved.
                </p>
            </div>

            <!-- Social Media Icons -->
            <div class="flex items-center gap-2">
                <!-- YouTube -->
                <a href="#" class="group flex flex-col items-center transition-all duration-300">
                    <svg class="w-6 h-6 text-gray-500 group-hover:text-[#FD4E0F] transition-all duration-300 transform group-hover:-translate-y-1"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M21.8 8s-.2-1.5-.8-2.1a3 3 0 0 0-2.1-.8c-2.9-.2-7.3-.2-7.3-.2h-.1s-4.4 0-7.3.2a3 3 0 0 0-2.1.8A3.3 3.3 0 0 0 2.2 8a41 41 0 0 0-.2 4v.1a41 41 0 0 0 .2 4s.2 1.5.8 2.1a3 3 0 0 0 2.1.8c2.9.2 7.3.2 7.3.2h.1s4.4 0 7.3-.2a3 3 0 0 0 2.1-.8 3.3 3.3 0 0 0 .8-2.1 41 41 0 0 0 .2-4v-.1a41 41 0 0 0-.2-4zM9.8 15.6V8.4l6 3.6-6 3.6z" />
                    </svg>
                    <span
                        class="text-xs mt-1 opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-[#FD4E0F] font-medium">YouTube</span>
                </a>

                <!-- Instagram -->
                <a href="#" class="group flex flex-col items-center transition-all duration-300">
                    <svg class="w-6 h-6 text-gray-500 group-hover:text-[#FD4E0F] transition-all duration-300 transform group-hover:-translate-y-1"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M7.75 2C4.13 2 1 5.13 1 8.75v6.5C1 18.87 4.13 22 7.75 22h8.5c3.62 0 6.75-3.13 6.75-6.75v-6.5C23 5.13 19.87 2 16.25 2h-8.5zM12 7.3a4.7 4.7 0 1 1 0 9.4 4.7 4.7 0 0 1 0-9.4zm6.5-.95a1.05 1.05 0 1 1 0 2.1 1.05 1.05 0 0 1 0-2.1zM12 9.1a2.9 2.9 0 1 0 0 5.8 2.9 2.9 0 0 0 0-5.8z" />
                    </svg>
                    <span
                        class="text-xs mt-1 opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-[#FD4E0F] font-medium">Instagram</span>
                </a>

                <!-- GitHub -->
                <a href="https://github.com/riska245/ProjekEkstrakurikuler" target="blank"
                    class="group flex flex-col items-center transition-all duration-300">
                    <svg class="w-6 h-6 text-gray-500 group-hover:text-[#FD4E0F] transition-all duration-300 transform group-hover:-translate-y-1"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 .5a12 12 0 0 0-3.8 23.4c.6.1.8-.3.8-.6v-2.3c-3.3.7-4-1.6-4-1.6a3.1 3.1 0 0 0-1.3-1.7c-1-.7.1-.7.1-.7a2.5 2.5 0 0 1 1.8 1.2 2.6 2.6 0 0 0 3.6 1 2.6 2.6 0 0 1 .8-1.6c-2.7-.3-5.5-1.3-5.5-6a4.8 4.8 0 0 1 1.3-3.3 4.4 4.4 0 0 1 .1-3.2s1-.3 3.4 1.3a11.8 11.8 0 0 1 6.2 0c2.3-1.6 3.3-1.3 3.3-1.3a4.4 4.4 0 0 1 .2 3.2 4.8 4.8 0 0 1 1.3 3.3c0 4.7-2.8 5.6-5.5 6a2.8 2.8 0 0 1 .8 2.1v3.1c0 .3.2.7.8.6A12 12 0 0 0 12 .5z" />
                    </svg>
                    <span
                        class="text-xs mt-1 opacity-0 translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 text-[#FD4E0F] font-medium">GitHub</span>
                </a>
            </div>
        </div>
    </footer>
</body>
<script src="{{ asset('js/layout.js') }}"></script>

</html>
