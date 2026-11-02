<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

const isPartnerModalOpen = ref(false);

const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
};
</script>

<template>
    <footer class="w-full">
        <!-- ==================================================================== -->
        <!-- SECTION 1: CTA BANNER (PUTIH & PESAWAT ALAMI)                        -->
        <!-- ==================================================================== -->
        <section class="relative w-full overflow-hidden bg-white py-14 sm:py-16 px-4 sm:px-6 lg:px-8 border-b border-gray-100 shadow-xs">
            <!-- Background Pesawat (Warna Putih Alami) -->
            <div class="absolute inset-0 z-0">
                <div 
                    class="w-full h-full bg-cover bg-right sm:bg-center opacity-90"
                    style="background-image: url('/images/baground2.jpg');"
                ></div>
                <!-- Gradient putih halus dari kiri agar teks terbaca sangat jelas dan bersih -->
                <div class="absolute inset-0 bg-gradient-to-r from-white via-white/95 to-white/40 sm:to-white/25"></div>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto flex flex-col lg:flex-row items-center justify-between gap-8">
                <!-- Left Text Content -->
                <div class="max-w-2xl text-center lg:text-left">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-50 border border-emerald-200 text-[#005138] text-xs font-bold uppercase tracking-wider mb-4 shadow-xs">
                        <span class="material-symbols-outlined text-[18px] text-[#005138]">support_agent</span>
                        <span>{{ t('cta_badge') }}</span>
                    </span>
                    <h2 class="font-headline-xl text-3xl sm:text-4xl lg:text-[42px] font-extrabold tracking-tight text-[#005138] leading-tight">
                        {{ t('cta_title') }}
                    </h2>
                    <p class="font-body-lg text-gray-700 text-sm sm:text-base lg:text-[17px] mt-3 leading-relaxed">
                        {{ t('cta_desc') }}
                    </p>
                </div>

                <!-- Right WhatsApp Button -->
                <div class="flex flex-col sm:flex-row items-center gap-4 w-full lg:w-auto shrink-0 justify-center">
                    <a 
                        href="https://wa.me/6281260003484?text=Assalamu%27alaikum%20Almubarak%20Wisata,%20saya%20ingin%20informasi%20jadwal%20dan%20pilihan%20paket%20ibadah" 
                        target="_blank"
                        rel="noopener noreferrer"
                        class="w-full sm:w-auto inline-flex items-center justify-center gap-3 px-8 py-4 bg-[#25D366] hover:bg-[#20bd5a] text-white rounded-2xl font-extrabold text-base transition-all shadow-xl hover:shadow-2xl hover:scale-105 cursor-pointer group"
                    >
                        <svg class="w-6 h-6 fill-current group-hover:scale-110 transition-transform" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                        </svg>
                        <span>{{ t('cta_btn_wa') }}</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- ==================================================================== -->
        <!-- WAVE (GELOMBANG) ORGANIK PEMBATAS DI ATAS FOOTER                     -->
        <!-- ==================================================================== -->
        <div class="w-full overflow-hidden leading-none -mb-1 bg-white pointer-events-none">
            <svg class="relative block w-full h-10 sm:h-14 lg:h-16 text-[#002b1c]" viewBox="0 0 1440 100" fill="none" preserveAspectRatio="none">
                <!-- Layer 1 Wave (Transparan) -->
                <path d="M0,30 C240,80 480,10 720,50 C960,90 1200,20 1440,40 L1440,100 L0,100 Z" fill="currentColor" opacity="0.35"></path>
                <!-- Layer 2 Wave (Solid) -->
                <path d="M0,50 C280,10 560,85 840,45 C1120,5 1300,70 1440,55 L1440,100 L0,100 Z" fill="currentColor"></path>
            </svg>
        </div>

        <!-- ==================================================================== -->
        <!-- SECTION 2: FOOTER BODY DENGAN GELEMBUNG MENGAPUNG (BUBBLES & WAVES)  -->
        <!-- ==================================================================== -->
        <div class="relative w-full overflow-hidden bg-[#002b1c] text-white pt-10 pb-12">
            
            <!-- GELEMBUNG (BUBBLES) DEKORATIF MENGAPUNG DI LATAR BELAKANG FOOTER -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                <!-- Gelembung 1: Kiri Atas -->
                <div class="absolute -top-6 left-10 w-36 h-36 rounded-full bg-gradient-to-tr from-emerald-500/20 to-teal-300/25 border border-emerald-400/35 blur-xs animate-bubble-1"></div>
                <!-- Gelembung 2: Kiri Tengah -->
                <div class="absolute top-1/3 left-1/4 w-24 h-24 rounded-full bg-gradient-to-tr from-emerald-400/15 to-emerald-200/20 border border-emerald-300/30 blur-xs animate-bubble-2"></div>
                <!-- Gelembung 3: Kiri Bawah -->
                <div class="absolute bottom-8 left-1/3 w-28 h-28 rounded-full bg-gradient-to-tr from-emerald-600/20 to-emerald-400/20 border border-emerald-400/25 blur-xs animate-bubble-3"></div>
                <!-- Gelembung 4: Kanan Atas -->
                <div class="absolute top-12 right-12 w-44 h-44 rounded-full bg-gradient-to-br from-teal-400/20 to-emerald-300/20 border border-emerald-300/35 blur-xs animate-bubble-1"></div>
                <!-- Gelembung 5: Kanan Tengah -->
                <div class="absolute top-1/2 right-1/4 w-20 h-20 rounded-full bg-gradient-to-tr from-emerald-400/20 to-amber-300/15 border border-emerald-300/30 blur-xs animate-bubble-2"></div>
                <!-- Gelembung 6: Kanan Bawah -->
                <div class="absolute -bottom-6 right-8 w-32 h-32 rounded-full bg-gradient-to-tl from-emerald-500/25 to-teal-400/15 border border-emerald-400/30 blur-xs animate-bubble-3"></div>
                <!-- Gelembung Partikel Kecil -->
                <div class="absolute top-20 left-1/2 w-8 h-8 rounded-full bg-white/15 border border-white/25 animate-bubble-1"></div>
                <div class="absolute bottom-16 right-1/2 w-10 h-10 rounded-full bg-emerald-300/25 border border-emerald-200/35 animate-bubble-2"></div>
            </div>

            <!-- Ambient Dot Matrix Decorative Accent -->
            <div class="absolute right-4 top-16 hidden lg:grid grid-cols-6 gap-2.5 opacity-10 pointer-events-none z-0">
                <span v-for="i in 36" :key="i" class="w-1.5 h-1.5 rounded-full bg-emerald-300"></span>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- 5 Kolom Grid Proporsional -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-6 pb-14 border-b border-white/10 items-start">
                    
                    <!-- ============================================================ -->
                    <!-- KOLOM 1 (3 cols): Brand, Lisensi, Partner & Bank             -->
                    <!-- ============================================================ -->
                    <div class="sm:col-span-2 lg:col-span-3 flex flex-col gap-5">
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
                                    {{ t('footer_brand_desc').includes('PPIU') ? 'Haji & Umrah Premium' : 'Premium Hajj & Umrah' }}
                                </span>
                            </div>
                        </div>

                        <p class="text-xs text-white/80 leading-relaxed max-w-sm">
                            {{ t('footer_brand_desc') }}
                        </p>

                        <!-- 3 Certification Badges -->
                        <div class="flex items-center gap-2.5 py-1">
                            <div class="h-9 px-2.5 rounded-lg bg-white/10 border border-white/15 flex items-center justify-center text-white" title="Penyelenggara Perjalanan Ibadah Umrah (PPIU) Kemenag RI">
                                <span class="font-bold text-[11px] tracking-tight">PPIU Kemenag</span>
                            </div>
                            <div class="h-9 px-2.5 rounded-lg bg-white/10 border border-white/15 flex items-center justify-center text-white" title="Association of The Indonesian Tours and Travel Agencies">
                                <span class="font-bold text-[11px] tracking-tight">ASITA</span>
                            </div>
                            <div class="h-9 px-2.5 rounded-lg bg-white/10 border border-white/15 flex items-center justify-center text-white" title="Akreditasi A Resmi Kemenag RI">
                                <div class="text-center leading-none">
                                    <span class="block text-[8px] uppercase tracking-wider text-emerald-300 font-bold">Akreditasi</span>
                                    <span class="text-[11px] font-black">A Resmi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Button Jadi Partner Almubarak -->
                        <div>
                            <button 
                                @click="isPartnerModalOpen = true"
                                type="button"
                                class="inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-full bg-[#00a86b] hover:bg-[#00c57d] text-white font-bold text-xs shadow-lg shadow-emerald-950/40 hover:scale-105 transition-all cursor-pointer"
                            >
                                <span>{{ t('footer_partner_btn') }}</span>
                                <span class="text-sm">🤝</span>
                            </button>
                        </div>

                        <!-- Partner Pembayaran (Grid 4x4) -->
                        <div class="flex flex-col gap-2.5 pt-1">
                            <span class="text-xs font-bold text-white tracking-tight uppercase">
                                {{ t('footer_payment_title') }}
                            </span>

                            <div class="grid grid-cols-4 gap-1.5 max-w-xs">
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs" title="Visa">
                                    <span class="text-[#00579f] font-black text-xs italic tracking-tighter">VISA</span>
                                </div>
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center gap-1 shadow-xs" title="Mastercard">
                                    <div class="w-3 h-3 rounded-full bg-[#eb001b] -mr-1"></div>
                                    <div class="w-3 h-3 rounded-full bg-[#f79e1b] opacity-90"></div>
                                </div>
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs" title="JCB">
                                    <span class="text-[#0e4495] font-extrabold text-[11px]">JCB</span>
                                </div>
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs" title="Bank Central Asia (BCA)">
                                    <span class="text-[#005baa] font-extrabold text-[11px]">BCA</span>
                                </div>

                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs" title="Bank Mandiri">
                                    <span class="text-[#00387a] font-bold text-[10px]">mandiri</span>
                                </div>
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs" title="Bank Rakyat Indonesia (BRI)">
                                    <span class="text-[#00529c] font-black text-[11px]">BRI</span>
                                </div>
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs" title="Bank Negara Indonesia (BNI)">
                                    <span class="text-[#f15a24] font-black text-[11px]">BNI</span>
                                </div>
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs" title="Bank Syariah Indonesia (BSI)">
                                    <span class="text-[#00a39d] font-extrabold text-[11px]">BSI</span>
                                </div>

                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs" title="Bank Muamalat">
                                    <span class="text-[#5a246b] font-bold text-[9px]">Muamalat</span>
                                </div>
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs" title="QRIS">
                                    <span class="text-[#ed1c24] font-black text-[10px] tracking-tight">QRIS</span>
                                </div>
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs" title="GoPay">
                                    <span class="text-[#00aed6] font-bold text-[11px]">gopay</span>
                                </div>
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs" title="OVO">
                                    <span class="text-[#4c3494] font-black text-[11px]">OVO</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================ -->
                    <!-- KOLOM 2 (2 cols): Navigasi Cepat                             -->
                    <!-- ============================================================ -->
                    <div class="lg:col-span-2 flex flex-col gap-3">
                        <h4 class="text-sm font-bold text-white uppercase tracking-wider">
                            {{ t('footer_nav_title') }}
                        </h4>
                        <ul class="flex flex-col gap-2 text-xs text-white/85">
                            <li><Link href="/" class="hover:text-emerald-300 transition-colors">{{ t('nav_home') }}</Link></li>
                            <li><Link href="/about" class="hover:text-emerald-300 transition-colors">{{ t('nav_about') }}</Link></li>
                            <li><Link href="/visi-misi" class="hover:text-emerald-300 transition-colors">{{ t('nav_vision') }}</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">{{ t('nav_business') }}</Link></li>
                            <li><Link href="/news" class="hover:text-emerald-300 transition-colors">{{ t('nav_news') }}</Link></li>
                            <li><Link href="/awards" class="hover:text-emerald-300 transition-colors">{{ t('nav_awards') }}</Link></li>
                            <li><Link href="/team" class="hover:text-emerald-300 transition-colors">{{ t('nav_team') }}</Link></li>
                            <li><Link href="/contact" class="hover:text-emerald-300 transition-colors">{{ t('nav_contact') }}</Link></li>
                        </ul>
                    </div>

                    <!-- ============================================================ -->
                    <!-- KOLOM 3 (2 cols): Produk                                     -->
                    <!-- ============================================================ -->
                    <div class="lg:col-span-2 flex flex-col gap-3">
                        <h4 class="text-sm font-bold text-white uppercase tracking-wider">
                            {{ t('footer_services_title') }}
                        </h4>
                        <ul class="flex flex-col gap-2 text-xs text-white/85">
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">{{ locale === 'ID' ? 'Umrah Reguler 9 Hari' : 'Regular Umrah 9 Days' }}</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">{{ locale === 'ID' ? "Umrah Ramadhan & I'tikaf" : "Ramadan & I'tikaf Umrah" }}</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">{{ locale === 'ID' ? 'Haji Khusus & Furoda VIP' : 'Special Hajj & VIP Furoda' }}</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">{{ locale === 'ID' ? 'Wisata Halal Turki & Aqsa' : 'Turkey & Aqsa Halal Tour' }}</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">{{ locale === 'ID' ? 'Tiket Saudia & Garuda' : 'Saudia & Garuda Flights' }}</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">{{ locale === 'ID' ? 'Hotel Pelataran Ring 1' : 'Ring 1 Courtyard Hotels' }}</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">{{ locale === 'ID' ? 'Kereta Cepat Haramain' : 'Haramain High-Speed Train' }}</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors">{{ locale === 'ID' ? 'Tabungan Umrah Syariah' : 'Sharia Umrah Savings' }}</Link></li>
                        </ul>
                    </div>

                    <!-- ============================================================ -->
                    <!-- KOLOM 4 (3 cols): Kantor & Info Kontak                       -->
                    <!-- ============================================================ -->
                    <div class="sm:col-span-2 lg:col-span-3 flex flex-col gap-3">
                        <h4 class="text-sm font-bold text-white uppercase tracking-wider">
                            {{ t('footer_contact_title') }}
                        </h4>
                        <div class="flex flex-col gap-3 text-xs text-white/85">
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-emerald-400 text-[18px] shrink-0 mt-0.5">location_on</span>
                                <span class="leading-relaxed">Jl. Ciremei Ujung No.210, Bantarjati, Kota Bogor 16153</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-emerald-400 text-[18px] shrink-0 mt-0.5">apartment</span>
                                <span class="leading-relaxed">Gedung Menara Almubarak Lt. 5 Kuningan, Jakarta Selatan</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-emerald-400 text-[18px] shrink-0">schedule</span>
                                <span>{{ locale === 'ID' ? 'Senin - Sabtu: 08.30 - 17.30 WIB' : 'Mon - Sat: 08:30 AM - 05:30 PM (GMT+7)' }}</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-emerald-400 text-[18px] shrink-0">call</span>
                                <a href="https://wa.me/6281260003484" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-300 hover:underline">
                                    +62 812-6000-3484
                                </a>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="material-symbols-outlined text-emerald-400 text-[18px] shrink-0">mail</span>
                                <a href="mailto:almubarak.wisata@gmail.com" class="hover:text-emerald-300 hover:underline truncate">
                                    almubarak.wisata@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================ -->
                    <!-- KOLOM 5 (2 cols): Follow kami di (SESUAI GAMBAR 5: IG, TIKTOK, WA) -->
                    <!-- ============================================================ -->
                    <div class="lg:col-span-2 flex flex-col gap-3">
                        <h4 class="text-sm font-bold text-white uppercase tracking-wider">
                            {{ t('footer_follow_title') }}
                        </h4>
                        
                        <!-- List Vertikal Persis Format Gambar 5 (Hanya IG, TikTok, WhatsApp) -->
                        <div class="flex flex-col gap-3 pt-1">
                            <!-- Instagram -->
                            <a 
                                href="https://instagram.com/almubarakwisata" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-3 text-sm text-white/90 hover:text-white transition-colors group"
                            >
                                <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-amber-500 via-rose-500 to-purple-600 flex items-center justify-center text-white shrink-0 group-hover:scale-110 transition-transform shadow-xs">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                </div>
                                <span class="font-medium">Instagram</span>
                            </a>

                            <!-- TikTok -->
                            <a 
                                href="https://tiktok.com/@almubarakwisata" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-3 text-sm text-white/90 hover:text-white transition-colors group"
                            >
                                <div class="w-8 h-8 rounded-full bg-black flex items-center justify-center text-white shrink-0 group-hover:scale-110 transition-transform shadow-xs">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298-.002.595.042.88.13V9.4a6.33 6.33 0 0 0-.88-.06A6.34 6.34 0 0 0 3 15.68a6.34 6.34 0 0 0 10.82 4.48c.03-.03.06-.06.08-.09V10.12a8.28 8.28 0 0 0 5.69 2.25V8.92a4.84 4.84 0 0 1-3.45-2.23z"/>
                                    </svg>
                                </div>
                                <span class="font-medium">TikTok</span>
                            </a>

                            <!-- WhatsApp -->
                            <a 
                                href="https://wa.me/6281260003484" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-3 text-sm text-white/90 hover:text-white transition-colors group"
                            >
                                <div class="w-8 h-8 rounded-full bg-[#25D366] flex items-center justify-center text-white shrink-0 group-hover:scale-110 transition-transform shadow-xs">
                                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                    </svg>
                                </div>
                                <span class="font-medium">WhatsApp</span>
                            </a>
                        </div>
                    </div>

                </div>

                <!-- Bottom Copyright Strip (Privasi jadi, Fungsional) -->
                <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-white/75">
                    <div>
                        © 2026 PT ALMUBARAK WISATA INTERNATIONAL. {{ t('footer_rights') }}
                    </div>
                    <div class="flex flex-wrap items-center gap-6 font-medium text-white/85">
                        <Link href="/privacy" class="hover:text-emerald-300 transition-colors">{{ t('footer_privacy') }}</Link>
                        <Link href="/terms" class="hover:text-emerald-300 transition-colors">{{ t('footer_terms') }}</Link>
                        <Link href="/business" class="hover:text-emerald-300 transition-colors">{{ t('footer_sitemap') }}</Link>
                        <Link href="/contact" class="hover:text-emerald-300 transition-colors">{{ t('footer_contact') }}</Link>
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
        <!-- MODAL: JADI PARTNER ALMUBARAK                                        -->
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
                            {{ locale === 'ID' ? 'Kemitraan & Partner Resmi' : 'Official Partnership & Affiliates' }}
                        </h3>
                        <p class="text-xs text-gray-500">PT Almubarak Wisata Internasional</p>
                    </div>
                </div>

                <p class="text-sm text-gray-600 mb-6 leading-relaxed">
                    {{ locale === 'ID' 
                        ? 'Bergabung bersama ekosistem haji, umrah, dan wisata halal berizin resmi Kemenag RI. Kami membuka kolaborasi strategis untuk:' 
                        : 'Join our Ministry of Religious Affairs licensed Hajj, Umrah, and Halal travel ecosystem. We invite strategic collaborations for:' }}
                </p>

                <div class="space-y-3 mb-6">
                    <div class="p-3.5 rounded-2xl bg-emerald-50/70 border border-emerald-100 flex items-start gap-3">
                        <span class="material-symbols-outlined text-emerald-700 text-[20px] mt-0.5 shrink-0">store</span>
                        <div class="text-xs">
                            <span class="font-bold text-[#005138] block mb-0.5">
                                {{ locale === 'ID' ? 'Mitra Keagenan & Kantor Cabang' : 'Agency Partners & Regional Branches' }}
                            </span>
                            <span class="text-gray-600">
                                {{ locale === 'ID' 
                                    ? 'Buka kantor pendaftaran umrah di kota Anda dengan komisi menarik & bimbingan legalitas.' 
                                    : 'Establish an Umrah registration desk in your city with attractive commissions and regulatory support.' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-emerald-50/70 border border-emerald-100 flex items-start gap-3">
                        <span class="material-symbols-outlined text-emerald-700 text-[20px] mt-0.5 shrink-0">hotel</span>
                        <div class="text-xs">
                            <span class="font-bold text-[#005138] block mb-0.5">
                                {{ locale === 'ID' ? 'Penyedia Hotel & Transportasi Saudi' : 'Saudi Hotels & Transportation Providers' }}
                            </span>
                            <span class="text-gray-600">
                                {{ locale === 'ID' 
                                    ? 'Integrasi hotel pelataran ring 1 Makkah-Madinah dan armada bus eksekutif VIP.' 
                                    : 'Integration of Ring 1 courtyard hotels in Makkah & Madinah and executive VIP bus fleets.' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-emerald-50/70 border border-emerald-100 flex items-start gap-3">
                        <span class="material-symbols-outlined text-emerald-700 text-[20px] mt-0.5 shrink-0">corporate_fare</span>
                        <div class="text-xs">
                            <span class="font-bold text-[#005138] block mb-0.5">
                                {{ locale === 'ID' ? 'Program Tabungan Umrah Korporasi' : 'Corporate Umrah Savings Programs' }}
                            </span>
                            <span class="text-gray-600">
                                {{ locale === 'ID' 
                                    ? 'Kerjasama reward ibadah karyawan & instansi pemerintah/swasta.' 
                                    : 'Employee spiritual reward partnerships for governmental and corporate institutions.' }}
                            </span>
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
                        <span>{{ locale === 'ID' ? 'Chat Tim Kemitraan (WA)' : 'Chat Partnership Team (WA)' }}</span>
                    </a>
                    <Link 
                        href="/contact"
                        @click="isPartnerModalOpen = false"
                        class="w-full sm:w-auto py-3 px-5 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-700 font-bold text-sm text-center transition-colors"
                    >
                        {{ locale === 'ID' ? 'Form Kontak' : 'Contact Form' }}
                    </Link>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
@keyframes bubbleFloat1 {
    0%, 100% { transform: translateY(0) scale(1); }
    50% { transform: translateY(-18px) scale(1.06); }
}
@keyframes bubbleFloat2 {
    0%, 100% { transform: translateY(0) scale(1); }
    50% { transform: translateY(16px) scale(0.95); }
}
@keyframes bubbleFloat3 {
    0%, 100% { transform: translateY(0) scale(1); }
    50% { transform: translateY(-12px) scale(1.04); }
}
.animate-bubble-1 {
    animation: bubbleFloat1 7s ease-in-out infinite;
}
.animate-bubble-2 {
    animation: bubbleFloat2 9s ease-in-out infinite 1.5s;
}
.animate-bubble-3 {
    animation: bubbleFloat3 8s ease-in-out infinite 3s;
}
</style>
