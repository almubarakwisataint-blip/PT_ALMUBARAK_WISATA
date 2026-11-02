<script setup>
import { ref, watch, onMounted, onUnmounted } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';

const selectedAward = ref(null);

const awards = [
    {
        id: 'via-com',
        title: 'Top Performing Travel Partner & Umrah Ticketing Provider',
        institution: 'Via.com Indonesia (PT Advaltis Asia Network)',
        badge: 'Top Agent Award',
        year: '2024',
        certNumber: 'VIA/ID/AGT/2024-088',
        image: '/images/penghargaan.jpeg',
        desc: 'Apresiasi resmi manajemen Via.com Indonesia atas dedikasi luar biasa, pertumbuhan volume penjualan tiket penerbangan grup umrah, dan keandalan sistem reservasi tiket internasional terpercaya.',
        details: [
            'Diterima langsung oleh jajaran Direksi PT Almubarak Wisata',
            'Penghargaan kategori B2B Travel Partner & Group Ticketing',
            'Sinergi rute penerbangan Saudia Airlines, Emirates, dan Garuda Indonesia',
        ],
    },
    {
        id: 'kemenag-ppiu',
        title: 'Sertifikasi Akreditasi A Resmi PPIU Kemenag RI',
        institution: 'Ditjen Penyelenggaraan Haji dan Umrah Kemenag RI',
        badge: 'Akreditasi A Resmi',
        year: '2024',
        certNumber: 'SK Kemenag No. U.412 Tahun 2020',
        image: '/images/penghargaan.jpeg',
        desc: 'Predikat Akreditasi A (Sangat Baik) atas kepatuhan menyeluruh terhadap tata kelola manasik, proteksi dana jamaah melalui virtual account, standar akomodasi hotel pelataran ring 1, dan jaminan 5 Pasti Umrah.',
        details: [
            'Terdaftar dan Terverifikasi Aktif di SISKOPATUH Kemenag RI',
            'Audit kepatuhan syariat dan kelayakan operasional secara periodik',
            'Perlindungan asuransi jiwa dan perjalanan internasional',
        ],
    },
    {
        id: 'airlines-partner',
        title: 'Official Umrah Group Partner Saudia & Garuda Indonesia',
        institution: 'Saudi Arabian Airlines & Garuda Indonesia Group',
        badge: 'Strategic Airlines Partner',
        year: '2024',
        certNumber: 'SV-GA/GRP/UMR-1445/2024',
        image: '/images/landing/hero-kaaba.jpg',
        desc: 'Penghargaan loyalitas dan kemitraan strategis atas komitmen konsisten penyediaan seat penerbangan direct rute Jakarta (CGK) - Jeddah (JED) / Madinah (MED) tanpa transit bagi jamaah umrah dan haji khusus.',
        details: [
            'Alokasi seat grup terkonfirmasi nomor PNR resmi',
            'Kemudahan fasilitas bagasi zam-zam dan bagasi ekstra jamaah',
            'Penerbangan direct tanpa resiko delay transit di negara ketiga',
        ],
    },
    {
        id: 'asita-member',
        title: 'Sertifikasi Keanggotaan Penuh ASITA Indonesia',
        institution: 'Dewan Pengurus Pusat ASITA (Asosiasi Perusahaan Perjalanan Wisata)',
        badge: 'Verified Travel Agency',
        year: '2023 - 2025',
        certNumber: 'ASITA-REG/0912/DPP/2023',
        image: '/images/landing/gallery-jamaah.jpg',
        desc: 'Standardisasi profesionalisme biro perjalanan wisata berizin resmi nasional yang beroperasi sesuai kode etik pariwisata Indonesia, perlindungan hukum konsumen, dan standar pelayanan pelanggan paripurna.',
        details: [
            'Anggota resmi terdaftar di ASITA DPP Jakarta & Jawa Barat',
            'Kepatuhan regulasi BPW (Biro Perjalanan Wisata)',
            'Jaringan kemitraan ground handling terintegrasi di luar negeri',
        ],
    },
    {
        id: 'himpuh-member',
        title: 'Sertifikasi Keanggotaan HIMPUH (Haji & Umrah Khusus)',
        institution: 'Dewan Pimpinan Pusat HIMPUH Indonesia',
        badge: 'Official Member HIMPUH',
        year: '2024',
        certNumber: 'HMP/PPIU/JKT-1502',
        image: '/images/landing/package-haji-furoda.jpg',
        desc: 'Sertifikasi keanggotaan asosiasi penyelenggara haji khusus dan umrah terpercaya dalam mewujudkan ibadah yang aman, transparan, dan sesuai sunnah Rasulullah ﷺ.',
        details: [
            'Mitra strategis e-Hajj Kementerian Haji Kerajaan Arab Saudi',
            'Standardisasi tenda AC Maktab VIP Mina dan Arafah',
            'Pendampingan intensif dokter dan asatidzah berkompeten',
        ],
    },
    {
        id: 'halal-tourism',
        title: 'Keunggulan Wisata Religi & Halal Mancanegara',
        institution: 'Indonesia Halal Tourism & Travel Forum',
        badge: 'Halal Tourism Award',
        year: '2023',
        certNumber: 'HTTF/2023/EXC-042',
        image: '/images/landing/package-turki-plus.jpg',
        desc: 'Pengakuan keunggulan dalam merancang paket wisata halal ke Turki, Jordan, Mesir, dan Uzbekistan dengan jaminan 100% makanan bersertifikat halal, waktu shalat terjaga, dan edukasi sejarah peradaban Islam.',
        details: [
            'Pemandu wisata Muslim bersertifikasi sejarah peradaban Islam',
            'Restoran halal berstandar kebersihan dan mutu internasional',
            'Kombinasi spiritual umrah dengan tadabbur alam dan sejarah',
        ],
    },
];

