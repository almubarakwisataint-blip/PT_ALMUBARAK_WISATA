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
        image: '/images/ceo.jpg',
        positionStyle: 'object-position: 50% 25%;',
        phone: '6281260003484',
    },
    {
        name: 'Ust. H. Abdullah Syarif, Lc.',
        position: 'Ketua Dewan Pembimbing Syariah',
        description: 'Membimbing jamaah dalam manasik dan pelaksanaan thawaf, sa\'i, serta kajian fiqih ibadah sesuai sunnah Rasulullah ﷺ.',
        image: '/images/landing/testi-fachri.jpg',
        positionStyle: 'object-position: 50% 30%;',
        phone: '6281260003484',
    },
    {
        name: 'Hj. Siti Fatimah, S.E.',
        position: 'Direktur Operasional & Pelayanan Jamaah',
        description: 'Mengawasi kenyamanan akomodasi hotel pelataran ring 1, handling bandara, serta pendampingan jamaah lansia dan keluarga.',
        image: '/images/landing/testi-siti.jpg',
        positionStyle: 'object-position: 70% 25%;',
        phone: '6281180002807',
    },
    {
        name: 'H. Firman Hidayat, S.Kom.',
        position: 'Manajer Tiket, Hotel & Visa Provider',
        description: 'Spesialis reservasi maskapai direct (Saudia/Garuda), tasreh visa Saudi, dan tiket kereta cepat Haramain Express.',
        image: '/images/landing/testi-hendra.jpg',
        positionStyle: 'object-position: 50% 12%;',
        phone: '6281180002807',
    },
];

