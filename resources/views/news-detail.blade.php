<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $newsItem->title }} - PT ALMUBARAK WISATA INTERNATIONAL</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/heroicons@2.0.18/24/outline/index.js"></script>
</head>
<body class="bg-green-50 text-gray-900">
    <!-- Navbar -->
    <nav class="bg-green-600 text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="ALMUBARAK WISATA" class="h-12 w-auto mr-2 hover:scale-110 hover:border-2 hover:border-green-500 transition-all duration-300">
                        <span class="text-2xl font-bold">ALMUBARAK WISATA</span>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="hover:text-green-200 transition">Home</a>
                    <a href="{{ route('about') }}" class="hover:text-green-200 transition">Tentang Kami</a>
                    <a href="{{ route('business') }}" class="hover:text-green-200 transition">Bisnis Kami</a>
                    <a href="{{ route('news') }}" class="hover:text-green-200 transition">Berita</a>
                    <a href="{{ route('contact') }}" class="hover:text-green-200 transition">Kontak</a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="mobile-menu" class="hidden md:hidden pb-4">
                <a href="{{ route('home') }}" class="block py-2 hover:text-green-200 transition">Home</a>
                <a href="{{ route('about') }}" class="block py-2 hover:text-green-200 transition">Tentang Kami</a>
                <a href="{{ route('business') }}" class="block py-2 hover:text-green-200 transition">Bisnis Kami</a>
                <a href="{{ route('news') }}" class="block py-2 hover:text-green-200 transition">Berita</a>
                <a href="{{ route('contact') }}" class="block py-2 hover:text-green-200 transition">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Breadcrumb -->
    <section class="bg-white py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-green-600">
                            <svg class="w-3 h-3 mr-2.5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2A1 1 0 0 0 1 10h2v9a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-6h2v6a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-9h2a1 1 0 0 0 .707-1.707Z"/>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                            </svg>
                            <a href="{{ route('news') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-green-600 md:ml-2">Berita</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 text-gray-400 mx-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{ $newsItem->title }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- News Detail Section -->
    <section class="py-12 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <article>
                <header class="mb-8">
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $newsItem->title }}</h1>
                    <div class="flex items-center text-gray-600 mb-6">
                        <span class="text-green-600 mr-2">📅</span>
                        <span>{{ $newsItem->published_at ? $newsItem->published_at->format('d M Y') : $newsItem->created_at->format('d M Y') }}</span>
                    </div>
                    <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="w-full h-64 md:h-96 object-cover rounded-lg shadow-lg">
                </header>

                <div class="prose prose-lg max-w-none">
                    <p class="text-xl text-gray-700 mb-6 leading-relaxed">{{ Str::limit($newsItem->content, 150) }}</p>

                    <div class="text-gray-800 leading-relaxed whitespace-pre-line">
                        {!! nl2br(e($newsItem->content)) !!}
                    </div>
                </div>


            </article>

            <!-- Related News -->
            <div class="mt-16 mb-48">
                <h2 class="text-2xl font-bold text-gray-900 mb-8">Artikel Lainnya</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    @foreach($relatedNews as $item)
                        <article class="bg-white border rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                            <div class="p-6">
                                <div class="flex items-center mb-3">
                                    <span class="text-green-600 mr-2">📅</span>
                                    <span class="text-sm text-gray-600">{{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}</span>
                                </div>
                                <h3 class="text-xl font-bold mb-3">{{ $item->title }}</h3>
                                <p class="text-gray-600 mb-4">{{ Str::limit($item->content, 100) }}</p>
                                <a href="{{ route('news-detail', $item->id) }}" class="text-green-600 hover:text-green-700 font-semibold">Baca Selengkapnya →</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

            <!-- Back to News -->
            <div class="mt-48 text-center">
                <a href="{{ route('news') }}" class="bg-green-600 text-white px-10 py-4 rounded-lg hover:bg-green-700 transition text-xl font-bold shadow-lg">
                    ← Kembali ke Berita
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-green-600 text-white py-20 overflow-x-hidden">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16">
            <!-- Kolom 1: Deskripsi -->
            <div>
            <div class="flex items-center mb-5">
                <img src="{{ asset('images/logo.png') }}" alt="ALMUBARAK WISATA" class="h-12 w-auto mr-3 hover:scale-110 hover:border-2 hover:border-green-500 transition-all duration-300">
                <h4 class="text-2xl font-bold leading-tight">PT ALMUBARAK WISATA INTERNATIONAL</h4>
            </div>
            </div>

            <!-- Kolom 3: Info Kontak -->
            <div class="ml-1">
                <h3 class="text-xl font-bold mb-5">Info Kontak</h3>
                <ul class="space-y-4 text-green-50">
                    <li class="flex items-start">
                        <span class="text-2xl mr-3">📍</span>
                        <span>Jl. Sudirman No. 123, Jakarta Pusat, DKI Jakarta</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-2xl mr-3">📞</span>
                        <a href="https://wa.me/6281260003484" class="hover:text-green-200 transition">
                            +62 812-6000-3484
                        </a>
                    </li>
                    <li class="flex items-start">
                        <span class="text-2xl mr-3">✉️</span>
                        <a href="mailto:info@almubarakwisata.com" class="hover:text-green-200 transition">
                            info@almubarakwisata.com
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Kolom 2: Navigasi -->
            <div>
                <h3 class="text-xl font-bold mb-5">Navigasi</h3>
                <ul class="space-y-3 text-green-100 font-medium">
                    <li><a href="{{ route('home') }}" class="hover:text-green-200 transition">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-green-200 transition">Tentang Kami</a></li>
                    <li><a href="{{ route('business') }}" class="hover:text-green-200 transition">Bisnis Kami</a></li>
                    <li><a href="{{ route('news') }}" class="hover:text-green-200 transition">Berita</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-green-200 transition">Kontak</a></li>
                </ul>
            </div>

            <!-- Kolom 4: Artikel Terbaru -->
            <div>
                <h3 class="text-xl font-bold mb-5">Artikel Terbaru</h3>
                <div class="space-y-5">
                    <div class="flex items-center hover:bg-green-700/30 rounded-lg p-2 transition">
                        <img src="https://via.placeholder.com/80x60/10b981/ffffff?text=🧒" alt="Santunan Anak Yatim" class="rounded mr-3">
                        <div>
                            <a href="{{ route('news-detail', 1) }}" class="font-semibold hover:text-green-200 transition">Santunan Anak Yatim...</a>
                            <p class="text-sm text-green-100">15 Desember 2024</p>
                        </div>
                    </div>
                    <div class="flex items-center hover:bg-green-700/30 rounded-lg p-2 transition">
                        <img src="https://via.placeholder.com/80x60/059669/ffffff?text=🕋" alt="Artikel 2024" class="rounded mr-3">
                        <div>
                            <a href="{{ route('news-detail', 2) }}" class="font-semibold hover:text-green-200 transition">Artikel 2024...</a>
                            <p class="text-sm text-green-100">10 Desember 2024</p>
                        </div>
                    </div>
                    <div class="flex items-center hover:bg-green-700/30 rounded-lg p-2 transition">
                        <img src="https://via.placeholder.com/80x60/047857/ffffff?text=🕋" alt="Artikel 2023" class="rounded mr-3">
                        <div>
                            <a href="{{ route('news-detail', 3) }}" class="font-semibold hover:text-green-200 transition">Artikel 2023...</a>
                            <p class="text-sm text-green-100">5 Desember 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <!-- Garis bawah -->
            <div class="border-t border-green-500 mt-16 pt-6 text-green-100 text-sm flex justify-between items-center">
                <div>
                    © 2025 <a href="{{ route('home') }}" class="font-semibold text-white hover:text-green-200">PT ALMUBARAK WISATA INTERNATIONAL</a>. All Rights Reserved.
                </div>
                <div class="flex space-x-5 text-2xl">
                    <a href="https://instagram.com/almubarakwisata" target="_blank" class="hover:text-green-200"><i class="fa fa-instagram"></i></a>
                    <a href="https://tiktok.com/@almubarakwisata" target="_blank" class="hover:text-green-200"><i class="fa fa-tiktok"></i></a>
                    <a href="https://facebook.com/almubarakwisata" target="_blank" class="hover:text-green-200"><i class="fa fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Smooth scrolling for navbar links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>
