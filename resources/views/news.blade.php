<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - PT ALMUBARAK WISATA INTERNATIONAL</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/heroicons@2.0.18/24/outline/index.js"></script>
</head>
<body class="bg-green-50 text-gray-900">
    <!-- Background Slider -->
    <div id="background-slider" class="fixed inset-0 z-0">
        <div class="slider-image active" style="background-image: url('{{ asset('images/baground.png') }}');"></div>
        <div class="slider-image" style="background-image: url('{{ asset('images/baground2.jpg') }}');"></div>
        <div class="slider-image" style="background-image: url('{{ asset('images/baground3.jpg') }}');"></div>
    </div>
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

    <!-- Hero Section -->
    <section class="min-h-screen text-white flex flex-col items-center justify-center relative px-4" id="hero-section">
        <div class="text-center relative z-10 max-w-xl w-full px-4">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6">Berita</h1>
            <p class="text-lg sm:text-xl md:text-2xl mb-6 md:mb-8 max-w-3xl mx-auto">Informasi Terbaru dan Berita Terkini dari PT ALMUBARAK WISATA</p>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-8">
                <div class="flex">
                    <input type="text" placeholder="Search..." class="px-4 py-2 border rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-300" id="news-search">
                    <button class="bg-green-600 text-white px-4 py-2 rounded-r-lg hover:bg-green-700 transition" id="news-search-button">Cari</button>
                </div>
            </div>

            <!-- News Articles -->
            <div id="news-container" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($news as $item)
                <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover cursor-pointer" onclick="openImageModal('{{ asset('storage/' . $item->image) }}', '{{ $item->title }}')">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded">{{ $item->category }}</span>
                            <span class="text-gray-500 text-sm ml-2"><span class="mr-1">📅</span>{{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 cursor-pointer text-green-600 hover:text-green-700 transition" onclick="changeTextColor(this)">{{ $item->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($item->content, 100) }}</p>
                        <a href="{{ route('news-detail', $item->id) }}" class="text-green-600 hover:text-green-800 font-medium">Baca Selengkapnya →</a>
                    </div>
                </article>
                @empty
                <div class="col-span-3 text-center py-8">
                    <p class="text-gray-500">Belum ada berita yang tersedia.</p>
                </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($news->hasPages())
            <div class="mt-8">
                {{ $news->links() }}
            </div>
            @endif
        </div>
    </section>



    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Hero carousel functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('.hero-slide');
        const contents = document.querySelectorAll('.hero-content-item');
        const totalSlides = slides.length;

        function showSlide(index) {
            // Hide all slides and contents
            slides.forEach(slide => slide.classList.remove('active'));
            contents.forEach(content => content.classList.remove('active'));

            // Show current slide and content
            slides[index].classList.add('active');
            contents[index].classList.add('active');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            showSlide(currentSlide);
        }

        // Auto slide every 2 seconds
        setInterval(nextSlide, 2000);

        // News search functionality
        function performSearch() {
            const query = document.getElementById('news-search').value.toLowerCase().trim();
            const articles = document.querySelectorAll('#news-container article');

            // Check for exact title match first
            const newsTitles = @json($news);
            for (const [id, newsItem] of Object.entries(newsTitles)) {
                if (newsItem.title.toLowerCase() === query) {
                    window.location.href = '{{ route("news-detail", ":id") }}'.replace(':id', id);
                    return;
                }
            }

            // If no exact match, filter articles
            articles.forEach(article => {
                const title = article.querySelector('h3').textContent.toLowerCase();
                const content = article.querySelector('p').textContent.toLowerCase();
                if (title.includes(query) || content.includes(query)) {
                    article.style.display = 'block';
                } else {
                    article.style.display = 'none';
                }
            });
        }

        document.getElementById('news-search-button').addEventListener('click', performSearch);

        document.getElementById('news-search').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                performSearch();
            }
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

        // Scroll to top button
        document.getElementById('scroll-to-top').addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Background slider functionality
        document.addEventListener('DOMContentLoaded', function() {
            let currentBgSlide = 0;
            const bgSlides = document.querySelectorAll('#background-slider .slider-image');
            const totalBgSlides = bgSlides.length;

            function showBgSlide(index) {
                bgSlides.forEach(slide => slide.classList.remove('active'));
                bgSlides[index].classList.add('active');
            }

            function nextBgSlide() {
                currentBgSlide = (currentBgSlide + 1) % totalBgSlides;
                showBgSlide(currentBgSlide);
            }

            // Auto slide background every 2 seconds
            setInterval(nextBgSlide, 2000);
        });
    </script>

  <!-- Footer -->
<footer class="bg-green-600 text-white py-20 overflow-x-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-16">
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
            </ul>
        </div>

        <!-- Kolom 3: Info Kontak -->
        <div>
            <h3 class="text-xl font-bold mb-5">Info Kontak</h3>
            <ul class="space-y-4 text-green-50">
                <li class="flex items-start">
                    <span class="text-2xl mr-3">📍</span>
                    <span>Jl. Ciremei Ujung No.210, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16153</span>
                </li>
                <li class="flex items-start md:items-center">
                    <span class="text-2xl mr-3">📞</span>
                    <a href="https://wa.me/6281260003484" class="hover:text-green-200 transition">
                      Cs1   +62 812-6000-3484
                    </a>
                </li>
                <li class="flex items-start md:items-center">
                    <span class="text-2xl mr-3">📞</span>
                    <a href="https://wa.me/6281180002807" class="hover:text-green-200 transition">
                      Cs2   +62 811-8000-2807
                    </a>
                </li>
                <li class="flex items-start">
                    <span class="text-2xl mr-3">✉️</span>
                    <a href="mailto:almubarak.wisata@gmail.com" class="hover:text-green-200 transition">
                        almubarak.wisata@gmail.com
                    </a>
                </li>
            </ul>
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

    <a href="{{ route('admin.login') }}" class="hover:text-green-200 text-2xl mr-3">👤</a>

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
</script>

</body>
</html>
