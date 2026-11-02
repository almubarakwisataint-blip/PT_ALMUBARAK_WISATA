<script setup>
import { ref, computed } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import FeaturedPackages from '@/Components/Landing/FeaturedPackages.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

const props = defineProps({
    businesses: {
        type: Array,
        default: () => [],
    },
});

const rawServices = [
    {
        titleId: 'Paket Umrah Reguler & VIP',
        titleEn: 'Regular & VIP Umrah Packages',
        icon: 'mosque',
        descId: 'Program bimbingan ibadah umrah 9 hingga 13 hari dengan akomodasi hotel bintang 5 ring utama pelataran Ka\'bah dan Masjid Nabawi, penerbangan direct tanpa transit Saudia atau Garuda Indonesia.',
        descEn: 'Comprehensive 9 to 13 days Umrah pilgrimage with 5-star ring 1 courtyard hotels facing Kaaba and Nabawi, direct non-stop flights via Saudia or Garuda Indonesia.',
        tagId: 'Paling Populer',
        tagEn: 'Most Popular',
    },
    {
        titleId: 'Haji Khusus & Haji Furoda',
        titleEn: 'VIP Special & Furoda Hajj',
        icon: 'verified_user',
        descId: 'Penyelenggaraan ibadah haji khusus berkuota resmi Kemenag RI dan Haji Furoda (Visa Mujamalah Resmi Kerajaan Arab Saudi) langsung berangkat tanpa antre panjang dengan fasilitas Maktab VIP Mina ber-AC.',
        descEn: 'Official quota Special Hajj and Mujamalah Furoda Hajj with direct departure, no multi-year queues, and luxury air-conditioned VIP Mina executive tents.',
        tagId: 'Direct Visa Resmi',
        tagEn: 'Official Direct Visa',
    },
    {
        titleId: 'Wisata Halal Internasional',
        titleEn: 'Global Halal Tourism',
        icon: 'flight_takeoff',
        descId: 'Jelajah jejak peradaban Islam ke berbagai destinasi dunia seperti Turki, Cappadocia, Uzbekistan, Mesir, dan Al-Aqsa dengan makanan bersertifikat 100% halal dan jadwal ibadah teratur.',
        descEn: 'Explore historic Islamic civilizations in Turkey, Cappadocia, Uzbekistan, Egypt, and Al-Aqsa with 100% certified halal gastronomy and prayer intervals.',
        tagId: 'Tour Sejarah',
        tagEn: 'Historical Heritage',
    },
    {
        titleId: 'Provider Visa & Tiket Group',
        titleEn: 'Visa Provider & Group Ticketing',
        icon: 'airplane_ticket',
        descId: 'Layanan resmi penerbitan visa umrah/haji tasreh Saudi, pemesanan tiket penerbangan grup untuk travel partner, serta reservasi kereta cepat Haramain High Speed Rail.',
        descEn: 'Official Saudi visa issuance, confirmed airline group ticket allocations for travel partners, and Haramain High Speed Rail reservations.',
        tagId: 'Layanan Partner',
        tagEn: 'B2B Partner Services',
    },
    {
        titleId: 'Custom Group & Corporate Umrah',
        titleEn: 'Custom Group & Corporate Umrah',
        icon: 'groups',
        descId: 'Paket ibadah eksklusif yang dirancang khusus untuk korporasi, keluarga besar, komunitas, atau instansi dengan itinerary, ustadz pembimbing, dan fasilitas yang disesuaikan secara privat.',
        descEn: 'Tailor-made pilgrimage programs for corporate rewards, extended families, or institutions with private itineraries and dedicated spiritual mentors.',
        tagId: 'Private & Custom',
        tagEn: 'Private & Custom',
    },
    {
        titleId: 'Bimbingan Manasik Intensif',
        titleEn: 'Intensive Ritual Guidance (Manasik)',
        icon: 'menu_book',
        descId: 'Bimbingan tata cara pelaksanaan ibadah haji & umrah komprehensif baik teori maupun praktek simulasi manasik, dipandu oleh asatidzah berkompetensi syar\'i sesuai sunnah.',
        descEn: 'Comprehensive practical simulations and theoretical teachings on pilgrimage rites, guided by certified scholars in accordance with the authentic Sunnah.',
        tagId: 'Full Bimbingan',
        tagEn: 'Full Guidance',
    },
];

const services = computed(() => {
    const isEn = locale.value === 'EN';
    return rawServices.map(s => ({
        title: isEn ? s.titleEn : s.titleId,
        icon: s.icon,
        desc: isEn ? s.descEn : s.descId,
        tag: isEn ? s.tagEn : s.tagId,
    }));
});

