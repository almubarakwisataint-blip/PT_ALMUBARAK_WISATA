<script setup>
import { ref, computed, watch, onMounted, onUnmounted } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

const selectedAward = ref(null);

const rawAwards = [
    {
        id: 'via-com',
        titleId: 'Top Performing Travel Partner & Umrah Ticketing Provider',
        titleEn: 'Top Performing Travel Partner & Umrah Ticketing Provider',
        institutionId: 'Via.com Indonesia (PT Advaltis Asia Network)',
        institutionEn: 'Via.com Indonesia (PT Advaltis Asia Network)',
        badgeId: 'Top Agent Award',
        badgeEn: 'Top Agent Award',
        year: '2024',
        certNumber: 'VIA/ID/AGT/2024-088',
        image: '/images/penghargaan.jpeg',
        descId: 'Apresiasi resmi manajemen Via.com Indonesia atas dedikasi luar biasa, pertumbuhan volume penjualan tiket penerbangan grup umrah, dan keandalan sistem reservasi tiket internasional terpercaya.',
        descEn: 'Official commendation from Via.com Indonesia management for exemplary dedication, group flight booking volume, and proven international ticketing reliability.',
        detailsId: [
            'Diterima langsung oleh jajaran Direksi PT Almubarak Wisata',
            'Penghargaan kategori B2B Travel Partner & Group Ticketing',
            'Sinergi rute penerbangan Saudia Airlines, Emirates, dan Garuda Indonesia',
        ],
        detailsEn: [
            'Received directly by the Board of Directors of PT Almubarak Wisata',
            'Award Category: B2B Travel Partner & Group Ticketing',
            'Route synergies with Saudia Airlines, Emirates, and Garuda Indonesia',
        ],
    },
    {
        id: 'kemenag-ppiu',
        titleId: 'Sertifikasi Akreditasi A Resmi PPIU Kemenag RI',
        titleEn: 'Official Grade A Accreditation PPIU Ministry of Religious Affairs',
        institutionId: 'Ditjen Penyelenggaraan Haji dan Umrah Kemenag RI',
        institutionEn: 'DG of Hajj & Umrah Ministry of Religious Affairs RI',
        badgeId: 'Akreditasi A Resmi',
        badgeEn: 'Official Grade A',
        year: '2024',
        certNumber: 'SK Kemenag No. U.412 Tahun 2020',
        image: '/images/penghargaan.jpeg',
        descId: 'Predikat Akreditasi A (Sangat Baik) atas kepatuhan menyeluruh terhadap tata kelola manasik, proteksi dana jamaah melalui virtual account, standar akomodasi hotel pelataran ring 1, dan jaminan 5 Pasti Umrah.',
        descEn: 'Grade A Accreditation (Excellent) for comprehensive governance compliance, secure virtual account escrow, ring 1 courtyard hotels, and the 5 Certainty Guarantees.',
        detailsId: [
            'Terdaftar dan Terverifikasi Aktif di SISKOPATUH Kemenag RI',
            'Audit kepatuhan syariat dan kelayakan operasional secara periodik',
            'Perlindungan asuransi jiwa dan perjalanan internasional',
        ],
        detailsEn: [
            'Verified active registration in SISKOPATUH Ministry system',
            'Periodic Sharia compliance and operational feasibility audits',
            'Comprehensive international life and travel insurance coverage',
        ],
    },
    {
        id: 'airlines-partner',
        titleId: 'Official Umrah Group Partner Saudia & Garuda Indonesia',
        titleEn: 'Official Umrah Group Partner Saudia & Garuda Indonesia',
        institutionId: 'Saudi Arabian Airlines & Garuda Indonesia Group',
        institutionEn: 'Saudi Arabian Airlines & Garuda Indonesia Group',
        badgeId: 'Strategic Airlines Partner',
        badgeEn: 'Strategic Airlines Partner',
        year: '2024',
        certNumber: 'SV-GA/GRP/UMR-1445/2024',
        image: '/images/landing/hero-kaaba.jpg',
        descId: 'Penghargaan loyalitas dan kemitraan strategis atas komitmen konsisten penyediaan seat penerbangan direct rute Jakarta (CGK) - Jeddah (JED) / Madinah (MED) tanpa transit bagi jamaah umrah dan haji khusus.',
        descEn: 'Strategic partner honor for consistent direct flight block-seats (CGK to JED/MED) with no transit delays for Umrah and VIP Hajj pilgrims.',
        detailsId: [
            'Alokasi seat grup terkonfirmasi nomor PNR resmi',
            'Kemudahan fasilitas bagasi zam-zam dan bagasi ekstra jamaah',
            'Penerbangan direct tanpa resiko delay transit di negara ketiga',
        ],
        detailsEn: [
            'Confirmed group seats with official airline PNR verification',
            'Dedicated Zamzam water logistics and extra luggage privileges',
            'Direct routes without transit delay risks',
        ],
    },
    {
        id: 'asita-member',
        titleId: 'Sertifikasi Keanggotaan Penuh ASITA Indonesia',
        titleEn: 'Full Certified Membership ASITA Indonesia',
        institutionId: 'Dewan Pengurus Pusat ASITA (Asosiasi Perusahaan Perjalanan Wisata)',
        institutionEn: 'Central Executive Board ASITA Indonesia',
        badgeId: 'Verified Travel Agency',
        badgeEn: 'Verified Travel Agency',
        year: '2023 - 2025',
        certNumber: 'ASITA-REG/0912/DPP/2023',
        image: '/images/landing/gallery-jamaah.jpg',
        descId: 'Standardisasi profesionalisme biro perjalanan wisata berizin resmi nasional yang beroperasi sesuai kode etik pariwisata Indonesia, perlindungan hukum konsumen, dan standar pelayanan pelanggan paripurna.',
        descEn: 'National professional accreditation guaranteeing ethical tourism compliance, legal consumer protections, and service excellence.',
        detailsId: [
            'Anggota resmi terdaftar di ASITA DPP Jakarta & Jawa Barat',
            'Kepatuhan regulasi BPW (Biro Perjalanan Wisata)',
            'Jaringan kemitraan ground handling terintegrasi di luar negeri',
        ],
        detailsEn: [
            'Officially registered member in ASITA Jakarta & West Java',
            'Full compliance with national travel agency regulations',
            'Integrated international ground handling network',
        ],
    },
    {
        id: 'himpuh-member',
        titleId: 'Sertifikasi Keanggotaan HIMPUH (Haji & Umrah Khusus)',
        titleEn: 'Certified Member of HIMPUH (Special Hajj & Umrah)',
        institutionId: 'Dewan Pimpinan Pusat HIMPUH Indonesia',
        institutionEn: 'Central Leadership Council HIMPUH Indonesia',
        badgeId: 'Official Member HIMPUH',
        badgeEn: 'Official Member HIMPUH',
        year: '2024',
        certNumber: 'HMP/PPIU/JKT-1502',
        image: '/images/landing/package-haji-furoda.jpg',
        descId: 'Sertifikasi keanggotaan asosiasi penyelenggara haji khusus dan umrah terpercaya dalam mewujudkan ibadah yang aman, transparan, dan sesuai sunnah Rasulullah ﷺ.',
        descEn: 'Certification in the esteemed association of special hajj and umrah operators dedicated to transparent, Sunnah-compliant spiritual journeys.',
        detailsId: [
            'Mitra strategis e-Hajj Kementerian Haji Kerajaan Arab Saudi',
            'Standardisasi tenda AC Maktab VIP Mina dan Arafah',
            'Pendampingan intensif dokter dan asatidzah berkompeten',
        ],
        detailsEn: [
            'Strategic partner with Saudi Ministry of Hajj e-portal',
            'Standardized VIP air-conditioned Mina & Arafat tents',
            'Comprehensive accompaniment by physicians and certified scholars',
        ],
    },
    {
        id: 'halal-tourism',
        titleId: 'Keunggulan Wisata Religi & Halal Mancanegara',
        titleEn: 'Excellence in Global Halal & Heritage Tourism',
        institutionId: 'Indonesia Halal Tourism & Travel Forum',
        institutionEn: 'Indonesia Halal Tourism & Travel Forum',
        badgeId: 'Halal Tourism Award',
        badgeEn: 'Halal Tourism Award',
        year: '2023',
        certNumber: 'HTTF/2023/EXC-042',
        image: '/images/landing/package-turki-plus.jpg',
        descId: 'Pengakuan keunggulan dalam merancang paket wisata halal ke Turki, Jordan, Mesir, dan Uzbekistan dengan jaminan 100% makanan bersertifikat halal, waktu shalat terjaga, dan edukasi sejarah peradaban Islam.',
        descEn: 'Honored for exceptional halal travel itineraries in Turkey, Jordan, Egypt, and Uzbekistan with 100% halal gastronomy and preserved prayer schedules.',
        detailsId: [
            'Pemandu wisata Muslim bersertifikasi sejarah peradaban Islam',
            'Restoran halal berstandar kebersihan dan mutu internasional',
            'Kombinasi spiritual umrah dengan tadabbur alam dan sejarah',
        ],
        detailsEn: [
            'Certified Muslim historians and licensed guides',
            'Internationally audited halal dining establishments',
            'Spiritual Umrah seamlessly paired with Islamic civilizational history',
        ],
    },
];

