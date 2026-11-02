<script setup>
import { ref, computed } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';

const props = defineProps({
    news: {
        type: [Array, Object],
        default: () => [],
    },
    heroNews: {
        type: Array,
        default: () => [],
    },
});

// Normalize news array
const newsList = computed(() => {
    if (Array.isArray(props.news)) {
        return props.news;
    }
    if (props.news && Array.isArray(props.news.data)) {
        return props.news.data;
    }
    return [];
});

// Fallback articles if database is currently empty
const sampleArticles = [
    {
        id: 1,
        title: 'Panduan Lengkap Persiapan Fisik & Mental Menjelang Musim Haji 1446 H',
        content: 'Ibadah haji menuntut kesiapan fisik dan ruhani yang optimal. Pelajari tips menjaga kesehatan, latihan fisik harian, serta persiapan manasik ilmiah sesuai sunnah.',
        image: '/images/landing/gallery-jamaah.jpg',
        category: 'Panduan Ibadah',
        published_at: '2026-10-25',
        author: 'Ustadz Pembimbing',
    },
    {
        id: 2,
        title: 'Kemenag RI Rilis Jadwal Resmi Keberangkatan Umrah Awal Musim Dingin',
        content: 'Ditjen Penyelenggaraan Haji dan Umrah Kemenag RI mengumumkan regulasi terbaru terkait visa biometrik dan slot penerbangan langsung maskapai nasional.',
        image: '/images/landing/package-reguler-9hari.jpg',
        category: 'Regulasi Resmi',
        published_at: '2026-10-18',
        author: 'Redaksi Almubarak',
    },
    {
        id: 3,
        title: 'Sensasi Nyaman Melintasi Gurun Pasir dengan Kereta Cepat Haramain',
        content: 'Kini perjalanan antara Makkah dan Madinah hanya memakan waktu 2 jam 15 menit dengan kereta modern Haramain High Speed Rail yang telah menjadi fasilitas standar paket Almubarak.',
        image: '/images/landing/gallery-kereta.jpg',
        category: 'Fasilitas & Layanan',
        published_at: '2026-10-10',
        author: 'Tour Leader',
    },
    {
        id: 4,
        title: 'Menyelami Sejarah Jejak Khilafah Utsmaniyah di Hagia Sophia & Istanbul',
        content: 'Perpaduan agung peradaban Islam di Turki menjadi salah satu destinasi wisata halal paling diminati jamaah keluarga dan korporasi.',
        image: '/images/landing/package-turki-plus.jpg',
        category: 'Wisata Halal',
        published_at: '2026-09-28',
        author: 'Pemandu Sejarah',
    },
];

const articles = computed(() => {
    return newsList.value.length > 0 ? newsList.value : sampleArticles;
});

const searchQuery = ref('');
const activeCategory = ref('Semua');

const categories = ['Semua', 'Panduan Ibadah', 'Regulasi Resmi', 'Fasilitas & Layanan', 'Wisata Halal'];

const filteredArticles = computed(() => {
    return articles.value.filter(item => {
        const matchesCategory = activeCategory.value === 'Semua' || (item.category && item.category === activeCategory.value);
        const matchesSearch = !searchQuery.value.trim() || 
            item.title.toLowerCase().includes(searchQuery.value.toLowerCase()) ||
            (item.content && item.content.toLowerCase().includes(searchQuery.value.toLowerCase()));
        return matchesCategory && matchesSearch;
    });
});
</script>

