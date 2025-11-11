<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - PT ALMUBARAK WISATA INTERNATIONAL</title>
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
    <section class="min-h-screen text-white flex flex-col items-center justify-center relative px-4" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('{{ asset('images/baground.png') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="text-center relative z-10 max-w-xl w-full">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 text-animate">Kontak</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto text-animate">Hubungi Kami untuk Informasi Lebih Lanjut</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12">
                <div>
                    <h2 class="text-2xl font-bold mb-6">Hubungi Kami</h2>
                    <p class="text-gray-600 mb-8">Kami siap membantu Anda dengan segala pertanyaan mengenai perjalanan umroh, haji, atau wisata religi lainnya. Jangan ragu untuk menghubungi kami kapan saja.</p>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg">Telepon</h3>
                                <a href="https://wa.me/6281260003484" class="text-green-600 hover:text-green-700">+62 812-6000-3484</a>
                                <p class="text-sm text-gray-600">WhatsApp Business - Tersedia 24/7</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg">Email</h3>
                                <a href="mailto:info@almubarakwisata.com" class="text-green-600 hover:text-green-700">info@almubarakwisata.com</a>
                                <p class="text-sm text-gray-600">Kami akan merespons dalam 24 jam</p>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="font-semibold text-green-600 mb-2">Kantor Pusat</h4>
                                <div class="flex items-start">
                                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold">Alamat</h5>
                                        <a href="https://maps.google.com/?q=PT. Almubarak Wisata Internasional, Indonesia" class="text-green-600 hover:text-green-700">Jl. Ciremei Ujung No.210, Bantarjati, Kec. Bogor Utara</a>
                                        <p class="text-sm text-gray-600">Kabupaten Bogor, jawa barat 16153</p>
                                        <p class="text-sm text-gray-600 mt-1">📞 +62 21 1234 5678</p>
                                        <p class="text-sm text-gray-600">📧 info@almubarakwisata.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border border-gray-200 rounded-lg p-4">
                                <h4 class="font-semibold text-green-600 mb-2">Kantor Cabang</h4>
                                <div class="flex items-start">
                                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center mr-3">
                                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5 class="font-semibold">Alamat</h5>
                                        <a href="https://maps.google.com/?q=ALMUBARAK WISATA CIBUBUR, Indonesia" class="text-green-600 hover:text-green-700">RUKO ACROPOLIS, Blk. C9 No.12 LANTAI 2, Cikahuripan, Kec. Klapanunggal</a>
                                        <p class="text-sm text-gray-600">Kabupaten Bogor, Jawa Barat 16710</p>
                                        <p class="text-sm text-gray-600 mt-1">📞 +62 274 5678 9012</p>
                                        <p class="text-sm text-gray-600">📧 cabang@almubarakwisata.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white p-8 rounded-lg shadow-lg card-hover max-w-md mx-auto">
                            <div class="flex items-start">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mr-4">
                                    <span class="text-xl">🕒</span>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg">Jam Operasional</h3>
                                    <div class="space-y-1">
                                        <p class="text-gray-600">Senin <span class="float-right">12.00–05.00</span></p>
                                        <p class="text-gray-600">Selasa <span class="float-right">12.00–05.00</span></p>
                                        <p class="text-gray-600">Rabu <span class="float-right">12.00–05.00</span></p>
                                        <p class="text-gray-600">Kamis <span class="float-right">12.00–05.00</span></p>
                                        <p class="text-gray-600">Jumat <span class="float-right">12.00–05.00</span></p>
                                        <p class="text-gray-600">Sabtu <span class="float-right">Tutup</span></p>
                                        <p class="text-gray-600">Minggu <span class="float-right">Tutup</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2>
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium mb-2">Nama Lengkap</label>
                            <input id="name" type="text" name="name" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Email</label>
                            <input id="email" type="email" name="email" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Telepon</label>
                            <input id="phone" type="tel" name="phone" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Subjek</label>
                            <select id="subject" name="subject" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" required>
                                <option value="">Pilih Subjek</option>
                                <option value="umroh">Informasi Umroh</option>
                                <option value="haji">Informasi Haji</option>
                                <option value="booking">Pemesanan</option>
                                <option value="complaint">Keluhan</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Pesan</label>
                            <textarea id="message" name="message" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-20 bg-green-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-green-600">Lokasi Kami</h2>
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.444878706476!2d106.8034262!3d-6.5738358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5c5b1661411%3A0x5e1acaf692694df1!2sPT.%20Almubarak%20Wisata%20Internasional!5e0!3m2!1sid!2sid!4v1730800000000!5m2!1sid!2sid" " width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>



    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Contact form
        // Submit the form normally so the message is stored in the database
        // and becomes visible in the admin dashboard. We keep a lightweight
        // client-side handler to disable the submit button to prevent double submits.
        const contactForm = document.getElementById('contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                const submitBtn = contactForm.querySelector('button[type="submit"]');
                if (submitBtn) {
                    submitBtn.disabled = true;
                    const originalText = submitBtn.textContent;
                    submitBtn.textContent = 'Mengirim...';
                    // In case the server responds slowly, re-enable after 10s as a fallback
                    setTimeout(() => {
                        submitBtn.disabled = false;
                        submitBtn.textContent = originalText;
                    }, 10000);
                }
                // Do not call e.preventDefault() here — allow normal POST to /contact
            });
        }

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
    </script>

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
            </ul>
        </div>

        <!-- Kolom 3: Info Kontak (responsive) -->
        <div class="md:ml-0">
            <h3 class="text-xl font-bold mb-5">Info Kontak</h3>
            <ul class="space-y-4 text-green-50">
                <li class="flex items-start md:items-center">
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
                <li class="flex items-start md:items-center">
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
