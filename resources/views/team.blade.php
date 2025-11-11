<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tim Kami - PT ALMUBARAK WISATA INTERNATIONAL</title>
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
                    <a href="{{ route('home') }}" class="hover:text-green-200 transition text-animate">Home</a>
                    <a href="{{ route('about') }}" class="hover:text-green-200 transition text-animate">Tentang Kami</a>
                    <a href="{{ route('business') }}" class="hover:text-green-200 transition text-animate">Bisnis Kami</a>
                    <a href="{{ route('news') }}" class="hover:text-green-200 transition text-animate">Berita</a>
                    <a href="{{ route('contact') }}" class="hover:text-green-200 transition text-animate">Kontak</a>
                    <a href="{{ route('team') }}" class="hover:text-green-200 transition text-animate">Tim Kami</a>
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
                <a href="{{ route('home') }}" class="block py-2 hover:text-green-200 transition text-animate">Home</a>
                <a href="{{ route('about') }}" class="block py-2 hover:text-green-200 transition text-animate">Tentang Kami</a>
                <a href="{{ route('business') }}" class="block py-2 hover:text-green-200 transition text-animate">Bisnis Kami</a>
                <a href="{{ route('news') }}" class="block py-2 hover:text-green-200 transition text-animate">Berita</a>
                <a href="{{ route('contact') }}" class="block py-2 hover:text-green-200 transition text-animate">Kontak</a>
                <a href="{{ route('team') }}" class="block py-2 hover:text-green-200 transition text-animate">Tim Kami</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="min-h-screen text-white flex flex-col items-center justify-center relative px-4" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('images/penghargaan.jpeg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="text-center relative z-10 max-w-xl w-full">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 text-animate">Tim Kami</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto text-animate">Profesional yang Siap Melayani Perjalanan Spiritual Anda</p>
        </div>
    </section>




    <!-- Team Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold mb-6 text-animate">Anggota Tim Kami</h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Tim profesional kami terdiri dari para ahli yang berpengalaman di bidang travel dan wisata religi. Dengan dedikasi dan komitmen tinggi, kami siap memberikan pelayanan terbaik untuk perjalanan spiritual Anda.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @if($teams->count() > 0)
                    @foreach($teams as $team)
                        <div class="bg-white border rounded-lg overflow-hidden shadow-lg hover:shadow-xl transition duration-300">
                            <div class="bg-white p-8 text-center text-gray-900 relative">
                                @if($team->image)
                                    <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-gray-300 object-cover shadow-lg">
                                @else
                                    <img src="https://via.placeholder.com/150x150/ffffff/059669?text={{ substr($team->name, 0, 1) }}" alt="{{ $team->name }}" class="w-24 h-24 rounded-full mx-auto mb-4 border-4 border-gray-300 shadow-lg">
                                @endif
                                <h3 class="text-xl font-bold text-black mb-1 leading-tight">{{ $team->name }}</h3>
                                <p class="text-black font-medium text-sm">{{ $team->position }}</p>

                            </div>
                            <div class="p-6 text-center">
                                <p class="text-black font-medium text-base leading-relaxed mb-2">{{ $team->description }}</p>
                                @if($team->phone)
                                    <a href="https://wa.me/{{ str_replace('+', '', $team->phone) }}" target="_blank" class="text-green-600 hover:text-green-800 font-medium text-sm inline-flex items-center">
                                        <i class="fab fa-whatsapp mr-2"></i> {{ $team->phone }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500 text-lg">Belum ada anggota tim yang ditambahkan.</p>
                        <p class="text-gray-400 mt-2">Silakan tambahkan anggota tim melalui panel admin.</p>
                    </div>
                @endif
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

            <!-- Kolom 2: Navigasi -->
            <div>
                <h3 class="text-xl font-bold mb-5">Navigasi</h3>
                <ul class="space-y-3 text-green-100 font-medium">
                    <li><a href="{{ route('home') }}" class="hover:text-green-200 transition">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-green-200 transition">Tentang Kami</a></li>
                    <li><a href="{{ route('business') }}" class="hover:text-green-200 transition">Bisnis Kami</a></li>
                    <li><a href="{{ route('news') }}" class="hover:text-green-200 transition">Berita</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-green-200 transition">Kontak</a></li>
                    <li><a href="{{ route('team') }}" class="hover:text-green-200 transition">Tim Kami</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Info Kontak -->
            <div style="margin-left: -80px;">
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

            <!-- Kolom 4: Artikel Terbaru -->
            <div>
                <h3 class="text-xl font-bold mb-5">Artikel Terbaru</h3>
                @if($news && $news->count() > 0)
                    <div class="space-y-5">
                        @foreach($news as $item)
                            <div class="flex items-center hover:bg-green-700/30 rounded-lg p-2 transition">
                                @if($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-15 h-10 rounded mr-3 object-cover">
                                @else
                                    <img src="https://via.placeholder.com/80x60/10b981/ffffff?text={{ substr($item->title, 0, 1) }}" alt="{{ $item->title }}" class="w-15 h-10 rounded mr-3">
                                @endif
                                <div>
                                    <a href="{{ route('news-detail', $item->id) }}" class="font-semibold hover:text-green-200 transition">{{ Str::limit($item->title, 20) }}</a>
                                    <p class="text-sm text-green-100">{{ $item->published_at ? $item->published_at->format('d F Y') : 'Tanggal tidak tersedia' }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-green-100">Belum ada artikel yang ditambahkan.</p>
                @endif
            </div>
        </div>

       <!-- Tambahkan di <head> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-papapapapapa..." crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Footer garis bawah -->
<div class="max-w-7xl mx-auto px-6 lg:px-8 mt-12">
    <div class="border-t border-green-500 pt-6 flex justify-between items-center">
        <!-- Teks -->
        <div class="text-green-100 text-sm mt-4 text-center">
            © 2025 <a href="{{ route('home') }}" class="font-bold text-white hover:text-green-200 text-xl">PT ALMUBARAK WISATA INTERNATIONAL</a>. All Rights <br>
            Reserved. Developer by ADDTeam.
        </div>

        <!-- Sosmed + Scroll -->
<div class="flex items-center">
    <!-- Sosmed icons -->
    <a href="https://instagram.com/almubarakwisata" target="_blank" class="hover:text-green-200 text-2xl mr-3">
        <i class="fab fa-instagram"></i>
    </a>
    <a href="https://tiktok.com/@almubarakwisata" target="_blank" class="hover:text-green-200 text-2xl">
        <i class="fab fa-tiktok"></i>
    </a>

    <!-- Tombol scroll (beri margin kiri supaya jauh dari ikon) -->
    <button id="scroll-to-top" class="bg-green-700 hover:bg-green-800 text-white p-3 rounded-full text-2xl ml-6 transition">
        ↑
    </button>
</div>

<script>
    // Tombol scroll to top
    document.getElementById('scroll-to-top').addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Modal functions
    function showTeam() {
        document.getElementById('team-modal').classList.remove('hidden');
    }

    function hideTeam() {
        document.getElementById('team-modal').classList.add('hidden');
    }

    function showAwards() {
        document.getElementById('awards-modal').classList.remove('hidden');
    }

    function hideAwards() {
        document.getElementById('awards-modal').classList.add('hidden');
    }

    // Mobile menu toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>

</body>
</html>
