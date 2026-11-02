<script setup>
import { ref, computed, watch, onMounted, onUnmounted } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import FivePillars from '@/Components/Landing/FivePillars.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

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
        positionId: 'Direktur Utama / CEO',
        positionEn: 'President Director / CEO',
        descId: 'Alumni Universitas Islam Madinah dengan pengalaman lebih dari 15 tahun dalam bimbingan syar\'i dan manasik haji/umrah di Tanah Suci.',
        descEn: 'Alumnus of Islamic University of Madinah with over 15 years experience in Sharia and pilgrimage ritual guidance.',
        image: '/images/ceo-face.jpg',
        positionStyle: 'object-position: center;',
        phone: '6281260003484',
    },
    {
        name: 'Ust. H. Abdullah Syarif, Lc.',
        positionId: 'Ketua Dewan Pembimbing Syariah',
        positionEn: 'Head of Sharia Advisory Board',
        descId: 'Membimbing jamaah dalam manasik dan pelaksanaan thawaf, sa\'i, serta kajian fiqih ibadah sesuai sunnah Rasulullah ﷺ.',
        descEn: 'Guiding pilgrims in ritual training, Tawaf, Sa\'i, and Islamic jurisprudence in accordance with the Prophetic Sunnah ﷺ.',
        image: '/images/landing/member-ustadz.jpg',
        positionStyle: 'object-position: center;',
        phone: '6281260003484',
    },
    {
        name: 'Hj. Siti Fatimah, S.E.',
        positionId: 'Direktur Operasional & Pelayanan Jamaah',
        positionEn: 'Operations & Pilgrim Care Director',
        descId: 'Mengawasi kenyamanan akomodasi hotel pelataran ring 1, handling bandara, serta pendampingan jamaah lansia dan keluarga.',
        descEn: 'Overseeing first-ring hotel accommodations, airport handling, and dedicated assistance for families and seniors.',
        image: '/images/landing/member-siti.jpg',
        positionStyle: 'object-position: center;',
        phone: '6281180002807',
    },
    {
        name: 'H. Firman Hidayat, S.Kom.',
        positionId: 'Manajer Tiket, Hotel & Visa Provider',
        positionEn: 'Ticketing, Hotel & Visa Manager',
        descId: 'Spesialis reservasi maskapai direct (Saudia/Garuda), tasreh visa Saudi, dan tiket kereta cepat Haramain Express.',
        descEn: 'Specialist in non-stop airline reservations (Saudia/Garuda), Saudi e-visas, and Haramain High Speed Rail tickets.',
        image: '/images/landing/member-firman.jpg',
        positionStyle: 'object-position: center;',
        phone: '6281180002807',
    },
];

const teamList = computed(() => {
    const isEn = locale.value === 'EN';
    if (props.teams && props.teams.length > 0) {
        return props.teams.map((t, idx) => ({
            name: t.name,
            position: t.position,
            description: t.description || (isEn ? 'Experienced professional in Hajj and Umrah pilgrimage hospitality.' : 'Profesional berpengalaman dalam penyelenggaraan ibadah umrah dan haji.'),
            image: t.image ? (t.image.startsWith('http') || t.image.startsWith('/') ? t.image : `/storage/${t.image}`) : (defaultTeams[idx]?.image || '/images/ceo-face.jpg'),
            positionStyle: defaultTeams[idx]?.positionStyle || 'object-position: center;',
            phone: t.phone || '6281260003484',
        }));
    }
    return defaultTeams.map(t => ({
        name: t.name,
        position: isEn ? t.positionEn : t.positionId,
        description: isEn ? t.descEn : t.descId,
        image: t.image,
        positionStyle: t.positionStyle,
        phone: t.phone,
    }));
});

