@extends('layout.app')

@section('title', 'Beranda - Semua Berawal Dari Niat')
@section('header')
    <!-- You can add additional header content here if needed -->
@endsection
@section('content')
    <div class="relative rounded-xl overflow-hidden">
        <!-- Tambahkan pattern background -->
        <div
            class="absolute inset-0 opacity-[0.03] [background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23000000\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E]">
        </div>

        <div class="container mx-auto px-4 py-16">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">
                <div class="lg:w-1/2 space-y-6 max-w-xl">
                    <h1 class="text-4xl font-bold text-gray-800">Temukan Bakat dan Minatmu</h1>
                    <p class="text-lg text-gray-600">Bergabunglah dengan berbagai kegiatan ekstrakurikuler yang menarik dan
                        kembangkan potensimu bersama kami.</p>
                    <div class="flex gap-4">
                        <a href="#daftar-sekarang"
                            class="relative inline-flex items-center justify-center bg-[#FD4E0F] text-white px-6 py-3 rounded-lg font-medium overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0">
                            <span class="relative z-10">Mulai Sekarang</span>
                            <div
                                class="absolute inset-0 bg-linear-to-br from-[#FD4E0F]/80 to-[#FD4E0F] opacity-0 hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </a>
                        <a href="/tentang-kami"
                            class="relative inline-flex items-center gap-2 px-8 py-4 font-semibold text-[#FD4E0F] bg-white border-2 border-[#FD4E0F] rounded-lg overflow-hidden transition-all duration-300 group hover:shadow-lg hover:-translate-y-0.5 active:translate-y-0">

                            <span class="relative z-20 group-hover:text-white transition-colors duration-300">
                                Pelajari Lebih Lanjut
                            </span>

                            <!-- Ikon -->
                            <svg class="w-5 h-5 relative z-20 group-hover:text-white transition-all duration-300 group-hover:translate-x-1"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>

                            <!-- Background animasi -->
                            <div
                                class="absolute inset-0 bg-[#FD4E0F] transform -translate-x-full group-hover:translate-x-0 transition-transform duration-300 z-10">
                            </div>
                        </a>

                    </div>
                </div>

                <!-- Update ilustrasi section -->
                <div class="lg:w-1/2 relative w-full max-w-lg lg:max-w-none mx-auto">
                    <!-- Decorative circles -->
                    <div class="absolute -top-8 -right-8 w-64 h-64 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-8 -left-8 w-64 h-64 rounded-full blur-3xl"></div>

                    <!-- Image container with styling -->
                    <div class="relative bg-white p-4 rounded-2xl shadow-lg">
                        <div class="absolute inset-0 bg-linear-to-br from-[#FD4E0F]/20 to-transparent rounded-2xl"></div>
                        <img src="{{ asset('image/ilustrasi.png') }}" alt="ilustrasi"
                            class="w-full relative z-10 rounded-xl">

                        <!-- Floating elements -->
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-[#FD4E0F]/20 rounded-full animate-pulse"></div>
                        <div class="absolute -bottom-4 -left-4 w-16 h-16 bg-[#FD4E0F]/30 rounded-full animate-bounce"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fitur Unggulan -->
    <section class="relative py-24 bg-linear-to-b0 overflow-hidden">
        <!-- Background decor -->
        <div class="absolute top-0 right-0 w-md h-112 rounded-full blur-3xl -translate-y-1/3 translate-x-1/3">
        </div>
        <div class="absolute bottom-0 left-0 w-md h-112rounded-full blur-3xl translate-y-1/3 -translate-x-1/3">
        </div>

        <div class="container mx-auto px-6 relative">
            <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-16 text-gray-800">
                Kenapa Harus Bergabung dengan Kami?
            </h2>

            <div class="grid md:grid-cols-3 gap-10">
                <!-- Card -->
                <div
                    class="relative group p-0.5 rounded-2xl bg-linear-to-br from-[#FD4E0F]/60 to-transparent hover:from-[#FD4E0F]/80 transition-all duration-500">
                    <div
                        class="bg-white/80 backdrop-blur-xl rounded-2xl p-8 h-full shadow-md hover:shadow-2xl transition-all duration-500">
                        <div class="flex flex-col items-center text-center">
                            <div
                                class="w-20 h-20 flex items-center justify-center rounded-2xl bg-[#FD4E0F]/10 mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-[#FD4E0F]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3
                                class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-[#FD4E0F] transition-colors">
                                Pengembangan Bakat
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Wadah untuk mengembangkan bakat dan minat dalam berbagai bidang kegiatan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div
                    class="relative group p-0.5 rounded-2xl bg-linear-to-br from-[#FD4E0F]/60 to-transparent hover:from-[#FD4E0F]/80 transition-all duration-500">
                    <div
                        class="bg-white/80 backdrop-blur-xl rounded-2xl p-8 h-full shadow-md hover:shadow-2xl transition-all duration-500">
                        <div class="flex flex-col items-center text-center">
                            <div
                                class="w-20 h-20 flex items-center justify-center rounded-2xl bg-[#FD4E0F]/10 mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-[#FD4E0F]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>
                            <h3
                                class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-[#FD4E0F] transition-colors">
                                Pembimbing Profesional
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Dibimbing oleh mentor berpengalaman dalam bidangnya masing-masing.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card -->
                <div
                    class="relative group p-0.5 rounded-2xl bg-linear-to-br from-[#FD4E0F]/60 to-transparent hover:from-[#FD4E0F]/80 transition-all duration-500">
                    <div
                        class="bg-white/80 backdrop-blur-xl rounded-2xl p-8 h-full shadow-md hover:shadow-2xl transition-all duration-500">
                        <div class="flex flex-col items-center text-center">
                            <div
                                class="w-20 h-20 flex items-center justify-center rounded-2xl bg-[#FD4E0F]/10 mb-6 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-10 h-10 text-[#FD4E0F]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3
                                class="text-xl font-semibold text-gray-800 mb-3 group-hover:text-[#FD4E0F] transition-colors">
                                Fasilitas Lengkap
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Dilengkapi dengan fasilitas modern untuk mendukung setiap kegiatan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Ekstrakurikuler Populer -->
    <section class="py-24 bg-gray-50/50 shadow-lg rounded-2xl">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-4">Ekstrakurikuler Populer</h2>
                <p class="text-gray-600">Pilihan ekstrakurikuler yang paling diminati oleh para siswa untuk mengembangkan
                    bakat dan minat</p>
            </div>

            {{-- terisi otomatis oleh sistem kedepannya --}}
            {{-- <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Kartu Basket -->
                <div
                    class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('image/pramuka.jpg') }}" alt="Basket"
                            class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-linear-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="mb-4">
                            <span
                                class="px-3 py-1 text-xs font-semibold text-[#FD4E0F] bg-[#FD4E0F]/10 rounded-full">Olahraga</span>
                        </div>
                        <h3
                            class="font-bold text-xl mb-2 text-gray-800 group-hover:text-[#FD4E0F] transition-colors duration-300">
                            Basket</h3>
                        <p class="text-gray-600 text-sm mb-4">Latihan intensif dengan pelatih profesional dan fasilitas
                            lengkap</p>

                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <div class="flex items-center space-x-1 text-sm text-gray-500">
                                <svg class="w-5 h-5 text-[#FD4E0F]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>3x Seminggu</span>
                            </div>
                            <a href="#"
                                class="inline-flex items-center text-sm font-semibold text-[#FD4E0F] group-hover:translate-x-2 transition-transform duration-300">
                                Selengkapnya
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kartu Futsal -->
                <div
                    class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('image/pramuka.jpg') }}" alt="Futsal"
                            class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-linear-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="mb-4">
                            <span
                                class="px-3 py-1 text-xs font-semibold text-[#FD4E0F] bg-[#FD4E0F]/10 rounded-full">Olahraga</span>
                        </div>
                        <h3
                            class="font-bold text-xl mb-2 text-gray-800 group-hover:text-[#FD4E0F] transition-colors duration-300">
                            Futsal</h3>
                        <p class="text-gray-600 text-sm mb-4">Kembangkan kemampuan sepakbola dalam ruangan dengan teknik
                            modern</p>

                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <div class="flex items-center space-x-1 text-sm text-gray-500">
                                <svg class="w-5 h-5 text-[#FD4E0F]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>2x Seminggu</span>
                            </div>
                            <a href="#"
                                class="inline-flex items-center text-sm font-semibold text-[#FD4E0F] group-hover:translate-x-2 transition-transform duration-300">
                                Selengkapnya
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kartu Musik -->
                <div
                    class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('image/pramuka.jpg') }}" alt="Musik"
                            class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-linear-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="mb-4">
                            <span
                                class="px-3 py-1 text-xs font-semibold text-[#FD4E0F] bg-[#FD4E0F]/10 rounded-full">Seni</span>
                        </div>
                        <h3
                            class="font-bold text-xl mb-2 text-gray-800 group-hover:text-[#FD4E0F] transition-colors duration-300">
                            Band Musik</h3>
                        <p class="text-gray-600 text-sm mb-4">Ekspresikan bakatmu dalam bermusik dengan peralatan
                            professional</p>

                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <div class="flex items-center space-x-1 text-sm text-gray-500">
                                <svg class="w-5 h-5 text-[#FD4E0F]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>3x Seminggu</span>
                            </div>
                            <a href="#"
                                class="inline-flex items-center text-sm font-semibold text-[#FD4E0F] group-hover:translate-x-2 transition-transform duration-300">
                                Selengkapnya
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kartu Pramuka -->
                <div
                    class="group relative bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('image/pramuka.jpg') }}" alt="Pramuka"
                            class="w-full h-56 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-linear-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="mb-4">
                            <span
                                class="px-3 py-1 text-xs font-semibold text-[#FD4E0F] bg-[#FD4E0F]/10 rounded-full">Kepemimpinan</span>
                        </div>
                        <h3
                            class="font-bold text-xl mb-2 text-gray-800 group-hover:text-[#FD4E0F] transition-colors duration-300">
                            Pramuka</h3>
                        <p class="text-gray-600 text-sm mb-4">Bentuk karakter dan kepemimpinan melalui kegiatan kepramukaan
                        </p>

                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <div class="flex items-center space-x-1 text-sm text-gray-500">
                                <svg class="w-5 h-5 text-[#FD4E0F]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>1x Seminggu</span>
                            </div>
                            <a href="#"
                                class="inline-flex items-center text-sm font-semibold text-[#FD4E0F] group-hover:translate-x-2 transition-transform duration-300">
                                Selengkapnya
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="text-center mt-12">
                <a id="lihat-lebih-banyak" href="#"
                    class="group relative inline-flex items-center justify-center overflow-hidden rounded-lg">
                    <button
                        class="relative inline-flex items-center gap-2 px-8 py-4 font-semibold text-[#FD4E0F] bg-white border-2 border-[#FD4E0F] rounded-lg overflow-hidden transition-all duration-300 group cursor-pointer">

                        <!-- Teks -->
                        <span class="relative z-20 group-hover:text-white transition-colors duration-300">Lihat Lebih
                            Banyak</span>

                        <!-- Panah dengan animasi smooth -->
                        <svg class="w-5 h-5 relative z-20 text-[#FD4E0F] transition-all duration-300 transform group-hover:text-white group-hover:translate-x-1"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>

                        <!-- Background slider lebih halus -->
                        <div
                            class="absolute inset-0 bg-[#FD4E0F] w-full transform scale-x-0 origin-left group-hover:scale-x-100 transition-transform duration-500 ease-out z-10">
                        </div>
                    </button>
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <div class="py-16">
        <div class="container mx-auto px-4">
            <div class="bg-[#FD4E0F] rounded-xl p-8 md:p-12 text-center text-white">
                <h2 class="text-3xl font-bold mb-4">Siap Mengembangkan Bakatmu?</h2>
                <p class="mb-8 max-w-2xl mx-auto">
                    Bergabunglah dengan ratusan siswa lainnya yang telah menemukan passion
                    mereka melalui kegiatan ekstrakurikuler kami.
                </p>

                <a id="daftar-sekarang" href="#"
                    class="group relative inline-flex items-center justify-center overflow-hidden rounded-lg">
                    <button
                        class="relative inline-flex items-center gap-2 px-8 py-4 font-semibold text-[#FD4E0F] bg-white border-2 border-[#FD4E0F] rounded-lg transition-all duration-500 group-hover:border-white cursor-pointer">

                        <!-- Teks berubah jadi putih -->
                        <span class="relative z-20 group-hover:text-white transition-colors duration-500">
                            Daftar Sekarang
                        </span>

                        <!-- Background fade-in -->
                        <div
                            class="absolute inset-0 bg-[#FD4E0F] opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-lg z-10">
                        </div>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
