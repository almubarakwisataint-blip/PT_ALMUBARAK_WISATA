<script setup>
import { ref, computed } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import FivePillars from '@/Components/Landing/FivePillars.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';

const props = defineProps({
    teams: {
        type: Array,
        default: () => [],
    },
    news: {
        type: Array,
        default: () => [],
    },
});

const selectedAward = ref(null);

const defaultTeams = [
    {
        name: 'H. Ahmad Mubarak, Lc., M.A.',
        position: 'Direktur Utama / CEO',
        description: 'Alumni Universitas Islam Madinah dengan pengalaman lebih dari 15 tahun dalam bimbingan syar\'i dan manasik haji/umrah di Tanah Suci.',
        image: '/images/ceo-face.jpg',
        phone: '6281260003484',
    },
    {
        name: 'Ust. H. Abdullah Syarif, Lc.',
        position: 'Ketua Dewan Pembimbing Syariah',
        description: 'Membimbing jamaah dalam manasik dan pelaksanaan thawaf, sa\'i, serta kajian fiqih ibadah sesuai sunnah Rasulullah ﷺ.',
        image: '/images/landing/member-ustadz.jpg',
        phone: '6281260003484',
    },
    {
        name: 'Hj. Siti Fatimah, S.E.',
        position: 'Direktur Operasional & Pelayanan Jamaah',
        description: 'Mengawasi kenyamanan akomodasi hotel pelataran ring 1, handling bandara, serta pendampingan jamaah lansia dan keluarga.',
        image: '/images/landing/member-siti.jpg',
        phone: '6281180002807',
    },
    {
        name: 'H. Firman Hidayat, S.Kom.',
        position: 'Manajer Tiket, Hotel & Visa Provider',
        description: 'Spesialis reservasi maskapai direct (Saudia/Garuda), tasreh visa Saudi, dan tiket kereta cepat Haramain Express.',
        image: '/images/landing/member-firman.jpg',
        phone: '6281180002807',
    },
];

const teamList = computed(() => {
    if (props.teams && props.teams.length > 0) {
        return props.teams.map((t, idx) => ({
            name: t.name,
            position: t.position,
            description: t.description || 'Profesional berpengalaman dalam penyelenggaraan ibadah umrah dan haji.',
            image: t.image ? (t.image.startsWith('http') || t.image.startsWith('/') ? t.image : `/storage/${t.image}`) : (defaultTeams[idx]?.image || '/images/ceo-face.jpg'),
            phone: t.phone || '6281260003484',
        }));
    }
    return defaultTeams;
});

const awards = [
    {
        id: 'via-com',
        title: 'Top B2B Travel & Umrah Ticketing Partner',
        institution: 'Via.com Indonesia (PT Advaltis Asia Network)',
        badge: 'Top Agent Award',
        year: '2024',
        certNumber: 'VIA/ID/AGT/2024-088',
        desc: 'Apresiasi resmi atas kinerja luar biasa dan keandalan sistem penerbitan tiket penerbangan grup umrah serta transaksi B2B terpercaya.',
        image: '/images/penghargaan.jpeg',
        verified: true,
    },
    {
        id: 'kemenag-ppiu',
        title: 'Akreditasi A Resmi PPIU Kemenag RI',
        institution: 'Ditjen Penyelenggaraan Haji & Umrah Kemenag RI',
        badge: 'Akreditasi A Resmi',
        year: '2024',
        certNumber: 'SK Kemenag No. U.412 Tahun 2020',
        desc: 'Predikat Akreditasi A untuk kepatuhan tata kelola manasik, kesehatan, pemondokan hotel ring 1, serta jaminan 5 Pasti Umrah.',
        image: '/images/penghargaan.jpeg',
        verified: true,
    },
    {
        id: 'airline-partner',
        title: 'Strategic Group Partner Saudia & Garuda',
        institution: 'Saudi Arabian Airlines & Garuda Indonesia',
        badge: 'Official Airlines Partner',
        year: '2024',
        certNumber: 'SV-GA/GRP/UMR-1445',
        desc: 'Penghargaan atas loyalitas dan kontribusi penyediaan seat direct tanpa transit bagi jamaah umrah reguler dan haji khusus.',
        image: '/images/landing/hero-kaaba.jpg',
        verified: true,
    },
    {
        id: 'asita-member',
        title: 'Sertifikasi Keanggotaan Penuh ASITA & HIMPUH',
        institution: 'Dewan Pengurus Pusat ASITA & HIMPUH Indonesia',
        badge: 'Verified Travel Agency',
        year: '2023 - 2025',
        certNumber: 'ASITA-REG/0912/DPP/2023',
        desc: 'Standarisasi profesionalisme biro perjalanan wisata berizin nasional dengan perlindungan hukum dan kode etik kepariwisataan.',
        image: '/images/landing/gallery-jamaah.jpg',
        verified: true,
    },
];

