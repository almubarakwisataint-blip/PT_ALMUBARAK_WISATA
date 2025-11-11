<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT ALMUBARAK WISATA INTERNATIONAL</title>
    <link rel="icon" type="image/png" href="{{ asset('public/images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/heroicons@2.0.18/24/outline/index.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body class="bg-green-50 text-gray-900" onload="AOS.init();">
    <!-- Background Slider -->
    <div id="background-slider" class="fixed inset-0 z-0">
        <div class="slider-image active" style="background-image: url('{{ asset('public/images/baground.png') }}');"></div>
        <div class="slider-image" style="background-image: url('{{ asset('images/baground2.jpg') }}');"></div>
        <div class="slider-image" style="background-image: url('{{ asset('images/baground3.jpg') }}');"></div>
    </div>
    <!-- Navbar -->
    <nav class="bg-green-600 text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="ALMUBARAK WISATA" class="h-12 w-auto mr-2 cursor-pointer hover:scale-110 hover:border-2 hover:border-green-500 transition-all duration-300" onclick="showLogoModal()">
                        <span class="text-2xl font-bold">ALMUBARAK WISATA</span>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="hover:text-green-200 transition text-animate">Home</a>
                    <a href="{{ route('about') }}" class="hover:text-green-200 transition text-animate">Tentang Kami</a>
                    <a href="{{ route('business') }}" class="hover:text-green-200 transition text-animate">Bisnis Kami</a>
                    <a href="{{ route('news') }}" class="hover:text-green-200 transition text-animate">Berita</a>
                    <a href="{{ route('contact') }}" class="hover:text-green-200 transition text-animate">Kontak</a>
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
            </div>
        </div>
    </nav>

    <!-- Home Section -->
