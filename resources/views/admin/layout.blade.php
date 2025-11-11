<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') - PT ALMUBARAK WISATA INTERNATIONAL</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/heroicons@2.0.18/24/outline/index.js"></script>
</head>
<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-green-600 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="ALMUBARAK WISATA" class="h-12 w-auto mr-2 hover:scale-110 hover:border-2 hover:border-green-500 transition-all duration-300">
                        <span class="text-2xl font-bold">Admin Panel</span>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('admin.dashboard') }}" class="hover:text-green-200 transition">Dashboard</a>
                    <a href="{{ route('admin.news.index') }}" class="hover:text-green-200 transition">Berita</a>
                    <a href="{{ route('admin.business.index') }}" class="hover:text-green-200 transition">Bisnis</a>
                    <a href="{{ route('admin.team.index') }}" class="hover:text-green-200 transition">Tim</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-lg min-h-screen">
            <div class="p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Menu Admin</h2>
                <ul class="space-y-2">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-100 rounded-lg transition">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.news.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-100 rounded-lg transition">
                            Kelola Berita
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.business.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-100 rounded-lg transition">
                            Kelola Bisnis
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.team.index') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-100 rounded-lg transition">
                            Kelola Tim
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('home') }}" class="block px-4 py-2 text-gray-700 hover:bg-green-100 rounded-lg transition">
                            Kembali ke Website
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-8">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                    {{ session('error') }}
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</body>
</html>
