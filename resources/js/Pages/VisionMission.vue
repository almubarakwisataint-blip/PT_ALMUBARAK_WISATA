<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import FivePillars from '@/Components/Landing/FivePillars.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';

const coreValues = [
    {
        letter: 'A',
        word: 'Amanah',
        desc: 'Menjaga kepercayaan jamaah secara jujur, transparan dalam pembiayaan, dan patuh regulasi resmi Kemenag RI.',
    },
    {
        letter: 'M',
        word: 'Mabrur',
        desc: 'Berorientasi pada kesempurnaan ibadah jamaah sesuai tuntunan Al-Qur\'an dan As-Sunnah demi meraih predikat mabrur.',
    },
    {
        letter: 'B',
        word: 'Berkah',
        desc: 'Setiap detak langkah perjalanan diniatkan mencari ridha Allah dan membawa kemaslahatan bagi keluarga serta umat.',
    },
    {
        letter: 'R',
        word: 'Responsif',
        desc: 'Tim layanan dan muthawif sigap melayani jamaah 24 jam dengan penuh keramahan, ketulusan, dan empati.',
    },
    {
        letter: 'K',
        word: 'Kualitas',
        desc: 'Standar akomodasi hotel ring 1, penerbangan direct tanpa transit, dan konsumsi halal bernutrisi selera Nusantara.',
    },
];
</script>

<template>
    <Head title="Visi & Misi - PT ALMUBARAK WISATA INTERNATIONAL" />

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
                        <Link href="/" class="hover:text-white transition-colors">Beranda</Link>
                        <span>/</span>
                        <Link href="/about" class="hover:text-white transition-colors">Tentang Kami</Link>
                        <span>/</span>
                        <span class="text-secondary-fixed font-bold">Visi &amp; Misi</span>
                    </nav>

                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-tertiary-fixed font-label-sm text-xs font-bold uppercase tracking-wider mb-4 border border-white/20">
                        <span class="material-symbols-outlined text-[16px]">flag</span>
                        Arah &amp; Prinsip Kami
                    </span>
                    <h1 class="font-headline-xl text-[34px] sm:text-[46px] lg:text-[54px] text-white font-extrabold tracking-tight leading-tight">
                        Visi &amp; Misi Perusahaan
                    </h1>
                    <p class="font-body-lg text-white/90 text-[16px] sm:text-[18px] mt-4 leading-relaxed max-w-2xl">
                        Landasan fundamental PT ALMUBARAK WISATA INTERNATIONAL dalam menyelenggarakan setiap perjalanan ibadah yang amanah, syar'i, dan penuh keberkahan.
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
                                Pandangan Masa Depan
                            </span>
                            <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1 mb-6">
                                Visi Kami
                            </h2>
                            <p class="font-body-lg text-base sm:text-lg text-on-surface-variant leading-relaxed">
                                Menjadi perusahaan travel terdepan dalam layanan umroh, haji khusus, dan wisata halal di Indonesia yang memberikan pengalaman perjalanan yang aman, nyaman, dan penuh berkah bagi setiap jamaah dengan mengedepankan kepatuhan syariat Islam.
                            </p>
                        </div>

                        <!-- Vision Strategic Targets -->
                        <div class="mt-8 pt-6 border-t border-surface-container grid grid-cols-1 sm:grid-cols-3 gap-4 text-center">
                            <div class="p-4 rounded-2xl bg-surface-container/50">
                                <span class="font-headline-sm text-2xl font-black text-primary">50.000+</span>
                                <p class="text-xs text-outline font-semibold mt-1">Jamaah Diberangkatkan</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-surface-container/50">
                                <span class="font-headline-sm text-2xl font-black text-secondary">Akreditasi A</span>
                                <p class="text-xs text-outline font-semibold mt-1">PPIU Kemenag RI</p>
                            </div>
                            <div class="p-4 rounded-2xl bg-surface-container/50">
                                <span class="font-headline-sm text-2xl font-black text-tertiary">15+ Tahun</span>
                                <p class="text-xs text-outline font-semibold mt-1">Pengalaman Melayani</p>
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
                                Aksi Nyata &amp; Komitmen
                            </span>
                            <h2 class="font-headline-lg text-3xl sm:text-4xl text-secondary font-extrabold tracking-tight mt-1 mb-6">
                                Misi Kami
                            </h2>
                            <ul class="space-y-4 font-body-md text-sm sm:text-base text-on-surface-variant">
                                <li class="flex items-start gap-3">
                                    <div class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5">
                                        <span class="material-symbols-outlined text-[18px]">check</span>
                                    </div>
                                    <span class="leading-relaxed"><strong class="text-on-surface">Layanan Berkualitas Tinggi:</strong> Menyediakan layanan perjalanan yang berkualitas tinggi dengan standar keamanan dan kenyamanan tertinggi bagi jamaah.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5">
                                        <span class="material-symbols-outlined text-[18px]">check</span>
                                    </div>
                                    <span class="leading-relaxed"><strong class="text-on-surface">SDM Profesional &amp; Syar'i:</strong> Mengembangkan tim profesional, muthawif, dan tour leader yang berilmu serta berpengalaman dalam bidang travel dan wisata halal.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5">
                                        <span class="material-symbols-outlined text-[18px]">check</span>
                                    </div>
                                    <span class="leading-relaxed"><strong class="text-on-surface">Kemitraan Global Tepercaya:</strong> Membangun kemitraan yang kuat dengan muassasah, maskapai penerbangan internasional, dan jaringan hotel bintang 5 di seluruh dunia.</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <div class="w-6 h-6 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 mt-0.5">
                                        <span class="material-symbols-outlined text-[18px]">check</span>
                                    </div>
                                    <span class="leading-relaxed"><strong class="text-on-surface">Kontribusi Sosial Kemasyarakatan:</strong> Berkontribusi nyata pada masyarakat melalui program sosial, santunan yatim dhuafa, dan kegiatan keagamaan berkelanjutan.</span>
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
                        Filosofi Kami
                    </span>
                    <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                        Nilai-Nilai Utama Almubarak
                    </h2>
                    <p class="font-body-md text-on-surface-variant mt-2 text-sm sm:text-base">
                        Prinsip yang dijiwai oleh setiap pimpinan, muthawif, dan staf dalam melayani para tamu Allah.
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

