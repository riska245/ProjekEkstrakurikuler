@extends('layout.app')

@section('title', 'Tentang & Kontak - GoEks')
@section('header')

@endsection
@section('content')
    <section class="py-16">
        <div class="container mx-auto px-4">

            <!-- Tentang Kami -->
            <div class="bg-white shadow-lg rounded-2xl p-8 md:p-12 mb-12 transition duration-500">
                <div class="relative text-center">
                    <!-- Dekorasi melingkar lembut -->
                    <div class="absolute -top-8 -left-10 w-56 h-56 bg-[#FD4E0F]/10 rounded-full blur-3xl animate-pulse">
                    </div>
                    <div
                        class="absolute -bottom-10 -right-10 w-64 h-64 bg-[#FD4E0F]/10 rounded-full blur-3xl animate-bounce">
                    </div>

                    <!-- Konten utama -->
                    <div class="relative z-10">
                        <h2 class="text-3xl font-bold text-[#FD4E0F] mb-4 animate-float">
                            Tentang Kami
                        </h2>

                        <p class="text-gray-700 max-w-3xl mx-auto leading-relaxed animate-soft-fade">
                            GoEks adalah platform ekstrakurikuler sekolah yang membantu siswa mengembangkan minat, bakat,
                            dan keterampilan di luar kegiatan akademik. Kami percaya kegiatan ekstrakurikuler
                            penting untuk membentuk karakter dan masa depan siswa.
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-12">
                    <!-- Card 1 -->
                    <div
                        class="group text-center p-6 rounded-xl transition-all duration-300 hover:scale-105 cursor-default border-2 border-transparent hover:border-[#FD4E0F]/30 bg-white shadow-md hover:shadow-lg">
                        <div
                            class="bg-[#FD4E0F]/10 group-hover:bg-[#FD4E0F]/20 transition duration-300 p-6 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-12 h-12 text-[#FD4E0F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Tim Terpilih</h3>
                        <p class="text-gray-600 text-sm">Guru dan pelatih aktif yang siap mendampingi siswa berkembang.</p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="group text-center p-6 rounded-xl transition-all duration-300 hover:scale-105 cursor-default border-2 border-transparent hover:border-[#FD4E0F]/30 bg-white shadow-md hover:shadow-lg">
                        <div
                            class="bg-[#FD4E0F]/10 group-hover:bg-[#FD4E0F]/20 transition duration-300 p-6 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-12 h-12 text-[#FD4E0F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Kegiatan Positif</h3>
                        <p class="text-gray-600 text-sm">Fokus pada kegiatan yang membangun karakter dan kreativitas.</p>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="group text-center p-6 rounded-xl transition-all duration-300 hover:scale-105 cursor-default border-2 border-transparent hover:border-[#FD4E0F]/30 bg-white shadow-md hover:shadow-lg">
                        <div
                            class="bg-[#FD4E0F]/10 group-hover:bg-[#FD4E0F]/20 transition duration-300 p-6 rounded-full w-24 h-24 flex items-center justify-center mx-auto mb-4">
                            <svg class="w-12 h-12 text-[#FD4E0F]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">Konsisten & Aktif</h3>
                        <p class="text-gray-600 text-sm">Selalu berinovasi agar kegiatan tetap menarik dan relevan.</p>
                    </div>
                </div>
            </div>

            <!-- Kontak Kami -->
            <div class="bg-[#FD4E0F] text-white rounded-2xl shadow-xl p-8 md:p-12 transition duration-500 hover:shadow-2xl">
                <h2 class="text-3xl font-bold mb-4 text-center">Kontak Kami</h2>
                <p class="text-center mb-8 text-white/90">Kami siap membantu Anda. Kirimkan pesan atau hubungi langsung tim
                    kami.</p>

                <form action="#" method="POST" class="max-w-2xl mx-auto space-y-4">
                    <div>
                        <label for="nama" class="block text-sm font-medium mb-1">Nama</label>
                        <input type="text" id="nama" name="nama" required
                            class="w-full rounded-lg border border-white/20 bg-white/10 text-white px-4 py-2 transition duration-300 focus:ring-2 focus:ring-white focus:outline-none focus:bg-white/20">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium mb-1">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full rounded-lg border border-white/20 bg-white/10 text-white px-4 py-2 transition duration-300 focus:ring-2 focus:ring-white focus:outline-none focus:bg-white/20">
                    </div>

                    <div>
                        <label for="pesan" class="block text-sm font-medium mb-1">Pesan</label>
                        <textarea id="pesan" name="pesan" rows="4" required
                            class="w-full rounded-lg border border-white/20 bg-white/10 text-white px-4 py-2 transition duration-300 focus:ring-2 focus:ring-white focus:outline-none focus:bg-white/20"></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit"
                            class="bg-white text-[#FD4E0F] px-6 py-2 rounded-md font-semibold hover:bg-[#fff2eb] hover:scale-105 transition duration-300 cursor-pointer">
                            Kirim Pesan
                        </button>
                    </div>
                </form>

                <div class="mt-10 text-center text-sm text-white/80 space-y-1">
                    <p>Atau hubungi langsung:</p>
                    <p>Email: <span class="font-medium">goeks@gmail.com</span></p>
                    <p>Telepon: <span class="font-medium">+62</span></p>
                </div>
            </div>
        </div>
    </section>
@endsection
