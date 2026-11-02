<script setup>
import { computed } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import FivePillars from '@/Components/Landing/FivePillars.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';

const props = defineProps({
    teams: {
        type: Array,
        default: () => [],
    },
});

const defaultTeams = [
    {
        name: 'H. Ahmad Mubarak, Lc., M.A.',
        position: 'Direktur Utama / CEO',
        description: 'Alumni Universitas Islam Madinah dengan pengalaman lebih dari 15 tahun dalam bimbingan syar\'i dan manasik haji/umrah di Tanah Suci.',
        image: '/images/ceo.jpg',
        phone: '6281260003484',
    },
    {
        name: 'Ust. H. Abdullah Syarif, Lc.',
        position: 'Ketua Dewan Pembimbing Syariah',
        description: 'Membimbing jamaah dalam manasik dan pelaksanaan thawaf, sa\'i, serta kajian fiqih ibadah sesuai sunnah Rasulullah ﷺ.',
        image: '/images/landing/testi-fachri.jpg',
        phone: '6281260003484',
    },
    {
        name: 'Hj. Siti Fatimah, S.E.',
        position: 'Direktur Operasional & Pelayanan Jamaah',
        description: 'Mengawasi kenyamanan akomodasi hotel pelataran ring 1, handling bandara, serta pendampingan jamaah lansia dan keluarga.',
        image: '/images/landing/testi-siti.jpg',
        phone: '6281180002807',
    },
    {
        name: 'H. Firman Hidayat, S.Kom.',
        position: 'Manajer Tiket, Hotel & Visa Provider',
        description: 'Spesialis reservasi maskapai direct (Saudia/Garuda), tasreh visa Saudi, dan tiket kereta cepat Haramain Express.',
        image: '/images/landing/testi-hendra.jpg',
        phone: '6281180002807',
    },
];

const teamList = computed(() => {
    if (props.teams && props.teams.length > 0) {
        return props.teams.map(t => ({
            name: t.name,
            position: t.position,
            description: t.description || 'Profesional berpengalaman dalam penyelenggaraan ibadah umrah dan haji.',
            image: t.image ? (t.image.startsWith('http') || t.image.startsWith('/') ? t.image : `/storage/${t.image}`) : '/images/ceo.jpg',
            phone: t.phone || '6281260003484',
        }));
    }
    return defaultTeams;
});

const awards = [
    {
        title: 'Travel Terpercaya 2024',
        emoji: '🏆',
        color: 'from-amber-400 to-amber-600',
        giver: 'Kementerian Pariwisata & Ekonomi Kreatif RI',
        year: '2024',
        desc: 'Penghargaan sebagai perusahaan travel terpercaya dalam kategori umroh dan haji tahun 2024.',
    },
    {
        title: 'Best Customer Service 2023',
        emoji: '⭐',
        color: 'from-emerald-400 to-teal-600',
        giver: 'Asosiasi Travel Umrah & Haji Indonesia',
        year: '2023',
        desc: 'Penghargaan atas pelayanan pelanggan terbaik dalam industri travel religi tahun 2023.',
    },
    {
        title: 'Excellence in Religious Tourism 2022',
        emoji: '🌟',
        color: 'from-blue-400 to-indigo-600',
        giver: 'World Halal Tourism Forum',
        year: '2022',
        desc: 'Penghargaan keunggulan dalam bidang wisata religi dan standardisasi pariwisata halal.',
    },
    {
        title: 'Innovation Travel Award 2021',
        emoji: '🎯',
        color: 'from-purple-400 to-indigo-700',
        giver: 'Indonesia Digital Business Award',
        year: '2021',
        desc: 'Penghargaan atas inovasi sistem manajemen travel modern dan pelacakan dokumen jamaah.',
    },
];

const scrollTo = (id) => {
    const el = document.getElementById(id);
    if (el) {
        el.scrollIntoView({ behavior: 'smooth' });
    }
};

const contactMember = (member) => {
    const text = encodeURIComponent(`Assalamu'alaikum, saya ingin berkonsultasi dengan ${member.name} (${member.position}) terkait paket ibadah.`);
    window.open(`https://wa.me/${member.phone}?text=${text}`, '_blank');
};
</script>

