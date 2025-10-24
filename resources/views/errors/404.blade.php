<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 - Halaman tidak tersedia</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/errors/404.css') }}">
</head>

<body class="bg-gray-50">
    <section class="min-h-screen flex items-center justify-center p-4">
        <div class="relative w-full max-w-5xl mx-auto p-4 md:p-8">

            <!-- Decorative floating shapes - diperbesar ukurannya -->
            <div class="absolute -top-20 -left-12 w-72 h-72 bg-[#FD4E0F]/10 rounded-full blur-3xl animate-slow-pulse">
            </div>
            <div
                class="absolute -bottom-20 -right-12 w-96 h-96 bg-[#FD4E0F]/8 rounded-full blur-3xl animate-slow-rotate">
            </div>
            <div
                class="absolute top-12 right-1/2 translate-x-1/2 w-40 h-40 bg-[#FD4E0F]/12 rounded-full blur-2xl animate-bob">
            </div>

            <!-- Card -->
            <div class="relative bg-white rounded-2xl shadow-xl overflow-hidden p-8 md:p-12 border border-gray-100">
                <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">

                    <!-- Left: big 404 with animated gradient -->
                    <div class="flex-1 flex items-center justify-center">
                        <div class="relative w-56 h-56 md:w-64 md:h-64 rounded-full flex items-center justify-center">
                            <!-- animated background ring -->
                            <div
                                class="absolute inset-0 rounded-full bg-linear-to-br from-[#FD4E0F]/60 to-[#FD4E0F]/20 animate-ring-rotate blur-sm">
                            </div>

                            <!-- 404 text -->
                            <div class="relative z-20 text-center">
                                <div
                                    class="text-7xl md:text-8xl font-extrabold text-[#FD4E0F] leading-none animate-float-slow">
                                    404
                                </div>
                                <div class="mt-2 text-base text-gray-600 font-medium">Halaman Tidak Ditemukan</div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: message + action -->
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">Ups. Halaman yang Anda cari tidak
                            ada.</h3>
                        <p class="text-gray-600 mb-8 leading-relaxed text-base">
                            Mungkin link sudah tidak berlaku atau alamat salah ketik.
                            Kembali ke beranda atau cek navigasi untuk menemukan yang Anda butuhkan.
                        </p>

                        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                            <a href="/beranda"
                                class="group inline-flex items-center justify-center gap-2 px-6 py-3 font-semibold text-[#FD4E0F] bg-white border-2 border-[#FD4E0F] rounded-lg transition-all duration-300 hover:bg-[#FD4E0F] hover:text-white hover:shadow-md cursor-pointer">
                                <span>Beranda</span>
                                <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </a>

                            <a href="/tentang-kami"
                                class="inline-flex items-center justify-center px-6 py-3 bg-[#FD4E0F] text-white rounded-lg font-semibold transition-all duration-300 hover:bg-[#e6450c] hover:shadow-md cursor-pointer">
                                Hubungi Kami
                            </a>
                        </div>

                        <p class="text-sm text-gray-400 mt-8">
                            Kode kesalahan 404. Jika ini kesalahan server, hubungi admin.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