<template>
    <Head title="Berita &amp; Informasi - Almubarak Wisata Internasional" />

    <AppLayout>
        <!-- Hero Header -->
        <section class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-12">
            <div class="relative w-full rounded-[32px] md:rounded-[40px] overflow-hidden min-h-[380px] lg:min-h-[420px] flex flex-col justify-center items-center text-center p-6 sm:p-12 shadow-2xl border border-surface-container">
                <div class="absolute inset-0 z-0">
                    <div 
                        class="w-full h-full bg-cover bg-center"
                        style="background-image: url('/images/landing/hero-kaaba.jpg'); filter: brightness(0.65) contrast(1.05);"
                    ></div>
                    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/45 to-black/80"></div>
                </div>

                <div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-tertiary-fixed font-label-sm text-xs font-bold uppercase tracking-wider mb-4 border border-white/20">
                        <span class="material-symbols-outlined text-[16px]">newspaper</span>
                        Warta &amp; Edukasi
                    </span>
                    <h1 class="font-headline-xl text-[34px] sm:text-[46px] lg:text-[54px] text-white font-extrabold tracking-tight leading-tight">
                        Kabar Baitullah &amp; Edukasi Ibadah
                    </h1>
                    <p class="font-body-lg text-white/90 text-[16px] sm:text-[18px] mt-4 leading-relaxed max-w-2xl">
                        Informasi terkini seputar regulasi haji, umrah, tips manasik, dan agenda keberangkatan Almubarak Wisata.
                    </p>

                    <!-- Search Input Inside Hero -->
                    <div class="w-full max-w-xl bg-white rounded-full p-2 pl-5 mt-6 shadow-2xl flex items-center justify-between border border-white/20">
                        <input 
                            v-model="searchQuery"
                            type="text" 
                            placeholder="Cari artikel, tips manasik, jadwal..." 
                            class="w-full bg-transparent border-0 text-on-surface text-sm focus:outline-none placeholder:text-outline"
                        />
                        <button class="inline-flex items-center gap-1.5 px-5 py-2.5 rounded-full bg-primary text-white text-xs font-bold shrink-0">
                            <span class="material-symbols-outlined text-[16px]">search</span>
                            <span>Cari</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Category Filter Tabs -->
        <section class="w-full py-4">
            <div class="max-w-7xl mx-auto px-gutter">
                <div class="flex items-center gap-2 overflow-x-auto pb-2 justify-start sm:justify-center no-scrollbar">
                    <button 
                        v-for="cat in categories" 
                        :key="cat"
                        @click="activeCategory = cat"
                        :class="activeCategory === cat ? 'bg-primary text-white font-bold shadow-sm' : 'bg-surface-container-lowest text-on-surface-variant hover:bg-surface-container border border-surface-container'"
                        class="px-5 py-2 rounded-full text-xs font-semibold whitespace-nowrap transition-all cursor-pointer"
                        type="button"
                    >
                        {{ cat }}
                    </button>
                </div>
            </div>
        </section>

        <!-- News Articles Grid -->
        <section class="w-full py-space-lg">
            <div class="max-w-7xl mx-auto px-gutter">
                <div v-if="filteredArticles.length === 0" class="text-center py-16 bg-surface-container-lowest rounded-2xl border border-surface-container">
                    <span class="material-symbols-outlined text-4xl text-outline mb-2">search_off</span>
                    <h3 class="text-lg font-bold text-on-surface">Tidak ada artikel yang sesuai</h3>
                    <p class="text-sm text-outline mt-1">Coba gunakan kata kunci pencarian yang lain.</p>
                </div>

                <div v-else class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <article 
                        v-for="art in filteredArticles" 
                        :key="art.id"
                        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-surface-container/70 flex flex-col group hover:-translate-y-1"
                    >
                        <!-- Article Thumbnail -->
                        <div class="relative h-52 overflow-hidden bg-surface-container">
                            <img 
                                :src="art.image || '/images/landing/hero-kaaba.jpg'" 
                                :alt="art.title"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            />
                            <span class="absolute top-3 left-3 px-3 py-1 rounded-full bg-primary/90 backdrop-blur-md text-white font-label-sm text-[11px] font-bold shadow-sm">
                                {{ art.category || 'Berita Ibadah' }}
                            </span>
                        </div>

                        <!-- Article Content -->
                        <div class="p-6 flex flex-col flex-1 justify-between">
                            <div>
                                <div class="flex items-center gap-2 text-xs text-outline mb-2.5">
                                    <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                                    <span>{{ art.published_at || 'Terbaru' }}</span>
                                    <span>•</span>
                                    <span class="text-primary font-medium">{{ art.author || 'Tim Almubarak' }}</span>
                                </div>
                                <h3 class="font-headline-sm text-lg text-on-surface font-bold group-hover:text-primary transition-colors line-clamp-2 leading-snug">
                                    {{ art.title }}
                                </h3>
                                <p class="font-body-sm text-xs text-on-surface-variant mt-2.5 line-clamp-3 leading-relaxed">
                                    {{ art.content }}
                                </p>
                            </div>

                            <div class="mt-6 pt-4 border-t border-surface-container/60 flex items-center justify-between">
                                <Link 
                                    :href="`/news/${art.id}`"
                                    class="inline-flex items-center gap-1.5 text-primary hover:text-primary-container font-semibold text-xs transition-colors group-hover:translate-x-1 duration-200"
                                >
                                    <span>Baca Selengkapnya</span>
                                    <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                                </Link>
                                <span class="material-symbols-outlined text-[18px] text-outline">bookmark_border</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- CTA Consultation -->
        <CtaBanner />
    </AppLayout>
</template>

