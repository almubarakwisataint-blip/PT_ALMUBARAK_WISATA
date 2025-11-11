<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - PT ALMUBARAK WISATA INTERNATIONAL</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
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

    <!-- Hero Section -->
    <section class="min-h-screen text-white flex flex-col items-center justify-center relative px-4" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('images/baground.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="text-center relative z-10 max-w-xl w-full">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 text-animate">Tentang Kami</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto text-animate">Mengenal Lebih Dalam PT ALMUBARAK WISATA INTERNATIONAL</p>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-left mb-6 text-green-600">PT ALMUBARAK WISATA INTERNATIONAL</h2>
                    <p class="text-lg text-gray-700 leading-relaxed">PT ALMUBARAK WISATA INTERNATIONAL adalah perusahaan travel terkemuka yang didirikan pada tanggal 15 Maret 2009 di Jakarta, Indonesia. Sejak awal berdirinya, kami telah berkomitmen untuk menjadi spesialis dalam layanan perjalanan religi dan wisata halal, dengan visi memberikan pengalaman perjalanan yang berkesan, penuh berkah, dan sesuai dengan nilai-nilai Islam. Kami telah melayani lebih dari 50.000 jamaah umroh dan haji, serta ribuan wisatawan muslim dari seluruh Indonesia dan mancanegara, membawa mereka ke tanah suci dan destinasi wisata halal di dunia.</p>
                    <p class="text-lg text-gray-700 leading-relaxed mt-4">Kami menyediakan berbagai paket perjalanan komprehensif yang mencakup umroh, haji, wisata halal ke destinasi populer seperti Turki, Arab Saudi, Malaysia, Uni Emirat Arab, dan lainnya. Setiap paket dirancang dengan teliti untuk memastikan kenyamanan, keamanan, dan kepatuhan terhadap syariat Islam, mulai dari pemilihan hotel bintang lima yang halal, transportasi aman, hingga pendampingan oleh tour leader berpengalaman. Dengan tim profesional yang memiliki pengalaman lebih dari 15 tahun di bidang travel dan wisata religi, kami memastikan setiap detail perjalanan Anda terencana dengan baik, sehingga Anda dapat fokus pada ibadah dan menikmati momen spiritual tanpa khawatir.</p>
                    <p class="text-lg text-gray-700 leading-relaxed mt-4">Kepercayaan dan kepuasan pelanggan adalah fondasi utama kami. Oleh karena itu, kami terus berinovasi dengan teknologi terbaru untuk memudahkan proses pemesanan, memberikan layanan konsultasi gratis, dan menawarkan program loyalitas bagi pelanggan setia. Kami juga aktif berkontribusi pada masyarakat melalui program sosial seperti santunan anak yatim, bantuan korban bencana, dan kegiatan keagamaan lainnya. Bergabunglah dengan ribuan pelanggan yang telah mempercayai PT ALMUBARAK WISATA INTERNATIONAL untuk perjalanan religi dan wisata halal Anda yang tak terlupakan.</p>
                </div>
                <div class="text-center">
                    <div class="bg-white p-6 rounded-lg shadow-lg">
                        <img src="{{ asset('images/ceo.jpg') }}" alt="Ahmad Mubarak - CEO" class="w-48 h-48 rounded-lg mx-auto mb-6 object-cover">
                        <h3 class="text-2xl font-bold text-green-600 mb-2">Ahmad Mubarak</h3>
                        <p class="text-lg text-gray-600">CEO - PT ALMUBARAK WISATA INTERNATIONAL</p>
                    </div>
                </div>
            </div>
            <div class="text-center mt-12">
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
            </div>
        </div>
    </section>

    <!-- Visi dan Misi Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold text-center mb-12 text-green-600">Visi dan Misi</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-green-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4 text-green-600">Visi</h3>
                    <p class="text-gray-700">Menjadi perusahaan travel terdepan dalam layanan umroh, haji, dan wisata halal yang memberikan pengalaman perjalanan yang aman, nyaman, dan penuh berkah bagi setiap pelanggan.</p>
                </div>
                <div class="bg-green-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4 text-green-600">Misi</h3>
                    <ul class="text-gray-700 space-y-2">
                        <li>• Menyediakan layanan perjalanan yang berkualitas tinggi dengan standar keamanan dan kenyamanan tertinggi</li>
                        <li>• Mengembangkan tim profesional yang berpengalaman dalam bidang travel dan wisata halal</li>
                        <li>• Membangun kemitraan yang kuat dengan mitra terpercaya di seluruh dunia</li>
                        <li>• Berkontribusi pada masyarakat melalui program sosial dan kegiatan keagamaan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

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

        // Scroll to top button
        document.getElementById('scroll-to-top').addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Logo modal functions
        function showLogoModal() {
            document.getElementById('logo-modal').classList.remove('hidden');
        }

        function hideLogoModal() {
            document.getElementById('logo-modal').classList.add('hidden');
        }
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

  <!-- Footer -->
<footer class="bg-green-600 text-white py-20 overflow-x-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-16">
        <!-- Kolom 1: Deskripsi -->
        <div>
            <div class="flex items-center mb-5">
                <img src="{{ asset('images/logo.png') }}" alt="ALMUBARAK WISATA" class="h-12 w-auto mr-3 cursor-pointer" onclick="showLogoModal()">
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