const openAwardModal = (award) => {
    selectedAward.value = award;
};

const closeAwardModal = () => {
    selectedAward.value = null;
};

watch(selectedAward, (val) => {
    if (typeof document !== 'undefined') {
        document.body.style.overflow = val ? 'hidden' : '';
    }
});

const onKeydown = (e) => {
    if (e.key === 'Escape' && selectedAward.value) {
        closeAwardModal();
    }
};

onMounted(() => {
    window.addEventListener('keydown', onKeydown);
});

onUnmounted(() => {
    window.removeEventListener('keydown', onKeydown);
    if (typeof document !== 'undefined') {
        document.body.style.overflow = '';
    }
});
</script>

<template>
    <Head title="Penghargaan & Sertifikasi Resmi - PT ALMUBARAK WISATA INTERNATIONAL" />

    <AppLayout>
        <!-- Hero Header with Authentic Penghargaan ceremony photo background -->
        <section class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-12">
            <div class="relative w-full rounded-[32px] md:rounded-[40px] overflow-hidden min-h-[380px] lg:min-h-[420px] flex flex-col justify-center items-center text-center p-6 sm:p-12 shadow-2xl border border-surface-container">
                <div class="absolute inset-0 z-0">
                    <div 
                        class="w-full h-full bg-cover bg-center"
                        style="background-image: url('/images/penghargaan.jpeg'); filter: brightness(0.40) contrast(1.05);"
                    ></div>
                    <div class="absolute inset-0 bg-gradient-to-b from-[#005138]/85 via-black/60 to-black/90"></div>
                </div>

                <div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center">
                    <nav class="flex items-center gap-2 text-white/80 text-xs sm:text-sm font-medium mb-4">
                        <Link href="/" class="hover:text-white transition-colors">Beranda</Link>
                        <span>/</span>
                        <Link href="/about" class="hover:text-white transition-colors">Tentang Kami</Link>
                        <span>/</span>
                        <span class="text-secondary-fixed font-bold">Penghargaan</span>
                    </nav>

                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-[#ffdcc3] font-label-sm text-xs font-bold uppercase tracking-wider mb-4 border border-white/20">
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        Prestasi &amp; Rekam Jejak Resmi
                    </span>
                    <h1 class="font-headline-xl text-[34px] sm:text-[46px] lg:text-[54px] text-white font-extrabold tracking-tight leading-tight">
                        Penghargaan &amp; Akreditasi
                    </h1>
                    <p class="font-body-lg text-white/90 text-[16px] sm:text-[18px] mt-4 leading-relaxed max-w-2xl">
                        Bukti nyata komitmen, integritas layanan, dan kepatuhan regulasi PT ALMUBARAK WISATA INTERNATIONAL dalam industri perjalanan religi dan pariwisata halal.
                    </p>
                </div>
            </div>
        </section>

        <!-- Official Award Ceremony Showcase (Via.com Ceremony Photo) -->
        <section class="w-full py-8">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-surface-container-lowest rounded-3xl p-6 sm:p-10 border border-surface-container/70 shadow-sm">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <!-- Ceremony Photo Container -->
                        <div class="lg:col-span-6 rounded-2xl overflow-hidden shadow-lg border-2 border-surface-container bg-black group relative cursor-pointer" @click="openAwardModal(awards[0])">
                            <img 
                                src="/images/penghargaan.jpeg" 
                                alt="Dokumentasi Penyerahan Penghargaan Via.com Indonesia" 
                                class="w-full h-auto object-cover group-hover:scale-105 transition-transform duration-500"
                            />
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span class="px-4 py-2 rounded-xl bg-white/95 text-primary text-xs font-bold flex items-center gap-2 shadow-lg">
                                    <span class="material-symbols-outlined text-[18px]">zoom_in</span>
                                    <span>Klik untuk Memperbesar</span>
                                </span>
                            </div>
                        </div>

                        <!-- Ceremony Description -->
                        <div class="lg:col-span-6 flex flex-col gap-4">
                            <div class="flex items-center gap-2">
                                <span class="px-3 py-1 rounded-full bg-amber-400 text-amber-950 font-black text-xs uppercase tracking-wider">
                                    Dokumentasi Resmi
                                </span>
                                <span class="text-xs font-mono text-outline">Via.com Indonesia Awards</span>
                            </div>
                            <h2 class="font-headline-lg text-2xl sm:text-3xl text-primary font-extrabold tracking-tight">
                                Top B2B Travel Partner &amp; Umrah Ticketing Provider
                            </h2>
                            <p class="font-body-md text-sm sm:text-base text-on-surface-variant leading-relaxed">
                                Foto penyerahan piagam penghargaan resmi dari manajemen <strong class="text-on-surface">Via.com Indonesia (PT Advaltis Asia Network)</strong> kepada jajaran direksi PT Almubarak Wisata. Penghargaan ini menjadi wujud apresiasi atas dedikasi dan keandalan sistem pemesanan tiket pesawat grup umrah internasional yang transparan dan amanah.
                            </p>
                            <div class="grid grid-cols-2 gap-4 pt-2">
                                <div class="p-3.5 rounded-xl bg-surface-container/60">
                                    <span class="block text-xs font-bold text-primary">Penerbit Resmi:</span>
                                    <span class="text-xs text-on-surface-variant font-medium">PT Advaltis Asia Network</span>
                                </div>
                                <div class="p-3.5 rounded-xl bg-surface-container/60">
                                    <span class="block text-xs font-bold text-primary">Kategori Prestasi:</span>
                                    <span class="text-xs text-on-surface-variant font-medium">B2B Umrah Group Ticketing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Awards Grid (Authentic Certificates, No Emojis) -->
        <section class="w-full py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                        Sertifikasi &amp; Standarisasi Mutu
                    </span>
                    <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                        Daftar Piagam &amp; Lisensi Resmi
                    </h2>
                    <p class="font-body-md text-on-surface-variant mt-2 text-sm sm:text-base">
                        Setiap sertifikasi merupakan wujud kepatuhan legalitas yang dapat diverifikasi langsung melalui regulator resmi dan lembaga akreditasi.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div 
                        v-for="award in awards" 
                        :key="award.id"
                        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-surface-container/70 flex flex-col justify-between group hover:-translate-y-1.5 cursor-pointer"
                        @click="openAwardModal(award)"
                    >
                        <div>
                            <!-- Formal Certificate Header -->
                            <div class="p-4 bg-gradient-to-r from-[#005138] to-[#004832] text-white flex items-center justify-between">
                                <span class="px-2.5 py-0.5 rounded-full bg-amber-400 text-amber-950 font-black text-[10px] uppercase tracking-wider">
                                    {{ award.badge }}
                                </span>
                                <span class="text-xs text-emerald-200 font-bold font-mono">
                                    {{ award.year }}
                                </span>
                            </div>

                            <div class="p-6">
                                <span class="text-[11px] font-mono text-outline block mb-1">
                                    {{ award.certNumber }}
                                </span>
                                <h3 class="font-headline-sm text-lg text-primary font-bold leading-snug group-hover:text-primary-container transition-colors">
                                    {{ award.title }}
                                </h3>
                                <p class="font-body-sm text-xs text-on-surface-variant mt-3 leading-relaxed">
                                    {{ award.desc }}
                                </p>
                            </div>
                        </div>

                        <div class="p-6 pt-0">
                            <div class="p-3 rounded-xl bg-surface-container text-xs text-outline mb-4">
                                <span class="block text-on-surface font-semibold text-[10px] uppercase tracking-wider">Lembaga Pemberi:</span>
                                <span class="text-on-surface font-medium">{{ award.institution }}</span>
                            </div>
                            <button 
                                type="button" 
                                class="w-full py-2.5 px-4 rounded-xl bg-primary/10 hover:bg-primary text-primary hover:text-white text-xs font-bold transition-all flex items-center justify-center gap-2 cursor-pointer shadow-xs"
                            >
                                <span class="material-symbols-outlined text-[16px]">verified</span>
                                <span>Lihat Keterangan &amp; Verifikasi</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Back to About Link -->
                <div class="mt-14 text-center">
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

        <!-- Award Detail Modal (Clean, Non-Clipping, Responsive Layout) -->
        <div 
            v-if="selectedAward" 
            class="fixed inset-0 z-50 overflow-y-auto bg-black/80 backdrop-blur-md p-4 sm:p-6 flex justify-center items-start"
            @click.self="closeAwardModal"
        >
            <div class="relative w-full max-w-lg bg-white rounded-3xl shadow-2xl border border-gray-100 overflow-hidden my-4 sm:my-8 flex flex-col animate-in fade-in zoom-in-95 duration-200">
                <!-- Modal Header -->
                <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100 bg-emerald-50/50 shrink-0">
                    <div class="flex items-center gap-2.5">
                        <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-amber-400/20 text-amber-900 border border-amber-400/40 font-bold text-xs uppercase tracking-wider">
                            <span class="material-symbols-outlined text-[15px] text-amber-700">verified</span>
                            {{ selectedAward.badge }}
                        </span>
                        <span class="text-xs text-gray-500 font-mono">{{ selectedAward.certNumber }}</span>
                    </div>
                    <button 
                        @click="closeAwardModal" 
                        class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200 text-gray-600 hover:text-black flex items-center justify-center transition-colors cursor-pointer"
                        type="button"
                        aria-label="Tutup Modal"
                    >
                        <span class="material-symbols-outlined text-[18px]">close</span>
                    </button>
                </div>

                <!-- Modal Body -->
                <div class="p-6 space-y-4">
                    <!-- Preview Image -->
                    <div class="rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-slate-100 h-48 sm:h-56 w-full">
                        <img 
                            :src="selectedAward.image" 
                            :alt="selectedAward.title" 
                            class="w-full h-full object-cover"
                        />
                    </div>

                    <div>
                        <h3 class="font-headline-sm text-lg sm:text-xl text-[#005138] font-extrabold leading-snug">
                            {{ selectedAward.title }}
                        </h3>
                        <p class="text-xs text-gray-500 font-medium mt-1">
                            Lembaga Penerbit: <strong class="text-gray-800">{{ selectedAward.institution }}</strong> (Tahun {{ selectedAward.year }})
                        </p>
                    </div>

                    <p class="font-body-md text-sm text-gray-600 leading-relaxed">
                        {{ selectedAward.desc }}
                    </p>

                    <!-- Details Points -->
                    <div v-if="selectedAward.details && selectedAward.details.length > 0" class="p-4 rounded-xl bg-emerald-50/60 border border-emerald-100 space-y-2">
                        <span class="block text-xs font-bold text-[#005138] uppercase tracking-wider">Poin Legalitas &amp; Pengakuan:</span>
                        <div v-for="(d, i) in selectedAward.details" :key="i" class="flex items-start gap-2 text-xs text-gray-700 leading-relaxed">
                            <span class="material-symbols-outlined text-[#005138] text-[16px] shrink-0 mt-0.5">check_circle</span>
                            <span>{{ d }}</span>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/80 flex items-center justify-between shrink-0">
                    <span class="inline-flex items-center gap-1.5 text-xs text-emerald-700 font-semibold">
                        <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                        Terverifikasi Aktif
                    </span>
                    <button 
                        @click="closeAwardModal" 
                        type="button" 
                        class="px-6 py-2.5 rounded-xl bg-[#005138] hover:bg-[#003d2b] text-white text-xs font-bold transition-all cursor-pointer shadow-sm hover:shadow"
                    >
                        Tutup
                    </button>
                </div>
            </div>
        </div>

        <!-- CTA Consultation -->
        <CtaBanner />
    </AppLayout>
</template>
