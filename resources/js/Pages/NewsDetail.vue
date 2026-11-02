<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

const props = defineProps({
    newsItem: {
        type: Object,
        default: () => ({
            id: 1,
            title: 'Panduan Lengkap Persiapan Fisik & Mental Menjelang Musim Haji 1446 H',
            content: 'Ibadah haji merupakan salah satu rukun Islam yang agung dan menuntut kesiapan fisik dan ruhani yang optimal. Pelajari tips menjaga kesehatan, latihan fisik harian, serta persiapan manasik ilmiah sesuai sunnah.',
            image: '/images/landing/gallery-jamaah.jpg',
            category: 'Panduan Ibadah',
            published_at: '2026-10-25',
            author: 'Ustadz Pembimbing',
        }),
    },
    relatedNews: {
        type: Array,
        default: () => [],
    },
});

const shareOnWhatsApp = () => {
    const url = window.location.href;
    const text = encodeURIComponent(`${props.newsItem.title}\nBaca selengkapnya di: ${url}`);
    window.open(`https://api.whatsapp.com/send?text=${text}`, '_blank');
};
</script>

<template>
    <Head :title="`${newsItem.title} - Almubarak Wisata`" />

    <AppLayout>
        <!-- Breadcrumbs & Header -->
        <article class="w-full max-w-4xl mx-auto px-gutter pt-8 pb-16">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 text-xs text-outline mb-6">
                <Link href="/" class="hover:text-primary transition-colors">{{ t('nav_home') }}</Link>
                <span>/</span>
                <Link href="/news" class="hover:text-primary transition-colors">{{ t('nav_news') }}</Link>
                <span>/</span>
                <span class="text-on-surface truncate max-w-xs font-medium">{{ newsItem.title }}</span>
            </nav>

            <!-- Article Title -->
            <div class="mb-6">
                <span class="inline-block px-3 py-1 rounded-full bg-primary/10 text-primary font-label-sm text-xs font-bold uppercase tracking-wider mb-3">
                    {{ newsItem.category || (locale === 'ID' ? 'Warta Ibadah' : 'Pilgrimage News') }}
                </span>
                <h1 class="font-headline-xl text-2xl sm:text-4xl text-on-surface font-extrabold tracking-tight leading-tight">
                    {{ newsItem.title }}
                </h1>
                <div class="flex flex-wrap items-center gap-4 text-xs text-outline mt-4 pb-6 border-b border-surface-container">
                    <div class="flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px] text-primary">person</span>
                        <span class="font-semibold text-on-surface">{{ newsItem.author || 'Tim Almubarak' }}</span>
                    </div>
                    <span>•</span>
                    <div class="flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        <span>{{ newsItem.published_at || (locale === 'ID' ? 'Terbaru' : 'Latest') }}</span>
                    </div>
                    <span>•</span>
                    <button 
                        @click="shareOnWhatsApp"
                        class="inline-flex items-center gap-1 text-primary hover:underline font-semibold cursor-pointer ml-auto"
                        type="button"
                    >
                        <span class="material-symbols-outlined text-[16px]">share</span>
                        <span>{{ locale === 'ID' ? 'Bagikan ke WhatsApp' : 'Share to WhatsApp' }}</span>
                    </button>
                </div>
            </div>

            <!-- Featured Image -->
            <div class="rounded-3xl overflow-hidden shadow-lg mb-8 max-h-[460px] bg-surface-container">
                <img 
                    :src="newsItem.image || '/images/landing/hero-kaaba.jpg'" 
                    :alt="newsItem.title"
                    class="w-full h-full object-cover"
                />
            </div>

            <!-- Full Article Body -->
            <div class="prose max-w-none font-body-md text-base sm:text-lg text-on-surface leading-relaxed space-y-5">
                <p class="text-on-surface-variant font-normal leading-relaxed whitespace-pre-line">
                    {{ newsItem.content }}
                </p>
                <p class="text-on-surface-variant font-normal leading-relaxed">
                    {{ locale === 'ID' 
                        ? 'Bagi calon jamaah yang hendak merencanakan keberangkatan ke Tanah Suci, PT Almubarak Wisata Internasional senantiasa menyediakan bimbingan manasik komprehensif, kepastian jadwal, akomodasi hotel pelataran ring utama, dan maskapai penerbangan langsung tanpa transit.'
                        : 'For prospective pilgrims planning their sacred departure to the Holy Land, PT Almubarak Wisata Internasional consistently provides comprehensive ritual guidance, flight certainty, 5-star ring 1 hotels, and direct non-stop flights.'
                    }}
                </p>
            </div>

            <!-- Share & Contact Customer Care Box -->
            <div class="mt-12 p-6 rounded-2xl bg-surface-container-low border border-surface-container flex flex-col sm:flex-row items-center justify-between gap-4">
                <div>
                    <h4 class="font-headline-sm text-base text-primary font-bold">
                        {{ locale === 'ID' ? 'Punya Pertanyaan Seputar Artikel Ini?' : 'Questions About This Article?' }}
                    </h4>
                    <p class="text-xs text-on-surface-variant mt-1">
                        {{ locale === 'ID' ? 'Tim layanan kami siap berdiskusi langsung melalui WhatsApp.' : 'Our customer care team is available to consult directly via WhatsApp.' }}
                    </p>
                </div>
                <a 
                    href="https://wa.me/6281260003484" 
                    target="_blank"
                    class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-primary hover:bg-primary-container text-white font-bold text-xs shadow-sm transition-all whitespace-nowrap"
                >
                    <span class="material-symbols-outlined text-[18px]">chat</span>
                    <span>{{ locale === 'ID' ? 'Tanya Layanan' : 'Contact Support' }}</span>
                </a>
            </div>

            <!-- Related News Section -->
            <div v-if="relatedNews && relatedNews.length > 0" class="mt-16 pt-8 border-t border-surface-container">
                <h3 class="font-headline-sm text-xl text-primary font-bold mb-6">
                    {{ locale === 'ID' ? 'Artikel Terkait Lainnya' : 'Other Related Articles' }}
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <Link 
                        v-for="rel in relatedNews" 
                        :key="rel.id"
                        :href="`/news/${rel.id}`"
                        class="p-4 rounded-xl bg-surface-container-lowest border border-surface-container hover:border-primary transition-all group flex gap-4"
                    >
                        <div class="w-20 h-20 rounded-lg overflow-hidden shrink-0 bg-surface-container">
                            <img :src="rel.image || '/images/landing/hero-kaaba.jpg'" :alt="rel.title" class="w-full h-full object-cover group-hover:scale-105 transition-transform" />
                        </div>
                        <div class="flex-1">
                            <h4 class="text-sm font-bold text-on-surface group-hover:text-primary transition-colors line-clamp-2">
                                {{ rel.title }}
                            </h4>
                            <span class="text-xs text-outline mt-1 block">{{ rel.published_at || (locale === 'ID' ? 'Terbaru' : 'Latest') }}</span>
                        </div>
                    </Link>
                </div>
            </div>
        </article>

        <!-- CTA Consultation -->
        <CtaBanner />
    </AppLayout>
</template>

