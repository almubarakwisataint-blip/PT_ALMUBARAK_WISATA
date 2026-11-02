<script setup>
import { Link } from '@inertiajs/vue3';
import { useI18n } from '@/Composables/useI18n';

const { t } = useI18n();

const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};
</script>

<template>
    <footer class="w-full">
        <!-- ==================================================================== -->
        <!-- SECTION 1: TRAVEL APP / PLATFORM DOWNLOAD BANNER (MATCHING IMAGE 1) -->
        <!-- ==================================================================== -->
        <section class="relative w-full overflow-hidden text-white py-14 sm:py-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-[#005199] via-[#0275d8] to-[#0099cc]">
            <!-- Scenic Tropical/Island Travel Background overlay matching Image 1 -->
            <div class="absolute inset-0 z-0">
                <div 
                    class="w-full h-full bg-cover bg-center opacity-30 mix-blend-overlay"
                    style="background-image: url('/images/baground2.jpg');"
                ></div>
                <div class="absolute inset-0 bg-gradient-to-b from-sky-950/40 via-blue-900/30 to-blue-950/60"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto flex flex-col gap-8">
                <!-- Title & Feature Pills -->
                <div class="flex flex-col gap-4">
                    <h2 class="font-headline-xl text-3xl sm:text-4xl lg:text-[44px] font-extrabold text-white tracking-tight drop-shadow-md">
                        #1 All-in-one Travel App<span class="text-sky-300">*</span>
                    </h2>

                    <!-- 3 Feature Pills matching Image 1 -->
                    <div class="flex flex-wrap items-center gap-3 pt-1">
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/20 backdrop-blur-md border border-white/25 text-white text-xs sm:text-sm font-semibold shadow-xs">
                            <span class="material-symbols-outlined text-[18px]">calendar_month</span>
                            <span>Easy refund &amp; reschedule</span>
                        </div>
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/20 backdrop-blur-md border border-white/25 text-white text-xs sm:text-sm font-semibold shadow-xs">
                            <span class="material-symbols-outlined text-[18px]">verified</span>
                            <span>Promo khusus aplikasi</span>
                        </div>
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/20 backdrop-blur-md border border-white/25 text-white text-xs sm:text-sm font-semibold shadow-xs">
                            <span class="material-symbols-outlined text-[18px]">notifications_active</span>
                            <span>Notifikasi instan</span>
                        </div>
                    </div>
                </div>

                <!-- QR Code & App Download Buttons (Matching Image 1) -->
                <div class="flex flex-wrap items-center gap-6 sm:gap-8 pt-2">
                    <!-- QR Code Card with Logo inside -->
                    <div class="p-3 bg-white rounded-2xl shadow-xl flex items-center justify-center shrink-0">
                        <div class="relative w-28 h-28 sm:w-32 sm:h-32 bg-white flex items-center justify-center">
                            <!-- High precision SVG QR Code Pattern -->
                            <svg class="w-full h-full" viewBox="0 0 120 120" fill="none">
                                <!-- Corner Position Finder 1 (Top-Left) -->
                                <rect x="4" y="4" width="32" height="32" rx="4" fill="#002244" />
                                <rect x="10" y="10" width="20" height="20" rx="2" fill="white" />
                                <rect x="15" y="15" width="10" height="10" rx="1" fill="#002244" />

                                <!-- Corner Position Finder 2 (Top-Right) -->
                                <rect x="84" y="4" width="32" height="32" rx="4" fill="#002244" />
                                <rect x="90" y="10" width="20" height="20" rx="2" fill="white" />
                                <rect x="95" y="15" width="10" height="10" rx="1" fill="#002244" />

                                <!-- Corner Position Finder 3 (Bottom-Left) -->
                                <rect x="4" y="84" width="32" height="32" rx="4" fill="#002244" />
                                <rect x="10" y="90" width="20" height="20" rx="2" fill="white" />
                                <rect x="15" y="95" width="10" height="10" rx="1" fill="#002244" />

                                <!-- QR Data Pixel Pattern Grid -->
                                <rect x="44" y="8" width="6" height="6" fill="#002244"/>
                                <rect x="56" y="8" width="6" height="6" fill="#002244"/>
                                <rect x="68" y="8" width="6" height="6" fill="#002244"/>
                                <rect x="44" y="20" width="6" height="6" fill="#002244"/>
                                <rect x="68" y="20" width="6" height="6" fill="#002244"/>
                                <rect x="44" y="32" width="6" height="6" fill="#002244"/>
                                <rect x="56" y="32" width="6" height="6" fill="#002244"/>

                                <rect x="8" y="44" width="6" height="6" fill="#002244"/>
                                <rect x="20" y="44" width="6" height="6" fill="#002244"/>
                                <rect x="32" y="44" width="6" height="6" fill="#002244"/>
                                <rect x="80" y="44" width="6" height="6" fill="#002244"/>
                                <rect x="92" y="44" width="6" height="6" fill="#002244"/>
                                <rect x="104" y="44" width="6" height="6" fill="#002244"/>

                                <rect x="8" y="56" width="6" height="6" fill="#002244"/>
                                <rect x="32" y="56" width="6" height="6" fill="#002244"/>
                                <rect x="80" y="56" width="6" height="6" fill="#002244"/>
                                <rect x="104" y="56" width="6" height="6" fill="#002244"/>

                                <rect x="8" y="68" width="6" height="6" fill="#002244"/>
                                <rect x="20" y="68" width="6" height="6" fill="#002244"/>
                                <rect x="32" y="68" width="6" height="6" fill="#002244"/>
                                <rect x="80" y="68" width="6" height="6" fill="#002244"/>
                                <rect x="92" y="68" width="6" height="6" fill="#002244"/>

                                <rect x="44" y="80" width="6" height="6" fill="#002244"/>
                                <rect x="56" y="80" width="6" height="6" fill="#002244"/>
                                <rect x="68" y="80" width="6" height="6" fill="#002244"/>
                                <rect x="80" y="80" width="6" height="6" fill="#002244"/>
                                <rect x="92" y="80" width="6" height="6" fill="#002244"/>
                                <rect x="104" y="80" width="6" height="6" fill="#002244"/>

                                <rect x="44" y="92" width="6" height="6" fill="#002244"/>
                                <rect x="68" y="92" width="6" height="6" fill="#002244"/>
                                <rect x="92" y="92" width="6" height="6" fill="#002244"/>
                                <rect x="44" y="104" width="6" height="6" fill="#002244"/>
                                <rect x="56" y="104" width="6" height="6" fill="#002244"/>
                                <rect x="80" y="104" width="6" height="6" fill="#002244"/>
                                <rect x="104" y="104" width="6" height="6" fill="#002244"/>

                                <!-- Center Badge with Almubarak Bird / Star -->
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
                            <a 
                                href="https://apple.com/app-store/" 
                                target="_blank"
                                class="flex items-center gap-3 px-5 py-3 rounded-xl bg-black text-white hover:bg-neutral-900 border border-white/20 shadow-lg hover:scale-105 transition-all"
                            >
                                <svg class="w-7 h-7 fill-current shrink-0" viewBox="0 0 170 170">
                                    <path d="M150.37 130.25c-2.45 5.66-5.35 10.87-8.71 15.66-4.58 6.53-8.33 11.05-11.22 13.56-4.48 4.12-9.28 6.23-14.42 6.35-3.69 0-8.14-1.05-13.32-3.18-5.19-2.12-9.97-3.17-14.34-3.17-4.58 0-9.49 1.05-14.75 3.17-5.26 2.13-9.5 3.24-12.74 3.35-4.35.13-9.16-1.9-14.42-6.08-3.69-3.08-7.7-7.85-12.03-14.3-6.02-8.94-10.81-18.73-14.36-29.37-3.55-10.64-5.33-20.9-5.33-30.78 0-14.52 3.84-26.68 11.53-36.48 7.69-9.8 17.38-14.81 29.07-15.02 5.14 0 10.74 1.34 16.8 4.02 6.06 2.69 9.87 4.08 11.43 4.19 1.8.11 5.92-1.39 12.37-4.52 6.45-3.13 12.18-4.52 17.2-4.19 12.87.64 23.36 5.48 31.47 14.52-11.44 6.94-17.05 16.5-16.84 28.67.21 9.58 3.88 17.61 11 24.1 7.12 6.49 15.54 10.22 25.26 11.19-2.22 6.85-4.94 13.66-8.15 20.43zM119.22 33.15c0-7.26 2.65-14.15 7.95-20.67 5.3-6.52 11.75-10.68 19.35-12.48.21 1.06.32 2.12.32 3.18 0 7.26-2.8 14.24-8.4 20.94-5.6 6.7-12.18 10.8-19.74 12.3-.32-1.07-.48-2.16-.48-3.27z"/>
                                </svg>
                                <div class="text-left">
                                    <span class="block text-[10px] uppercase tracking-wider text-white/80">Download di</span>
                                    <span class="block text-sm sm:text-base font-bold font-sans tracking-tight">App Store</span>
                                </div>
                            </a>
                            <div class="text-left text-white hidden sm:block">
                                <span class="text-base font-bold">4.9<span class="text-xs text-white/75">/5</span></span>
                                <span class="block text-[11px] text-white/80">Rating aplikasi</span>
                            </div>
                        </div>

                        <!-- Google Play Badge -->
                        <div class="flex items-center gap-3">
                            <a 
                                href="https://play.google.com/store" 
                                target="_blank"
                                class="flex items-center gap-3 px-5 py-3 rounded-xl bg-black text-white hover:bg-neutral-900 border border-white/20 shadow-lg hover:scale-105 transition-all"
                            >
                                <svg class="w-7 h-7 shrink-0" viewBox="0 0 512 512">
                                    <path fill="#4285F4" d="M325.3 234.3L104.6 13l280.8 161.2-60.1 59.9z"/>
                                    <path fill="#34A853" d="M47 0C34 7.5 25.5 21.6 25.5 38.8v434.4c0 17.2 8.5 31.3 21.5 38.8l239.3-239.3L47 0z"/>
                                    <path fill="#EA4335" d="M325.3 277.7l60.1 59.9L104.6 499 325.3 277.7z"/>
                                    <path fill="#FBBC04" d="M486.5 233.1L385.4 175l-60.1 59.3 60.1 59.9 101.1-58.1c8.6-5 13.9-14.2 13.9-24.1 0-9.8-5.3-19-13.9-24z"/>
                                </svg>
                                <div class="text-left">
                                    <span class="block text-[10px] uppercase tracking-wider text-white/80">DAPATKAN DI</span>
                                    <span class="block text-sm sm:text-base font-bold font-sans tracking-tight">Google Play</span>
                                </div>
                            </a>
                            <div class="text-left text-white hidden sm:block">
                                <span class="text-base font-bold">4.9<span class="text-xs text-white/75">/5</span></span>
                                <span class="block text-[11px] text-white/80">Rating aplikasi</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fine Print Disclaimer matching Image 1 -->
                <p class="text-[11px] text-white/80 leading-relaxed max-w-4xl pt-2 border-t border-white/20">
                    *Penyelenggara Perjalanan Ibadah Umrah (PPIU) No. U.412 dan Haji Khusus Resmi Kemenag RI. Berdasarkan kepatuhan standar akreditasi A SISKOPATUH dan kepuasan ribuan jamaah di Indonesia.
                </p>
            </div>
        </section>

        <!-- ==================================================================== -->
        <!-- SECTION 2: DEEP NAVY MULTI-COLUMN FOOTER (MATCHING IMAGE 2)        -->
        <!-- ==================================================================== -->
        <div class="w-full bg-[#002244] text-white/90 pt-16 pb-10 px-4 sm:px-6 lg:px-8 border-t border-blue-950">
            <div class="max-w-7xl mx-auto">
                <!-- 4 Columns Grid matching Traveloka layout in Image 2 -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 pb-14 border-b border-white/15">
                    
                    <!-- COLUMN 1: Logo, Accreditations, Partner Button & Payment Partners Grid -->
                    <div class="lg:col-span-4 flex flex-col gap-6">
                        <!-- Brand Logo matching Image 2 -->
                        <div class="flex items-center gap-3">
                            <img 
                                src="/images/logo.png" 
                                alt="Almubarak Wisata" 
                                class="h-10 w-auto object-contain bg-white rounded-lg p-1.5 shadow-sm"
                            />
                            <div class="flex flex-col">
                                <span class="text-2xl font-extrabold text-white tracking-tight leading-tight">
                                    almubarak<span class="text-[#00c2cb]">.com</span>
                                </span>
                                <span class="text-[10px] text-white/70 uppercase tracking-widest font-semibold">
                                    Haji &amp; Umrah Premium
                                </span>
                            </div>
                        </div>

                        <!-- Accreditation Badges (IATA, ASITA, Kemenag PPIU, ISO 9001) matching Image 2 -->
                        <div class="flex items-center gap-3 text-white/80">
                            <!-- IATA Badge -->
                            <div class="px-2.5 py-1 rounded-md border border-white/40 text-[11px] font-black tracking-wider uppercase">
                                IATA
                            </div>
                            <!-- ASITA Badge -->
                            <div class="px-2.5 py-1 rounded-md border border-white/40 text-[11px] font-black tracking-wider uppercase">
                                ASITA
                            </div>
                            <!-- Kemenag PPIU Badge -->
                            <div class="px-2.5 py-1 rounded-md border border-white/40 text-[11px] font-bold tracking-tight">
                                PPIU KEMENAG
                            </div>
                            <!-- BSI ISO Badge -->
                            <div class="px-2 py-1 rounded-md border border-white/40 text-[10px] font-bold">
                                ISO 9001
                            </div>
                        </div>

                        <!-- "Jadi Partner Almubarak" Pill Button matching Image 2 -->
                        <div>
                            <a 
                                href="https://wa.me/6281260003484?text=Assalamu%27alaikum%20Almubarak%20Wisata,%20saya%20tertarik%20menjadi%20partner%20dan%20agen%20resmi"
                                target="_blank"
                                class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-[#0185e4] hover:bg-[#0275d8] text-white font-bold text-sm shadow-md transition-all hover:scale-105"
                            >
                                <span>Jadi Partner Almubarak</span>
                                <span class="text-base">🤝</span>
                            </a>
                        </div>

                        <!-- PARTNER PEMBAYARAN: 4x4 Grid of White Tiles matching Image 2 -->
                        <div class="pt-2">
                            <h4 class="text-sm font-bold text-white mb-3 tracking-wide">
                                Partner Pembayaran
                            </h4>
                            <div class="grid grid-cols-4 gap-2 max-w-sm">
                                <!-- Tile 1: Tabungan Umrah / TPay -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="Tabungan Umrah">
                                    <span class="text-[11px] font-black text-[#0064d2] tracking-tighter">Tabungan</span>
                                </div>
                                <!-- Tile 2: VISA -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="VISA">
                                    <span class="text-[14px] font-black italic text-[#1a1f71] tracking-wider">VISA</span>
                                </div>
                                <!-- Tile 3: Mastercard -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="Mastercard">
                                    <div class="flex -space-x-1.5">
                                        <div class="w-4 h-4 rounded-full bg-[#eb001b]"></div>
                                        <div class="w-4 h-4 rounded-full bg-[#f79e1b] opacity-85"></div>
                                    </div>
                                </div>
                                <!-- Tile 4: JCB -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="JCB">
                                    <div class="flex space-x-0.5">
                                        <div class="w-2 h-3.5 bg-[#0079c1] rounded-xs"></div>
                                        <div class="w-2 h-3.5 bg-[#e60012] rounded-xs"></div>
                                        <div class="w-2 h-3.5 bg-[#00873c] rounded-xs"></div>
                                    </div>
                                </div>

                                <!-- Tile 5: AMEX -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1 shadow-xs" title="American Express">
                                    <span class="text-[10px] font-black text-[#002663] bg-[#007ec5] text-white px-1.5 py-0.5 rounded-xs">AMEX</span>
                                </div>
                                <!-- Tile 6: BCA -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="BCA">
                                    <span class="text-[12px] font-black text-[#005baa] tracking-tight">BCA</span>
                                </div>
                                <!-- Tile 7: Mandiri -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="Bank Mandiri">
                                    <span class="text-[11px] font-extrabold text-[#00387a]">mandiri</span>
                                </div>
                                <!-- Tile 8: Bank BRI -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="Bank BRI">
                                    <span class="text-[11px] font-black text-[#00529c]">BANK BRI</span>
                                </div>

                                <!-- Tile 9: BNI -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="BNI">
                                    <span class="text-[12px] font-black text-[#f15a24]">BNI</span>
                                </div>
                                <!-- Tile 10: BSI (Bank Syariah Indonesia) -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="Bank Syariah Indonesia">
                                    <span class="text-[11px] font-black text-[#00a39d]">BSI</span>
                                </div>
                                <!-- Tile 11: PRIMA -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="Jaringan PRIMA">
                                    <span class="text-[10px] font-bold text-[#00529c] bg-[#eef6fc] px-1 py-0.5 rounded-xs">PRIMA</span>
                                </div>
                                <!-- Tile 12: ALTO -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="ALTO Network">
                                    <span class="text-[10px] font-bold text-[#cc0000]">ALTO</span>
                                </div>

                                <!-- Tile 13: GoPay -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="GoPay">
                                    <span class="text-[11px] font-bold text-[#0081a0]">gopay</span>
                                </div>
                                <!-- Tile 14: Alfamart -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="Alfamart">
                                    <span class="text-[10px] font-black text-[#d01e25]">Alfamart</span>
                                </div>
                                <!-- Tile 15: OVO -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="OVO">
                                    <span class="text-[12px] font-black text-[#4c3494]">OVO</span>
                                </div>
                                <!-- Tile 16: Indomaret -->
                                <div class="h-10 bg-white rounded-lg flex items-center justify-center p-1.5 shadow-xs" title="Indomaret">
                                    <span class="text-[9px] font-bold text-[#005baa]">Indomaret</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMN 2: Tentang Traveloka / Tentang Almubarak & Social Media -->
                    <div class="lg:col-span-3 flex flex-col gap-6">
                        <div>
                            <h4 class="text-base font-bold text-white mb-4 tracking-tight">
                                Tentang Almubarak
                            </h4>
                            <ul class="flex flex-col gap-2.5 text-sm text-white/80">
                                <li><Link href="/about" class="hover:text-white transition-colors">Cara Pesan &amp; Pendaftaran</Link></li>
                                <li><Link href="/contact" class="hover:text-white transition-colors">Hubungi Layanan</Link></li>
                                <li><Link href="/contact" class="hover:text-white transition-colors">Pusat Bantuan Jamaah</Link></li>
                                <li><Link href="/about" class="hover:text-white transition-colors">Karier &amp; Muthawif</Link></li>
                                <li><Link href="/business" class="hover:text-white transition-colors">Cicilan &amp; Tabungan Umrah</Link></li>
                                <li><Link href="/about" class="hover:text-white transition-colors">Tentang Kami</Link></li>
                                <li><Link href="/awards" class="hover:text-white transition-colors">Sertifikasi &amp; Akreditasi Kemenag</Link></li>
                                <li><Link href="/news" class="hover:text-white transition-colors">Rilisan Fitur &amp; Jadwal Baru</Link></li>
                            </ul>
                        </div>

                        <!-- Follow kami di (matching Image 2) -->
                        <div>
                            <h4 class="text-sm font-bold text-white mb-3 tracking-tight">
                                Follow kami di
                            </h4>
                            <div class="flex flex-col gap-2.5 text-sm text-white/80">
                                <a href="https://facebook.com" target="_blank" class="flex items-center gap-3 hover:text-white transition-colors group">
                                    <div class="w-6 h-6 rounded-full bg-[#1877f2] flex items-center justify-center text-white shrink-0 group-hover:scale-110 transition-transform">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                    </div>
                                    <span>Facebook</span>
                                </a>
                                <a href="https://instagram.com/almubarakwisata" target="_blank" class="flex items-center gap-3 hover:text-white transition-colors group">
                                    <div class="w-6 h-6 rounded-full bg-gradient-to-tr from-[#f9ce34] via-[#ee2a7b] to-[#6228d7] flex items-center justify-center text-white shrink-0 group-hover:scale-110 transition-transform">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                    </div>
                                    <span>Instagram</span>
                                </a>
                                <a href="https://tiktok.com/@almubarakwisata" target="_blank" class="flex items-center gap-3 hover:text-white transition-colors group">
                                    <div class="w-6 h-6 rounded-full bg-black flex items-center justify-center text-white shrink-0 group-hover:scale-110 transition-transform">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298-.002.595.042.88.13V9.4a6.33 6.33 0 0 0-.88-.06A6.34 6.34 0 0 0 3 15.68a6.34 6.34 0 0 0 10.82 4.48c.03-.03.06-.06.08-.09V10.12a8.28 8.28 0 0 0 5.69 2.25V8.92a4.84 4.84 0 0 1-3.45-2.23z"/></svg>
                                    </div>
                                    <span>TikTok</span>
                                </a>
                                <a href="https://youtube.com" target="_blank" class="flex items-center gap-3 hover:text-white transition-colors group">
                                    <div class="w-6 h-6 rounded-full bg-[#ff0000] flex items-center justify-center text-white shrink-0 group-hover:scale-110 transition-transform">
                                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                                    </div>
                                    <span>YouTube</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- COLUMN 3: Produk & Layanan matching Image 2 -->
                    <div class="lg:col-span-3 flex flex-col gap-4">
                        <h4 class="text-base font-bold text-white mb-2 tracking-tight">
                            Produk &amp; Layanan
                        </h4>
                        <ul class="flex flex-col gap-2 text-sm text-white/80">
                            <li><Link href="/business" class="hover:text-white transition-colors">Paket Umrah Reguler 9 Hari</Link></li>
                            <li><Link href="/business" class="hover:text-white transition-colors">Paket Umrah Ramadhan &amp; I'tikaf</Link></li>
                            <li><Link href="/business" class="hover:text-white transition-colors">Haji Khusus &amp; Haji Furoda VIP</Link></li>
                            <li><Link href="/business" class="hover:text-white transition-colors">Wisata Halal Turki &amp; Aqsa</Link></li>
                            <li><Link href="/business" class="hover:text-white transition-colors">Tiket Pesawat Saudia / Garuda</Link></li>
                            <li><Link href="/business" class="hover:text-white transition-colors">Hotel Pelataran Ring 1 Makkah</Link></li>
                            <li><Link href="/business" class="hover:text-white transition-colors">Tiket Kereta Cepat Haramain</Link></li>
                            <li><Link href="/business" class="hover:text-white transition-colors">Tasreh Raudhah &amp; Visa Umrah</Link></li>
                            <li><Link href="/business" class="hover:text-white transition-colors">Antar Jemput &amp; Handling Bandara</Link></li>
                            <li><Link href="/business" class="hover:text-white transition-colors">Rental Bus VIP Makkah-Madinah</Link></li>
                            <li><Link href="/business" class="hover:text-white transition-colors">Asuransi Perjalanan Ibadah</Link></li>
                            <li><Link href="/business" class="hover:text-white transition-colors">Layanan Custom Group &amp; Korporat</Link></li>
                        </ul>
                    </div>

                    <!-- COLUMN 4: Lainnya matching Image 2 -->
                    <div class="lg:col-span-2 flex flex-col gap-4">
                        <h4 class="text-base font-bold text-white mb-2 tracking-tight">
                            Lainnya
                        </h4>
                        <ul class="flex flex-col gap-2 text-sm text-white/80">
                            <li><Link href="/business" class="hover:text-white transition-colors">Almubarak for Corporates</Link></li>
                            <li><Link href="/about" class="hover:text-white transition-colors">Program Kemitraan &amp; Agen</Link></li>
                            <li><Link href="/contact" class="hover:text-white transition-colors">Referensikan Jamaah</Link></li>
                            <li><Link href="/business" class="hover:text-white transition-colors">Promo Spesial Keberangkatan</Link></li>
                            <li><Link href="/news" class="hover:text-white transition-colors">Blog &amp; Panduan Manasik</Link></li>
                            <li><Link href="/privacy" class="hover:text-white transition-colors">Pemberitahuan Privasi</Link></li>
                            <li><Link href="/terms" class="hover:text-white transition-colors">Syarat &amp; Ketentuan</Link></li>
                            <li><Link href="/about" class="hover:text-white transition-colors">Daftarkan Akomodasi Hotel</Link></li>
                            <li><Link href="/about" class="hover:text-white transition-colors">Testimoni Jamaah</Link></li>
                            <li><Link href="/news" class="hover:text-white transition-colors">Almubarak Press Room</Link></li>
                            <li><Link href="/contact" class="hover:text-white transition-colors">Pusat Bantuan &amp; FAQ</Link></li>
                            <li><Link href="/privacy" class="hover:text-white transition-colors">Kebijakan Perlindungan Data</Link></li>
                        </ul>
                    </div>
                </div>

                <!-- Bottom Copyright Strip matching Image 2 -->
                <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-white/75">
                    <div>
                        © 2026 PT ALMUBARAK WISATA INTERNATIONAL. Seluruh Hak Cipta Dilindungi.
                    </div>
                    <div class="flex flex-wrap items-center gap-6 font-medium text-white/85">
                        <Link href="/privacy" class="hover:text-white transition-colors">Pemberitahuan Privasi</Link>
                        <Link href="/terms" class="hover:text-white transition-colors">Syarat &amp; Ketentuan</Link>
                        <Link href="/business" class="hover:text-white transition-colors">Sitemap</Link>
                        <Link href="/contact" class="hover:text-white transition-colors">Hubungi Kami</Link>
                        <button 
                            @click="scrollToTop"
                            aria-label="Kembali ke atas" 
                            class="w-8 h-8 rounded-full bg-white/10 hover:bg-white text-white hover:text-[#002244] flex items-center justify-center transition-all cursor-pointer shadow-xs ml-2" 
                            type="button"
                        >
                            <span class="material-symbols-outlined text-[18px]">arrow_upward</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>
