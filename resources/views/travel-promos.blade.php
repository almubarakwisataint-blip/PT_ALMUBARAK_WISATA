<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Travel Tiket - PT ALMUBARAK WISATA INTERNATIONAL</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link rel="preload" as="style" href="{{ asset('build/assets/app-DZdmJNV8.css') }}" /><link rel="modulepreload" as="script" href="{{ asset('build/assets/app-Bj43h_rG.js') }}" /><link rel="stylesheet" href="{{ asset('build/assets/app-DZdmJNV8.css') }}" /><script type="module" src="{{ asset('build/assets/app-Bj43h_rG.js') }}"></script>
    <script src="https://unpkg.com/heroicons@2.0.18/24/outline/index.js"></script>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0%, 100% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .animate-pulse-gentle {
            animation: pulse 2s infinite;
        }

        .promo-card {
            transition: all 0.3s ease;
        }

        .promo-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .countdown {
            font-family: 'Courier New', monospace;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-green-50 text-gray-900">
    <!-- Navbar -->
    <nav class="bg-green-600 text-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="ALMUBARAK WISATA" class="h-12 w-auto mr-2 hover:scale-110 hover:border-2 hover:border-green-500 transition-all duration-300">
                        <span class="text-2xl font-bold">ALMUBARAK WISATA</span>
                    </a>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="{{ url('/') }}" class="hover:text-green-200 transition">Home</a>
                    <a href="{{ url('/about') }}" class="hover:text-green-200 transition">Tentang Kami</a>
                    <a href="{{ url('/business') }}" class="hover:text-green-200 transition">Bisnis Kami</a>
                    <a href="{{ url('/news') }}" class="hover:text-green-200 transition">Berita</a>
                    <a href="{{ url('/contact') }}" class="hover:text-green-200 transition">Kontak</a>
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
                <a href="{{ url('/') }}" class="block py-2 hover:text-green-200 transition">Home</a>
                <a href="{{ url('/about') }}" class="block py-2 hover:text-green-200 transition">Tentang Kami</a>
                <a href="{{ url('/business') }}" class="block py-2 hover:text-green-200 transition">Bisnis Kami</a>
                <a href="{{ url('/news') }}" class="block py-2 hover:text-green-200 transition">Berita</a>
                <a href="{{ url('/contact') }}" class="block py-2 hover:text-green-200 transition">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-600 to-green-700 text-white py-32 relative overflow-hidden">
        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
        <div class="absolute inset-0 flex items-center justify-center">
            <img src="https://via.placeholder.com/300x300/ffffff/10b981?text=✈️" alt="Travel" class="w-48 h-48 opacity-20 animate-pulse-gentle">
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 animate-fade-in-up">Promo Travel Tiket</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto animate-fade-in-up" style="animation-delay: 0.2s;">Diskon hingga 30% untuk tiket pesawat ke berbagai destinasi wisata religi</p>
            <div class="animate-fade-in-up" style="animation-delay: 0.4s;">
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-6 py-3">
                    <span class="text-2xl mr-2">⏰</span>
                    <span class="countdown text-lg" id="promo-countdown">Loading...</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Cards Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-12 text-green-600">Promo Bulanan Travel</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8" id="promo-container">
                <!-- Promo cards will be populated by JavaScript -->
            </div>
        </div>
    </section>

    <!-- Booking Modal -->
    <div id="booking-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-8 rounded-lg max-w-2xl w-full mx-4 max-h-96 overflow-y-auto">
            <h3 class="text-2xl font-bold mb-6 text-center">Pesan Promo Travel</h3>
            <div id="booking-content">
                <!-- Booking form will be populated here -->
            </div>
            <button onclick="closeBookingModal()" class="mt-6 bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">Tutup</button>
        </div>
    </div>

    <!-- Edit Modal -->
    <div id="edit-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white p-8 rounded-lg max-w-2xl w-full mx-4">
            <h3 class="text-2xl font-bold mb-6 text-center">Edit Promo Travel</h3>
            <form id="edit-form" class="space-y-4">
                <input type="hidden" id="edit-promo-id">
                <div>
                    <label class="block text-sm font-medium mb-1">Judul Promo</label>
                    <input type="text" id="edit-title" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" required>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Periode</label>
                    <input type="text" id="edit-period" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" required>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Deskripsi</label>
                    <textarea id="edit-description" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" rows="3" required></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium mb-1">Harga</label>
                    <input type="text" id="edit-price" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" required>
                </div>
                <div class="flex space-x-2">
                    <button type="submit" class="flex-1 bg-green-600 text-white py-2 rounded-lg hover:bg-green-700">Simpan</button>
                    <button type="button" onclick="closeEditModal()" class="flex-1 bg-gray-600 text-white py-2 rounded-lg hover:bg-gray-700">Batal</button>
                </div>
            </form>
        </div>
    </div>

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
                    <li><a href="{{ url('/') }}" class="hover:text-green-200 transition">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="hover:text-green-200 transition">Tentang Kami</a></li>
                    <li><a href="{{ url('/business') }}" class="hover:text-green-200 transition">Bisnis Kami</a></li>
                    <li><a href="{{ url('/news') }}" class="hover:text-green-200 transition">Berita</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-green-200 transition">Kontak</a></li>
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
                <div class="space-y-5">
                    <div class="flex items-center hover:bg-green-700/30 rounded-lg p-2 transition">
                        <img src="https://via.placeholder.com/80x60/10b981/ffffff?text=🧒" alt="Santunan Anak Yatim" class="rounded mr-3">
                        <div>
                            <a href="{{ url('/news/1') }}" class="font-semibold hover:text-green-200 transition">Santunan Anak Yatim...</a>
                            <p class="text-sm text-green-100">15 Desember 2024</p>
                        </div>
                    </div>
                    <div class="flex items-center hover:bg-green-700/30 rounded-lg p-2 transition">
                        <img src="https://via.placeholder.com/80x60/059669/ffffff?text=🕋" alt="Artikel 2024" class="rounded mr-3">
                        <div>
                            <a href="{{ url('/news/2') }}" class="font-semibold hover:text-green-200 transition">Artikel 2024...</a>
                            <p class="text-sm text-green-100">10 Desember 2024</p>
                        </div>
                    </div>
                    <div class="flex items-center hover:bg-green-700/30 rounded-lg p-2 transition">
                        <img src="https://via.placeholder.com/80x60/047857/ffffff?text=🕋" alt="Artikel 2023" class="rounded mr-3">
                        <div>
                            <a href="{{ url('/news/3') }}" class="font-semibold hover:text-green-200 transition">Artikel 2023...</a>
                            <p class="text-sm text-green-100">5 Desember 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer garis bawah -->
        <div class="max-w-7xl mx-auto px-6 lg:px-8 mt-12">
            <div class="border-t border-green-500 pt-6 flex justify-between items-center">
                <!-- Teks -->
                <div class="text-green-100 text-sm mt-4 text-center">
                    © 2025 <a href="{{ url('/') }}" class="font-bold text-white hover:text-green-200 text-xl">PT ALMUBARAK WISATA INTERNATIONAL</a>. All Rights <br>
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
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Promo data
        const travelPromos = [
            {
                id: 'jan-mar',
                title: 'Promo Travel Januari - Maret 2025',
                period: 'Januari - Maret 2025',
                description: 'Diskon hingga 30% untuk penerbangan ke berbagai destinasi wisata religi.',
                price: 'Mulai dari Rp 8.000.000 / Paket',
                facilities: ['Tiket Pesawat PP', 'Hotel 4 Bintang', 'Makan 3x Sehari', 'Tour Guide', 'Transportasi Lokal'],
                image: 'https://via.placeholder.com/400x300/dc2626/ffffff?text=Travel+Jan-Mar',
                endDate: '2025-03-31T23:59:59'
            },
            {
                id: 'apr-jun',
                title: 'Promo Travel April - Juni 2025',
                period: 'April - Juni 2025',
                description: 'Paket hemat untuk musim semi, diskon spesial untuk keluarga.',
                price: 'Mulai dari Rp 9.500.000 / Paket',
                facilities: ['Tiket Pesawat PP', 'Hotel 5 Bintang', 'Makan 3x Sehari', 'Tour Guide Premium', 'Transportasi VIP'],
                image: 'https://via.placeholder.com/400x300/ea580c/ffffff?text=Travel+Apr-Jun',
                endDate: '2025-06-30T23:59:59'
            },
            {
                id: 'jul-sep',
                title: 'Promo Travel Juli - September 2025',
                period: 'Juli - September 2025',
                description: 'Promo musim panas dengan fasilitas lengkap dan diskon menarik untuk umroh dan haji.',
                price: 'Mulai dari Rp 10.000.000 / Paket',
                facilities: ['Tiket Pesawat PP', 'Hotel 5 Bintang', 'Makan 3x Sehari', 'Tour Guide Premium', 'Asuransi Perjalanan'],
                image: 'https://via.placeholder.com/400x300/f59e0b/ffffff?text=Travel+Jul-Sep',
                endDate: '2025-09-30T23:59:59'
            },
            {
                id: 'oct-dec',
                title: 'Promo Travel Oktober - Desember 2025',
                period: 'Oktober - Desember 2025',
                description: 'Akhir tahun spesial untuk perjalanan spiritual yang berkesan.',
                price: 'Mulai dari Rp 11.000.000 / Paket',
                facilities: ['Tiket Pesawat PP', 'Hotel 5 Bintang', 'Makan 3x Sehari', 'Tour Guide Premium', 'Transportasi VIP', 'Asuransi Premium'],
                image: 'https://via.placeholder.com/400x300/10b981/ffffff?text=Travel+Oct-Dec',
                endDate: '2025-12-31T23:59:59'
            }
        ];

        // Render promo cards
        function renderPromoCards() {
            const container = document.getElementById('promo-container');
            container.innerHTML = travelPromos.map((promo, index) => `
                <div class="promo-card bg-white rounded-lg shadow-lg overflow-hidden animate-fade-in-up" style="animation-delay: ${index * 0.1}s;">
                    <div class="w-full h-48 bg-gradient-to-br from-green-500 to-green-700 rounded-lg flex flex-col items-center justify-center text-white relative overflow-hidden">
                        <div class="absolute inset-0 bg-black bg-opacity-20"></div>
                        <div class="relative z-10 text-center">
                            <div class="text-4xl mb-2">✈️</div>
                            <h3 class="text-lg font-bold mb-1">PROMO TRAVEL</h3>
                            <p class="text-sm opacity-90">${promo.period.split(' ')[0]} ${promo.period.split(' ')[2]}</p>
                            <div class="absolute top-2 right-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full font-bold">
                                HOT
                            </div>
                        </div>
                        <div class="absolute bottom-2 left-2 text-xs opacity-75">
                            PT ALMUBARAK WISATA
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">${promo.title}</h3>
                        <p class="text-gray-600 mb-2">${promo.period}</p>
                        <p class="text-sm text-gray-700 mb-2">${promo.description}</p>
                        <p class="text-xl font-bold text-green-600 mb-4">${promo.price}</p>
                        <div class="flex space-x-2">
                            <button onclick="bookPromo('${promo.id}')" class="flex-1 bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">Pesan</button>
                            <button onclick="editPromo('${promo.id}')" class="flex-1 bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">Edit</button>
                            <button onclick="deletePromo('${promo.id}')" class="flex-1 bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition">Hapus</button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Countdown timer
        function updateCountdown() {
            const now = new Date().getTime();
            const nextPromo = travelPromos.find(promo => new Date(promo.endDate).getTime() > now);

            if (nextPromo) {
                const distance = new Date(nextPromo.endDate).getTime() - now;
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                document.getElementById('promo-countdown').innerHTML =
                    `${days}h ${hours}j ${minutes}m ${seconds}d tersisa untuk ${nextPromo.title.split(' ')[2]}`;
            } else {
                document.getElementById('promo-countdown').innerHTML = 'Promo telah berakhir';
            }
        }

        // Book promo
        function bookPromo(promoId) {
            const promo = travelPromos.find(p => p.id === promoId);
            const bookingContent = document.getElementById('booking-content');
            bookingContent.innerHTML = `
                <div class="bg-green-50 p-4 rounded-lg">
                    <h4 class="text-lg font-semibold mb-2">${promo.title}</h4>
                    <p class="text-gray-600 mb-2">${promo.period}</p>
                    <p class="text-xl font-bold text-green-600 mb-4">${promo.price}</p>
                    <form id="booking-form" class="space-y-4">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">Nama Lengkap</label>
                                <input type="text" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" id="full-name" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Email</label>
                                <input type="email" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" id="email" required>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium mb-1">No. HP</label>
                                <input type="tel" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" id="phone" required>
                            </div>
                            <div>
                                <label class="block text-sm font-medium mb-1">Jumlah Orang</label>
                                <input type="number" min="1" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" id="person-count" required>
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-1">Pesan Tambahan</label>
                            <textarea class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-300" id="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-green-600 text-white py-2 rounded-lg hover:bg-green-700 transition">Kirim ke WhatsApp</button>
                    </form>
                </div>
            `;
            document.getElementById('booking-modal').classList.remove('hidden');

            // Attach form event listener
            document.getElementById('booking-form').addEventListener('submit', function(e) {
                e.preventDefault();
                const fullName = document.getElementById('full-name').value;
                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const personCount = document.getElementById('person-count').value;
                const additionalMessage = document.getElementById('message').value;
                const message = `Halo, saya ${fullName} ingin memesan ${promo.title} untuk ${personCount} orang.\n\nDetail:\n- Email: ${email}\n- No. HP: ${phone}\n- Pesan Tambahan: ${additionalMessage}`;
                const whatsappUrl = `https://wa.me/6281260003484?text=${encodeURIComponent(message)}`;
                window.open(whatsappUrl, '_blank');
            });
        }

        // Edit promo
        function editPromo(promoId) {
            const promo = travelPromos.find(p => p.id === promoId);
            document.getElementById('edit-promo-id').value = promo.id;
            document.getElementById('edit-title').value = promo.title;
            document.getElementById('edit-period').value = promo.period;
            document.getElementById('edit-description').value = promo.description;
            document.getElementById('edit-price').value = promo.price;
            document.getElementById('edit-modal').classList.remove('hidden');

            // Handle form submission
            document.getElementById('edit-form').addEventListener('submit', function(e) {
                e.preventDefault();
                const id = document.getElementById('edit-promo-id').value;
                const updatedPromo = travelPromos.find(p => p.id === id);
                updatedPromo.title = document.getElementById('edit-title').value;
                updatedPromo.period = document.getElementById('edit-period').value;
                updatedPromo.description = document.getElementById('edit-description').value;
                updatedPromo.price = document.getElementById('edit-price').value;

                renderPromoCards();
                closeEditModal();
                alert('Promo berhasil diupdate!');
            });
        }

        // Delete promo
        function deletePromo(promoId) {
            if (confirm('Apakah Anda yakin ingin menghapus promo ini?')) {
                const index = travelPromos.findIndex(p => p.id === promoId);
                if (index > -1) {
                    travelPromos.splice(index, 1);
                    renderPromoCards();
                    alert('Promo berhasil dihapus!');
                }
            }
        }

        // Close modals
        function closeBookingModal() {
            document.getElementById('booking-modal').classList.add('hidden');
        }

        function closeEditModal() {
            document.getElementById('edit-modal').classList.add('hidden');
        }

        // Scroll to top
        document.getElementById('scroll-to-top').addEventListener('click', function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            renderPromoCards();
            updateCountdown();
            setInterval(updateCountdown, 1000);
        });
    </script>
</body>
</html>
