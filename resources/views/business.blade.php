<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bisnis Kami - PT ALMUBARAK WISATA INTERNATIONAL</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://unpkg.com/heroicons@2.0.18/24/outline/index.js"></script>
</head>
<body class="bg-green-50 text-gray-900 overflow-x-hidden">
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
                    <a href="{{ route('home') }}" class="flex items-center" onclick="event.preventDefault(); openImageModal('{{ asset('images/logo.png') }}', 'PT ALMUBARAK WISATA INTERNATIONAL', 'Layanan Travel Terpercaya untuk Perjalanan Wisata Anda')">
                        <img src="{{ asset('images/logo.png') }}" alt="ALMUBARAK WISATA" class="h-12 w-auto mr-2 cursor-pointer hover:scale-110 hover:border-2 hover:border-green-500 transition-all duration-300">
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
        <div class="text-center relative z-10 max-w-xl w-full px-4">
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6">Bisnis Kami</h1>
            <p class="text-lg sm:text-xl md:text-2xl mb-6 md:mb-8 max-w-3xl mx-auto">Layanan Travel Terpercaya untuk Perjalanan Wisata</p>
        </div>
    </section>

    <!-- Business Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-8 md:mb-12 text-green-600">Bisnis Kami</h2>

            <!-- Dynamic Business Cards from Database -->
            @if($businesses->count() > 0)
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    @foreach($businesses as $business)
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow">
                            @if($business->image)
                                <img src="{{ asset('storage/' . $business->image) }}" alt="{{ $business->title }}" class="w-full h-48 object-cover rounded-lg mb-4">
                            @else
                                <div class="w-full h-48 bg-gradient-to-br from-green-500 to-green-700 rounded-lg mb-4 flex flex-col items-center justify-center text-white relative overflow-hidden">
                                    <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                                    <div class="relative z-10 text-center">
                                        <div class="text-4xl mb-2">💼</div>
                                        <h3 class="text-xl font-bold mb-1">{{ $business->type }}</h3>
                                        <div class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full font-bold">
                                            HOT
                                        </div>
                                    </div>
                                    <div class="absolute bottom-2 left-2 text-xs opacity-75">
                                        PT ALMUBARAK WISATA
                                    </div>
                                </div>
                            @endif
                            <h3 class="text-xl font-semibold mb-2">{{ $business->title }}</h3>
                            <p class="text-gray-600 mb-2">{{ Str::limit($business->description, 100) }}</p>
                            @if($business->price)
                                <p class="text-2xl font-bold text-green-600 mb-4">Rp {{ number_format($business->price, 0, ',', '.') }}</p>
                            @endif
                            @if($business->available_from)
                                <p class="text-sm text-gray-500 mb-4">Tersedia mulai: {{ $business->available_from->format('d M Y') }}</p>
                            @endif
                            <button onclick="handleBusinessButton('{{ $business->button_text }}', '{{ $business->id }}')" class="w-full bg-green-600 text-white py-2 rounded-lg text-center hover:bg-green-700 transition">{{ $business->button_text }}</button>
                        </div>
                    @endforeach
                </div>
            @endif


            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4">Layanan Kami</h2>
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
                    <li class="flex items-center">
                        <span class="text-green-600 mr-3">✓</span>
                        Konsultasi Perjalanan
                    </li>
                    <li class="flex items-center">
                        <span class="text-green-600 mr-3">✓</span>
                        Asuransi Perjalanan
                    </li>
                    <li class="flex items-center">
                        <span class="text-green-600 mr-3">✓</span>
                        Layanan Darurat 24/7
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="py-20 bg-green-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-green-600">Pesan Travel Sekarang</h2>
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <form id="booking-form" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300 focus:border-transparent" id="full-name" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300 focus:border-transparent" id="email" required>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">No. HP</label>
                            <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300 focus:border-transparent" id="phone" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Jumlah Orang</label>
                            <input type="number" min="1" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300 focus:border-transparent" id="person-count" required>
                        </div>
                    </div>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium mb-2">Pilih Paket</label>
                            <select id="package" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300">
                                <option value="Paket Reguler">Paket Reguler</option>
                                <option value="Paket Premium">Paket Premium</option>
                                <option value="Paket VIP">Paket VIP</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Tanggal Keberangkatan</label>
                            <input type="date" id="departure-date" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" />
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Pesan Tambahan</label>
                        <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300 focus:border-transparent" id="message" rows="4" placeholder="Jelaskan kebutuhan perjalanan Anda..."></textarea>
                    </div>
                    <!-- (Preview removed) -->
                    <button type="submit" class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition text-lg font-semibold">Kirim ke WhatsApp</button>
                </form>
            </div>
        </div>
    </section>



    <!-- Services Detail -->
    <section class="py-20 bg-green-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-green-600">Detail Layanan</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-2xl">🛫</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Transportasi</h3>
                    <p class="text-gray-600">Kami menyediakan tiket pesawat dengan maskapai terpercaya dan transportasi darat yang nyaman selama perjalanan.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-2xl">🏨</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Akomodasi</h3>
                    <p class="text-gray-600">Hotel berbintang dengan lokasi strategis di Makkah dan Madinah, dekat dengan Masjidil Haram dan Masjid Nabawi.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-2xl">📋</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Dokumen & Visa</h3>
                    <p class="text-gray-600">Bantuan lengkap dalam pengurusan paspor, visa, dan semua dokumen perjalanan yang diperlukan.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-2xl">👨‍🏫</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Tour Guide</h3>
                    <p class="text-gray-600">Pemandu wisata profesional yang berpengalaman dan fasih berbahasa Indonesia untuk memandu perjalanan Anda.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-2xl">🛡️</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Asuransi</h3>
                    <p class="text-gray-600">Perlindungan asuransi perjalanan yang komprehensif untuk memberikan rasa aman selama perjalanan.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="w-16 h-16 bg-green-100 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <span class="text-2xl">📞</span>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-center">Layanan 24/7</h3>
                    <p class="text-gray-600">Tim support kami siap membantu Anda 24 jam sehari, 7 hari seminggu selama perjalanan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Popups -->
    <!-- Booking Modal -->
    <div id="booking-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-md w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-green-600">Pesan Travel</h3>
                    <button onclick="closeModal('booking-modal')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                </div>
                <form id="modal-booking-form" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium mb-2">Nama Lengkap</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" id="modal-full-name" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Email</label>
                        <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" id="modal-email" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">No. HP</label>
                        <input type="tel" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" id="modal-phone" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Jumlah Orang</label>
                        <input type="number" min="1" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" id="modal-person-count" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Pesan Tambahan</label>
                        <textarea class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" id="modal-message" rows="3" placeholder="Jelaskan kebutuhan perjalanan Anda..."></textarea>
                    </div>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium mb-2">Pilih Paket</label>
                            <select id="modal-package" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300">
                                <option value="Paket Reguler">Paket Reguler</option>
                                <option value="Paket Premium">Paket Premium</option>
                                <option value="Paket VIP">Paket VIP</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Tanggal Keberangkatan</label>
                            <input type="date" id="modal-departure-date" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" />
                        </div>
                    </div>
                    <!-- (Preview removed) -->
                    <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">Kirim ke WhatsApp</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Promo Modal -->
    <div id="promo-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-lg w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-green-600">Promo Spesial</h3>
                    <button onclick="closeModal('promo-modal')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                </div>
                <div class="space-y-4">
                    <div class="bg-gradient-to-r from-green-500 to-green-600 text-white p-4 rounded-lg">
                        <h4 class="font-bold text-lg mb-2">🎫 Diskon 30% Tiket Pesawat</h4>
                        <p class="text-sm opacity-90">Promo terbatas untuk penerbangan domestik dan internasional</p>
                        <p class="text-xs mt-2 opacity-75">Berlaku hingga 31 Desember 2024</p>
                    </div>
                    <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-4 rounded-lg">
                        <h4 class="font-bold text-lg mb-2">🏨 Free Upgrade Hotel</h4>
                        <p class="text-sm opacity-90">Upgrade kamar gratis untuk paket umrah premium</p>
                        <p class="text-xs mt-2 opacity-75">Minimum 10 orang per grup</p>
                    </div>
                    <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white p-4 rounded-lg">
                        <h4 class="font-bold text-lg mb-2">🎁 Bonus Tour Guide</h4>
                        <p class="text-sm opacity-90">Tour guide profesional gratis untuk paket wisata</p>
                        <p class="text-xs mt-2 opacity-75">Berlaku untuk semua destinasi</p>
                    </div>
                    <button onclick="closeModal('promo-modal'); scrollToBooking()" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Business Detail Modal -->
    <div id="detail-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 id="detail-title" class="text-xl font-bold text-black">Detail Layanan</h3>
                    <button onclick="closeModal('detail-modal')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                </div>
                <div id="detail-content" class="space-y-4">
                    <!-- Content will be populated by JavaScript -->
                </div>
                <div class="mt-6 flex gap-3">
                    <button onclick="closeModal('detail-modal'); scrollToBooking()" class="flex-1 bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">Pesan Sekarang</button>
                    <button onclick="closeModal('detail-modal'); window.location.href='{{ route('contact') }}'" class="flex-1 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Hubungi Kami</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Modal -->
    <div id="contact-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-md w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-green-600">Hubungi Kami</h3>
                    <button onclick="closeModal('contact-modal')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                </div>
                <div class="space-y-4">
                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                        <span class="text-2xl mr-3">📞</span>
                        <div>
                            <p class="font-semibold">WhatsApp</p>
                            <a href="https://wa.me/6281260003484" class="text-green-600 hover:text-green-700">+62 812-6000-3484</a>
                        </div>
                    </div>
                    <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                        <span class="text-2xl mr-3">✉️</span>
                        <div>
                            <p class="font-semibold">Email</p>
                            <a href="mailto:info@almubarakwisata.com" class="text-blue-600 hover:text-blue-700">info@almubarakwisata.com</a>
                        </div>
                    </div>
                    <div class="flex items-start p-3 bg-gray-50 rounded-lg">
                        <span class="text-2xl mr-3">📍</span>
                        <div>
                            <p class="font-semibold">Alamat</p>
                            <p class="text-sm text-gray-600">Jl. Sudirman No. 123, Jakarta Pusat, DKI Jakarta</p>
                        </div>
                    </div>
                    <div class="flex items-center p-3 bg-purple-50 rounded-lg">
                        <span class="text-2xl mr-3">🕒</span>
                        <div>
                            <p class="font-semibold">Jam Operasional</p>
                            <p class="text-sm text-gray-600">Senin - Minggu: 08:00 - 20:00 WIB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo Modal -->
    <div id="logo-modal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-lg max-w-md w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-bold text-green-600">PT ALMUBARAK WISATA INTERNATIONAL</h3>
                    <button onclick="closeModal('logo-modal')" class="text-gray-500 hover:text-gray-700 text-2xl">&times;</button>
                </div>
                <div class="text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="ALMUBARAK WISATA" class="h-24 w-auto mx-auto mb-4">
                    <p class="text-gray-600 mb-4">Layanan Travel Terpercaya untuk Perjalanan Wisata Anda</p>
                    <p class="text-sm text-gray-500">Kami menyediakan berbagai paket perjalanan wisata dengan pelayanan terbaik dan harga kompetitif.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div id="image-modal" class="fixed inset-0 bg-black bg-opacity-75 hidden z-50 flex items-center justify-center">
        <div class="relative w-full h-full">
            <button onclick="closeModal('image-modal')" class="absolute top-4 right-4 text-white text-3xl hover:text-gray-300 z-10">&times;</button>
            <img id="modal-image" src="" alt="" class="w-full h-full object-contain">
            <div class="absolute bottom-4 left-4 right-4 bg-white bg-opacity-75 p-4 rounded-lg">
                <h3 id="modal-image-title" class="text-xl font-bold mb-2 text-black"></h3>
                <p id="modal-image-description" class="text-sm opacity-90 text-black"></p>
            </div>
        </div>
    </div>

    <script>
        // Pass business data to JavaScript
        const businesses = @json($businesses);

        // Mobile menu toggle with animation
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
                mobileMenu.classList.add('show');
                setTimeout(() => mobileMenu.classList.remove('show'), 300);
            } else {
                mobileMenu.classList.add('hide');
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                    mobileMenu.classList.remove('hide');
                }, 300);
            }
        });

        // Scroll to booking section
        function scrollToBooking() {
            document.getElementById('booking-form').scrollIntoView({ behavior: 'smooth' });
        }

        // Scroll to top button
        document.getElementById('scroll-to-top').addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Build WhatsApp message from inputs (optionally include businessName)
        function buildWhatsAppMessage({ fullName = '', email = '', phone = '', personCount = '', additionalMessage = '', businessName = '', packageName = '', departureDate = '' } = {}) {
            const title = businessName ? `Pesanan untuk ${businessName}` : 'Pesanan Travel';
            const departText = departureDate ? `Tanggal Keberangkatan: ${departureDate}` : '';
            const paketText = packageName ? `Paket: ${packageName}` : '';
            return `Halo, saya ${fullName} ingin memesan ${businessName || 'Travel'} dari PT ALMUBARAK WISATA untuk ${personCount} orang.\n\n${title}:\n- Email: ${email}\n- No. HP: ${phone}\n- ${paketText}\n- ${departText}\n- Pesan Tambahan: ${additionalMessage}`;
        }

        // (Preview functionality removed. Message will be built on submit.)

        // Booking form handler
        document.getElementById('booking-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const fullName = document.getElementById('full-name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const personCount = document.getElementById('person-count').value;
            const additionalMessage = document.getElementById('message').value;
            const packageName = document.getElementById('package') ? document.getElementById('package').value : '';
            const departureDate = document.getElementById('departure-date') ? document.getElementById('departure-date').value : '';
            const message = buildWhatsAppMessage({ fullName, email, phone, personCount, additionalMessage, packageName, departureDate });
            const whatsappUrl = `https://wa.me/6281260003484?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, '_blank');
        });

        // Modal functions
        function openModal(modalId) {
            document.getElementById(modalId).classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Close modal when clicking outside
        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('bg-black') && e.target.classList.contains('bg-opacity-50')) {
                closeModal(e.target.id.replace('-modal', '-modal'));
            }
        });

        // Show logo modal
        function showLogoModal() {
            openModal('logo-modal');
        }

        // Handle business button clicks
        function handleBusinessButton(buttonText, businessId) {
            switch(buttonText) {
                case 'Pesan Travel':
                    openModal('booking-modal');
                    populateBookingModal(businessId);
                    break;
                case 'Lihat Promo':
                    openModal('promo-modal');
                    populatePromoModal(businessId);
                    break;
                case 'Pelajari Lebih Lanjut':
                    openModal('detail-modal');
                    populateDetailModal(businessId);
                    break;
                case 'Hubungi Kami':
                    openModal('contact-modal');
                    populateContactModal(businessId);
                    break;
                case 'Daftar Sekarang':
                    openModal('booking-modal');
                    populateBookingModal(businessId);
                    break;
                default:
                    openModal('booking-modal');
                    populateBookingModal(businessId);
            }
        }



        // Populate booking modal with business data
        function populateBookingModal(businessId) {
            const business = businesses.find(b => b.id == businessId);
            if (business) {
                document.getElementById('modal-booking-form').setAttribute('data-business-id', businessId);
                document.querySelector('#booking-modal h3').textContent = `Pesan ${business.title}`;
            }
        }

        // Populate promo modal with business data
        function populatePromoModal(businessId) {
            const business = businesses.find(b => b.id == businessId);
            if (business) {
                document.querySelector('#promo-modal h3').textContent = `Promo untuk ${business.title}`;
                // You can customize promo content based on business here
            }
        }

        // Populate detail modal with business data
        function populateDetailModal(businessId) {
            const business = businesses.find(b => b.id == businessId);
            if (business) {
                const detailContent = document.getElementById('detail-content');
                const detailTitle = document.getElementById('detail-title');

                detailTitle.textContent = business.title;
                const imageHtml = business.image
                    ? `<img src="/storage/${business.image}" alt="${business.title}" class="w-full h-64 object-cover rounded-lg mb-4 cursor-pointer" onclick="openImageModal('/storage/${business.image}', '${business.title}', '${business.description.replace(/'/g, "\\'")}')">`
                    : `<div class="w-full h-64 bg-gradient-to-br from-green-500 to-green-700 rounded-lg mb-4 flex flex-col items-center justify-center text-white relative overflow-hidden cursor-pointer" onclick="openImageModal(null, '${business.title}', '${business.description.replace(/'/g, "\\'")}')">
                        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                        <div class="relative z-10 text-center">
                            <div class="text-4xl mb-2">💼</div>
                            <h3 class="text-xl font-bold mb-1">${business.type}</h3>
                            <div class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full font-bold">
                                HOT
                            </div>
                        </div>
                        <div class="absolute bottom-2 left-2 text-xs opacity-75">
                            PT ALMUBARAK WISATA
                        </div>
                    </div>`;
                detailContent.innerHTML = `
                    ${imageHtml}
                    <div class="bg-gradient-to-r from-green-500 to-green-600 text-white p-4 rounded-lg mb-4">
                        <h4 class="font-bold text-lg mb-2">${business.title}</h4>
                        <p class="text-sm opacity-90">${business.description}</p>
                        ${business.price ? `<p class="text-lg font-bold mt-2">Rp ${business.price.toLocaleString('id-ID')}</p>` : ''}
                    </div>
                `;
            }
        }

        // Populate contact modal with business data
        function populateContactModal(businessId) {
            const business = businesses.find(b => b.id == businessId);
            if (business) {
                document.querySelector('#contact-modal h3').textContent = `Hubungi Kami - ${business.title}`;
                // You can customize contact info based on business here
            }
        }

        // Modal booking form handler
        document.getElementById('modal-booking-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const businessId = this.getAttribute('data-business-id');
            const business = businesses.find(b => b.id == businessId);
            const fullName = document.getElementById('modal-full-name').value;
            const email = document.getElementById('modal-email').value;
            const phone = document.getElementById('modal-phone').value;
            const personCount = document.getElementById('modal-person-count').value;
            const additionalMessage = document.getElementById('modal-message').value;
            const packageName = document.getElementById('modal-package') ? document.getElementById('modal-package').value : '';
            const departureDate = document.getElementById('modal-departure-date') ? document.getElementById('modal-departure-date').value : '';
            const businessName = business ? business.title : 'Travel';
            const message = buildWhatsAppMessage({ fullName, email, phone, personCount, additionalMessage, businessName, packageName, departureDate });
            const whatsappUrl = `https://wa.me/6281260003484?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, '_blank');
            closeModal('booking-modal');
        });

        // Open image modal
        function openImageModal(imageSrc, title, description) {
            document.getElementById('modal-image').src = imageSrc;
            document.getElementById('modal-image-title').textContent = title;
            document.getElementById('modal-image-description').textContent = description || '';
            openModal('image-modal');
        }

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
        <div class="footer-contact">
            <h3 class="text-xl font-bold mb-5">Info Kontak</h3>
            <ul class="space-y-4 text-green-50">
                <li class="flex items-start">
                    <span class="text-2xl mr-3 flex-shrink-0">📍</span>
                    <span class="text-sm md:text-base leading-relaxed">Jl. Ciremei Ujung No.210, Bantarjati, Kec. Bogor Utara, Kota Bogor, Jawa Barat 16153</span>
                </li>
                <li class="flex items-center">
                    <span class="text-2xl mr-3 flex-shrink-0">📞</span>
                    <div class="flex flex-col md:flex-row md:items-center">
                        <a href="https://wa.me/6281260003484" class="hover:text-green-200 transition text-sm md:text-base">
                            +62 812-6000-3484
                        </a>
                        <span class="text-xs text-green-200 md:ml-2">(CS 1)</span>
                    </div>
                </li>
                <li class="flex items-center">
                    <span class="text-2xl mr-3 flex-shrink-0">📞</span>
                    <div class="flex flex-col md:flex-row md:items-center">
                        <a href="https://wa.me/6281180002807" class="hover:text-green-200 transition text-sm md:text-base">
                            +62 811-8000-2807
                        </a>
                        <span class="text-xs text-green-200 md:ml-2">(CS 2)</span>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-2xl mr-3 flex-shrink-0">✉️</span>
                    <a href="mailto:almubarak.wisata@gmail.com" class="hover:text-green-200 transition text-sm md:text-base break-all">
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
