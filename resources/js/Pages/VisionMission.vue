<script setup>
import { computed } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import FivePillars from '@/Components/Landing/FivePillars.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

const rawCoreValues = [
    {
        letter: 'A',
        wordId: 'Amanah',
        wordEn: 'Integrity (Amanah)',
        descId: 'Menjaga kepercayaan jamaah secara jujur, transparan dalam pembiayaan, dan patuh regulasi resmi Kemenag RI.',
        descEn: 'Maintaining pilgrims\' trust through absolute honesty, transparent pricing, and strict adherence to official regulations.',
    },
    {
        letter: 'M',
        wordId: 'Mabrur',
        wordEn: 'Mabrur',
        descId: 'Berorientasi pada kesempurnaan ibadah jamaah sesuai tuntunan Al-Qur\'an dan As-Sunnah demi meraih predikat mabrur.',
        descEn: 'Dedicated to the perfection of worship rituals in accordance with Quran and Sunnah to attain an accepted pilgrimage.',
    },
    {
        letter: 'B',
        wordId: 'Berkah',
        wordEn: 'Blessing (Barakah)',
        descId: 'Setiap detak langkah perjalanan diniatkan mencari ridha Allah dan membawa kemaslahatan bagi keluarga serta umat.',
        descEn: 'Every step of the sacred journey is aimed at seeking the pleasure of Allah and bringing goodness to families and community.',
    },
    {
        letter: 'R',
        wordId: 'Responsif',
        wordEn: 'Responsive',
        descId: 'Tim layanan dan muthawif sigap melayani jamaah 24 jam dengan penuh keramahan, ketulusan, dan empati.',
        descEn: 'Our support team and muthawifs are promptly available 24/7 with authentic warmth, sincerity, and empathy.',
    },
    {
        letter: 'K',
        wordId: 'Kualitas',
        wordEn: 'Quality & Excellence',
        descId: 'Standar akomodasi hotel ring 1, penerbangan direct tanpa transit, dan konsumsi halal bernutrisi selera Nusantara.',
        descEn: 'First-ring hotel accommodations, direct non-stop flights, and certified nutritious Indonesian catering.',
    },
];

const coreValues = computed(() => {
    const isEn = locale.value === 'EN';
    return rawCoreValues.map(v => ({
        letter: v.letter,
        word: isEn ? v.wordEn : v.wordId,
        desc: isEn ? v.descEn : v.descId,
    }));
});
</script>

