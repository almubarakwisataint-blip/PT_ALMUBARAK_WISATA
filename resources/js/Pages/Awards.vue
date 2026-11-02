<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';

const awards = [
    {
        title: 'Travel Terpercaya 2024',
        icon: 'trophy',
        emoji: '🏆',
        color: 'from-amber-400 to-amber-600',
        textColor: 'text-amber-800',
        giver: 'Kementerian Pariwisata & Ekonomi Kreatif RI',
        year: '2024',
        desc: 'Penghargaan atas komitmen pelayanan terpercaya dan perlindungan hak jamaah dalam kategori Penyelenggara Perjalanan Ibadah Umroh & Haji Khusus.',
    },
    {
        title: 'Best Customer Service 2023',
        icon: 'star',
        emoji: '⭐',
        color: 'from-emerald-400 to-teal-600',
        textColor: 'text-emerald-800',
        giver: 'Asosiasi Travel Umrah & Haji Indonesia',
        year: '2023',
        desc: 'Penghargaan atas dedikasi pelayanan pelanggan 24/7 dan pendampingan intensif bagi jamaah lanjut usia serta keluarga.',
    },
    {
        title: 'Excellence in Religious Tourism 2022',
        icon: 'verified',
        emoji: '🌟',
        color: 'from-blue-400 to-indigo-600',
        textColor: 'text-blue-800',
        giver: 'World Halal Tourism Forum',
        year: '2022',
        desc: 'Penghargaan keunggulan dalam standardisasi wisata religi halal mancanegara di Turki, Mesir, dan Uzbekistan.',
    },
    {
        title: 'Digital Innovation Travel Award 2021',
        icon: 'devices',
        emoji: '🎯',
        color: 'from-purple-400 to-indigo-700',
        textColor: 'text-purple-800',
        giver: 'Indonesia Digital Business Award',
        year: '2021',
        desc: 'Pengakuan atas inovasi sistem reservasi digital transparan dan integrasi pelacakan dokumen jamaah secara real-time.',
    },
    {
        title: 'Best Hajj & Umrah Organizer 2020',
        icon: 'military_tech',
        emoji: '🥇',
        color: 'from-rose-400 to-red-600',
        textColor: 'text-rose-800',
        giver: 'Forum Komunikasi Penyelenggara Ibadah',
        year: '2020',
        desc: 'Penyelenggara terbaik dalam manajemen mitigasi dan perlindungan kesehatan jamaah selama masa adaptasi baru.',
    },
    {
        title: 'Top Performing Travel Agent 2019',
        icon: 'flight',
        emoji: '✈️',
        color: 'from-teal-400 to-cyan-600',
        textColor: 'text-teal-800',
        giver: 'Saudia & Garuda Indonesia Direct',
        year: '2019',
        desc: 'Apresiasi atas kontribusi pemesanan tiket penerbangan langsung rute Jakarta-Jeddah dan Jakarta-Madinah secara berkelanjutan.',
    },
];
</script>

<template>
    <Head title="Penghargaan Kami - Almubarak Wisata Internasional" />

    <AppLayout>
        <!-- Hero Header with Authentic Penghargaan.jpeg background -->
        <section class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-12">
            <div class="relative w-full rounded-[32px] md:rounded-[40px] overflow-hidden min-h-[380px] lg:min-h-[420px] flex flex-col justify-center items-center text-center p-6 sm:p-12 shadow-2xl border border-surface-container">
                <div class="absolute inset-0 z-0">
                    <div 
                        class="w-full h-full bg-cover bg-center"
                        style="background-image: url('/images/penghargaan.jpeg'); filter: brightness(0.60) contrast(1.05);"
                    ></div>
                    <div class="absolute inset-0 bg-gradient-to-b from-black/65 via-black/50 to-black/85"></div>
                </div>

                <div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-[#ffdcc3] font-label-sm text-xs font-bold uppercase tracking-wider mb-4 border border-white/20">
                        <span class="material-symbols-outlined text-[16px]">military_tech</span>
                        Prestasi &amp; Rekam Jejak
                    </span>
                    <h1 class="font-headline-xl text-[34px] sm:text-[46px] lg:text-[54px] text-white font-extrabold tracking-tight leading-tight">
                        Penghargaan &amp; Pengakuan Resmi
                    </h1>
                    <p class="font-body-lg text-white/90 text-[16px] sm:text-[18px] mt-4 leading-relaxed max-w-2xl">
                        Bukti nyata dedikasi, integritas, dan komitmen PT Almubarak Wisata Internasional dalam menghadirkan pelayanan terbaik bagi jamaah.
                    </p>
                </div>
            </div>
        </section>

        <!-- Awards Grid Section -->
        <section class="w-full py-space-xl">
            <div class="max-w-7xl mx-auto px-gutter">
                <div class="text-center max-w-3xl mx-auto mb-14">
                    <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                        Dedikasi Kami
                    </span>
                    <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                        Piala &amp; Apresiasi yang Telah Diterima
                    </h2>
                    <p class="font-body-md text-on-surface-variant mt-2 text-sm sm:text-base">
                        Setiap penghargaan adalah amanah dan motivasi bagi kami untuk terus berinovasi dan meningkatkan kualitas bimbingan ibadah.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div 
                        v-for="(award, idx) in awards" 
                        :key="idx"
                        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-surface-container/70 flex flex-col justify-between group hover:-translate-y-1.5"
                    >
                        <div>
                            <!-- Header Gradient Banner -->
                            <div :class="`bg-gradient-to-r ${award.color} p-8 flex items-center justify-center relative overflow-hidden`">
                                <span class="text-6xl group-hover:scale-110 transition-transform duration-300">{{ award.emoji }}</span>
                                <span class="absolute top-3 right-3 px-2.5 py-0.5 rounded-full bg-black/20 text-white font-bold text-xs">
                                    {{ award.year }}
                                </span>
                            </div>

                            <div class="p-6">
                                <h3 class="font-headline-sm text-xl text-primary font-bold group-hover:text-primary-container transition-colors">
                                    {{ award.title }}
                                </h3>
                                <p class="font-body-sm text-sm text-on-surface-variant mt-3 leading-relaxed">
                                    {{ award.desc }}
                                </p>
                            </div>
                        </div>

                        <div class="p-6 pt-0">
                            <div class="p-4 rounded-xl bg-surface-container-low border border-surface-container/50 text-xs text-outline space-y-1">
                                <p><strong class="text-on-surface">Pemberi:</strong> {{ award.giver }}</p>
                                <p><strong class="text-on-surface">Status:</strong> Terverifikasi Resmi</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Back to About Link -->
                <div class="mt-12 text-center">
                    <Link 
                        href="/about" 
                        class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-surface-container text-primary hover:bg-surface-container-high transition-colors font-bold text-sm"
                    >
                        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                        <span>Kembali ke Halaman Tentang Kami</span>
                    </Link>
                </div>
            </div>
        </section>

        <!-- CTA Consultation -->
        <CtaBanner />
    </AppLayout>
</template>