const rawAwards = [
    {
        id: 'kemenag-ppiu',
        titleId: 'Akreditasi A Resmi PPIU Kemenag RI',
        titleEn: 'Official Grade A Accreditation PPIU Ministry of Religious Affairs',
        institutionId: 'Ditjen Penyelenggaraan Haji & Umrah Kemenag RI',
        institutionEn: 'DG of Hajj & Umrah Ministry of Religious Affairs RI',
        badgeId: 'Akreditasi A Resmi',
        badgeEn: 'Official Grade A',
        year: '2024',
        certNumber: 'SK Kemenag No. U.412 Tahun 2020',
        descId: 'Predikat Akreditasi A untuk kepatuhan tata kelola manasik, proteksi dana jamaah melalui virtual account, standar akomodasi hotel pelataran ring 1, dan jaminan 5 Pasti Umrah.',
        descEn: 'Grade A rating for ritual governance compliance, virtual account fund security, 5-star ring 1 hotels, and the 5 Certainty Guarantees.',
        image: '/images/penghargaan.jpeg',
        detailsId: [
            'Terdaftar dan Terverifikasi Aktif di SISKOPATUH Kemenag RI',
            'Audit kepatuhan syariat dan kelayakan operasional secara periodik',
            'Perlindungan asuransi jiwa dan perjalanan internasional',
        ],
        detailsEn: [
            'Officially verified and active in SISKOPATUH Ministry system',
            'Periodic Sharia compliance and operational feasibility audits',
            'International travel and life insurance coverage',
        ],
    },
    {
        id: 'via-com',
        titleId: 'Top B2B Travel & Umrah Ticketing Partner',
        titleEn: 'Top B2B Travel & Umrah Ticketing Partner',
        institutionId: 'Via.com Indonesia (PT Advaltis Asia Network)',
        institutionEn: 'Via.com Indonesia (PT Advaltis Asia Network)',
        badgeId: 'Top Agent Award',
        badgeEn: 'Top Agent Award',
        year: '2024',
        certNumber: 'VIA/ID/AGT/2024-088',
        descId: 'Apresiasi resmi atas kinerja luar biasa dan keandalan sistem penerbitan tiket penerbangan grup umrah serta transaksi B2B terpercaya.',
        descEn: 'Official recognition for outstanding performance and reliability in group flight ticketing and trusted B2B transactions.',
        image: '/images/penghargaan.jpeg',
        detailsId: [
            'Diterima langsung oleh jajaran Direksi PT Almubarak Wisata',
            'Penghargaan kategori B2B Travel Partner & Group Ticketing',
            'Sinergi rute penerbangan Saudia Airlines, Emirates, dan Garuda Indonesia',
        ],
        detailsEn: [
            'Received directly by the Board of Directors of PT Almubarak Wisata',
            'Award category: B2B Travel Partner & Group Ticketing',
            'Route synergies with Saudia Airlines, Emirates, and Garuda Indonesia',
        ],
    },
    {
        id: 'airlines-partner',
        titleId: 'Strategic Group Partner Saudia & Garuda',
        titleEn: 'Strategic Group Partner Saudia & Garuda',
        institutionId: 'Saudi Arabian Airlines & Garuda Indonesia',
        institutionEn: 'Saudi Arabian Airlines & Garuda Indonesia',
        badgeId: 'Official Airlines Partner',
        badgeEn: 'Official Airlines Partner',
        year: '2024',
        certNumber: 'SV-GA/GRP/UMR-1445',
        descId: 'Penghargaan atas loyalitas dan kontribusi penyediaan seat direct tanpa transit bagi jamaah umrah reguler dan haji khusus.',
        descEn: 'Honored for continuous seat allocations and direct non-stop flights for Umrah and VIP Hajj pilgrims.',
        image: '/images/landing/hero-kaaba.jpg',
        detailsId: [
            'Alokasi seat grup terkonfirmasi nomor PNR resmi',
            'Kemudahan fasilitas bagasi zam-zam dan bagasi ekstra jamaah',
            'Penerbangan direct tanpa resiko delay transit di negara ketiga',
        ],
        detailsEn: [
            'Confirmed group seats with official PNR verification',
            'Convenient Zamzam water handling and extra baggage allowances',
            'Direct flights without third-country transit delays',
        ],
    },
    {
        id: 'asita-member',
        titleId: 'Sertifikasi Keanggotaan Penuh ASITA Indonesia',
        titleEn: 'Full Certification Membership ASITA Indonesia',
        institutionId: 'Dewan Pengurus Pusat ASITA (Asosiasi Perusahaan Perjalanan Wisata)',
        institutionEn: 'Central Executive Board ASITA Indonesia',
        badgeId: 'Verified Travel Agency',
        badgeEn: 'Verified Travel Agency',
        year: '2023 - 2025',
        certNumber: 'ASITA-REG/0912/DPP/2023',
        descId: 'Standarisasi profesionalisme biro perjalanan wisata berizin nasional dengan perlindungan hukum konsumen dan kepatuhan kode etik pariwisata.',
        descEn: 'National professional accreditation guaranteeing consumer rights protection and adherence to travel ethics.',
        image: '/images/landing/gallery-jamaah.jpg',
        detailsId: [
            'Anggota resmi terdaftar di ASITA DPP Jakarta & Jawa Barat',
            'Kepatuhan regulasi BPW (Biro Perjalanan Wisata)',
            'Jaringan kemitraan ground handling terintegrasi di luar negeri',
        ],
        detailsEn: [
            'Officially registered member in ASITA Jakarta & West Java',
            'Fully compliant with national Travel Bureau regulations',
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
        descId: 'Sertifikasi keanggotaan asosiasi penyelenggara haji khusus dan umrah terpercaya dalam mewujudkan ibadah yang aman, transparan, dan sesuai sunnah.',
        descEn: 'Certification in the association of special hajj and umrah operators dedicated to transparent, Sunnah-compliant spiritual journeys.',
        image: '/images/landing/package-haji-furoda.jpg',
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
        descId: 'Pengakuan keunggulan dalam merancang paket wisata halal ke Turki, Jordan, Mesir, dan Uzbekistan dengan jaminan makanan halal dan shalat terjaga.',
        descEn: 'Honored for exceptional halal travel itineraries in Turkey, Jordan, Egypt, and Uzbekistan with 100% halal gastronomy.',
        image: '/images/landing/package-turki-plus.jpg',
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

const contactMember = (member) => {
    const text = encodeURIComponent(`Assalamu'alaikum, saya ingin menghubungi ${member.name} (${member.position}) terkait paket ibadah.`);
    window.open(`https://wa.me/${member.phone}?text=${text}`, '_blank');
};
</script>

<template>
    <Head :title="locale === 'ID' ? 'Tentang Kami - PT ALMUBARAK WISATA INTERNATIONAL' : 'About Us - PT ALMUBARAK WISATA INTERNATIONAL'" />

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
                        {{ locale === 'ID' ? 'Profil Resmi Perusahaan' : 'Official Corporate Profile' }}
                    </span>
                    <h1 class="font-headline-xl text-[34px] sm:text-[46px] lg:text-[54px] text-white font-extrabold tracking-tight leading-tight">
                        {{ t('nav_about') }}
                    </h1>
                    <p class="font-body-lg text-white/90 text-[16px] sm:text-[18px] mt-4 leading-relaxed max-w-2xl">
                        {{ locale === 'ID' ? 'Mengenal Lebih Dalam PT ALMUBARAK WISATA INTERNATIONAL — Penyelenggara Perjalanan Religi dan Wisata Halal Terpercaya Berizin Kemenag RI.' : 'Discover PT ALMUBARAK WISATA INTERNATIONAL — Premier Licensed Provider of Sacred Pilgrimages and Halal Global Journeys.' }}
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
                                {{ locale === 'ID' ? 'Profil Perusahaan' : 'Company Profile' }}
                            </span>
                            <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                                PT ALMUBARAK WISATA INTERNATIONAL
                            </h2>
                        </div>
                        <p class="font-body-md text-base text-on-surface-variant leading-relaxed">
                            <strong class="text-on-surface">PT ALMUBARAK WISATA INTERNATIONAL</strong>
                            {{ locale === 'ID' 
                                ? ' adalah perusahaan travel terkemuka yang didirikan pada tanggal 15 Maret 2009 di Jakarta dan memiliki kantor operasional di Bogor. Sejak awal berdirinya, kami telah berkomitmen untuk menjadi spesialis dalam layanan perjalanan religi dan wisata halal, dengan visi memberikan pengalaman perjalanan yang berkesan, penuh berkah, dan sesuai dengan nilai-nilai syariat Islam.'
                                : ' is a premier pilgrimage agency established on March 15, 2009 in Jakarta with operations in Bogor. Since our inception, we have been committed to excellence in Islamic travel, providing spiritually uplifting, secure, and blessed journeys adhering to authentic Islamic jurisprudence.'
                            }}
                        </p>
                        <p class="font-body-md text-base text-on-surface-variant leading-relaxed">
                            {{ locale === 'ID'
                                ? 'Kami telah melayani lebih dari 50.000 jamaah umroh dan haji, serta ribuan wisatawan muslim dari seluruh Indonesia dan mancanegara, membawa mereka ke Tanah Suci dan destinasi wisata halal dunia dengan hotel bintang lima yang strategis di pelataran ring 1, transportasi nyaman, serta pendampingan oleh tour leader dan muthawif berpengalaman lebih dari 15 tahun.'
                                : 'We have served more than 50,000 Umrah and Hajj pilgrims as well as global travelers, providing 5-star ring 1 courtyard hotels, luxury transportation, and certified guidance from scholars with over 15 years of field experience.'
                            }}
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
                                    {{ locale === 'ID' ? 'Tim Kami' : 'Our Team' }}
                                </h4>
                                <p class="font-body-sm text-xs text-outline">{{ locale === 'ID' ? 'Profesional Berpengalaman' : 'Experienced Professionals' }}</p>
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
                                    {{ locale === 'ID' ? 'Penghargaan' : 'Awards' }}
                                </h4>
                                <p class="font-body-sm text-xs text-outline">{{ locale === 'ID' ? 'Prestasi Resmi' : 'Official Accolades' }}</p>
                            </button>
                        </div>
                    </div>

                    <!-- Right: CEO Card with Authentic images/ceo-face.jpg focused directly on face -->
                    <div class="lg:col-span-5 flex flex-col items-center">
                        <div class="relative w-full max-w-sm rounded-3xl overflow-hidden shadow-2xl border border-surface-container bg-surface-container-lowest p-6 flex flex-col items-center text-center">
                            <div class="w-52 h-52 rounded-2xl overflow-hidden shadow-lg mb-5 border-4 border-primary/20 bg-surface-container">
                                <img 
                                    src="/images/ceo-face.jpg" 
                                    alt="Ahmad Mubarak - CEO" 
                                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                                    style="object-position: center;"
                                />
                            </div>
                            <span class="px-3.5 py-1 rounded-full bg-primary/10 text-primary font-label-sm text-xs font-bold uppercase tracking-widest mb-1">
                                {{ locale === 'ID' ? 'Direktur Utama' : 'President Director' }}
                            </span>
                            <h3 class="font-headline-sm text-2xl text-on-surface font-extrabold mt-1">
                                Ahmad Mubarak
                            </h3>
                            <p class="font-body-sm text-xs text-outline font-semibold">
                                CEO - PT ALMUBARAK WISATA INTERNATIONAL
                            </p>
                            <p class="font-body-sm text-sm text-on-surface-variant mt-3 leading-relaxed italic">
                                "{{ locale === 'ID' ? 'Komitmen kami adalah menghadirkan ketenangan, kepastian, dan kemabruran dalam setiap detak langkah ibadah Anda ke Baitullah.' : 'Our commitment is to bring peace of mind, certainty, and an accepted pilgrimage (mabrur) at every step of your journey to Baitullah.' }}"
                            </p>
                            <div class="w-full mt-5 pt-4 border-t border-surface-container">
                                <a 
                                    href="https://wa.me/6281260003484?text=Assalamu%27alaikum%20Pak%20Ahmad%20Mubarak,%20saya%20ingin%20bertanya%20terkait%20layanan%20PT%20Almubarak%20Wisata" 
                                    target="_blank"
                                    class="w-full py-2.5 px-4 rounded-xl bg-primary hover:bg-primary-container text-white text-xs font-bold transition-all flex items-center justify-center gap-2 shadow-sm"
                                >
                                    <span class="material-symbols-outlined text-[16px]">chat</span>
                                    <span>{{ locale === 'ID' ? 'Hubungi Direktur' : 'Contact Director' }}</span>
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
                            {{ locale === 'ID' ? 'Sumber Daya Manusia' : 'Human Resources' }}
                        </span>
                        <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                            {{ locale === 'ID' ? 'Tim Profesional Kami' : 'Our Professional Team' }}
                        </h2>
                        <p class="font-body-md text-on-surface-variant mt-2 text-sm sm:text-base max-w-2xl">
                            {{ locale === 'ID' ? 'Para ahli dan pembimbing syar\'i berpengalaman yang berdedikasi mendampingi setiap tahapan ibadah Anda.' : 'Experienced scholars and mentors dedicated to guiding every stage of your sacred journey.' }}
                        </p>
                    </div>
                    <Link 
                        href="/team" 
                        class="inline-flex items-center gap-1.5 text-primary hover:text-primary-container font-semibold text-sm whitespace-nowrap group"
                    >
                        <span>{{ locale === 'ID' ? 'Lihat Seluruh Anggota Tim' : 'View All Team Members' }}</span>
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
                                <span>{{ locale === 'ID' ? 'Hubungi WhatsApp' : 'Chat WhatsApp' }}</span>
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
                            {{ locale === 'ID' ? 'Prestasi & Legalitas Resmi' : 'Official Honors & Legalities' }}
                        </span>
                        <h2 class="font-headline-lg text-3xl sm:text-4xl font-extrabold tracking-tight">
                            {{ locale === 'ID' ? 'Penghargaan & Pengakuan Resmi' : 'Official Awards & Accreditations' }}
                        </h2>
                        <p class="font-body-md text-white/90 text-sm sm:text-base mt-2 leading-relaxed">
                            {{ locale === 'ID' ? 'Bentuk dedikasi dan standar mutu PT ALMUBARAK WISATA INTERNATIONAL yang diakui secara resmi oleh Kemenag RI, maskapai penerbangan, dan asosiasi B2B internasional.' : 'A testament to PT ALMUBARAK WISATA INTERNATIONAL\'s quality standards, officially recognized by the Ministry of Religious Affairs, airlines, and B2B associations.' }}
                        </p>
                    </div>
                </div>

                <!-- Awards Grid (Authentic Certificate Cards with Real Data, No Emojis) -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <Link 
                        v-for="award in awards" 
                        :key="award.id"
                        :href="'/awards/' + award.id"
                        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-surface-container/70 flex flex-col justify-between group hover:-translate-y-1.5 cursor-pointer block"
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
                                <span class="block text-on-surface font-semibold text-[10px] uppercase tracking-wider">{{ locale === 'ID' ? 'Lembaga Penerbit:' : 'Issuing Body:' }}</span>
                                <span class="text-on-surface font-medium">{{ award.institution }}</span>
                            </div>
                            <div 
                                class="w-full py-2 px-3 rounded-xl bg-primary/10 group-hover:bg-primary text-primary group-hover:text-white text-xs font-bold transition-all flex items-center justify-center gap-1.5 shadow-xs"
                            >
                                <span class="material-symbols-outlined text-[16px]">verified</span>
                                <span>{{ locale === 'ID' ? 'Buka Halaman Lengkap' : 'Open Full Page' }}</span>
                                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                            </div>
                        </div>
                    </Link>
                </div>

                <div class="mt-10 text-center">
                    <Link 
                        href="/awards" 
                        class="inline-flex items-center gap-2 px-7 py-3 rounded-full bg-primary text-white font-bold text-xs shadow-md hover:bg-primary-container transition-all hover:scale-105"
                    >
                        <span>{{ locale === 'ID' ? 'Buka Halaman Lengkap Sertifikasi & Penghargaan' : 'Open Full Certifications & Awards Page' }}</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
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
                            {{ locale === 'ID' ? 'Lembaga Penerbit:' : 'Issuing Body:' }} <strong class="text-gray-800">{{ selectedAward.institution }}</strong> ({{ locale === 'ID' ? 'Tahun' : 'Year' }} {{ selectedAward.year }})
                        </p>
                    </div>

                    <p class="font-body-md text-sm text-gray-600 leading-relaxed">
                        {{ selectedAward.desc }}
                    </p>

                    <!-- Details Points -->
                    <div v-if="selectedAward.details && selectedAward.details.length > 0" class="p-4 rounded-xl bg-emerald-50/60 border border-emerald-100 space-y-2">
                        <span class="block text-xs font-bold text-[#005138] uppercase tracking-wider">{{ locale === 'ID' ? 'Poin Legalitas & Pengakuan:' : 'Key Accreditations & Honors:' }}</span>
                        <div v-for="(d, i) in selectedAward.details" :key="i" class="flex items-start gap-2 text-xs text-gray-700 leading-relaxed">
                            <span class="material-symbols-outlined text-[#005138] text-[16px] shrink-0 mt-0.5">check_circle</span>
                            <span>{{ d }}</span>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="px-6 py-4 border-t border-gray-100 bg-gray-50/80 flex items-center justify-between gap-3 shrink-0">
                    <Link 
                        :href="'/awards/' + selectedAward.id"
                        class="inline-flex items-center gap-1.5 text-xs font-bold text-[#005138] hover:underline"
                    >
                        <span class="material-symbols-outlined text-[15px]">open_in_new</span>
                        <span>{{ locale === 'ID' ? 'Buka Halaman Lengkap & Bukti' : 'Open Full Page & Proof' }}</span>
                    </Link>
                    <div class="flex items-center gap-2.5">
                        <span class="hidden sm:inline-flex items-center gap-1.5 text-xs text-emerald-700 font-semibold">
                            <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            {{ locale === 'ID' ? 'Terverifikasi' : 'Verified' }}
                        </span>
                        <button 
                            @click="closeAwardModal" 
                            type="button" 
                            class="px-5 py-2 rounded-xl bg-[#005138] hover:bg-[#003d2b] text-white text-xs font-bold transition-all cursor-pointer shadow-sm hover:shadow"
                        >
                            {{ locale === 'ID' ? 'Tutup' : 'Close' }}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5 Pillars Section Component -->
        <FivePillars />

        <!-- CTA Consultation (Matching Image 4) -->
        <CtaBanner />
    </AppLayout>
</template>
