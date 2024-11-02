<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="flex bg-white shadow-lg rounded-lg overflow-hidden max-w-4xl">
        <!-- Bagian Ilustrasi -->
        <div class="hidden md:flex flex-col items-center justify-center bg-blue-50 p-6 w-1/2">
            <!-- Ganti "illustration.jpg" dengan nama file gambar Anda -->
            <img src="{{ asset('images/illustration.jpg') }}" alt="Ilustrasi" class="w-80 object-cover">
            <p class="text-gray-700 mt-4 text-center">
                Selamat datang! Silakan masuk untuk melanjutkan.
            </p>
        </div>

        <!-- Bagian Form Login -->
        <div class="flex flex-col justify-center p-8 w-full md:w-1/2">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-gray-600">Username</label>
                    <input type="text" id="username" name="username" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-600">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="flex justify-between items-center mb-6">
                    <a href="#" class="text-sm text-blue-600 hover:underline">Lupa Password?</a>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700">Masuk</button>
            </form>
        </div>
    </div>

</body>
</html>
