<script setup>
import { computed } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';
import { useI18n } from '@/Composables/useI18n';

const props = defineProps({
    awardId: {
        type: String,
        default: 'kemenag-ppiu',
    },
});

const { locale, t } = useI18n();

const awardsData = [
    {
        id: 'kemenag-ppiu',
        titleId: 'Akreditasi A Resmi PPIU Kemenag RI',
        titleEn: 'Official Grade A Accreditation PPIU Ministry of Religious Affairs',
        institutionId: 'Ditjen Penyelenggaraan Haji dan Umrah Kemenag RI',
        institutionEn: 'DG of Hajj & Umrah Ministry of Religious Affairs RI',
        badgeId: 'Akreditasi A Resmi',
        badgeEn: 'Official Grade A',
        year: '2024',
        certNumber: 'SK Kemenag No. U.412 Tahun 2020',
        image: '/images/penghargaan.jpeg',
        verifyUrl: 'https://siskopatuh.kemenag.go.id',
        verifyDomain: 'siskopatuh.kemenag.go.id',
        secondaryUrl: 'https://haji.kemenag.go.id',
        descId: 'Predikat Akreditasi A (Sangat Baik) atas kepatuhan menyeluruh terhadap tata kelola manasik, proteksi dana jamaah melalui sistem virtual account resmi, standar akomodasi hotel pelataran ring 1, dan komitmen jaminan 5 Pasti Umrah.',
        descEn: 'Grade A Accreditation (Excellent) for comprehensive governance compliance, secure virtual account escrow, ring 1 courtyard hotels, and the 5 Certainty Guarantees.',
        detailsId: [
            'Terdaftar dan Terverifikasi Aktif di SISKOPATUH Kemenag RI',
            'Audit kepatuhan syariat dan kelayakan operasional secara periodik',
            'Perlindungan asuransi jiwa dan perjalanan internasional resmi',
            'Pemberangkatan bergaransi dengan nomor visa e-Hajj dan tasreh resmi',
        ],
        detailsEn: [
            'Verified active registration in SISKOPATUH Ministry system',
            'Periodic Sharia compliance and operational feasibility audits',
            'Comprehensive international life and travel insurance coverage',
            'Guaranteed departures with official e-Hajj visas and permits',
        ],
    },
    {
        id: 'via-com',
        titleId: 'Top Performing Travel Partner & Umrah Ticketing Provider',
        titleEn: 'Top Performing Travel Partner & Umrah Ticketing Provider',
        institutionId: 'Via.com Indonesia (PT Adirama Mitra Sejahtera)',
        institutionEn: 'Via.com Indonesia (PT Adirama Mitra Sejahtera)',
        badgeId: 'Top Agent Award',
        badgeEn: 'Top Agent Award',
        year: '2024',
        certNumber: 'VIA/ID/AGT/2024-088',
        image: '/images/penghargaan.jpeg',
        verifyUrl: 'https://via.id',
        verifyDomain: 'via.id',
        secondaryUrl: 'https://via.com',
        descId: 'Apresiasi resmi manajemen Via.com Indonesia pada Gala Award Nasional atas dedikasi luar biasa, pertumbuhan volume penjualan tiket penerbangan grup umrah, dan keandalan sistem reservasi tiket maskapai internasional terpercaya.',
        descEn: 'Official commendation from Via.com Indonesia at the National Gala Awards for exemplary group flight booking volume, and proven international ticketing reliability.',
        detailsId: [
            'Diterima langsung oleh jajaran Direksi PT Almubarak Wisata',
            'Penghargaan kategori B2B Travel Partner & Group Ticketing',
            'Sinergi rute penerbangan Saudia Airlines, Emirates, dan Garuda Indonesia',
            'Integrasi sistem reservasi instan tiket perjalanan ibadah',
        ],
        detailsEn: [
            'Received directly by the Board of Directors of PT Almubarak Wisata',
            'Award Category: B2B Travel Partner & Group Ticketing',
            'Route synergies with Saudia Airlines, Emirates, and Garuda Indonesia',
            'Instant booking and reservation integration for holy journey tickets',
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
        verifyUrl: 'https://asita.or.id',
        verifyDomain: 'asita.or.id',
        secondaryUrl: 'https://asita.or.id',
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
        verifyUrl: 'https://www.saudia.com',
        verifyDomain: 'saudia.com',
        secondaryUrl: 'https://www.garuda-indonesia.com',
        descId: 'Penghargaan loyalitas dan kemitraan strategis atas komitmen konsisten penyediaan seat penerbangan direct rute Jakarta (CGK) - Jeddah (JED) / Madinah (MED) tanpa transit bagi jamaah umrah dan haji khusus.',
        descEn: 'Strategic partner honor for consistent direct flight block-seats (CGK to JED/MED) with no transit delays for Umrah and VIP Hajj pilgrims.',
        detailsId: [
            'Alokasi seat grup terkonfirmasi nomor PNR resmi maskapai',
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
        verifyUrl: 'https://himpuh.or.id',
        verifyDomain: 'himpuh.or.id',
        secondaryUrl: 'https://himpuh.or.id',
        descId: 'Sertifikasi keanggotaan himpunan penyelenggara haji khusus dan umrah resmi Indonesia yang berpegang teguh pada komitmen transparansi biaya, manasik sunnah, dan perlindungan penuh jamaah haji khusus & furoda.',
        descEn: 'Certification in the association of special hajj and umrah operators dedicated to transparent, Sunnah-compliant spiritual journeys and full pilgrim protections.',
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
        verifyUrl: 'https://kemenparekraf.go.id',
        verifyDomain: 'kemenparekraf.go.id',
        secondaryUrl: 'https://kemenparekraf.go.id',
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

const award = computed(() => {
    const found = awardsData.find(a => a.id === props.awardId) || awardsData[0];
    const isEn = locale.value === 'EN';
    return {
        id: found.id,
        title: isEn ? found.titleEn : found.titleId,
        institution: isEn ? found.institutionEn : found.institutionId,
        badge: isEn ? found.badgeEn : found.badgeId,
        year: found.year,
        certNumber: found.certNumber,
        image: found.image,
        verifyUrl: found.verifyUrl,
        verifyDomain: found.verifyDomain,
        secondaryUrl: found.secondaryUrl,
        desc: isEn ? found.descEn : found.descId,
        details: isEn ? found.detailsEn : found.detailsId,
    };
});
</script>

<template>
    <Head :title="award.title + ' - Bukti Resmi Almubarak Wisata'" />

    <AppLayout>
        <!-- Top Breadcrumbs & Hero Header -->
        <section class="w-full bg-gradient-to-b from-surface-container/60 via-surface to-surface pt-10 pb-8 border-b border-surface-container">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Breadcrumb -->
                <nav class="flex items-center gap-2 text-xs text-outline mb-6 font-medium">
                    <Link href="/" class="hover:text-primary transition-colors">{{ t('nav_home') }}</Link>
                    <span>/</span>
                    <Link href="/awards" class="hover:text-primary transition-colors">{{ t('nav_awards') }}</Link>
                    <span>/</span>
                    <span class="text-on-surface font-semibold truncate">{{ award.title }}</span>
                </nav>

                <div class="flex flex-wrap items-center gap-3 mb-4">
                    <span class="inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full bg-amber-400/20 text-amber-900 border border-amber-400/40 font-black text-xs uppercase tracking-wider">
                        <span class="material-symbols-outlined text-[16px] text-amber-700">verified</span>
                        {{ award.badge }}
                    </span>
                    <span class="px-3 py-1 rounded-full bg-emerald-50 text-emerald-800 border border-emerald-200 text-xs font-mono font-bold">
                        {{ award.certNumber }}
                    </span>
                    <span class="px-3 py-1 rounded-full bg-surface-container text-on-surface-variant text-xs font-mono font-bold">
                        {{ locale === 'ID' ? 'Tahun ' + award.year : 'Year ' + award.year }}
                    </span>
                </div>

                <h1 class="font-headline-xl text-3xl sm:text-4xl lg:text-[40px] font-black text-[#005138] leading-tight tracking-tight">
                    {{ award.title }}
                </h1>
                <p class="font-body-md text-sm sm:text-base text-gray-600 mt-2">
                    {{ locale === 'ID' ? 'Lembaga Penerbit Resmi:' : 'Official Issuing Authority:' }} <strong class="text-gray-900">{{ award.institution }}</strong>
                </p>
            </div>
        </section>

        <!-- Main Content Area -->
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-14">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                
                <!-- Left Column (7 cols): Certificate Photo & Description -->
                <div class="lg:col-span-7 space-y-6">
                    <!-- High-Resolution Certificate / Ceremony Photo (Persis Gambar 5) -->
                    <div class="relative rounded-3xl overflow-hidden bg-white shadow-xl border border-gray-200 group">
                        <img 
                            :src="award.image" 
                            :alt="award.title" 
                            class="w-full h-auto max-h-[460px] object-cover transition-transform duration-500 group-hover:scale-[1.02]"
                        />
                        <div class="absolute bottom-0 inset-x-0 p-4 bg-gradient-to-t from-black/80 via-black/40 to-transparent text-white text-xs flex items-center justify-between">
                            <span class="font-medium">Dokumentasi Resmi Penyerahan Piagam</span>
                            <span class="flex items-center gap-1 font-mono text-emerald-300">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                                Terverifikasi
                            </span>
                        </div>
                    </div>

                    <!-- Comprehensive Description with Clickable Proof Link (Sesuai Permintaan) -->
                    <div class="bg-white p-6 sm:p-8 rounded-3xl border border-gray-100 shadow-sm space-y-4">
                        <h2 class="font-headline-sm text-xl font-bold text-[#005138]">
                            {{ locale === 'ID' ? 'Keterangan & Landasan Pengakuan Resmi' : 'Official Recognition & Credentials' }}
                        </h2>
                        
                        <p class="font-body-md text-sm sm:text-base text-gray-700 leading-relaxed">
                            {{ award.desc }}
                        </p>

                        <!-- Deskripsi dengan Tautan Langsung ke Sumber Asli Internet -->
                        <div class="p-4 rounded-2xl bg-emerald-50/80 border border-emerald-200/80 space-y-2">
                            <span class="block text-xs font-bold text-[#005138] uppercase tracking-wider">
                                {{ locale === 'ID' ? 'Tautan Verifikasi Keaslian Dokumen:' : 'Direct Authenticity Verification Link:' }}
                            </span>
                            <p class="text-xs text-gray-700 leading-relaxed">
                                {{ locale === 'ID' 
                                    ? 'Untuk memverifikasi keabsahan izin operasional dan legalitas PT Almubarak Wisata Internasional, Anda dapat mengakses database resmi secara langsung melalui portal kementerian/lembaga terkait pada tautan:'
                                    : 'To verify the validity of operational licenses and accreditations of PT Almubarak Wisata Internasional, access the official government portal directly via:' 
                                }}
                            </p>
                            <a 
                                :href="award.verifyUrl" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 text-xs font-bold text-[#005138] hover:text-[#003827] underline break-all bg-white px-3 py-2 rounded-xl shadow-xs border border-emerald-200"
                            >
                                <span class="material-symbols-outlined text-[16px] text-emerald-600">open_in_new</span>
                                <span>{{ award.verifyUrl }}</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Column (5 cols): Legalities Checklist & Action Cards -->
                <div class="lg:col-span-5 space-y-6">
                    <!-- Key Legalities Checklist Card -->
                    <div class="bg-white p-6 sm:p-7 rounded-3xl border border-gray-100 shadow-md space-y-4">
                        <div class="flex items-center gap-2.5 pb-3 border-b border-gray-100">
                            <div class="w-9 h-9 rounded-xl bg-emerald-100 text-[#005138] flex items-center justify-center font-bold">
                                ✓
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-900 text-sm">Poin Legalitas &amp; Pengakuan</h3>
                                <p class="text-[11px] text-gray-500">Standar Kepatuhan Resmi</p>
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div 
                                v-for="(detail, idx) in award.details" 
                                :key="idx"
                                class="flex items-start gap-2.5 text-xs text-gray-700 leading-relaxed"
                            >
                                <span class="material-symbols-outlined text-emerald-600 text-[18px] shrink-0 mt-0.5">check_circle</span>
                                <span>{{ detail }}</span>
                            </div>
                        </div>

                        <!-- Direct Verification Button (Buka Link Sumber Asli) -->
                        <div class="pt-4 border-t border-gray-100 space-y-2.5">
                            <a 
                                :href="award.verifyUrl" 
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="w-full py-3.5 px-5 rounded-2xl bg-[#005138] hover:bg-[#003b29] text-white font-bold text-xs flex items-center justify-center gap-2 shadow-md hover:scale-[1.02] transition-all cursor-pointer"
                            >
                                <span class="material-symbols-outlined text-[18px]">verified</span>
                                <span>{{ locale === 'ID' ? 'Cek Bukti Resmi di Portal Terkait' : 'Verify Proof on Official Portal' }}</span>
                                <span class="material-symbols-outlined text-[16px]">arrow_outward</span>
                            </a>

                            <a 
                                :href="`https://wa.me/6281260003484?text=Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20informasi%20mengenai%20${encodeURIComponent(award.title)}`"
                                target="_blank" 
                                rel="noopener noreferrer"
                                class="w-full py-3 px-5 rounded-2xl bg-[#25D366] hover:bg-[#20bd5a] text-white font-bold text-xs flex items-center justify-center gap-2 shadow-xs hover:scale-[1.01] transition-all"
                            >
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                                <span>{{ locale === 'ID' ? 'Konsultasi Legalitas via WhatsApp' : 'Verify via WhatsApp Support' }}</span>
                            </a>
                        </div>
                    </div>

                    <!-- Navigation to All Awards -->
                    <div class="p-6 rounded-3xl bg-surface-container/60 border border-surface-container text-center space-y-3">
                        <p class="text-xs text-gray-600">
                            {{ locale === 'ID' ? 'Ingin melihat seluruh daftar penghargaan dan sertifikasi kami?' : 'Want to view our complete list of accreditations?' }}
                        </p>
                        <Link 
                            href="/awards" 
                            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-full bg-white text-[#005138] hover:bg-[#005138] hover:text-white transition-all font-bold text-xs border border-gray-200 shadow-xs"
                        >
                            <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                            <span>{{ locale === 'ID' ? 'Kembali ke Halaman Penghargaan' : 'Back to Awards Directory' }}</span>
                        </Link>
                    </div>
                </div>

            </div>
        </section>

        <!-- CTA Consultation -->
        <CtaBanner />
    </AppLayout>
</template>
