<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import { useI18n } from '@/Composables/useI18n';

const { t } = useI18n();

const isPartnerModalOpen = ref(false);
const isAppModalOpen = ref(false);

const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};
</script>

<template>
    <footer class="w-full">
        <!-- ==================================================================== -->
        <!-- SECTION 1: TRAVEL APP DOWNLOAD BANNER (SESUAI GAMBAR 1 - TEMA HIJAU) -->
        <!-- ==================================================================== -->
        <section class="relative w-full overflow-hidden text-white py-14 sm:py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-[#003d2b] via-[#005138] to-[#006d4c]">
            <!-- Scenic Travel Background Overlay -->
            <div class="absolute inset-0 z-0">
                <div 
                    class="w-full h-full bg-cover bg-center opacity-25 mix-blend-overlay"
                    style="background-image: url('/images/baground2.jpg');"
                ></div>
                <div class="absolute inset-0 bg-gradient-to-b from-[#002b1c]/60 via-[#003d2b]/40 to-[#002b1c]/80"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto flex flex-col gap-8">
                <!-- Title & Feature Pills -->
                <div class="flex flex-col gap-4">
                    <h2 class="font-headline-xl text-3xl sm:text-4xl lg:text-[44px] font-extrabold text-white tracking-tight drop-shadow-md">
                        #1 All-in-one Travel App<span class="text-emerald-300">*</span>
                    </h2>

                    <!-- 3 Feature Pills sesuai Gambar 1 -->
                    <div class="flex flex-wrap items-center gap-3 pt-1">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/15 backdrop-blur-md border border-white/20 text-white text-xs sm:text-sm font-semibold shadow-xs">
                            <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                            <span>Easy refund &amp; reschedule</span>
                        </div>
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/15 backdrop-blur-md border border-white/20 text-white text-xs sm:text-sm font-semibold shadow-xs">
                            <span class="material-symbols-outlined text-[18px]">verified</span>
                            <span>Promo khusus aplikasi</span>
                        </div>
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/15 backdrop-blur-md border border-white/20 text-white text-xs sm:text-sm font-semibold shadow-xs">
                            <span class="material-symbols-outlined text-[18px]">notifications_active</span>
                            <span>Notifikasi instan</span>
                        </div>
                    </div>
                </div>

                <!-- QR Code & App Download Buttons (Sesuai Gambar 1) -->
                <div class="flex flex-wrap items-center gap-6 sm:gap-8 pt-2">
                    <!-- QR Code Card with Logo inside -->
                    <div 
                        @click="isAppModalOpen = true"
                        class="p-3 bg-white rounded-2xl shadow-xl flex items-center justify-center shrink-0 cursor-pointer hover:scale-105 transition-transform" 
                        title="Klik untuk info download aplikasi"
                    >
                        <div class="relative w-28 h-28 sm:w-32 sm:h-32 bg-white flex items-center justify-center">
                            <!-- SVG QR Code Pattern -->
                            <svg class="w-full h-full" viewBox="0 0 120 120" fill="none">
                                <!-- Corner Position Finder 1 (Top-Left) -->
                                <rect x="4" y="4" width="32" height="32" rx="4" fill="#005138" />
                                <rect x="10" y="10" width="20" height="20" rx="2" fill="white" />
                                <rect x="15" y="15" width="10" height="10" rx="1" fill="#005138" />

                                <!-- Corner Position Finder 2 (Top-Right) -->
                                <rect x="84" y="4" width="32" height="32" rx="4" fill="#005138" />
                                <rect x="90" y="10" width="20" height="20" rx="2" fill="white" />
                                <rect x="95" y="15" width="10" height="10" rx="1" fill="#005138" />

                                <!-- Corner Position Finder 3 (Bottom-Left) -->
                                <rect x="4" y="84" width="32" height="32" rx="4" fill="#005138" />
                                <rect x="10" y="90" width="20" height="20" rx="2" fill="white" />
                                <rect x="15" y="95" width="10" height="10" rx="1" fill="#005138" />

                                <!-- QR Data Pixel Pattern Grid -->
                                <rect x="44" y="8" width="6" height="6" fill="#005138"/>
                                <rect x="56" y="8" width="6" height="6" fill="#005138"/>
                                <rect x="68" y="8" width="6" height="6" fill="#005138"/>
                                <rect x="44" y="20" width="6" height="6" fill="#005138"/>
                                <rect x="68" y="20" width="6" height="6" fill="#005138"/>
                                <rect x="44" y="32" width="6" height="6" fill="#005138"/>
                                <rect x="56" y="32" width="6" height="6" fill="#005138"/>

                                <rect x="8" y="44" width="6" height="6" fill="#005138"/>
                                <rect x="20" y="44" width="6" height="6" fill="#005138"/>
                                <rect x="32" y="44" width="6" height="6" fill="#005138"/>
                                <rect x="80" y="44" width="6" height="6" fill="#005138"/>
                                <rect x="92" y="44" width="6" height="6" fill="#005138"/>
                                <rect x="104" y="44" width="6" height="6" fill="#005138"/>

                                <rect x="8" y="56" width="6" height="6" fill="#005138"/>
                                <rect x="32" y="56" width="6" height="6" fill="#005138"/>
                                <rect x="80" y="56" width="6" height="6" fill="#005138"/>
                                <rect x="104" y="56" width="6" height="6" fill="#005138"/>

                                <rect x="8" y="68" width="6" height="6" fill="#005138"/>
                                <rect x="20" y="68" width="6" height="6" fill="#005138"/>
                                <rect x="32" y="68" width="6" height="6" fill="#005138"/>
                                <rect x="80" y="68" width="6" height="6" fill="#005138"/>
                                <rect x="92" y="68" width="6" height="6" fill="#005138"/>

                                <rect x="44" y="80" width="6" height="6" fill="#005138"/>
                                <rect x="56" y="80" width="6" height="6" fill="#005138"/>
                                <rect x="68" y="80" width="6" height="6" fill="#005138"/>
                                <rect x="80" y="80" width="6" height="6" fill="#005138"/>
                                <rect x="92" y="80" width="6" height="6" fill="#005138"/>
                                <rect x="104" y="80" width="6" height="6" fill="#005138"/>

                                <rect x="44" y="92" width="6" height="6" fill="#005138"/>
                                <rect x="68" y="92" width="6" height="6" fill="#005138"/>
                                <rect x="92" y="92" width="6" height="6" fill="#005138"/>
                                <rect x="44" y="104" width="6" height="6" fill="#005138"/>
                                <rect x="56" y="104" width="6" height="6" fill="#005138"/>
                                <rect x="80" y="104" width="6" height="6" fill="#005138"/>
                                <rect x="104" y="104" width="6" height="6" fill="#005138"/>

                                <!-- Center Badge with Almubarak Brand -->
                                <circle cx="60" cy="60" r="14" fill="white" />
                                <circle cx="60" cy="60" r="11" fill="#005138" />
                                <path d="M57 54 L63 60 L57 66 L55 64 L59 60 L55 56 Z" fill="white"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Download Buttons & Rating Badges -->
                    <div class="flex flex-wrap items-center gap-4">
                        <!-- App Store Badge -->
                        <div class="flex items-center gap-3">
                            <button 
                                @click="isAppModalOpen = true"
                                type="button"
                                class="flex items-center gap-3 px-5 py-3 rounded-xl bg-black text-white hover:bg-neutral-900 border border-white/20 shadow-lg hover:scale-105 transition-all cursor-pointer text-left"
                            >
                                <svg class="w-7 h-7 fill-current shrink-0" viewBox="0 0 170 170">
                                    <path d="M150.37 130.25c-2.45 5.66-5.35 10.87-8.71 15.66-4.58 6.53-8.33 11.05-11.22 13.56-4.48 4.12-9.28 6.23-14.42 6.35-3.69 0-8.14-1.05-13.32-3.18-5.19-2.12-9.97-3.17-14.34-3.17-4.58 0-9.49 1.05-14.75 3.17-5.26 2.13-9.5 3.24-12.74 3.35-4.35.13-9.16-1.9-14.42-6.08-3.69-3.08-7.7-7.85-12.03-14.3-6.02-8.94-10.81-18.73-14.36-29.37-3.55-10.64-5.33-20.9-5.33-30.78 0-14.52 3.84-26.68 11.53-36.48 7.69-9.8 17.38-14.81 29.07-15.02 5.14 0 10.74 1.34 16.8 4.02 6.06 2.69 9.87 4.08 11.43 4.19 1.8.11 5.92-1.39 12.37-4.52 6.45-3.13 12.18-4.52 17.2-4.19 12.87.64 23.36 5.48 31.47 14.52-11.44 6.94-17.05 16.5-16.84 28.67.21 9.58 3.88 17.61 11 24.1 7.12 6.49 15.54 10.22 25.26 11.19-2.22 6.85-4.94 13.66-8.15 20.43zM119.22 33.15c0-7.26 2.65-14.15 7.95-20.67 5.3-6.52 11.75-10.68 19.35-12.48.21 1.06.32 2.12.32 3.18 0 7.26-2.8 14.24-8.4 20.94-5.6 6.7-12.18 10.8-19.74 12.3-.32-1.07-.48-2.16-.48-3.27z"/>
                                </svg>
                                <div>
                                    <span class="block text-[10px] uppercase tracking-wider text-white/80">Download di</span>
                                    <span class="block text-sm sm:text-base font-bold font-sans tracking-tight">App Store</span>
                                </div>
                            </button>
                            <div class="text-left text-white hidden sm:block">
                                <span class="text-base font-bold">4.9<span class="text-xs text-white/75">/5</span></span>
                                <span class="block text-[11px] text-white/80">Rating aplikasi</span>
                            </div>
                        </div>

                        <!-- Google Play Badge -->
                        <div class="flex items-center gap-3">
                            <button 
                                @click="isAppModalOpen = true"
                                type="button"
                                class="flex items-center gap-3 px-5 py-3 rounded-xl bg-black text-white hover:bg-neutral-900 border border-white/20 shadow-lg hover:scale-105 transition-all cursor-pointer text-left"
                            >
                                <svg class="w-7 h-7 shrink-0" viewBox="0 0 512 512">
                                    <path fill="#4caf50" d="M12.2 26.2c-.8 2.2-1.2 4.7-1.2 7.5v444.6c0 2.8.4 5.3 1.2 7.5l239.5-229.8L12.2 26.2z"/>
                                    <path fill="#ffeb3b" d="M329.8 174.6l-78.1 81.4 78.1 81.4 89.2-51.5c15.4-8.9 15.4-23.4 0-32.3l-89.2-79z"/>
                                    <path fill="#f44336" d="M12.2 26.2L251.7 256l78.1-81.4L105.7 44.5c-25.9-15-58.5-12.3-93.5-18.3z"/>
                                    <path fill="#2196f3" d="M12.2 485.8c35-6 67.6-3.3 93.5-18.3l224.1-130.1-78.1-81.4L12.2 485.8z"/>
                                </svg>
                                <div>
                                    <span class="block text-[10px] uppercase tracking-wider text-white/80">DAPATKAN DI</span>
                                    <span class="block text-sm sm:text-base font-bold font-sans tracking-tight">Google Play</span>
                                </div>
                            </button>
                            <div class="text-left text-white hidden sm:block">
                                <span class="text-base font-bold">4.9<span class="text-xs text-white/75">/5</span></span>
                                <span class="block text-[11px] text-white/80">Rating aplikasi</span>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-[11px] sm:text-xs text-white/75 font-sans pt-1">
                    *Di Indonesia, berdasarkan total unduhan dan rating kepuasan jamaah dalam ekosistem perjalanan ibadah umrah &amp; haji terpadu.
                </p>
            </div>
        </section>

        <!-- ==================================================================== -->
        <!-- SECTION 2: FOOTER BODY UTAMA (SESUAI GAMBAR 2 - WARNA HIJAU ALMUBARAK) -->
        <!-- ==================================================================== -->
        <div class="w-full bg-[#002b1c] text-white pt-16 pb-12 border-t border-emerald-500/20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- 4 Kolom Utama -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-10 pb-14 border-b border-white/10">
                    <!-- KOLOM 1: Brand, Lisensi, Partner Button, & Payment Partners Grid -->
                    <div class="lg:col-span-4 flex flex-col gap-6">
                        <!-- Logo & Brand Header -->
                        <div class="flex items-center gap-3">
                            <img 
                                alt="Almubarak Wisata" 
                                class="h-10 w-auto object-contain bg-white rounded-lg p-1.5 shadow-sm" 
                                src="/images/logo.png"
                            />
                            <div class="flex flex-col">
                                <span class="font-headline-sm text-2xl text-white leading-tight font-extrabold tracking-tight">
                                    Almubarak<span class="text-emerald-400 font-bold">.com</span>
                                </span>
                                <span class="text-[10px] text-emerald-200 uppercase tracking-widest font-bold">
                                    Haji &amp; Umrah Premium
                                </span>
                            </div>
                        </div>

                        <!-- 3 Certification Badges (sesuai IATA, ASITA, ISO di Gambar 2) -->
                        <div class="flex items-center gap-3 py-1">
                            <!-- PPIU Kemenag -->
                            <div class="h-10 px-3 rounded-lg bg-white/10 border border-white/15 flex items-center justify-center text-white" title="Penyelenggara Perjalanan Ibadah Umrah (PPIU) Kemenag RI">
                                <span class="font-bold text-xs tracking-tight">PPIU Kemenag</span>
                            </div>
                            <!-- ASITA -->
                            <div class="h-10 px-3 rounded-lg bg-white/10 border border-white/15 flex items-center justify-center text-white" title="Association of The Indonesian Tours and Travel Agencies">
                                <span class="font-bold text-xs tracking-tight">ASITA</span>
                            </div>
                            <!-- ISO / Akreditasi A -->
                            <div class="h-10 px-3 rounded-lg bg-white/10 border border-white/15 flex items-center justify-center text-white" title="Akreditasi A Resmi Kemenag RI">
                                <div class="text-center leading-none">
                                    <span class="block text-[9px] uppercase tracking-wider text-emerald-300 font-bold">Akreditasi</span>
                                    <span class="text-xs font-black">A Resmi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Button Jadi Partner Almubarak (Sesuai Tombol Jadi Partner di Gambar 2) -->
                        <div>
                            <button 
                                @click="isPartnerModalOpen = true"
                                type="button"
                                class="inline-flex items-center justify-center gap-2 px-6 py-2.5 rounded-full bg-[#00a86b] hover:bg-[#00c57d] text-white font-bold text-sm shadow-lg shadow-emerald-950/40 hover:scale-105 transition-all cursor-pointer"
                            >
                                <span>Jadi Partner Almubarak</span>
                                <span class="text-base">🤝</span>
                            </button>
                        </div>

                        <!-- Partner Pembayaran (Grid 4x4 Badge Bank & Fintech Sesuai Gambar 2) -->
                        <div class="flex flex-col gap-3 pt-2">
                            <span class="text-sm font-bold text-white tracking-tight">
                                Partner Pembayaran
                            </span>

                            <div class="grid grid-cols-4 gap-2 max-w-sm">
                                <!-- Visa -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="Visa">
                                    <span class="text-[#00579f] font-black text-sm italic tracking-tighter">VISA</span>
                                </div>
                                <!-- Mastercard -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center gap-1 shadow-xs hover:shadow-md transition-shadow" title="Mastercard">
                                    <div class="w-3.5 h-3.5 rounded-full bg-[#eb001b] -mr-1"></div>
                                    <div class="w-3.5 h-3.5 rounded-full bg-[#f79e1b] opacity-90"></div>
                                </div>
                                <!-- JCB -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="JCB">
                                    <span class="text-[#0e4495] font-extrabold text-xs">JCB</span>
                                </div>
                                <!-- BCA -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="Bank Central Asia (BCA)">
                                    <span class="text-[#005baa] font-extrabold text-xs">BCA</span>
                                </div>

                                <!-- Mandiri -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="Bank Mandiri">
                                    <span class="text-[#00387a] font-bold text-[11px]">mandiri</span>
                                </div>
                                <!-- BRI -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="Bank Rakyat Indonesia (BRI)">
                                    <span class="text-[#00529c] font-black text-xs">BRI</span>
                                </div>
                                <!-- BNI -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="Bank Negara Indonesia (BNI)">
                                    <span class="text-[#f15a24] font-black text-xs">BNI</span>
                                </div>
                                <!-- BSI -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="Bank Syariah Indonesia (BSI)">
                                    <span class="text-[#00a39d] font-extrabold text-xs">BSI</span>
                                </div>

                                <!-- Muamalat -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="Bank Muamalat">
                                    <span class="text-[#5a246b] font-bold text-[10px]">Muamalat</span>
                                </div>
                                <!-- QRIS -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="QRIS Standar Pembayaran Nasional">
                                    <span class="text-[#ed1c24] font-black text-[11px] tracking-tight">QRIS</span>
                                </div>
                                <!-- GoPay -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="GoPay">
                                    <span class="text-[#00aed6] font-bold text-xs">gopay</span>
                                </div>
                                <!-- OVO -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="OVO">
                                    <span class="text-[#4c3494] font-black text-xs">OVO</span>
                                </div>

                                <!-- ShopeePay -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="ShopeePay">
                                    <span class="text-[#ee4d2d] font-bold text-[10px]">Shopee</span>
                                </div>
                                <!-- DANA -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="DANA">
                                    <span class="text-[#118eea] font-black text-xs">DANA</span>
                                </div>
                                <!-- Alfamart -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="Alfamart">
                                    <span class="text-[#e31837] font-bold text-[10px]">Alfamart</span>
                                </div>
                                <!-- Indomaret -->
                                <div class="bg-white rounded-lg p-2 h-9 flex items-center justify-center shadow-xs hover:shadow-md transition-shadow" title="Indomaret">
                                    <span class="text-[#005baa] font-bold text-[10px]">Indomaret</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KOLOM 2: Tentang Almubarak & Follow Kami Di (Hanya IG, TikTok, WA) -->
                    <div class="lg:col-span-3 flex flex-col gap-4">
                        <h4 class="text-base font-bold text-white mb-2 tracking-tight">
                            Tentang Almubarak
                        </h4>
                        <ul class="flex flex-col gap-2 text-sm text-white/80">
                            <li><Link href="/contact" class="hover:text-emerald-300 transition-colors">Cara Pesan &amp; Pendaftaran</Link></li>
                            <li><Link href="/contact" class="hover:text-emerald-300 transition-colors">Hubungi Layanan</Link></li>
                            <li><Link href="/contact" class="hover:text-emerald-300 transition-colors">Pusat Bantuan Jamaah</Link></li>
                            <li><Link href="/about#tim-kami" class="hover:text-emerald-300 transition-colors">Karier &amp; Muthawif</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Cicilan &amp; Tabungan Umrah</Link></li>
                            <li><Link href="/about" class="hover:text-emerald-300 transition-colors">Tentang Kami</Link></li>
                            <li><Link href="/about#penghargaan" class="hover:text-emerald-300 transition-colors">Sertifikasi &amp; Akreditasi Kemenag</Link></li>
                            <li><Link href="/news" class="hover:text-emerald-300 transition-colors">Rilisan Fitur &amp; Jadwal Baru</Link></li>
                        </ul>

                        <!-- Follow kami di (Strictly IG, TikTok, WA sesuai permintaan user) -->
                        <div class="pt-4 flex flex-col gap-3">
                            <span class="text-sm font-bold text-white tracking-tight">Follow kami di</span>
                            <div class="flex flex-col gap-2.5 text-sm text-white/85">
                                <!-- Instagram -->
                                <a 
                                    href="https://instagram.com/almubarakwisata" 
                                    target="_blank" 
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center gap-3 hover:text-emerald-300 transition-colors group"
                                >
                                    <div class="w-6 h-6 rounded-full bg-gradient-to-tr from-amber-500 via-rose-500 to-purple-600 flex items-center justify-center text-white shrink-0 group-hover:scale-110 transition-transform shadow-xs">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </div>
                                    <span>Instagram</span>
                                </a>

                                <!-- TikTok -->
                                <a 
                                    href="https://tiktok.com/@almubarakwisata" 
                                    target="_blank" 
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center gap-3 hover:text-emerald-300 transition-colors group"
                                >
                                    <div class="w-6 h-6 rounded-full bg-black flex items-center justify-center text-white shrink-0 group-hover:scale-110 transition-transform shadow-xs">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298-.002.595.042.88.13V9.4a6.33 6.33 0 0 0-.88-.06A6.34 6.34 0 0 0 3 15.68a6.34 6.34 0 0 0 10.82 4.48c.03-.03.06-.06.08-.09V10.12a8.28 8.28 0 0 0 5.69 2.25V8.92a4.84 4.84 0 0 1-3.45-2.23z"/>
                                        </svg>
                                    </div>
                                    <span>TikTok</span>
                                </a>

                                <!-- WhatsApp -->
                                <a 
                                    href="https://wa.me/6281260003484" 
                                    target="_blank" 
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center gap-3 hover:text-emerald-300 transition-colors group"
                                >
                                    <div class="w-6 h-6 rounded-full bg-[#25D366] flex items-center justify-center text-white shrink-0 group-hover:scale-110 transition-transform shadow-xs">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                        </svg>
                                    </div>
                                    <span>WhatsApp</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- KOLOM 3: Produk & Layanan (Sesuai Gambar 2) -->
                    <div class="lg:col-span-3 flex flex-col gap-4">
                        <h4 class="text-base font-bold text-white mb-2 tracking-tight">
                            Produk &amp; Layanan
                        </h4>
                        <ul class="flex flex-col gap-2 text-sm text-white/80">
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Paket Umrah Reguler 9-12 Hari</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Paket Umrah Ramadhan &amp; I'tikaf</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Haji Khusus &amp; Haji Furoda VIP</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Wisata Halal Turki &amp; Aqsa</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Tiket Pesawat Saudia / Garuda</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Hotel Pelataran Ring 1 Makkah</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Tiket Kereta Cepat Haramain</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Tasreh Raudhah &amp; Visa Umrah</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Antar Jemput &amp; Handling Bandara</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Rental Bus VIP Makkah-Madinah</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Asuransi Perjalanan Ibadah</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Layanan Custom Group &amp; Korporat</Link></li>
                        </ul>
                    </div>

                    <!-- KOLOM 4: Lainnya (Sesuai Gambar 2) -->
                    <div class="lg:col-span-2 flex flex-col gap-4">
                        <h4 class="text-base font-bold text-white mb-2 tracking-tight">
                            Lainnya
                        </h4>
                        <ul class="flex flex-col gap-2 text-sm text-white/80">
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Almubarak for Corporates</Link></li>
                            <li><button @click="isPartnerModalOpen = true" type="button" class="text-left hover:text-emerald-300 transition-colors cursor-pointer">Program Kemitraan &amp; Agen</button></li>
                            <li><Link href="/contact" class="hover:text-emerald-300 transition-colors">Referensikan Jamaah</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">Promo Spesial Keberangkatan</Link></li>
                            <li><Link href="/news" class="hover:text-emerald-300 transition-colors">Blog &amp; Panduan Manasik</Link></li>
                            <li><Link href="/privacy" class="hover:text-emerald-300 transition-colors">Pemberitahuan Privasi</Link></li>
                            <li><Link href="/terms" class="hover:text-emerald-300 transition-colors">Syarat &amp; Ketentuan</Link></li>
                            <li><button @click="isPartnerModalOpen = true" type="button" class="text-left hover:text-emerald-300 transition-colors cursor-pointer">Daftarkan Akomodasi Hotel</button></li>
                            <li><Link href="/about" class="hover:text-emerald-300 transition-colors">Testimoni Jamaah</Link></li>
                            <li><Link href="/news" class="hover:text-emerald-300 transition-colors">Almubarak Press Room</Link></li>
                            <li><Link href="/contact" class="hover:text-emerald-300 transition-colors">Pusat Bantuan &amp; FAQ</Link></li>
                            <li><Link href="/privacy" class="hover:text-emerald-300 transition-colors">Kebijakan Perlindungan Data</Link></li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom Copyright Strip (Sesuai Gambar 2) -->
                <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-white/75">
                    <div>
                        © 2026 PT ALMUBARAK WISATA INTERNATIONAL. Seluruh Hak Cipta Dilindungi.
                    </div>
                    <div class="flex flex-wrap items-center gap-6 font-medium text-white/85">
                        <Link href="/privacy" class="hover:text-emerald-300 transition-colors">Pemberitahuan Privasi</Link>
                        <Link href="/terms" class="hover:text-emerald-300 transition-colors">Syarat &amp; Ketentuan</Link>
                        <Link href="/business" class="hover:text-emerald-300 transition-colors">Sitemap</Link>
                        <Link href="/contact" class="hover:text-emerald-300 transition-colors">Hubungi Kami</Link>
                        <button 
                            @click="scrollToTop"
                            aria-label="Kembali ke atas" 
                            class="w-9 h-9 rounded-full bg-[#007d5c] hover:bg-[#00966f] text-white flex items-center justify-center transition-all cursor-pointer shadow-md hover:scale-110 ml-2" 
                            type="button"
                        >
                            <span class="material-symbols-outlined text-[20px]">arrow_upward</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- ==================================================================== -->
        <!-- MODAL 1: JADI PARTNER ALMUBARAK                                      -->
        <!-- ==================================================================== -->
        <div 
            v-if="isPartnerModalOpen" 
            class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/70 backdrop-blur-sm"
            @click.self="isPartnerModalOpen = false"
        >
            <div class="relative w-full max-w-lg bg-white rounded-3xl shadow-2xl p-6 sm:p-8 text-on-surface border border-emerald-100 animate-in fade-in zoom-in-95 duration-200">
                <button 
                    @click="isPartnerModalOpen = false"
                    class="absolute top-5 right-5 w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 flex items-center justify-center transition-colors cursor-pointer"
                    type="button"
                >
                    <span class="material-symbols-outlined text-[20px]">close</span>
                </button>

                <div class="flex items-center gap-3 mb-4">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-700 flex items-center justify-center text-2xl shadow-xs">
                        🤝
                    </div>
                    <div>
                        <h3 class="font-headline-sm text-xl font-extrabold text-[#005138]">
                            Kemitraan &amp; Partner Resmi
                        </h3>
                        <p class="text-xs text-gray-500">PT Almubarak Wisata Internasional</p>
                    </div>
                </div>

                <p class="text-sm text-gray-600 mb-6 leading-relaxed">
                    Bergabung bersama ekosistem haji, umrah, dan wisata halal berizin resmi Kemenag RI. Kami membuka kolaborasi strategis untuk:
                </p>

                <div class="space-y-3 mb-6">
                    <div class="p-3.5 rounded-2xl bg-emerald-50/70 border border-emerald-100 flex items-start gap-3">
                        <span class="material-symbols-outlined text-emerald-700 text-[20px] mt-0.5 shrink-0">store</span>
                        <div class="text-xs">
                            <span class="font-bold text-[#005138] block mb-0.5">Mitra Keagenan &amp; Kantor Cabang</span>
                            <span class="text-gray-600">Buka layanan pendaftaran umrah di kota Anda dengan komisi menarik &amp; bimbingan legalitas.</span>
                        </div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-emerald-50/70 border border-emerald-100 flex items-start gap-3">
                        <span class="material-symbols-outlined text-emerald-700 text-[20px] mt-0.5 shrink-0">hotel</span>
                        <div class="text-xs">
                            <span class="font-bold text-[#005138] block mb-0.5">Penyedia Hotel &amp; Transportasi Saudi</span>
                            <span class="text-gray-600">Integrasi hotel pelataran ring 1 Makkah-Madinah dan armada bus eksekutif VIP.</span>
                        </div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-emerald-50/70 border border-emerald-100 flex items-start gap-3">
                        <span class="material-symbols-outlined text-emerald-700 text-[20px] mt-0.5 shrink-0">corporate_fare</span>
                        <div class="text-xs">
                            <span class="font-bold text-[#005138] block mb-0.5">Program Tabungan Umrah Korporasi</span>
                            <span class="text-gray-600">Kerjasama reward ibadah karyawan &amp; instansi pemerintah/swasta.</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-3">
                    <a 
                        href="https://wa.me/6281260003484?text=Assalamu%27alaikum%20Almubarak,%20saya%20tertarik%20untuk%20menjadi%20partner%20kemitraan"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="w-full sm:flex-1 py-3 px-4 rounded-xl bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold text-sm flex items-center justify-center gap-2 shadow-md hover:scale-[1.02] transition-transform"
                    >
                        <span class="material-symbols-outlined text-[18px]">chat</span>
                        <span>Chat Tim Kemitraan (WA)</span>
                    </a>
                    <Link 
                        href="/contact"
                        @click="isPartnerModalOpen = false"
                        class="w-full sm:w-auto py-3 px-5 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold text-sm text-center transition-colors"
                    >
                        Form Kontak
                    </Link>
                </div>
            </div>
        </div>

        <!-- ==================================================================== -->
        <!-- MODAL 2: APLIKASI MOBILE DOWNLOAD                                    -->
        <!-- ==================================================================== -->
        <div 
            v-if="isAppModalOpen" 
            class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/70 backdrop-blur-sm"
            @click.self="isAppModalOpen = false"
        >
            <div class="relative w-full max-w-md bg-white rounded-3xl shadow-2xl p-6 sm:p-8 text-on-surface border border-emerald-100 text-center animate-in fade-in zoom-in-95 duration-200">
                <button 
                    @click="isAppModalOpen = false"
                    class="absolute top-5 right-5 w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 flex items-center justify-center transition-colors cursor-pointer"
                    type="button"
                >
                    <span class="material-symbols-outlined text-[20px]">close</span>
                </button>

                <div class="w-16 h-16 rounded-2xl bg-emerald-50 text-[#005138] flex items-center justify-center mx-auto mb-4">
                    <span class="material-symbols-outlined text-[36px]">smartphone</span>
                </div>

                <h3 class="font-headline-sm text-xl font-extrabold text-[#005138] mb-2">
                    Aplikasi Almubarak Mobile
                </h3>
                <p class="text-sm text-gray-600 leading-relaxed mb-6">
                    Aplikasi mobile resmi Almubarak Wisata untuk Android dan iOS sedang dalam tahap rilis pembaruan. Dapatkan link akses instan &amp; panduan jamaah melalui tim customer care kami.
                </p>

                <div class="space-y-3">
                    <a 
                        href="https://wa.me/6281260003484?text=Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20link%20aplikasi%20mobile%20Almubarak%20Wisata"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="w-full py-3 px-4 rounded-xl bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold text-sm flex items-center justify-center gap-2 shadow-md hover:scale-[1.02] transition-transform"
                    >
                        <span class="material-symbols-outlined text-[18px]">download</span>
                        <span>Minta Link Aplikasi via WhatsApp</span>
                    </a>
                    <button 
                        @click="isAppModalOpen = false"
                        type="button"
                        class="w-full py-2.5 px-4 rounded-xl text-xs text-gray-500 hover:text-gray-700 font-semibold cursor-pointer"
                    >
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </footer>
</template>
