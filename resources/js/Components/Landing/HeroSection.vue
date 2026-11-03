<script setup>
import { ref } from 'vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();
const searchQuery = ref('');
const activeCategory = ref('paket');

const setCategory = (cat) => {
    activeCategory.value = cat;
};

const handleSearch = () => {
    if (searchQuery.value.trim()) {
        window.location.href = `/search?q=${encodeURIComponent(searchQuery.value.trim())}`;
    }
};
</script>

<template>
    <!-- HERO SECTION: Matching reference layout -->
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-12">
        <div class="relative w-full rounded-[32px] md:rounded-[40px] overflow-hidden min-h-[580px] lg:min-h-[640px] flex flex-col justify-between items-center text-center p-6 sm:p-10 lg:p-14 shadow-2xl border border-surface-container">
            <!-- Background image with authentic Kaaba view + subtle dark gradient scrim -->
            <div class="absolute inset-0 z-0">
                <div 
                    class="w-full h-full bg-cover bg-center transition-transform duration-700 scale-100 hover:scale-105"
                    style="background-image: url('/images/landing/hero-kaaba.jpg'); filter: brightness(0.62) contrast(1.02);"
                ></div>
                <!-- Scrim Gelap Merata & Halus: Menghilangkan bayangan menara yang memotong/melewat di dalam teks -->
                <div class="absolute inset-0 bg-gradient-to-b from-black/80 via-black/70 to-black/85 backdrop-blur-[0.5px]"></div>
                <!-- Soft Radial Scrim agar kontras teks selalu bersih dan konsisten -->
                <div class="absolute inset-0 bg-radial from-black/40 via-transparent to-black/60 pointer-events-none"></div>
            </div>

            <!-- Center Hero Content Area -->
            <div class="relative z-10 max-w-4xl mx-auto flex flex-col items-center mt-6 md:mt-10 w-full">
                <!-- Main Title: Teks dengan Animasi Kilauan Melewat di Dalamnya (Sesuai Permintaan User: Warna Emas & Emerald) -->
                <h1 class="hero-shimmer-title font-headline-xl text-[36px] sm:text-[46px] lg:text-[56px] leading-[1.15] font-extrabold tracking-tight drop-shadow-[0_4px_25px_rgba(0,0,0,0.95)]">
                    {{ locale === 'ID' ? 'Temukan Perjalanan Ibadah & Umrah Terpercaya' : 'Discover Trusted Pilgrimage & Sacred Journeys' }}
                </h1>

                <!-- Subtitle -->
                <p class="font-body-lg text-white/90 text-[16px] sm:text-[19px] mt-4 max-w-2xl font-normal leading-relaxed drop-shadow">
                    {{ locale === 'ID' ? 'Platform resmi bimbingan umrah & haji khusus berizin Kemenag RI di Indonesia.' : 'Official platform for verified Umrah and VIP Hajj accredited by the Ministry of Religious Affairs.' }}
                </p>

                <!-- Accent Highlight Text -->
                <p class="text-[#fbbd23] font-label-lg text-[15px] sm:text-[17px] font-bold mt-2 tracking-wide drop-shadow">
                    {{ locale === 'ID' ? 'Wujudkan keberangkatan & kuota Anda di almubarak.com' : 'Secure your seat and pilgrimage quota at almubarak.com' }}
                </p>

                <!-- Dual Category Pills Toggle directly above search bar -->
                <div class="inline-flex items-center p-1 rounded-full bg-black/60 backdrop-blur-md border border-white/15 mt-8 shadow-lg">
                    <button 
                        @click="setCategory('paket')"
                        :class="activeCategory === 'paket' ? 'bg-[#1e232e] text-white' : 'text-white/75 hover:text-white'"
                        class="px-6 py-2 rounded-full font-label-md text-label-md font-bold shadow-sm transition-all cursor-pointer" 
                        type="button"
                    >
                        {{ locale === 'ID' ? 'Paket Umrah & Haji' : 'Umrah & Hajj Packages' }}
                    </button>
                </div>

                <!-- Integrated Floating Rounded Search Bar with Search Icon Pill Button -->
                <form 
                    @submit.prevent="handleSearch" 
                    class="w-full max-w-2xl bg-white rounded-full p-2 pl-6 mt-4 shadow-2xl flex items-center justify-between border border-white/20 transition-all focus-within:ring-2 focus-within:ring-secondary"
                >
                    <div class="flex items-center flex-1 mr-3">
                        <input 
                            v-model="searchQuery"
                            class="w-full bg-transparent border-0 text-on-surface placeholder:text-outline font-body-md text-[14px] sm:text-[15px] focus:outline-none" 
                            :placeholder="locale === 'ID' ? 'Cari paket umrah, maskapai, tanggal keberangkatan...' : 'Search umrah packages, airlines, departure dates...'" 
                            type="text"
                        />
                    </div>
                    <button 
                        type="submit"
                        class="inline-flex items-center gap-2 px-6 sm:px-8 py-3 rounded-full bg-black text-white hover:bg-neutral-800 transition-colors font-label-md text-[14px] font-bold shrink-0 shadow-md cursor-pointer" 
                    >
                        <span class="material-symbols-outlined text-[18px]">search</span>
                        <span>{{ locale === 'ID' ? 'Cari' : 'Search' }}</span>
                    </button>
                </form>
            </div>

            <!-- Secondary Bottom Floating Pill / Banner -->
            <div class="relative z-10 w-full max-w-[560px] mx-auto mt-8 mb-2 px-3">
                <a 
                    href="https://wa.me/6281260003484?text=Assalamu%27alaikum%20Almubarak%20Wisata,%20saya%20ingin%20informasi%20paket%20ibadah%20umrah/haji" 
                    target="_blank"
                    class="w-full h-14 rounded-full bg-[#005d42]/90 hover:bg-[#007d5c] backdrop-blur-md border border-white/20 text-white font-label-md text-[14px] sm:text-[15px] font-bold tracking-wide whitespace-nowrap transition-all duration-300 inline-flex items-center justify-center gap-2.5 shadow-2xl group cursor-pointer"
                >
                    <span class="material-symbols-outlined text-[20px] text-tertiary-fixed group-hover:scale-110 transition-transform">support_agent</span>
                    <span class="tracking-wide">{{ locale === 'ID' ? 'Konsultasi Jadwal & Kuota' : 'Schedule & Quota Consultation' }}</span>
                    <span class="material-symbols-outlined text-[18px] text-tertiary-fixed group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Animasi Cahaya Hijau Kontinyu Tanpa Jeda Berhenti (Ultra Smooth & Non-Stop Glide) */
.hero-shimmer-title {
    background: linear-gradient(
        95deg,
        #ffffff 0%,
        #ffffff 18%,
        #10b981 35%,
        #00ff88 50%,
        #10b981 65%,
        #ffffff 82%,
        #ffffff 100%
    );
    background-size: 200% 100%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: heroGreenSweep 3.2s linear infinite;
    display: inline-block;
}

@keyframes heroGreenSweep {
    0% {
        background-position: 200% 0;
    }
    100% {
        background-position: 0% 0;
    }
}

@media (prefers-reduced-motion: reduce) {
    .hero-shimmer-title {
        animation: none;
        color: #ffffff;
        -webkit-text-fill-color: #ffffff;
    }
}
</style>