const scrollTo = (id) => {
    const el = document.getElementById(id);
    if (el) {
        el.scrollIntoView({ behavior: 'smooth' });
    }
};

const openAwardModal = (award) => {
    selectedAward.value = award;
};

const closeAwardModal = () => {
    selectedAward.value = null;
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
                        style="background-image: url('/images/landing/hero-kaaba.jpg'); filter: brightness(0.60) contrast(1.05);"
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
                        Mengenal Lebih Dalam PT ALMUBARAK WISATA INTERNATIONAL — Penyelenggara Perjalanan Religi dan Wisata Halal Terpercaya Berizin Kemenag RI.
                    </p>
                </div>
            </div>
        </section>

        <!-- Company Profile & CEO Greeting Section -->
        <section class="w-full py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
                            <strong class="text-on-surface">PT ALMUBARAK WISATA INTERNATIONAL</strong> adalah perusahaan travel terkemuka yang didirikan pada tanggal 15 Maret 2009 di Jakarta dan memiliki kantor operasional di Bogor. Sejak awal berdirinya, kami telah berkomitmen untuk menjadi spesialis dalam layanan perjalanan religi dan wisata halal, dengan visi memberikan pengalaman perjalanan yang berkesan, penuh berkah, dan sesuai dengan nilai-nilai syariat Islam.
                        </p>
                        <p class="font-body-md text-base text-on-surface-variant leading-relaxed">
                            Kami telah melayani lebih dari <strong class="text-primary font-bold">50.000 jamaah umroh dan haji</strong>, serta ribuan wisatawan muslim dari seluruh Indonesia dan mancanegara, membawa mereka ke Tanah Suci dan destinasi wisata halal dunia dengan hotel bintang lima yang strategis di pelataran ring 1, transportasi nyaman, serta pendampingan oleh tour leader dan muthawif berpengalaman lebih dari 15 tahun.
                        </p>

                        <!-- Quick Navigation Buttons (Visi Misi, Tim Kami & Penghargaan) -->
                        <div class="grid grid-cols-3 gap-3 sm:gap-4 pt-4 border-t border-surface-container max-w-xl">
                            <!-- Button Visi & Misi (Link to dedicated page) -->
                            <Link 
                                href="/visi-misi"
                                class="p-3.5 sm:p-4 rounded-2xl bg-surface-container-lowest hover:bg-surface-container border border-surface-container/70 shadow-xs hover:shadow-md transition-all text-center flex flex-col items-center gap-2 cursor-pointer group"
                            >
                                <div class="w-12 h-12 rounded-full bg-emerald-100 text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-[24px]">visibility</span>
                                </div>
                                <h4 class="font-headline-sm text-sm sm:text-base text-on-surface font-bold group-hover:text-primary transition-colors">
                                    Visi &amp; Misi
                                </h4>
                                <p class="font-body-sm text-[11px] text-outline line-clamp-1">Halaman Lengkap</p>
                            </Link>

                            <!-- Button Tim Kami -->
                            <button 
                                @click="scrollTo('tim-kami')"
                                class="p-3.5 sm:p-4 rounded-2xl bg-surface-container-lowest hover:bg-surface-container border border-surface-container/70 shadow-xs hover:shadow-md transition-all text-center flex flex-col items-center gap-2 cursor-pointer group"
                                type="button"
                            >
                                <div class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-[24px]">groups</span>
                                </div>
                                <h4 class="font-headline-sm text-sm sm:text-base text-on-surface font-bold group-hover:text-primary transition-colors">
                                    Tim Kami
                                </h4>
                                <p class="font-body-sm text-[11px] text-outline line-clamp-1">Profesional Berpengalaman</p>
                            </button>

                            <!-- Button Penghargaan -->
                            <button 
                                @click="scrollTo('penghargaan')"
                                class="p-3.5 sm:p-4 rounded-2xl bg-surface-container-lowest hover:bg-surface-container border border-surface-container/70 shadow-xs hover:shadow-md transition-all text-center flex flex-col items-center gap-2 cursor-pointer group"
                                type="button"
                            >
                                <div class="w-12 h-12 rounded-full bg-secondary/10 text-secondary flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <span class="material-symbols-outlined text-[24px]">military_tech</span>
                                </div>
                                <h4 class="font-headline-sm text-sm sm:text-base text-on-surface font-bold group-hover:text-secondary transition-colors">
                                    Penghargaan
                                </h4>
                                <p class="font-body-sm text-[11px] text-outline line-clamp-1">Prestasi Resmi</p>
                            </button>
                        </div>
                    </div>

                    <!-- Right: CEO Card with Authentic images/ceo-face.jpg (Face centered, no cutoffs) -->
                    <div class="lg:col-span-5 flex flex-col items-center">
                        <div class="relative w-full max-w-sm rounded-3xl overflow-hidden shadow-2xl border border-surface-container bg-surface-container-lowest p-6 flex flex-col items-center text-center">
                            <div class="w-52 h-52 rounded-2xl overflow-hidden shadow-lg mb-5 border-4 border-primary/20 bg-surface-container flex items-center justify-center">
                                <img 
                                    src="/images/ceo-face.jpg" 
                                    alt="Ahmad Mubarak - CEO" 
                                    class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-500"
                                />
                            </div>
                            <span class="px-3.5 py-1 rounded-full bg-primary/10 text-primary font-label-sm text-xs font-bold uppercase tracking-widest mb-1">
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
                            <div class="w-full mt-5 pt-4 border-t border-surface-container">
                                <a 
                                    href="https://wa.me/6281260003484?text=Assalamu%27alaikum%20Pak%20Ahmad%20Mubarak,%20saya%20ingin%20berkonsultasi%20terkait%20layanan%20PT%20Almubarak%20Wisata" 
                                    target="_blank"
                                    class="w-full py-2.5 px-4 rounded-xl bg-primary hover:bg-primary-container text-white text-xs font-bold transition-all flex items-center justify-center gap-2 shadow-sm"
                                >
                                    <span class="material-symbols-outlined text-[16px]">chat</span>
                                    <span>Konsultasi dengan Direktur</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Visi & Misi Preview Section with Direct Link to Dedicated Page -->
        <section id="visi-misi" class="w-full py-16 bg-surface-container-low/60 scroll-mt-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
                    <div>
                        <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                            Arah &amp; Prinsip Kami
                        </span>
                        <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                            Visi &amp; Misi Almubarak
                        </h2>
                        <p class="font-body-md text-on-surface-variant mt-2 text-sm sm:text-base max-w-2xl">
                            Landasan fundamental dalam menyelenggarakan setiap perjalanan religi yang amanah dan mabrur.
                        </p>
                    </div>
                    <Link 
                        href="/visi-misi" 
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-primary text-white hover:bg-primary-container font-bold text-xs shadow-sm transition-all shrink-0"
                    >
                        <span>Buka Halaman Visi &amp; Misi Lengkap</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </Link>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Visi -->
                    <div class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm border border-surface-container/70 flex flex-col justify-between">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center mb-5">
                                <span class="material-symbols-outlined text-[30px]">visibility</span>
                            </div>
                            <h3 class="font-headline-sm text-2xl text-primary font-bold mb-3">Visi Kami</h3>
                            <p class="font-body-md text-base text-on-surface-variant leading-relaxed">
                                Menjadi perusahaan travel terdepan dalam layanan umroh, haji, dan wisata halal yang memberikan pengalaman perjalanan yang aman, nyaman, dan penuh berkah bagi setiap pelanggan.
                            </p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-surface-container">
                            <Link href="/visi-misi" class="text-xs font-bold text-primary hover:underline inline-flex items-center gap-1">
                                <span>Pelajari Target Strategis Visi</span>
                                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                            </Link>
                        </div>
                    </div>

                    <!-- Misi -->
                    <div class="bg-surface-container-lowest p-8 rounded-3xl shadow-sm border border-surface-container/70 flex flex-col justify-between">
                        <div>
                            <div class="w-14 h-14 rounded-2xl bg-secondary/10 text-secondary flex items-center justify-center mb-5">
                                <span class="material-symbols-outlined text-[30px]">rocket_launch</span>
                            </div>
                            <h3 class="font-headline-sm text-2xl text-secondary font-bold mb-3">Misi Kami</h3>
                            <ul class="space-y-3 font-body-sm text-sm text-on-surface-variant">
                                <li class="flex items-start gap-2.5">
                                    <span class="material-symbols-outlined text-primary text-[20px] mt-0.5 shrink-0">check_circle</span>
                                    <span>Menyediakan layanan perjalanan berkualitas tinggi dengan standar keamanan dan kenyamanan tertinggi.</span>
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
                        <div class="mt-6 pt-4 border-t border-surface-container">
                            <Link href="/visi-misi" class="text-xs font-bold text-secondary hover:underline inline-flex items-center gap-1">
                                <span>Lihat Nilai Inti &amp; Filosofi Perusahaan</span>
                                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tim Kami Section (id="tim-kami") with perfectly centered face portraits -->
        <section id="tim-kami" class="w-full py-16 scroll-mt-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
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
                            <!-- Photo Container with object-center for guaranteed face alignment -->
                            <div class="relative h-64 overflow-hidden bg-surface-container flex items-center justify-center">
                                <img 
                                    :src="member.image" 
                                    :alt="member.name"
                                    class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-transparent to-transparent flex items-end p-3">
                                    <span class="px-2.5 py-1 rounded-full bg-white/95 text-primary font-bold text-[11px] shadow-sm">
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
                                class="w-full py-2.5 px-3 rounded-xl bg-surface-container hover:bg-primary hover:text-white text-primary text-xs font-bold transition-all flex items-center justify-center gap-1.5 cursor-pointer shadow-xs"
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

        <!-- Penghargaan Section (id="penghargaan") with Real Data & Authentic Ceremony Photo (No icons/emojis) -->
        <section id="penghargaan" class="w-full py-16 bg-surface-container-low/60 scroll-mt-24">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Header Banner with authentic ceremony image -->
                <div class="relative rounded-3xl overflow-hidden mb-12 p-8 sm:p-12 text-center text-white shadow-xl">
                    <div class="absolute inset-0 z-0">
                        <div 
                            class="w-full h-full bg-cover bg-center"
                            style="background-image: url('/images/penghargaan.jpeg'); filter: brightness(0.40);"
                        ></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-[#005138]/90 via-[#005138]/80 to-black/85"></div>
                    </div>
                    <div class="relative z-10 max-w-2xl mx-auto">
                        <span class="inline-flex items-center gap-1.5 px-3.5 py-1 rounded-full bg-white/20 text-[#ffdcc3] font-label-sm text-xs font-bold uppercase tracking-wider mb-3 backdrop-blur-md border border-white/20">
                            <span class="material-symbols-outlined text-[16px]">verified</span>
                            Prestasi &amp; Legalitas Resmi
                        </span>
                        <h2 class="font-headline-lg text-3xl sm:text-4xl font-extrabold tracking-tight">
                            Penghargaan &amp; Pengakuan Resmi
                        </h2>
                        <p class="font-body-md text-white/90 text-sm sm:text-base mt-2 leading-relaxed">
                            Bentuk dedikasi dan standar mutu PT ALMUBARAK WISATA INTERNATIONAL yang diakui secara resmi oleh Kemenag RI, maskapai penerbangan, dan asosiasi B2B internasional.
                        </p>
                    </div>
                </div>

                <!-- Awards Grid (Authentic Certificate Cards with Real Data, No Emojis) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div 
                        v-for="award in awards" 
                        :key="award.id"
                        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-surface-container/70 flex flex-col justify-between group hover:-translate-y-1.5 cursor-pointer"
                        @click="openAwardModal(award)"
                    >
                        <div>
                            <!-- Header with Gold Ribbon Badge -->
                            <div class="p-4 bg-gradient-to-br from-emerald-900 to-[#004832] text-white flex items-center justify-between">
                                <span class="px-2.5 py-0.5 rounded-full bg-amber-400 text-amber-950 font-black text-[10px] uppercase tracking-wider">
                                    {{ award.badge }}
                                </span>
                                <span class="text-xs text-emerald-200 font-bold font-mono">
                                    {{ award.year }}
                                </span>
                            </div>

                            <div class="p-5">
                                <span class="text-[11px] font-mono text-outline block mb-1">
                                    {{ award.certNumber }}
                                </span>
                                <h4 class="font-headline-sm text-base text-primary font-bold leading-snug group-hover:text-primary-container transition-colors">
                                    {{ award.title }}
                                </h4>
                                <p class="font-body-sm text-xs text-on-surface-variant mt-2 leading-relaxed line-clamp-3">
                                    {{ award.desc }}
                                </p>
                            </div>
                        </div>

                        <div class="p-5 pt-0">
                            <div class="p-3 rounded-xl bg-surface-container text-[11px] text-outline mb-3">
                                <span class="block text-on-surface font-semibold text-[10px] uppercase tracking-wider">Lembaga Penerbit:</span>
                                <span class="text-on-surface font-medium">{{ award.institution }}</span>
                            </div>
                            <button 
                                type="button" 
                                class="w-full py-2 px-3 rounded-xl bg-primary/10 hover:bg-primary text-primary hover:text-white text-xs font-bold transition-all flex items-center justify-center gap-1.5"
                            >
                                <span class="material-symbols-outlined text-[16px]">visibility</span>
                                <span>Lihat Dokumentasi &amp; Bukti</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mt-10 text-center">
                    <Link 
                        href="/awards" 
                        class="inline-flex items-center gap-2 px-7 py-3 rounded-full bg-primary text-white font-bold text-xs shadow-md hover:bg-primary-container transition-all hover:scale-105"
                    >
                        <span>Buka Halaman Lengkap Sertifikasi &amp; Penghargaan</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </Link>
                </div>
            </div>
        </section>

        <!-- Award Detail Modal -->
        <div 
            v-if="selectedAward" 
            class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/70 backdrop-blur-sm transition-all"
            @click.self="closeAwardModal"
        >
            <div class="bg-surface-container-lowest max-w-xl w-full rounded-3xl overflow-hidden shadow-2xl border border-surface-container p-6 sm:p-8 animate-in fade-in zoom-in-95 duration-200">
                <div class="flex items-center justify-between pb-4 border-b border-surface-container">
                    <div class="flex items-center gap-2">
                        <span class="px-2.5 py-0.5 rounded-full bg-amber-400 text-amber-950 font-black text-[10px] uppercase tracking-wider">
                            {{ selectedAward.badge }}
                        </span>
                        <span class="text-xs text-outline font-mono">{{ selectedAward.certNumber }}</span>
                    </div>
                    <button 
                        @click="closeAwardModal" 
                        class="w-8 h-8 rounded-full bg-surface-container hover:bg-surface-container-high flex items-center justify-center text-on-surface transition-colors cursor-pointer"
                        type="button"
                    >
                        <span class="material-symbols-outlined text-[20px]">close</span>
                    </button>
                </div>

                <!-- Ceremony Photo Preview -->
                <div class="my-5 rounded-2xl overflow-hidden shadow-md max-h-64 bg-black">
                    <img 
                        :src="selectedAward.image" 
                        :alt="selectedAward.title" 
                        class="w-full h-full object-cover"
                    />
                </div>

                <h3 class="font-headline-sm text-xl text-primary font-bold leading-snug">
                    {{ selectedAward.title }}
                </h3>
                <p class="text-xs text-outline font-semibold mt-1">
                    Lembaga Penerbit: <span class="text-on-surface">{{ selectedAward.institution }}</span> (Tahun {{ selectedAward.year }})
                </p>
                <p class="font-body-md text-sm text-on-surface-variant mt-3 leading-relaxed">
                    {{ selectedAward.desc }}
                </p>

                <div class="mt-6 pt-4 border-t border-surface-container flex justify-end">
                    <button 
                        @click="closeAwardModal" 
                        type="button" 
                        class="px-5 py-2 rounded-xl bg-primary text-white text-xs font-bold hover:bg-primary-container transition-all"
                    >
                        Tutup
                    </button>
                </div>
            </div>
        </div>

        <!-- 5 Pillars Section Component -->
        <FivePillars />

        <!-- CTA Consultation (Matching Image 4) -->
        <CtaBanner />
    </AppLayout>
</template>