<template>
    <Head title="Tentang Kami - PT ALMUBARAK WISATA INTERNATIONAL" />

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
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        Profil Resmi Perusahaan
                    </span>
                    <h1 class="font-headline-xl text-[34px] sm:text-[46px] lg:text-[54px] text-white font-extrabold tracking-tight leading-tight">
                        Tentang Kami
                    </h1>
                    <p class="font-body-lg text-white/90 text-[16px] sm:text-[18px] mt-4 leading-relaxed max-w-2xl">
                        Mengenal Lebih Dalam PT ALMUBARAK WISATA INTERNATIONAL — Penyelenggara Perjalanan Religi dan Wisata Halal Terpercaya.
                    </p>
                </div>
            </div>
        </section>

        <!-- Company Profile & CEO Greeting Section -->
        <section class="w-full py-space-xl">
            <div class="max-w-7xl mx-auto px-gutter">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <!-- Left: Company History & Mission Details -->
                    <div class="lg:col-span-7 flex flex-col gap-6">
                        <div>
                            <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                                Profil Perusahaan
                            </span>
                            <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                                PT ALMUBARAK WISATA INTERNATIONAL
                            </h2>
                        </div>
                        <p class="font-body-md text-base text-on-surface-variant leading-relaxed">
                            <strong class="text-on-surface">PT ALMUBARAK WISATA INTERNATIONAL</strong> adalah perusahaan travel terkemuka yang didirikan pada tanggal 15 Maret 2009 di Jakarta, Indonesia. Sejak awal berdirinya, kami telah berkomitmen untuk menjadi spesialis dalam layanan perjalanan religi dan wisata halal, dengan visi memberikan pengalaman perjalanan yang berkesan, penuh berkah, dan sesuai dengan nilai-nilai Islam.
                        </p>
                        <p class="font-body-md text-base text-on-surface-variant leading-relaxed">
                            Kami telah melayani lebih dari <strong class="text-primary font-bold">50.000 jamaah umroh dan haji</strong>, serta ribuan wisatawan muslim dari seluruh Indonesia dan mancanegara, membawa mereka ke Tanah Suci dan destinasi wisata halal dunia dengan hotel bintang lima yang strategis, transportasi nyaman, serta pendampingan oleh tour leader dan muthawif berpengalaman lebih dari 15 tahun.
                        </p>

                        <!-- Quick Navigation Buttons (Tim Kami & Penghargaan) -->
                        <div class="grid grid-cols-2 gap-4 pt-4 border-t border-surface-container max-w-md">
                            <!-- Button Tim Kami -->
                            <button 
                                @click="scrollTo('tim-kami')"
                                class="p-4 rounded-2xl bg-surface-container-lowest hover:bg-surface-container border border-surface-container/70 shadow-xs hover:shadow-md transition-all text-center flex flex-col items-center gap-2 cursor-pointer group"
                                type="button"
                            >
                                <div class="w-14 h-14 rounded-full bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-[28px]">groups</span>
                                </div>
                                <h4 class="font-headline-sm text-base text-on-surface font-bold group-hover:text-primary transition-colors">
                                    Tim Kami
                                </h4>
                                <p class="font-body-sm text-xs text-outline">Profesional Berpengalaman</p>
                            </button>

                            <!-- Button Penghargaan -->
                            <button 
                                @click="scrollTo('penghargaan')"
                                class="p-4 rounded-2xl bg-surface-container-lowest hover:bg-surface-container border border-surface-container/70 shadow-xs hover:shadow-md transition-all text-center flex flex-col items-center gap-2 cursor-pointer group"
                                type="button"
                            >
                                <div class="w-14 h-14 rounded-full bg-secondary/10 text-secondary flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-[28px]">military_tech</span>
                                </div>
                                <h4 class="font-headline-sm text-base text-on-surface font-bold group-hover:text-secondary transition-colors">
                                    Penghargaan
                                </h4>
                                <p class="font-body-sm text-xs text-outline">Travel Terpercaya 2024</p>
                            </button>
                        </div>
                    </div>

                    <!-- Right: CEO Card with Authentic images/ceo.jpg -->
                    <div class="lg:col-span-5 flex flex-col items-center">
                        <div class="relative w-full max-w-sm rounded-3xl overflow-hidden shadow-2xl border border-surface-container bg-surface-container-lowest p-6 flex flex-col items-center text-center">
                            <div class="w-48 h-48 rounded-2xl overflow-hidden shadow-lg mb-5 border-4 border-primary/20 bg-surface-container">
                                <img 
                                    src="/images/ceo.jpg" 
                                    alt="Ahmad Mubarak - CEO" 
                                    class="w-full h-full object-cover object-top hover:scale-105 transition-transform duration-500"
                                />
                            </div>
                            <span class="px-3 py-1 rounded-full bg-primary/10 text-primary font-label-sm text-xs font-bold uppercase tracking-widest mb-1">
                                Direktur Utama
                            </span>
                            <h3 class="font-headline-sm text-2xl text-on-surface font-extrabold mt-1">
                                Ahmad Mubarak
                            </h3>
                            <p class="font-body-sm text-xs text-outline font-semibold">
                                CEO - PT ALMUBARAK WISATA INTERNATIONAL
                            </p>
                            <p class="font-body-sm text-sm text-on-surface-variant mt-3 leading-relaxed italic">
                                "Komitmen kami adalah menghadirkan ketenangan, kepastian, dan kemabruran dalam setiap detak langkah ibadah Anda ke Baitullah."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi dan Misi Section -->
        <section id="visi-misi" class="w-full py-space-xl bg-surface-container-low/60 scroll-mt-24">
            <div class="max-w-7xl mx-auto px-gutter">
                <div class="text-center max-w-3xl mx-auto mb-12">
                    <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                        Arah &amp; Prinsip Kami
                    </span>
                    <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                        Visi dan Misi
                    </h2>
                    <p class="font-body-md text-on-surface-variant mt-2 text-sm sm:text-base">
                        Landasan fundamental PT Almubarak Wisata Internasional dalam menyelenggarakan setiap perjalanan religi yang amanah.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Visi -->
                    <div class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm border border-surface-container/70 flex flex-col gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[30px]">visibility</span>
                        </div>
                        <h3 class="font-headline-sm text-2xl text-primary font-bold">Visi</h3>
                        <p class="font-body-md text-base text-on-surface-variant leading-relaxed">
                            Menjadi perusahaan travel terdepan dalam layanan umroh, haji, dan wisata halal yang memberikan pengalaman perjalanan yang aman, nyaman, dan penuh berkah bagi setiap pelanggan.
                        </p>
                    </div>

                    <!-- Misi -->
                    <div class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm border border-surface-container/70 flex flex-col gap-4">
                        <div class="w-14 h-14 rounded-2xl bg-secondary/10 text-secondary flex items-center justify-center">
                            <span class="material-symbols-outlined text-[30px]">rocket_launch</span>
                        </div>
                        <h3 class="font-headline-sm text-2xl text-secondary font-bold">Misi</h3>
                        <ul class="space-y-3 font-body-sm text-sm text-on-surface-variant">
                            <li class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-primary text-[20px] mt-0.5 shrink-0">check_circle</span>
                                <span>Menyediakan layanan perjalanan yang berkualitas tinggi dengan standar keamanan dan kenyamanan tertinggi.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-primary text-[20px] mt-0.5 shrink-0">check_circle</span>
                                <span>Mengembangkan tim profesional yang berpengalaman dalam bidang travel dan wisata halal.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-primary text-[20px] mt-0.5 shrink-0">check_circle</span>
                                <span>Membangun kemitraan yang kuat dengan mitra terpercaya di seluruh dunia.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="material-symbols-outlined text-primary text-[20px] mt-0.5 shrink-0">check_circle</span>
                                <span>Berkontribusi pada masyarakat melalui program sosial dan kegiatan keagamaan.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tim Kami Section (id="tim-kami") -->
        <section id="tim-kami" class="w-full py-space-xl scroll-mt-24">
            <div class="max-w-7xl mx-auto px-gutter">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
                    <div>
                        <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                            Sumber Daya Manusia
                        </span>
                        <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                            Tim Profesional Kami
                        </h2>
                        <p class="font-body-md text-on-surface-variant mt-2 text-sm sm:text-base max-w-2xl">
                            Para ahli dan pembimbing syar'i berpengalaman yang berdedikasi mendampingi setiap tahapan ibadah Anda.
                        </p>
                    </div>
                    <Link 
                        href="/team" 
                        class="inline-flex items-center gap-1.5 text-primary hover:text-primary-container font-semibold text-sm whitespace-nowrap group"
                    >
                        <span>Lihat Seluruh Anggota Tim</span>
                        <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </Link>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div 
                        v-for="(member, idx) in teamList" 
                        :key="idx"
                        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-surface-container/70 flex flex-col justify-between group hover:-translate-y-1.5"
                    >
                        <div>
                            <div class="relative h-60 overflow-hidden bg-surface-container">
                                <img 
                                    :src="member.image" 
                                    :alt="member.name"
                                    class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-3">
                                    <span class="px-2.5 py-0.5 rounded-full bg-white/95 text-primary font-bold text-[11px] shadow-sm">
                                        {{ member.position }}
                                    </span>
                                </div>
                            </div>
                            <div class="p-5">
                                <h4 class="font-headline-sm text-base text-on-surface font-bold group-hover:text-primary transition-colors">
                                    {{ member.name }}
                                </h4>
                                <p class="font-body-sm text-xs text-on-surface-variant mt-2 line-clamp-3 leading-relaxed">
                                    {{ member.description }}
                                </p>
                            </div>
                        </div>
                        <div class="p-5 pt-0">
                            <button 
                                @click="contactMember(member)"
                                class="w-full py-2 px-3 rounded-xl bg-surface-container hover:bg-primary hover:text-white text-primary text-xs font-bold transition-all flex items-center justify-center gap-1.5 cursor-pointer"
                                type="button"
                            >
                                <span class="material-symbols-outlined text-[16px]">chat</span>
                                <span>Hubungi WhatsApp</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Penghargaan Section (id="penghargaan") with Authentic images/penghargaan.jpeg -->
        <section id="penghargaan" class="w-full py-space-xl bg-surface-container-low/60 scroll-mt-24">
            <div class="max-w-7xl mx-auto px-gutter">
                <div class="relative rounded-3xl overflow-hidden mb-12 p-8 sm:p-12 text-center text-white shadow-xl">
                    <div class="absolute inset-0 z-0">
                        <div 
                            class="w-full h-full bg-cover bg-center"
                            style="background-image: url('/images/penghargaan.jpeg'); filter: brightness(0.55);"
                        ></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-primary/80 to-black/80"></div>
                    </div>
                    <div class="relative z-10 max-w-2xl mx-auto">
                        <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-white/20 text-[#ffdcc3] font-label-sm text-xs font-bold uppercase tracking-wider mb-3">
                            <span class="material-symbols-outlined text-[16px]">military_tech</span>
                            Prestasi Resmi
                        </span>
                        <h2 class="font-headline-lg text-3xl sm:text-4xl font-extrabold tracking-tight">
                            Penghargaan yang Telah Diraih
                        </h2>
                        <p class="font-body-md text-white/90 text-sm sm:text-base mt-2">
                            Kami bangga dengan berbagai penghargaan yang telah kami terima sebagai bentuk pengakuan atas komitmen dan dedikasi pelayanan terbaik.
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div 
                        v-for="(award, idx) in awards" 
                        :key="idx"
                        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-surface-container/70 flex flex-col justify-between group hover:-translate-y-1.5"
                    >
                        <div>
                            <div :class="`bg-gradient-to-r ${award.color} p-6 flex items-center justify-center relative`">
                                <span class="text-5xl group-hover:scale-110 transition-transform duration-300">{{ award.emoji }}</span>
                                <span class="absolute top-2 right-2 px-2 py-0.5 rounded-full bg-black/20 text-white font-bold text-[10px]">
                                    {{ award.year }}
                                </span>
                            </div>
                            <div class="p-5">
                                <h4 class="font-headline-sm text-base text-primary font-bold">
                                    {{ award.title }}
                                </h4>
                                <p class="font-body-sm text-xs text-on-surface-variant mt-2 leading-relaxed">
                                    {{ award.desc }}
                                </p>
                            </div>
                        </div>
                        <div class="p-5 pt-0">
                            <div class="p-2.5 rounded-lg bg-surface-container text-[11px] text-outline">
                                <strong class="text-on-surface">Pemberi:</strong> {{ award.giver }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 text-center">
                    <Link 
                        href="/awards" 
                        class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-primary text-white font-bold text-xs shadow-sm hover:bg-primary-container transition-all"
                    >
                        <span>Lihat Seluruh Sertifikat &amp; Penghargaan</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </Link>
                </div>
            </div>
        </section>

        <!-- 5 Pillars Section Component -->
        <FivePillars />

        <!-- CTA Consultation -->
        <CtaBanner />
    </AppLayout>
</template>