const awards = computed(() => {
    const isEn = locale.value === 'EN';
    return rawAwards.map(a => ({
        id: a.id,
        title: isEn ? a.titleEn : a.titleId,
        institution: isEn ? a.institutionEn : a.institutionId,
        badge: isEn ? a.badgeEn : a.badgeId,
        year: a.year,
        certNumber: a.certNumber,
        desc: isEn ? a.descEn : a.descId,
        image: a.image,
        details: isEn ? a.detailsEn : a.detailsId,
    }));
});

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
    <Head :title="locale === 'ID' ? 'Penghargaan & Sertifikasi Resmi - PT ALMUBARAK WISATA INTERNATIONAL' : 'Official Awards & Accreditations - PT ALMUBARAK WISATA INTERNATIONAL'" />

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
                        <Link href="/" class="hover:text-white transition-colors">{{ t('nav_home') }}</Link>
                        <span>/</span>
                        <Link href="/about" class="hover:text-white transition-colors">{{ t('nav_about') }}</Link>
                        <span>/</span>
                        <span class="text-secondary-fixed font-bold">{{ t('nav_awards') }}</span>
                    </nav>

                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-[#ffdcc3] font-label-sm text-xs font-bold uppercase tracking-wider mb-4 border border-white/20">
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        {{ locale === 'ID' ? 'Prestasi & Rekam Jejak Resmi' : 'Official Track Record & Honors' }}
                    </span>
                    <h1 class="font-headline-xl text-[34px] sm:text-[46px] lg:text-[54px] text-white font-extrabold tracking-tight leading-tight">
                        {{ locale === 'ID' ? 'Penghargaan & Akreditasi' : 'Awards & Accreditations' }}
                    </h1>
                    <p class="font-body-lg text-white/90 text-[16px] sm:text-[18px] mt-4 leading-relaxed max-w-2xl">
                        {{ locale === 'ID' ? 'Bukti nyata komitmen, integritas layanan, dan kepatuhan regulasi PT ALMUBARAK WISATA INTERNATIONAL dalam industri perjalanan religi dan pariwisata halal.' : 'Concrete evidence of service integrity, regulatory compliance, and excellence of PT ALMUBARAK WISATA INTERNATIONAL in religious pilgrimage hospitality.' }}
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
                                    <span>{{ locale === 'ID' ? 'Klik untuk Memperbesar' : 'Click to Enlarge' }}</span>
                                </span>
                            </div>
                        </div>

                        <!-- Ceremony Description -->
                        <div class="lg:col-span-6 flex flex-col gap-4">
                            <div class="flex items-center gap-2">
                                <span class="px-3 py-1 rounded-full bg-amber-400 text-amber-950 font-black text-xs uppercase tracking-wider">
                                    {{ locale === 'ID' ? 'Dokumentasi Resmi' : 'Official Document' }}
                                </span>
                                <span class="text-xs font-mono text-outline">Via.com Indonesia Awards</span>
                            </div>
                            <h2 class="font-headline-lg text-2xl sm:text-3xl text-primary font-extrabold tracking-tight">
                                Top B2B Travel Partner &amp; Umrah Ticketing Provider
                            </h2>
                            <p class="font-body-md text-sm sm:text-base text-on-surface-variant leading-relaxed">
                                {{ locale === 'ID'
                                    ? 'Foto penyerahan piagam penghargaan resmi dari manajemen Via.com Indonesia (PT Advaltis Asia Network) kepada jajaran direksi PT Almubarak Wisata. Penghargaan ini menjadi wujud apresiasi atas dedikasi dan keandalan sistem pemesanan tiket pesawat grup umrah internasional yang transparan dan amanah.'
                                    : 'Presentation ceremony of the official award certificate from the management of Via.com Indonesia (PT Advaltis Asia Network) to the Board of Directors of PT Almubarak Wisata, acknowledging transparent, trusted group flight ticketing and exceptional reliability.'
                                }}
                            </p>
                            <div class="grid grid-cols-2 gap-4 pt-2">
                                <div class="p-3.5 rounded-xl bg-surface-container/60">
                                    <span class="block text-xs font-bold text-primary">{{ locale === 'ID' ? 'Penerbit Resmi:' : 'Official Issuer:' }}</span>
                                    <span class="text-xs text-on-surface-variant font-medium">PT Advaltis Asia Network</span>
                                </div>
                                <div class="p-3.5 rounded-xl bg-surface-container/60">
                                    <span class="block text-xs font-bold text-primary">{{ locale === 'ID' ? 'Kategori Prestasi:' : 'Category:' }}</span>
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
                        {{ locale === 'ID' ? 'Sertifikasi & Standarisasi Mutu' : 'Certifications & Quality Standards' }}
                    </span>
                    <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                        {{ locale === 'ID' ? 'Daftar Piagam & Lisensi Resmi' : 'List of Certificates & Official Licenses' }}
                    </h2>
                    <p class="font-body-md text-on-surface-variant mt-2 text-sm sm:text-base">
                        {{ locale === 'ID' ? 'Setiap sertifikasi merupakan wujud kepatuhan legalitas yang dapat diverifikasi langsung melalui regulator resmi dan lembaga akreditasi.' : 'Every certification represents verifiable regulatory compliance through official government portals and accreditation boards.' }}
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
                                <span class="block text-on-surface font-semibold text-[10px] uppercase tracking-wider">{{ locale === 'ID' ? 'Lembaga Pemberi:' : 'Awarding Institution:' }}</span>
                                <span class="text-on-surface font-medium">{{ award.institution }}</span>
                            </div>
                            <button 
                                type="button" 
                                class="w-full py-2.5 px-4 rounded-xl bg-primary/10 hover:bg-primary text-primary hover:text-white text-xs font-bold transition-all flex items-center justify-center gap-2 cursor-pointer shadow-xs"
                            >
                                <span class="material-symbols-outlined text-[16px]">verified</span>
                                <span>{{ locale === 'ID' ? 'Lihat Keterangan & Verifikasi' : 'View Details & Verification' }}</span>
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
                        <span>{{ locale === 'ID' ? 'Kembali ke Halaman Tentang Kami' : 'Back to About Us Page' }}</span>
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
                            {{ locale === 'ID' ? 'Lembaga Penerbit:' : 'Awarding Institution:' }} <strong class="text-gray-800">{{ selectedAward.institution }}</strong> ({{ locale === 'ID' ? 'Tahun' : 'Year' }} {{ selectedAward.year }})
                        </p>
                    </div>

                    <p class="font-body-md text-sm text-gray-600 leading-relaxed">
                        {{ selectedAward.desc }}
                    </p>

                    <!-- Details Points -->
                    <div v-if="selectedAward.details && selectedAward.details.length > 0" class="p-4 rounded-xl bg-emerald-50/60 border border-emerald-100 space-y-2">
                        <span class="block text-xs font-bold text-[#005138] uppercase tracking-wider">{{ locale === 'ID' ? 'Poin Legalitas & Pengakuan:' : 'Key Legalities & Accreditations:' }}</span>
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
                        {{ locale === 'ID' ? 'Terverifikasi Aktif' : 'Active & Verified' }}
                    </span>
                    <button 
                        @click="closeAwardModal" 
                        type="button" 
                        class="px-6 py-2.5 rounded-xl bg-[#005138] hover:bg-[#003d2b] text-white text-xs font-bold transition-all cursor-pointer shadow-sm hover:shadow"
                    >
                        {{ locale === 'ID' ? 'Tutup' : 'Close' }}
                    </button>
                </div>
            </div>
        </div>

        <!-- CTA Consultation -->
        <CtaBanner />
    </AppLayout>
</template>