const consultService = (title) => {
    const text = encodeURIComponent(`Assalamu'alaikum Almubarak Wisata, saya ingin informasi mengenai: ${title}`);
    window.open(`https://wa.me/6281260003484?text=${text}`, '_blank');
};
</script>

<template>
    <Head :title="locale === 'ID' ? 'Bisnis & Layanan - Almubarak Wisata Internasional' : 'Services & Business - Almubarak Wisata Internasional'" />

    <AppLayout>
        <!-- Hero Header -->
        <section class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-12">
            <div class="relative w-full rounded-[32px] md:rounded-[40px] overflow-hidden min-h-[380px] lg:min-h-[420px] flex flex-col justify-center items-center text-center p-6 sm:p-12 shadow-2xl border border-surface-container">
                <div class="absolute inset-0 z-0">
                    <div 
                        class="w-full h-full bg-cover bg-center"
                        style="background-image: url('/images/landing/package-turki-plus.jpg'); filter: brightness(0.65) contrast(1.05);"
                    ></div>
                    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/45 to-black/80"></div>
                </div>

                <div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-tertiary-fixed font-label-sm text-xs font-bold uppercase tracking-wider mb-4 border border-white/20">
                        <span class="material-symbols-outlined text-[16px]">travel_explore</span>
                        {{ locale === 'ID' ? 'Layanan Terpadu' : 'Integrated Services' }}
                    </span>
                    <h1 class="font-headline-xl text-[34px] sm:text-[46px] lg:text-[54px] text-white font-extrabold tracking-tight leading-tight">
                        {{ locale === 'ID' ? 'Bisnis & Layanan Kami' : 'Our Business & Services' }}
                    </h1>
                    <p class="font-body-lg text-white/90 text-[16px] sm:text-[18px] mt-4 leading-relaxed max-w-2xl">
                        {{ locale === 'ID' ? 'Menghadirkan solusi lengkap perjalanan ibadah ke Baitullah dan destinasi wisata religi bersejarah di seluruh dunia.' : 'Delivering complete pilgrimage solutions to the Holy Sanctuaries and heritage Islamic landmarks across the world.' }}
                    </p>
                </div>
            </div>
        </section>

        <!-- Services Grid -->
        <section class="w-full py-space-xl">
            <div class="max-w-7xl mx-auto px-gutter">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                        {{ locale === 'ID' ? 'Pilihan Layanan' : 'Service Selections' }}
                    </span>
                    <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                        {{ locale === 'ID' ? 'Portofolio Layanan Ibadah Paripurna' : 'Comprehensive Spiritual Service Portfolio' }}
                    </h2>
                    <p class="font-body-md text-on-surface-variant mt-2 text-sm sm:text-base">
                        {{ locale === 'ID' ? 'Setiap program didesain dengan standarisasi kenyamanan, transparansi biaya, dan bimbingan yang khusyuk.' : 'Every journey is tailored with uncompromising comfort standards, pricing transparency, and devoted spiritual mentoring.' }}
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div 
                        v-for="(svc, idx) in services" 
                        :key="idx"
                        class="bg-surface-container-lowest p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-surface-container/70 flex flex-col justify-between group hover:-translate-y-1"
                    >
                        <div>
                            <div class="flex items-center justify-between mb-5">
                                <div class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                                    <span class="material-symbols-outlined text-[30px]">{{ svc.icon }}</span>
                                </div>
                                <span class="px-3 py-1 rounded-full bg-surface-container text-primary font-label-sm text-xs font-bold">
                                    {{ svc.tag }}
                                </span>
                            </div>
                            <h3 class="font-headline-sm text-xl text-on-surface font-bold group-hover:text-primary transition-colors">
                                {{ svc.title }}
                            </h3>
                            <p class="font-body-sm text-sm text-on-surface-variant mt-3 leading-relaxed">
                                {{ svc.desc }}
                            </p>
                        </div>

                        <div class="mt-6 pt-5 border-t border-surface-container/60 flex items-center justify-between">
                            <button 
                                @click="consultService(svc.title)"
                                class="inline-flex items-center gap-1.5 text-primary hover:text-primary-container font-semibold text-sm transition-colors cursor-pointer group-hover:underline"
                                type="button"
                            >
                                <span>{{ locale === 'ID' ? 'Informasi Paket' : 'Package Details' }}</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </button>
                            <span class="text-xs text-outline font-medium">{{ locale === 'ID' ? 'Tersedia Kuota' : 'Quota Open' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Packages Section -->
        <FeaturedPackages />

        <!-- CTA Consultation -->
        <CtaBanner />
    </AppLayout>
</template>

