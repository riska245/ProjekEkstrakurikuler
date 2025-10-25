<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoEks - Masuk</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="min-h-screen flex items-center justify-center bg-gray-50 dark:bg-gray-900 transition-colors duration-500">
    <div class="w-full max-w-md bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-8 mx-4 transition-all duration-500">
        <h2 class="text-2xl font-bold text-center text-[#FD4E0F] dark:text-white mb-6">Masuk ke Akun</h2>

        <form id="loginForm" class="space-y-5">
            <div>
                <label for="email"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email"
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-[#FD4E0F] focus:border-[#FD4E0F] outline-none transition-all duration-300 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-100">
            </div>

            <div>
                <label for="password"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-1">Password</label>
                <input type="password" id="password" name="password" placeholder="Masukkan password"
                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-700 rounded-lg focus:ring-2 focus:ring-[#FD4E0F] focus:border-[#FD4E0F] outline-none transition-all duration-300 bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-100">
            </div>

            <button type="submit"
                class="w-full py-3 mt-4 font-semibold rounded-lg border-2 border-[#FD4E0F] 
                bg-[#FD4E0F] text-white 
                transition-all duration-300 ease-out 
                hover:bg-white hover:text-[#FD4E0F] 
                hover:shadow-md active:translate-y-0.5 cursor-pointer">
                Masuk
            </button>
        </form>

        <p class="text-center text-sm text-gray-600 dark:text-gray-400 mt-6">
            Belum punya akun?
            <a href="/daftar" class="text-[#FD4E0F] hover:underline font-semibold">Daftar di sini</a>
        </p>
    </div>

    <script src="{{ asset('js/account/masuk.js') }}"></script>
</body>

</html>
