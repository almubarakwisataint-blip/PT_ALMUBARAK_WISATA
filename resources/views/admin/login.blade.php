<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Admin - PT ALMUBARAK WISATA INTERNATIONAL</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=block" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen">
    <div class="min-h-screen grid grid-cols-1 lg:grid-cols-12">
        
        <!-- ============================================================== -->
        <!-- KOLOM KIRI (SESUAI GAMBAR 2): BANNER MEKAH BERWIBAWA & ELEGAN -->
        <!-- ============================================================== -->
        <div class="relative lg:col-span-6 xl:col-span-7 flex flex-col justify-between p-8 sm:p-12 lg:p-16 text-white overflow-hidden min-h-[480px] lg:min-h-screen">
            <!-- 1. Background Foto Asli Mekah Masjidil Haram & Ka'bah -->
            <div 
                class="absolute inset-0 bg-cover bg-center transition-transform duration-1000 scale-105"
                style="background-image: url('{{ asset('images/landing/hero-kaaba.jpg') }}');"
            ></div>

            <!-- 2. Scrim Gradasi Hijau Zamrud Islami Mewah (TenagaAhli Style) -->
            <div class="absolute inset-0 bg-gradient-to-br from-[#012617]/96 via-[#023823]/92 to-[#01140c]/98"></div>

            <!-- 3. Elemen Garis Gelombang Anggun (TenagaAhli Wavy Line Pattern) -->
            <svg class="absolute inset-0 w-full h-full opacity-15 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000" preserveAspectRatio="none">
                <path d="M0,250 C300,180 600,320 1000,220 L1000,1000 L0,1000 Z" fill="none" stroke="currentColor" stroke-width="2" class="text-emerald-300" />
                <path d="M0,450 C350,380 650,520 1000,420" fill="none" stroke="currentColor" stroke-width="1.5" class="text-emerald-200" />
                <path d="M0,650 C280,580 720,720 1000,620" fill="none" stroke="currentColor" stroke-width="1.5" class="text-emerald-200" />
                <path d="M0,850 C320,780 680,920 1000,820" fill="none" stroke="currentColor" stroke-width="1.5" class="text-emerald-200" />
            </svg>

            <!-- 4. Pendaran Cahaya Ambient Hijau -->
            <div class="absolute -top-32 -left-32 w-96 h-96 rounded-full bg-emerald-500/20 blur-3xl pointer-events-none"></div>

            <!-- Bagian Atas: Brand Logo & Identitas Resmi -->
            <div class="relative z-10 flex items-center gap-3.5">
                <div class="w-12 h-12 rounded-xl bg-white/10 backdrop-blur-md border border-white/20 p-2 flex items-center justify-center shadow-lg">
                    <img src="{{ asset('images/logo.png') }}" alt="Almubarak Wisata" class="w-full h-full object-contain">
                </div>
                <div>
                    <span class="text-2xl font-black tracking-tight text-white flex items-center gap-1">
                        Almubarak<span class="text-emerald-400">.com</span>
                    </span>
                    <span class="block text-[11px] font-bold text-emerald-200/90 tracking-widest uppercase">
                        Haji Khusus & Umrah Premium
                    </span>
                </div>
            </div>

            <!-- Bagian Tengah: Headline Utama & 3 Poin Keunggulan (Persis TenagaAhli) -->
            <div class="relative z-10 my-10 lg:my-0 max-w-xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/20 border border-emerald-400/30 text-emerald-300 text-xs font-bold mb-4 backdrop-blur-xs">
                    <span class="material-symbols-outlined text-[15px]">verified_user</span>
                    <span>Portal Resmi Admin Operasional</span>
                </div>
                
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-white leading-tight tracking-tight mb-5">
                    Platform Penyelenggara Haji & Umrah Terpercaya.
                </h1>
                
                <p class="text-emerald-100/90 text-sm sm:text-base leading-relaxed mb-8 font-normal">
                    Kelola bimbingan manasik, administrasi penerbitan visa, manifest tiket penerbangan grup internasional, dan akomodasi hotel pelataran ring 1 Tanah Suci Mekah & Madinah.
                </p>

                <!-- 3 Poin Bullet Sesuai Referensi Gambar TenagaAhli -->
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center shrink-0 text-emerald-300">
                            <span class="material-symbols-outlined text-[20px]">workspace_premium</span>
                        </div>
                        <span class="text-sm font-semibold text-white/95">
                            Izin Resmi PPIU Kemenag RI No. U.412 & Akreditasi A Sangat Baik
                        </span>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center shrink-0 text-emerald-300">
                            <span class="material-symbols-outlined text-[20px]">hub</span>
                        </div>
                        <span class="text-sm font-semibold text-white/95">
                            Sistem Terintegrasi Siskopatuh & Manajemen Visa Umrah / Haji Furoda
                        </span>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-10 h-10 rounded-full bg-white/10 backdrop-blur-md border border-white/20 flex items-center justify-center shrink-0 text-emerald-300">
                            <span class="material-symbols-outlined text-[20px]">diamond</span>
                        </div>
                        <span class="text-sm font-semibold text-white/95">
                            Jaminan 5 Pasti Umrah & Standar Pelayanan Fasilitas Bintang 5
                        </span>
                    </div>
                </div>
            </div>

            <!-- Bagian Bawah: Copyright Resmi -->
            <div class="relative z-10 pt-4 border-t border-white/10 flex items-center justify-between text-xs text-emerald-200/70">
                <p>© {{ date('Y') }} PT ALMUBARAK WISATA INTERNATIONAL — All rights reserved.</p>
                <span class="hidden sm:inline font-mono">v2.4 Pro</span>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- KOLOM KANAN (SESUAI GAMBAR 2): FORM LOGIN MINIMALIS & BERSIH   -->
        <!-- ============================================================== -->
        <div class="lg:col-span-6 xl:col-span-5 flex flex-col justify-center px-6 sm:px-12 lg:px-16 py-12 bg-white relative">
            <div class="max-w-md w-full mx-auto">
                
                <!-- Logo & Judul Form -->
                <div class="mb-8">
                    <div class="inline-flex items-center gap-2 mb-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Almubarak Wisata" class="h-10 w-auto">
                        <span class="text-lg font-black text-gray-900 tracking-tight">Almubarak<span class="text-emerald-600">.com</span></span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-black text-gray-900 tracking-tight">
                        Masuk
                    </h2>
                    <p class="text-sm text-gray-500 mt-1.5 font-normal">
                        Kelola data bimbingan jamaah & operasional travel Anda.
                    </p>
                </div>

                <!-- Alert Error Notifikasi -->
                @if($errors->any())
                    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm flex items-start gap-2.5">
                        <span class="material-symbols-outlined text-[20px] text-red-600 shrink-0">error</span>
                        <div>
                            <span class="font-bold block">Autentikasi Gagal:</span>
                            <ul class="list-disc list-inside mt-0.5 text-xs">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif

                <!-- Form Login Admin -->
                <form action="{{ route('admin.authenticate') }}" method="POST" class="space-y-5">
                    @csrf
                    
                    <!-- Input Email / Username -->
                    <div>
                        <label for="username" class="block text-xs font-bold text-gray-600 uppercase tracking-wider mb-2">
                            EMAIL / USERNAME
                        </label>
                        <div class="relative">
                            <input 
                                type="text" 
                                id="username" 
                                name="username" 
                                required
                                placeholder="ptalmubarak@gmail.com"
                                class="w-full px-4 py-3.5 bg-gray-50/70 border border-gray-300 rounded-xl text-sm font-medium text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent focus:bg-white transition-all shadow-xs"
                            >
                        </div>
                    </div>

                    <!-- Input Password dengan Toggle Lihat Password (Mata) -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label for="password" class="block text-xs font-bold text-gray-600 uppercase tracking-wider">
                                KATA SANDI
                            </label>
                            <a href="https://wa.me/6281260003484?text=Halo%20Admin%20Almubarak,%20saya%20lupa%20kata%20sandi%20panel%20admin" target="_blank" class="text-xs font-bold text-emerald-700 hover:text-emerald-800 transition">
                                Lupa Password?
                            </a>
                        </div>
                        <div class="relative">
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                required
                                placeholder="••••••••••••"
                                class="w-full px-4 py-3.5 pr-12 bg-gray-50/70 border border-gray-300 rounded-xl text-sm font-medium text-gray-900 placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:border-transparent focus:bg-white transition-all shadow-xs"
                            >
                            <button 
                                type="button" 
                                onclick="togglePasswordVisibility()" 
                                class="absolute right-3.5 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 p-1 focus:outline-none cursor-pointer"
                                aria-label="Lihat kata sandi"
                            >
                                <span id="eyeIcon" class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                        </div>
                    </div>

                    <!-- Tombol Masuk -->
                    <button 
                        type="submit" 
                        class="w-full mt-2 bg-[#007d5c] hover:bg-[#005f45] text-white py-3.5 px-6 rounded-xl font-bold text-sm tracking-wide transition-all shadow-md hover:shadow-lg transform active:scale-[0.99] cursor-pointer flex items-center justify-center gap-2"
                    >
                        <span>Masuk ke Panel Admin</span>
                        <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                    </button>
                </form>

                <!-- Footer Navigasi Bawah -->
                <div class="mt-8 pt-6 border-t border-gray-100 text-center">
                    <a 
                        href="{{ route('home') }}" 
                        class="inline-flex items-center gap-2 text-sm font-semibold text-emerald-700 hover:text-emerald-800 transition"
                    >
                        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                        <span>Kembali ke Beranda Website</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Toggle Password Visibility -->
    <script>
        function togglePasswordVisibility() {
            const pwdInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            if (pwdInput.type === 'password') {
                pwdInput.type = 'text';
                eyeIcon.textContent = 'visibility_off';
            } else {
                pwdInput.type = 'password';
                eyeIcon.textContent = 'visibility';
            }
        }
    </script>
</body>
</html>