<template>
    <Head :title="locale === 'ID' ? 'Visi & Misi - PT ALMUBARAK WISATA INTERNATIONAL' : 'Vision & Mission - PT ALMUBARAK WISATA INTERNATIONAL'" />

    <AppLayout>
        <!-- Hero Header -->
        <section class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-10">
            <div class="relative w-full rounded-[32px] md:rounded-[40px] overflow-hidden min-h-[360px] lg:min-h-[400px] flex flex-col justify-center items-center text-center p-6 sm:p-12 shadow-2xl border border-surface-container">
                <div class="absolute inset-0 z-0">
                    <div 
                        class="w-full h-full bg-cover bg-center"
                        style="background-image: url('/images/landing/hero-kaaba.jpg'); filter: brightness(0.55) contrast(1.05);"
                    ></div>
                    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/80"></div>
                </div>

                <div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center">
                    <!-- Breadcrumbs -->
                    <nav class="flex items-center gap-2 text-white/80 text-xs sm:text-sm font-medium mb-4">
                        <Link href="/" class="hover:text-white transition-colors">{{ t('nav_home') }}</Link>
                        <span>/</span>
                        <Link href="/about" class="hover:text-white transition-colors">{{ t('nav_about') }}</Link>
                        <span>/</span>
                        <span class="text-secondary-fixed font-bold">{{ t('nav_vision') }}</span>
                    </nav>

                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-tertiary-fixed font-label-sm text-xs font-bold uppercase tracking-wider mb-4 border border-white/20">
                        <span class="material-symbols-outlined text-[16px]">flag</span>
                        {{ locale === 'ID' ? 'Arah & Prinsip Kami' : 'Our Principles & Direction' }}
                    </span>
                    <h1 class="font-headline-xl text-[34px] sm:text-[46px] lg:text-[54px] text-white font-extrabold tracking-tight leading-tight">
                        {{ locale === 'ID' ? 'Visi & Misi Perusahaan' : 'Company Vision & Mission' }}
                    </h1>
                    <p class="font-body-lg text-white/90 text-[16px] sm:text-[18px] mt-4 leading-relaxed max-w-2xl">
                        {{ locale === 'ID' ? 'Landasan fundamental PT ALMUBARAK WISATA INTERNATIONAL dalam menyelenggarakan setiap perjalanan ibadah yang amanah, syar\'i, dan penuh keberkahan.' : 'The fundamental foundation of PT ALMUBARAK WISATA INTERNATIONAL in organizing trusted, Sharia-compliant, and blessed pilgrimage journeys.' }}
                    </p>
                </div>
            </div>
        </section>

        <!-- Main Vision & Mission Section -->
        <section class="w-full py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
                    <!-- Visi Card -->
                    <div class="bg-surface-container-lowest p-8 sm:p-10 rounded-3xl shadow-sm hover:shadow-md transition-shadow border border-surface-container/70 flex flex-col justify-between">
                        <div>
                            <div class="w-16 h-16 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-6">
                                <span class="material-symbols-outlined text-[36px]">visibility</span>
                            </div>
                            <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                                {{ locale === 'ID' ? 'Pandangan Masa Depan' : 'Strategic Future Vision' }}
                            </span>
                            <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1 mb-6">
                                {{ locale === 'ID' ? 'Visi Kami' : 'Our Vision' }}
                            </h2>
                            <p class="font-body-lg text-base sm:text-lg text-on-surface-variant leading-relaxed">
                                {{ locale === 'ID' ? 'Menjadi perusahaan travel terdepan dalam layanan umroh, haji khusus, dan wisata halal di Indonesia yang memberikan pengalaman perjalanan yang aman, nyaman, dan penuh berkah bagi setiap jamaah dengan mengedepankan kepatuhan syariat Islam.' : 'To become Indonesia\'s foremost pilgrimage and halal travel agency, delivering sacred journeys that are secure, luxurious, and spiritually rewarding while strictly adhering to Islamic principles.' }}
                            </p>
                        </div>

                        <!-- Vision Strategic Targets -->
                        <div class="mt-8 pt-6 border-t border-surface-container grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                            <div class="p-4 rounded-2xl bg-surface-container/50">
                                <span class="font-headline-sm text-2xl font-black text-primary">50.000+</span>
                                <p class="text-xs text-outline font-semibold mt-1">{{ locale === 'ID' ? 'Jamaah Diberangkatkan' : 'Pilgrims Departed' }}</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-surface-container/50">
                                <span class="font-headline-sm text-2xl font-black text-secondary">Akreditasi A</span>
                                <p class="text-xs text-outline font-semibold mt-1">{{ locale === 'ID' ? 'PPIU Kemenag RI' : 'Grade A Ministry Accreditation' }}</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-surface-container/50">
                                <span class="font-headline-sm text-2xl font-black text-tertiary">15+ Tahun</span>
                                <p class="text-xs text-outline font-semibold mt-1">{{ locale === 'ID' ? 'Pengalaman Melayani' : 'Years of Excellence' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Misi Card -->
                    <div class="bg-surface-container-lowest p-8 sm:p-10 rounded-3xl shadow-sm hover:shadow-md transition-shadow border border-surface-container/70 flex flex-col justify-between">
                        <div>
                            <div class="w-16 h-16 rounded-2xl bg-secondary/10 text-secondary flex items-center justify-center mb-6">
                                <span class="material-symbols-outlined text-[36px]">rocket_launch</span>
                            </div>
                            <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                                {{ locale === 'ID' ? 'Aksi Nyata & Komitmen' : 'Commitment in Action' }}
                            </span>
                            <h2 class="font-headline-lg text-3xl sm:text-4xl text-secondary font-extrabold tracking-tight mt-1 mb-6">
                                {{ locale === 'ID' ? 'Misi Kami' : 'Our Mission' }}
                            </h2>
                            <ul class="space-y-4 font-body-md text-sm sm:text-base text-on-surface-variant">
                                <li class="flex items-start gap-3">
                                    <div class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5">
                                        <span class="material-symbols-outlined text-[18px]">check</span>
                                    </div>
                                    <span class="leading-relaxed">
                                        <strong class="text-on-surface">{{ locale === 'ID' ? 'Layanan Berkualitas Tinggi:' : 'High-Quality Service:' }}</strong>
                                        {{ locale === 'ID' ? 'Menyediakan layanan perjalanan yang berkualitas tinggi dengan standar keamanan dan kenyamanan tertinggi bagi jamaah.' : 'Providing premium pilgrimage services with the highest safety and comfort standards for all pilgrims.' }}
                                    </span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5">
                                        <span class="material-symbols-outlined text-[18px]">check</span>
                                    </div>
                                    <span class="leading-relaxed">
                                        <strong class="text-on-surface">{{ locale === 'ID' ? 'SDM Profesional & Syar\'i:' : 'Professional & Sharia Personnel:' }}</strong>
                                        {{ locale === 'ID' ? 'Mengembangkan tim profesional, muthawif, dan tour leader yang berilmu serta berpengalaman dalam bidang travel dan wisata halal.' : 'Developing knowledgeable, licensed muthawifs and tour leaders with deep experience in spiritual hospitality.' }}
                                    </span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5">
                                        <span class="material-symbols-outlined text-[18px]">check</span>
                                    </div>
                                    <span class="leading-relaxed">
                                        <strong class="text-on-surface">{{ locale === 'ID' ? 'Kemitraan Global Tepercaya:' : 'Trusted Global Partnerships:' }}</strong>
                                        {{ locale === 'ID' ? 'Membangun kemitraan yang kuat dengan muassasah, maskapai penerbangan internasional, dan jaringan hotel bintang 5 di seluruh dunia.' : 'Fostering strategic alliances with Saudi muassasah, 5-star international airlines, and luxury courtyard hotels worldwide.' }}
                                    </span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5">
                                        <span class="material-symbols-outlined text-[18px]">check</span>
                                    </div>
                                    <span class="leading-relaxed">
                                        <strong class="text-on-surface">{{ locale === 'ID' ? 'Kontribusi Sosial Kemasyarakatan:' : 'Social Responsibility:' }}</strong>
                                        {{ locale === 'ID' ? 'Berkontribusi nyata pada masyarakat melalui program sosial, santunan yatim dhuafa, dan kegiatan keagamaan berkelanjutan.' : 'Positively contributing to society through charitable endowments, underprivileged orphan care, and enduring religious education.' }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nilai Inti Perusahaan (Core Values) -->
        <section class="w-full py-16 bg-surface-container-low/60">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                        {{ locale === 'ID' ? 'Filosofi Kami' : 'Our Philosophy' }}
                    </span>
                    <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                        {{ locale === 'ID' ? 'Nilai-Nilai Utama Almubarak' : 'Almubarak Core Values' }}
                    </h2>
                    <p class="font-body-md text-on-surface-variant mt-2 text-sm sm:text-base">
                        {{ locale === 'ID' ? 'Prinsip yang dijiwai oleh setiap pimpinan, muthawif, dan staf dalam melayani para tamu Allah.' : 'The enduring ethical principles upheld by every leader, muthawif, and team member in serving Allah\'s guests.' }}
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
                    <div 
                        v-for="(val, idx) in coreValues" 
                        :key="idx"
                        class="bg-surface-container-lowest p-6 rounded-2xl shadow-xs border border-surface-container/70 flex flex-col gap-3 text-center items-center hover:-translate-y-1 transition-transform"
                    >
                        <div class="w-14 h-14 rounded-2xl bg-primary text-white flex items-center justify-center font-black text-2xl shadow-sm">
                            {{ val.letter }}
                        </div>
                        <h3 class="font-headline-sm text-lg text-primary font-bold">
                            {{ val.word }}
                        </h3>
                        <p class="font-body-sm text-xs text-on-surface-variant leading-relaxed">
                            {{ val.desc }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5 Pasti Umrah Component -->
        <FivePillars />

        <!-- CTA Consultation -->
        <CtaBanner />
    </AppLayout>
</template>

