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
        <!-- SECTION 2: FOOTER BODY LENGKAP & BERSIH (DENGAN GELEMBUNG MENGAMBANG)-->
        <!-- ==================================================================== -->
        <div class="relative w-full overflow-hidden bg-[#002b1c] text-white pt-14 pb-12 border-t border-emerald-900/40">
            
            <!-- Gelembung-Gelembung Mengambang di Dalam Footer (Sesuai Permintaan User) -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none z-0">
                <!-- Bubble 1: Kiri Atas -->
                <div class="absolute -top-10 left-[8%] w-36 h-36 rounded-full bg-gradient-to-tr from-emerald-500/20 to-emerald-300/10 blur-sm animate-bubble-1 border border-emerald-400/25"></div>
                <!-- Bubble 2: Kiri Bawah -->
                <div class="absolute bottom-12 left-[18%] w-24 h-24 rounded-full bg-gradient-to-tr from-emerald-400/20 to-teal-300/10 blur-xs animate-bubble-2 border border-emerald-300/20"></div>
                <!-- Bubble 3: Tengah Atas -->
                <div class="absolute top-1/4 left-[45%] w-20 h-20 rounded-full bg-gradient-to-tr from-emerald-300/20 to-emerald-500/10 blur-xs animate-bubble-3 border border-emerald-400/25"></div>
                <!-- Bubble 4: Kanan Atas -->
                <div class="absolute top-8 right-[15%] w-32 h-32 rounded-full bg-gradient-to-tr from-teal-400/20 to-emerald-400/10 blur-sm animate-bubble-1 border border-emerald-400/20"></div>
                <!-- Bubble 5: Kanan Bawah -->
                <div class="absolute -bottom-8 right-[28%] w-40 h-40 rounded-full bg-gradient-to-tr from-emerald-500/20 to-amber-400/10 blur-md animate-bubble-2 border border-emerald-300/20"></div>
                <!-- Bubble 6: Kecil Halus Kanan -->
                <div class="absolute top-1/2 right-[8%] w-14 h-14 rounded-full bg-emerald-400/20 blur-xs animate-bubble-3 border border-emerald-300/25"></div>
            </div>

            <!-- Ambient Dot Matrix Decorative Accent -->
            <div class="absolute right-4 top-16 hidden lg:grid grid-cols-6 gap-2.5 opacity-10 pointer-events-none z-0">
                <span v-for="i in 36" :key="i" class="w-1.5 h-1.5 rounded-full bg-emerald-300"></span>
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- 4 Kolom Grid Tertata Rapi, Seimbang & Selaras -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-10 pb-12 border-b border-white/10 items-start">
                    
                    <!-- ============================================================ -->
                    <!-- KOLOM 1 (4 cols): Brand, Lisensi, Partner & Bank             -->
                    <!-- ============================================================ -->
                    <div class="sm:col-span-2 lg:col-span-4 flex flex-col gap-4">
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
                        <div class="flex items-center gap-2 py-0.5">
                            <div class="h-8 px-2.5 rounded-lg bg-white/10 border border-white/15 flex items-center justify-center text-white" title="Penyelenggara Perjalanan Ibadah Umrah (PPIU) Kemenag RI">
                                <span class="font-bold text-[10px] tracking-tight">PPIU Kemenag</span>
                            </div>
                            <div class="h-8 px-2.5 rounded-lg bg-white/10 border border-white/15 flex items-center justify-center text-white" title="Association of The Indonesian Tours and Travel Agencies">
                                <span class="font-bold text-[10px] tracking-tight">ASITA</span>
                            </div>
                            <div class="h-8 px-2.5 rounded-lg bg-white/10 border border-white/15 flex items-center justify-center text-white" title="Akreditasi A Resmi Kemenag RI">
                                <div class="text-center leading-none">
                                    <span class="block text-[7px] uppercase tracking-wider text-emerald-300 font-bold">Akreditasi</span>
                                    <span class="text-[10px] font-black">A Resmi</span>
                                </div>
                            </div>
                        </div>

                        <!-- Button Jadi Partner Almubarak -->
                        <div>
                            <button 
                                @click="isPartnerModalOpen = true"
                                type="button"
                                class="inline-flex items-center justify-center gap-2 px-4 py-2 rounded-full bg-[#00a86b] hover:bg-[#00c57d] text-white font-bold text-xs shadow-md shadow-emerald-950/40 hover:scale-105 transition-all cursor-pointer"
                            >
                                <span>{{ t('footer_partner_btn') }}</span>
                                <span class="text-xs">🤝</span>
                            </button>
                        </div>

                        <!-- Partner Pembayaran (Grid 4x3 Logo Asli Resmi) -->
                        <div class="flex flex-col gap-2 pt-1">
                            <span class="text-[11px] font-bold text-white/90 tracking-wider uppercase">
                                {{ t('footer_payment_title') }}
                            </span>

                            <div class="grid grid-cols-4 gap-1.5 max-w-xs">
                                <!-- Visa -->
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs hover:scale-105 transition-transform" title="Visa">
                                    <svg viewBox="0 0 50 16" class="h-3.5 w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M19.8 0.5L16.7 15.5H14.1L17.2 0.5H19.8ZM33.2 10.3C33.2 6.4 27.8 6.2 27.8 4.4C27.8 3.8 28.4 3.1 29.7 2.9C30.3 2.8 32.1 2.8 33.9 3.6L34.5 1C33.6 0.7 32.5 0.4 31.1 0.4C26.5 0.4 23.2 2.8 23.2 6.3C23.2 8.9 25.5 10.3 27.3 11.2C29.1 12.1 29.7 12.7 29.7 13.5C29.7 14.7 28.2 15.2 26.8 15.2C24.9 15.2 23.8 14.9 22.4 14.3L21.8 17C23.3 17.7 25.2 18 26.9 18C31.8 18 35 15.6 35 11.8M43.7 15.5H46L44 0.5H41.9C41 0.5 40.2 1.1 39.8 2L34 15.5H38.7L39.6 13H45.3L45.8 15.5M40.9 9.5L42.5 4.8L43.4 9.5H40.9ZM11.4 0.5L7.2 11.2L6.7 8.7C5.9 5.8 3.3 2.7 0.5 1.2L3.8 15.5H8.6L16.2 0.5H11.4Z" fill="#00579F"/>
                                        <path d="M5.3 1.2H0.5L0 3.5C4 4.5 7.4 7.2 8.5 10.2L7.2 3.6C6.9 2.1 6.3 1.4 5.3 1.2Z" fill="#FAA61A"/>
                                    </svg>
                                </div>
                                <!-- Mastercard -->
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs hover:scale-105 transition-transform" title="Mastercard">
                                    <svg viewBox="0 0 34 20" class="h-4 w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="11" cy="10" r="9" fill="#EB001B"/>
                                        <circle cx="23" cy="10" r="9" fill="#F79E1B"/>
                                        <path d="M17 3.86a8.97 8.97 0 0 1 0 12.28 8.97 8.97 0 0 1 0-12.28z" fill="#FF5F00"/>
                                    </svg>
                                </div>
                                <!-- JCB -->
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs hover:scale-105 transition-transform" title="JCB">
                                    <svg viewBox="0 0 36 20" class="h-3.5 w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1" y="1" width="10" height="18" rx="2" fill="#005BAC"/>
                                        <rect x="13" y="1" width="10" height="18" rx="2" fill="#E61C24"/>
                                        <rect x="25" y="1" width="10" height="18" rx="2" fill="#009944"/>
                                        <text x="3.5" y="14" fill="#FFFFFF" font-size="9" font-family="Arial, Helvetica, sans-serif" font-weight="900">J</text>
                                        <text x="14.5" y="14" fill="#FFFFFF" font-size="9" font-family="Arial, Helvetica, sans-serif" font-weight="900">C</text>
                                        <text x="26.5" y="14" fill="#FFFFFF" font-size="9" font-family="Arial, Helvetica, sans-serif" font-weight="900">B</text>
                                    </svg>
                                </div>
                                <!-- BCA -->
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs hover:scale-105 transition-transform" title="Bank Central Asia (BCA)">
                                    <svg viewBox="0 0 46 16" class="h-3.5 w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 8 L6 2.5 L9 8 L6 13.5 Z" fill="#005BAA"/>
                                        <path d="M7 8 L10 2.5 L13 8 L10 13.5 Z" fill="#005BAA" fill-opacity="0.75"/>
                                        <text x="15" y="12.5" fill="#005BAA" font-size="11" font-family="Arial, Helvetica, sans-serif" font-weight="900" letter-spacing="-0.5">BCA</text>
                                    </svg>
                                </div>

                                <!-- Mandiri -->
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs hover:scale-105 transition-transform" title="Bank Mandiri">
                                    <svg viewBox="0 0 54 16" class="h-3.5 w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <text x="1" y="12" fill="#00387A" font-size="10.5" font-family="Arial, sans-serif" font-weight="800">mandirı</text>
                                        <path d="M43 4 C48 3, 52 7, 54 12 C52 9, 47 7, 43 8 Z" fill="#FFB700"/>
                                        <path d="M44 8 C48 8, 51 10, 53 14 C51 12, 47 11, 44 11 Z" fill="#F58220"/>
                                    </svg>
                                </div>
                                <!-- BRI -->
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs hover:scale-105 transition-transform" title="Bank Rakyat Indonesia (BRI)">
                                    <svg viewBox="0 0 44 16" class="h-3.5 w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1" y="2" width="12" height="12" rx="3" fill="#00529C"/>
                                        <path d="M4 8 C4 5.5, 9.5 5.5, 9.5 8 C9.5 10.5, 4 10.5, 4 8 Z" stroke="#FFFFFF" stroke-width="1.6" fill="none"/>
                                        <text x="15.5" y="12.5" fill="#00529C" font-size="11" font-family="Arial, Helvetica, sans-serif" font-weight="900">BRI</text>
                                    </svg>
                                </div>
                                <!-- BNI -->
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs hover:scale-105 transition-transform" title="Bank Negara Indonesia (BNI)">
                                    <svg viewBox="0 0 48 16" class="h-3.5 w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <text x="1" y="12.5" fill="#005E6A" font-size="11" font-family="Arial, Helvetica, sans-serif" font-weight="900">BNI</text>
                                        <rect x="25" y="2.5" width="10" height="11" rx="2" fill="#F15A24"/>
                                        <text x="27.5" y="11" fill="#FFFFFF" font-size="7.5" font-family="Arial, sans-serif" font-weight="900">46</text>
                                    </svg>
                                </div>
                                <!-- BSI -->
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs hover:scale-105 transition-transform" title="Bank Syariah Indonesia (BSI)">
                                    <svg viewBox="0 0 46 16" class="h-3.5 w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <polygon points="6,2 8,6 12,6 9,9 10,13 6,10 2,13 3,9 0,6 4,6" fill="#00A39D"/>
                                        <text x="14.5" y="12.5" fill="#00A39D" font-size="11" font-family="Arial, Helvetica, sans-serif" font-weight="900">BSI</text>
                                    </svg>
                                </div>

                                <!-- Bank Muamalat -->
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs hover:scale-105 transition-transform" title="Bank Muamalat">
                                    <svg viewBox="0 0 58 16" class="h-3 w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <polygon points="4,2 8,8 4,14 0,8" fill="#5A246B"/>
                                        <polygon points="8,2 12,8 8,14 4,8" fill="#E61C24" fill-opacity="0.85"/>
                                        <text x="14" y="11.5" fill="#5A246B" font-size="9" font-family="Arial, sans-serif" font-weight="800">Muamalat</text>
                                    </svg>
                                </div>
                                <!-- QRIS -->
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs hover:scale-105 transition-transform" title="QRIS">
                                    <svg viewBox="0 0 48 16" class="h-3.5 w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <text x="1" y="12.5" fill="#ED1C24" font-size="11" font-family="Arial, Helvetica, sans-serif" font-weight="900" letter-spacing="-0.5">QRIS</text>
                                        <rect x="33" y="2" width="13" height="5" fill="#ED1C24" rx="1"/>
                                        <rect x="33" y="8" width="13" height="5" fill="#FFFFFF" stroke="#ED1C24" stroke-width="0.8" rx="1"/>
                                    </svg>
                                </div>
                                <!-- GoPay -->
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs hover:scale-105 transition-transform" title="GoPay">
                                    <svg viewBox="0 0 52 16" class="h-3.5 w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="7" cy="8" r="5" fill="#00AED6"/>
                                        <circle cx="7" cy="8" r="2.2" fill="#FFFFFF"/>
                                        <text x="15" y="11.8" fill="#00AED6" font-size="10.5" font-family="Arial, sans-serif" font-weight="800">gopay</text>
                                    </svg>
                                </div>
                                <!-- OVO -->
                                <div class="bg-white rounded-lg p-1.5 h-8 flex items-center justify-center shadow-xs hover:scale-105 transition-transform" title="OVO">
                                    <svg viewBox="0 0 46 16" class="h-3.5 w-auto" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="1" y="2" width="12" height="12" rx="3.5" fill="#4C3494"/>
                                        <circle cx="7" cy="8" r="3" fill="none" stroke="#FFFFFF" stroke-width="1.8"/>
                                        <text x="15.5" y="12.5" fill="#4C3494" font-size="11" font-family="Arial, Helvetica, sans-serif" font-weight="900">OVO</text>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================ -->
                    <!-- KOLOM 2 (2.5 cols): Navigasi Cepat                           -->
                    <!-- ============================================================ -->
                    <div class="sm:col-span-1 lg:col-span-2 flex flex-col gap-3">
                        <h4 class="text-xs font-bold text-emerald-300 uppercase tracking-widest pb-1 border-b border-white/10">
                            {{ t('footer_nav_title') }}
                        </h4>
                        <ul class="flex flex-col gap-2 text-xs text-white/80">
                            <li><Link href="/" class="hover:text-emerald-300 transition-colors flex items-center gap-1.5"><span class="w-1 h-1 rounded-full bg-emerald-400"></span>{{ t('nav_home') }}</Link></li>
                            <li><Link href="/about" class="hover:text-emerald-300 transition-colors flex items-center gap-1.5"><span class="w-1 h-1 rounded-full bg-emerald-400"></span>{{ t('nav_about') }}</Link></li>
                            <li><Link href="/visi-misi" class="hover:text-emerald-300 transition-colors flex items-center gap-1.5"><span class="w-1 h-1 rounded-full bg-emerald-400"></span>{{ t('nav_vision') }}</Link></li>
                            <li><Link href="/business" class="hover:text-emerald-300 transition-colors flex items-center gap-1.5"><span class="w-1 h-1 rounded-full bg-emerald-400"></span>{{ t('nav_business') }}</Link></li>
                            <li><Link href="/news" class="hover:text-emerald-300 transition-colors flex items-center gap-1.5"><span class="w-1 h-1 rounded-full bg-emerald-400"></span>{{ t('nav_news') }}</Link></li>
                            <li><Link href="/awards" class="hover:text-emerald-300 transition-colors flex items-center gap-1.5"><span class="w-1 h-1 rounded-full bg-emerald-400"></span>{{ t('nav_awards') }}</Link></li>
                            <li><Link href="/team" class="hover:text-emerald-300 transition-colors flex items-center gap-1.5"><span class="w-1 h-1 rounded-full bg-emerald-400"></span>{{ t('nav_team') }}</Link></li>
                            <li><Link href="/contact" class="hover:text-emerald-300 transition-colors flex items-center gap-1.5"><span class="w-1 h-1 rounded-full bg-emerald-400"></span>{{ t('nav_contact') }}</Link></li>
                        </ul>
                    </div>

                    <!-- ============================================================ -->
                    <!-- KOLOM 3 (3.5 cols): Kantor & Info Kontak                     -->
                    <!-- ============================================================ -->
                    <div class="sm:col-span-1 lg:col-span-3 flex flex-col gap-3">
                        <h4 class="text-xs font-bold text-emerald-300 uppercase tracking-widest pb-1 border-b border-white/10">
                            {{ t('footer_contact_title') }}
                        </h4>
                        <div class="flex flex-col gap-3 text-xs text-white/80">
                            <div class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-emerald-400 text-[18px] shrink-0 mt-0.5">location_on</span>
                                <span class="leading-relaxed">Jl. Ciremei Ujung No.210, Bantarjati, Kota Bogor 16153</span>
                            </div>
                            <div class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-emerald-400 text-[18px] shrink-0 mt-0.5">apartment</span>
                                <span class="leading-relaxed">Gedung Menara Almubarak Lt. 5 Kuningan, Jakarta Selatan</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span class="material-symbols-outlined text-emerald-400 text-[18px] shrink-0">schedule</span>
                                <span>{{ locale === 'ID' ? 'Senin - Sabtu: 08.30 - 17.30 WIB' : 'Mon - Sat: 08:30 AM - 05:30 PM' }}</span>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span class="material-symbols-outlined text-emerald-400 text-[18px] shrink-0">call</span>
                                <a href="https://wa.me/6281260003484" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-300 hover:underline">
                                    +62 812-6000-3484
                                </a>
                            </div>
                            <div class="flex items-center gap-2.5">
                                <span class="material-symbols-outlined text-emerald-400 text-[18px] shrink-0">mail</span>
                                <a href="mailto:almubarak.wisata@gmail.com" class="hover:text-emerald-300 hover:underline truncate">
                                    almubarak.wisata@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================ -->
                    <!-- KOLOM 4 (3 cols): Follow kami di                             -->
                    <!-- ============================================================ -->
                    <div class="sm:col-span-2 lg:col-span-3 flex flex-col gap-3">
                        <h4 class="text-xs font-bold text-emerald-300 uppercase tracking-widest pb-1 border-b border-white/10">
                            {{ t('footer_follow_title') }}
                        </h4>
                        
                        <!-- List Vertikal Rapi: Instagram, TikTok, WhatsApp (Logo Asli Resmi Brand) -->
                        <div class="flex flex-col gap-3 pt-1">
                            <!-- Instagram (Logo Asli) -->
                            <a 
                                href="https://instagram.com/almubarakwisata" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-3 text-xs text-white/90 hover:text-white transition-all group p-2.5 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10"
                            >
                                <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-[#fdf497] via-[#fd5949] to-[#d6249f] flex items-center justify-center text-white shrink-0 group-hover:scale-110 transition-transform shadow-md p-1.5">
                                    <svg class="w-full h-full fill-white" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                    </svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-bold">Instagram</span>
                                    <span class="text-[10px] text-white/60">@almubarakwisata</span>
                                </div>
                            </a>

                            <!-- TikTok (Logo Asli) -->
                            <a 
                                href="https://tiktok.com/@almubarakwisata" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-3 text-xs text-white/90 hover:text-white transition-all group p-2.5 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10"
                            >
                                <div class="w-8 h-8 rounded-lg bg-black flex items-center justify-center shrink-0 group-hover:scale-110 transition-transform shadow-md p-1.5 border border-white/15">
                                    <svg class="w-full h-full" viewBox="0 0 24 24" fill="none">
                                        <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298-.002.595.042.88.13V9.4a6.33 6.33 0 0 0-.88-.06A6.34 6.34 0 0 0 3 15.68a6.34 6.34 0 0 0 10.82 4.48c.03-.03.06-.06.08-.09V10.12a8.28 8.28 0 0 0 5.69 2.25V8.92a4.84 4.84 0 0 1-3.45-2.23z" fill="#FFFFFF"/>
                                    </svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-bold">TikTok</span>
                                    <span class="text-[10px] text-white/60">@almubarakwisata</span>
                                </div>
                            </a>

                            <!-- WhatsApp (Logo Asli) -->
                            <a 
                                href="https://wa.me/6281260003484" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-3 text-xs text-white/90 hover:text-white transition-all group p-2.5 rounded-xl bg-white/5 hover:bg-white/10 border border-white/10"
                            >
                                <div class="w-8 h-8 rounded-lg bg-[#25D366] flex items-center justify-center text-white shrink-0 group-hover:scale-110 transition-transform shadow-md p-1.5">
                                    <svg class="w-full h-full fill-white" viewBox="0 0 24 24">
                                        <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>
                                    </svg>
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-bold">WhatsApp</span>
                                    <span class="text-[10px] text-white/60">+62 812-6000-3484</span>
                                </div>
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