<section id="home" class="min-h-screen text-white flex flex-col items-center justify-center relative px-4" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('images/baground.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
    <div class="text-center relative z-10 max-w-xl w-full">
        <!-- Judul Kaligrafi -->
        <h1 class="text-6xl md:text-7xl font-handwriting mb-2" style="font-family: 'Dancing Script', cursive;" data-aos="fade-down" data-aos-duration="1000">
            It's time to
        </h1>
        <!-- Judul Biasa -->
        <h2 class="text-5xl md:text-6xl font-bold mb-8" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            TRAVEL
        </h2>



    </div>
</section>

<!-- Tambahkan di <head> untuk font kaligrafi -->
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;700&display=swap" rel="stylesheet">

    <!-- About Us Section -->
    <section id="about" class="py-20 bg-white" data-aos="fade-up" data-aos-duration="1000">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-green-600">Tentang Kami</h2>
            <div class="text-center mb-12">
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover max-w-md mx-auto">
                    <img src="{{ asset('images/ceo.jpg') }}" alt="Ahmad Mubarak - CEO" class="w-32 h-32 rounded-lg mx-auto mb-4 object-cover">
                    <h3 class="text-xl font-bold text-green-600 mb-1">Ahmad Mubarak</h3>
                    <p class="text-sm text-gray-600">CEO - PT ALMUBARAK WISATA INTERNATIONAL</p>
                </div>
            </div>
            <div class="text-center mb-12">
                <p class="text-lg text-gray-700 max-w-3xl mx-auto leading-relaxed">Kami menyediakan berbagai layanan perjalanan termasuk umroh, haji, dan wisata halal ke berbagai destinasi dunia. Dengan tim profesional dan berpengalaman, kami memastikan setiap perjalanan Anda aman, nyaman, dan penuh berkah.</p>
                <a href="{{ route('about') }}" class="inline-block mt-6 text-green-600 hover:text-green-700 font-semibold text-animate">Lihat Selengkapnya →</a>
            </div>
            <div class="grid md:grid-cols-2 gap-8 max-w-md mx-auto">
                <button type="button" onclick="window.location.href='{{ route('team') }}'" class="text-center cursor-pointer click-scale bg-transparent border-none p-0 w-full">
                    <div class="w-24 h-24 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center hover-bg-gold">
                        <span class="text-2xl">👥</span>
                    </div>
                    <h3 class="font-semibold text-animate">Tim Kami</h3>
                    <p class="text-sm text-gray-600">Profesional Berpengalaman</p>
                </button>
                <button type="button" onclick="window.location.href='{{ route('awards') }}'" class="text-center cursor-pointer click-scale bg-transparent border-none p-0 w-full">
                    <div class="w-24 h-24 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center hover-bg-gold">
                        <span class="text-2xl">🏆</span>
                    </div>
                    <h3 class="font-semibold text-animate">Penghargaan</h3>
                    <p class="text-sm text-gray-600">Travel Terpercaya 2024</p>
                </button>
            </div>
            <div id="team-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 modal-enter">
                <div class="bg-white p-8 rounded-lg max-w-4xl w-full mx-4 modal-content">
                    <h3 class="text-2xl font-bold mb-6 text-center text-animate">Tim Kami</h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <img src="https://via.placeholder.com/100x100/059669/ffffff?text=Manager" alt="Manager" class="w-24 h-24 rounded-full mx-auto mb-4">
                            <h4 class="font-semibold">Budi Santoso</h4>
                            <p class="text-sm text-gray-600">Manager Operasional</p>
                        </div>
                        <div class="text-center">
                            <img src="https://via.placeholder.com/100x100/047857/ffffff?text=Guide" alt="Tour Guide" class="w-24 h-24 rounded-full mx-auto mb-4">
                            <h4 class="font-semibold">Siti Aminah</h4>
                            <p class="text-sm text-gray-600">Tour Guide Senior</p>
                        </div>
                        <div class="text-center">
                            <img src="https://via.placeholder.com/100x100/065f46/ffffff?text=Admin" alt="Admin" class="w-24 h-24 rounded-full mx-auto mb-4">
                            <h4 class="font-semibold">Rudi Hartono</h4>
                            <p class="text-sm text-gray-600">Administrator</p>
                        </div>
                    </div>
                    <button onclick="hideTeam()" class="mt-6 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 btn-gold-hover">Tutup</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Section -->
    <section id="business" class="py-20 bg-green-50" data-aos="fade-up" data-aos-duration="1000">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-green-600">Bisnis Kami</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover">
                    <h3 class="text-2xl font-bold mb-4 text-animate">Tiket Travel</h3>
                    <div class="bg-green-100 p-6 rounded-lg mb-6">
                        <h4 class="text-xl font-semibold mb-2">Promo Wisata Hemat 9 Hari</h4>
                        <p class="text-gray-600 mb-2">Periode Promo: 1 - 15 Desember 2025</p>
                        <p class="text-2xl font-bold text-green-600 mb-4">Mulai dari Rp 15.000.000 / Paket</p>
                        <form id="booking-form" class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">Jumlah Orang</label>
                                <input type="number" min="1" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" id="person-count" required>
                            </div>
                            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition btn-gold-hover">Pesan Sekarang</button>
                        </form>
                    </div>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg card-hover">
                    <h3 class="text-2xl font-bold mb-4 text-animate">Bisnis Kami</h3>
                    <ul class="space-y-3">
                        <li class="flex items-center">
                            <span class="text-green-600 mr-3">✓</span>
                            Perjalanan Wisata
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-600 mr-3">✓</span>
                            Tiket Pesawat & Hotel
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-600 mr-3">✓</span>
                            Visa & Dokumen
                        </li>
                        <li class="flex items-center">
                            <span class="text-green-600 mr-3">✓</span>
                            Tour Guide Profesional
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="news" class="py-20 bg-white" data-aos="fade-up" data-aos-duration="1000">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-4xl font-bold text-green-600">Berita</h2>
                <div class="flex">
                    <input type="text" placeholder="Cari artikel..." class="px-4 py-2 border rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-300" id="news-search">
                    <button class="bg-green-600 text-white px-4 py-2 rounded-r-lg hover:bg-green-700 transition" id="news-search-button">Cari</button>
                </div>
            </div>
            <div class="grid md:grid-cols-3 gap-8" id="news-container">
                @forelse($news as $item)
                <article class="bg-white border rounded-lg overflow-hidden shadow-lg">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <span class="text-green-600 mr-2">📅</span>
                            <span class="text-sm text-gray-600">{{ $item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y') }}</span>
                        </div>
                        <h3 class="text-xl font-bold mb-3">{{ $item->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ Str::limit($item->content, 100) }}</p>
                        <a href="{{ route('news-detail', $item->id) }}" class="text-green-600 hover:text-green-700 font-semibold text-animate">Baca Selengkapnya →</a>
                    </div>
                </article>
                @empty
                <div class="col-span-3 text-center py-8">
                    <p class="text-gray-500">Belum ada berita yang tersedia.</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-green-50" data-aos="fade-up" data-aos-duration="1000">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-green-600">Kontak</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-2xl">📞</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-animate">Telepon</h3>
                    <a href="https://wa.me/6281260003484" class="text-green-600 hover:text-green-700 text-animate">+62 812-6000-3484</a>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-2xl">✉️</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-animate">Email</h3>
                    <a href="mailto:info@almubarakwisata.com" class="text-green-600 hover:text-green-700 text-animate">info@almubarakwisata.com</a>
                </div>
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-2xl">📍</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-animate">Alamat</h3>
                    <a href="https://maps.google.com/?q=Jakarta, Indonesia" class="text-green-600 hover:text-green-700 text-animate">Jl. Sudirman No. 123, Jakarta</a>
                </div>
            </div>
        </div>
    </section>



    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Booking form
        document.getElementById('booking-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const personCount = document.getElementById('person-count').value;
            const message = `Halo, saya ingin memesan paket Wisata Hemat 9 Hari untuk ${personCount} orang.`;
            const whatsappUrl = `https://wa.me/6281260003484?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, '_blank');
        });



        // News search functionality
        function performNewsSearch() {
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

        document.getElementById('news-search-button').addEventListener('click', performNewsSearch);

        document.getElementById('news-search').addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                performNewsSearch();
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

        // Team modal functions
        function showTeam() {
            document.getElementById('team-modal').classList.remove('hidden');
        }

        function hideTeam() {
            document.getElementById('team-modal').classList.add('hidden');
        }

        // Logo modal functions
        function showLogoModal() {
            document.getElementById('logo-modal').classList.remove('hidden');
        }

        function hideLogoModal() {
            document.getElementById('logo-modal').classList.add('hidden');
        }

        // Image modal functions
        function openImageModal(src, title) {
            document.getElementById('modal-image').src = src;
            document.getElementById('modal-image').alt = title;
            document.getElementById('modal-title').textContent = title;
            document.getElementById('image-modal').classList.remove('hidden');
        }

        function closeImageModal() {
            document.getElementById('image-modal').classList.add('hidden');
        }

        // Auto-scroll news carousel
        let currentSlide = 0;
        const totalSlides = @json($news ? $news->take(5)->count() : 0);

        function updateCarousel() {
            const carousel = document.getElementById('news-carousel');
            carousel.style.transform = `translateX(-${currentSlide * 100}%)`;

            // Update dots
            const dots = document.querySelectorAll('.carousel-dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('bg-white/80', index === currentSlide);
                dot.classList.toggle('bg-white/40', index !== currentSlide);
            });
        }

        function autoScrollCarousel() {
            if (totalSlides > 1) {
                currentSlide = (currentSlide + 1) % totalSlides;
                updateCarousel();
            }
        }

        // Manual navigation
        document.getElementById('prev-slide')?.addEventListener('click', function() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        });

        document.getElementById('next-slide')?.addEventListener('click', function() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        });

        // Dot navigation
        document.querySelectorAll('.carousel-dot').forEach((dot, index) => {
            dot.addEventListener('click', function() {
                currentSlide = index;
                updateCarousel();
            });
        });

        // Start auto-scroll every 5 seconds
        if (totalSlides > 1) {
            setInterval(autoScrollCarousel, 5000);
        }

        // Background slider functionality
    </script>

    <!-- Logo Modal -->
    <div id="logo-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white p-8 rounded-lg max-w-md w-full mx-4 relative">
            <button onclick="hideLogoModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
            <div class="text-center">
                <img src="{{ asset('images/logo.png') }}" alt="ALMUBARAK WISATA" class="w-48 h-auto mx-auto mb-4">
                <h3 class="text-xl font-bold text-green-600 mb-2">PT ALMUBARAK WISATA INTERNATIONAL</h3>
                <p class="text-gray-600">Perusahaan Travel Terpercaya untuk Perjalanan Wisata Halal</p>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div id="image-modal" class="fixed inset-0 bg-black bg-opacity-75 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white p-4 rounded-lg max-w-4xl w-full mx-4 relative">
            <button onclick="closeImageModal()" class="absolute top-4 right-4 text-gray-500 hover:text-gray-700 text-3xl">&times;</button>
            <div class="text-center">
                <img id="modal-image" src="" alt="" class="w-full h-auto max-h-screen object-contain mx-auto">
                <h3 id="modal-title" class="text-xl font-bold text-green-600 mt-4"></h3>
            </div>
        </div>
    </div>

  <!-- Footer -->
<footer class="bg-green-600 text-white py-20 overflow-x-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16">
        <!-- Kolom 1: Deskripsi -->
        <div>
            <div class="flex items-center mb-5">
                <img src="{{ asset('images/logo.png') }}" alt="ALMUBARAK WISATA" class="h-12 w-auto mr-3 cursor-pointer hover:scale-110 hover:border-2 hover:border-green-500 transition-all duration-300" onclick="showLogoModal()">
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
        <div style="margin-left: -80px;">   
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