const teamList = computed(() => {
    if (props.teams && props.teams.length > 0) {
        return props.teams.map((t, idx) => ({
            name: t.name,
            position: t.position,
            description: t.description || 'Profesional berpengalaman dalam penyelenggaraan ibadah umrah dan haji.',
            image: t.image ? (t.image.startsWith('http') || t.image.startsWith('/') ? t.image : `/storage/${t.image}`) : (defaultTeams[idx]?.image || '/images/ceo.jpg'),
            positionStyle: defaultTeams[idx]?.positionStyle || 'object-position: center;',
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
        details: [
            'Diterima langsung oleh jajaran Direksi PT Almubarak Wisata',
            'Penghargaan kategori B2B Travel Partner & Group Ticketing',
            'Sinergi rute penerbangan Saudia Airlines, Emirates, dan Garuda Indonesia',
        ],
    },
    {
        id: 'kemenag-ppiu',
        title: 'Akreditasi A Resmi PPIU Kemenag RI',
        institution: 'Ditjen Penyelenggaraan Haji & Umrah Kemenag RI',
        badge: 'Akreditasi A Resmi',
        year: '2024',
        certNumber: 'SK Kemenag No. U.412 Tahun 2020',
        desc: 'Predikat Akreditasi A untuk kepatuhan tata kelola manasik, proteksi dana jamaah melalui virtual account, standar akomodasi hotel pelataran ring 1, dan jaminan 5 Pasti Umrah.',
        image: '/images/penghargaan.jpeg',
        details: [
            'Terdaftar dan Terverifikasi Aktif di SISKOPATUH Kemenag RI',
            'Audit kepatuhan syariat dan kelayakan operasional secara periodik',
            'Perlindungan asuransi jiwa dan perjalanan internasional',
        ],
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
        details: [
            'Alokasi seat grup terkonfirmasi nomor PNR resmi',
            'Kemudahan fasilitas bagasi zam-zam dan bagasi ekstra jamaah',
            'Penerbangan direct tanpa resiko delay transit di negara ketiga',
        ],
    },
    {
        id: 'asita-member',
        title: 'Sertifikasi Keanggotaan Penuh ASITA & HIMPUH',
        institution: 'Dewan Pengurus Pusat ASITA & HIMPUH Indonesia',
        badge: 'Verified Travel Agency',
        year: '2023 - 2025',
        certNumber: 'ASITA-REG/0912/DPP/2023',
        desc: 'Standarisasi profesionalisme biro perjalanan wisata berizin nasional dengan perlindungan hukum konsumen dan kepatuhan kode etik pariwisata.',
        image: '/images/landing/gallery-jamaah.jpg',
        details: [
            'Anggota resmi terdaftar di ASITA DPP Jakarta & Jawa Barat',
            'Kepatuhan regulasi BPW (Biro Perjalanan Wisata)',
            'Jaringan kemitraan ground handling terintegrasi di luar negeri',
        ],
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
                                <p class="font-body-sm text-xs text-outline">Prestasi Resmi</p>
                            </button>
                        </div>
                    </div>

                    <!-- Right: CEO Card with Authentic images/ceo.jpg focused on face -->
                    <div class="lg:col-span-5 flex flex-col items-center">
                        <div class="relative w-full max-w-sm rounded-3xl overflow-hidden shadow-2xl border border-surface-container bg-surface-container-lowest p-6 flex flex-col items-center text-center">
                            <div class="w-52 h-52 rounded-2xl overflow-hidden shadow-lg mb-5 border-4 border-primary/20 bg-surface-container">
                                <img 
                                    src="/images/ceo.jpg" 
                                    alt="Ahmad Mubarak - CEO" 
                                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                                    style="object-position: 50% 25%;"
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

        <!-- Tim Kami Section (id="tim-kami") with authentic original images and no black bars -->
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
                            <!-- Member Photo with natural aspect cover and zero black bars -->
                            <div class="relative h-64 overflow-hidden bg-surface-container">
                                <img 
                                    :src="member.image" 
                                    :alt="member.name"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    :style="member.positionStyle"
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

        <!-- Award Detail Modal (Scrollable on all screens with sticky header & footer) -->
        <div 
            v-if="selectedAward" 
            class="fixed inset-0 z-50 overflow-y-auto bg-black/75 backdrop-blur-sm flex items-center justify-center p-3 sm:p-6"
            @click.self="closeAwardModal"
        >
            <div class="bg-surface-container-lowest max-w-xl w-full rounded-3xl shadow-2xl border border-surface-container my-auto flex flex-col max-h-[88vh] overflow-hidden animate-in fade-in zoom-in-95 duration-200">
                <!-- Sticky Modal Header -->
                <div class="flex items-center justify-between p-5 border-b border-surface-container bg-surface-container-lowest shrink-0">
                    <div class="flex items-center gap-2">
                        <span class="px-2.5 py-0.5 rounded-full bg-amber-400 text-amber-950 font-black text-[10px] uppercase tracking-wider">
                            {{ selectedAward.badge }}
                        </span>
                        <span class="text-xs text-outline font-mono">{{ selectedAward.certNumber }}</span>
                    </div>
                    <button 
                        @click="closeAwardModal" 
                        class="w-9 h-9 rounded-full bg-surface-container hover:bg-surface-container-high flex items-center justify-center text-on-surface transition-colors cursor-pointer"
                        type="button"
                        aria-label="Tutup Modal"
                    >
                        <span class="material-symbols-outlined text-[20px]">close</span>
                    </button>
                </div>

                <!-- Scrollable Modal Body -->
                <div class="overflow-y-auto p-5 sm:p-6 space-y-4 max-h-[calc(88vh-130px)] overscroll-contain">
                    <!-- Preview Image -->
                    <div class="rounded-2xl overflow-hidden shadow-md max-h-64 bg-black flex items-center justify-center">
                        <img 
                            :src="selectedAward.image" 
                            :alt="selectedAward.title" 
                            class="w-full h-auto max-h-64 object-contain"
                        />
                    </div>

                    <h3 class="font-headline-sm text-xl text-primary font-bold leading-snug">
                        {{ selectedAward.title }}
                    </h3>
                    <p class="text-xs text-outline font-semibold">
                        Lembaga Penerbit: <span class="text-on-surface">{{ selectedAward.institution }}</span> (Tahun {{ selectedAward.year }})
                    </p>
                    <p class="font-body-md text-sm text-on-surface-variant leading-relaxed">
                        {{ selectedAward.desc }}
                    </p>

                    <!-- Details Points -->
                    <div v-if="selectedAward.details && selectedAward.details.length > 0" class="p-4 rounded-2xl bg-surface-container/60 space-y-1.5">
                        <span class="block text-xs font-bold text-primary mb-2">Poin Legalitas &amp; Pengakuan:</span>
                        <div v-for="(d, i) in selectedAward.details" :key="i" class="flex items-center gap-2 text-xs text-on-surface-variant">
                            <span class="material-symbols-outlined text-primary text-[15px]">check_circle</span>
                            <span>{{ d }}</span>
                        </div>
                    </div>
                </div>

                <!-- Sticky Modal Footer -->
                <div class="p-4 sm:p-5 border-t border-surface-container bg-surface-container-low/40 flex items-center justify-between shrink-0">
                    <span class="text-[11px] text-outline font-mono">Status: Terverifikasi Aktif</span>
                    <button 
                        @click="closeAwardModal" 
                        type="button" 
                        class="px-5 py-2 rounded-xl bg-primary text-white text-xs font-bold hover:bg-primary-container transition-all cursor-pointer shadow-sm"
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
