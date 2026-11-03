<script setup>
import { computed } from 'vue';
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import CtaBanner from '@/Components/Landing/CtaBanner.vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

const props = defineProps({
    teams: {
        type: Array,
        default: () => [],
    },
});

const defaultTeams = [
    {
        name: 'H. Hendry Ferdiansyah, SE, MPar',
        positionId: 'Direktur Utama / CEO',
        positionEn: 'President Director / CEO',
        descId: 'Direktur Utama PT Almubarak Wisata Internasional dengan dedikasi lebih dari 15 tahun dalam manajemen bimbingan manasik, kepariwisataan halal internasional, dan pelayanan prima jamaah haji & umrah.',
        descEn: 'President Director of PT Almubarak Wisata Internasional with over 15 years experience in pilgrimage hospitality and international travel management.',
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
    {
        name: 'Ust. Muhammad Ilham, S.Pd.I.',
        positionId: 'Muthawif Senior & Pemandu Ziarah',
        positionEn: 'Senior Muthawif & Ziyarah Guide',
        descId: 'Berpengalaman memandu ziarah tapak tilas jejak Rasulullah ﷺ di Jabal Uhud, Masjid Quba, Jabal Rahmah, dan Gua Hira.',
        descEn: 'Experienced mentor escorting historical ziyarah across Mount Uhud, Quba Mosque, Mount Rahmah, and Hira Cave.',
        image: '/images/landing/gallery-uhud.jpg',
        positionStyle: 'object-position: center;',
        phone: '6281260003484',
    },
    {
        name: 'Nurul Aisyah, S.Tr.Par.',
        positionId: 'Koordinator Pelayanan & Perlengkapan',
        positionEn: 'Service & Equipment Coordinator',
        descId: 'Melayani persiapan dokumen paspor, vaksinasi internasional, pembagian koper, dan pendataan kesehatan jamaah.',
        descEn: 'Managing passport logistics, international vaccinations, luggage distribution, and pilgrim healthcare records.',
        image: '/images/landing/member-siti.jpg',
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

const contactMember = (member) => {
    const text = encodeURIComponent(`Assalamu'alaikum, saya ingin menghubungi ${member.name} (${member.position}) terkait paket ibadah.`);
    window.open(`https://wa.me/${member.phone}?text=${text}`, '_blank');
};
</script>

<template>
    <Head :title="locale === 'ID' ? 'Tim Profesional Kami - PT ALMUBARAK WISATA INTERNATIONAL' : 'Our Professional Team - PT ALMUBARAK WISATA INTERNATIONAL'" />

    <AppLayout>
        <!-- Hero Header -->
        <section class="relative w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-6 pb-12">
            <div class="relative w-full rounded-[32px] md:rounded-[40px] overflow-hidden min-h-[380px] lg:min-h-[420px] flex flex-col justify-center items-center text-center p-6 sm:p-12 shadow-2xl border border-surface-container">
                <div class="absolute inset-0 z-0">
                    <div 
                        class="w-full h-full bg-cover bg-center"
                        style="background-image: url('/images/landing/hero-kaaba.jpg'); filter: brightness(0.60) contrast(1.05);"
                    ></div>
                    <div class="absolute inset-0 bg-gradient-to-b from-black/65 via-black/50 to-black/85"></div>
                </div>

                <div class="relative z-10 max-w-3xl mx-auto flex flex-col items-center">
                    <nav class="flex items-center gap-2 text-white/80 text-xs sm:text-sm font-medium mb-4">
                        <Link href="/" class="hover:text-white transition-colors">{{ t('nav_home') }}</Link>
                        <span>/</span>
                        <Link href="/about" class="hover:text-white transition-colors">{{ t('nav_about') }}</Link>
                        <span>/</span>
                        <span class="text-secondary-fixed font-bold">{{ t('nav_team') }}</span>
                    </nav>

                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-white/10 backdrop-blur-md text-tertiary-fixed font-label-sm text-xs font-bold uppercase tracking-wider mb-4 border border-white/20">
                        <span class="material-symbols-outlined text-[16px]">groups</span>
                        {{ locale === 'ID' ? 'Sumber Daya Manusia' : 'Human Resources' }}
                    </span>
                    <h1 class="font-headline-xl text-[34px] sm:text-[46px] lg:text-[54px] text-white font-extrabold tracking-tight leading-tight">
                        {{ locale === 'ID' ? 'Tim Profesional Kami' : 'Our Professional Team' }}
                    </h1>
                    <p class="font-body-lg text-white/90 text-[16px] sm:text-[18px] mt-4 leading-relaxed max-w-2xl">
                        {{ locale === 'ID' ? 'Muthawif berilmu syar\'i, pembimbing ibadah alumni Timur Tengah, dan tenaga operasional berpengalaman yang siap melayani perjalanan spiritual Anda.' : 'Knowledgeable muthawifs, Middle East alumni spiritual advisors, and experienced operations specialists ready to serve your spiritual journey.' }}
                    </p>
                </div>
            </div>
        </section>

        <!-- Team Members Grid -->
        <section class="w-full py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <span class="font-label-md text-xs text-secondary uppercase tracking-widest font-bold">
                        {{ locale === 'ID' ? 'Dedikasi & Komitmen' : 'Dedication & Commitment' }}
                    </span>
                    <h2 class="font-headline-lg text-3xl sm:text-4xl text-primary font-extrabold tracking-tight mt-1">
                        {{ locale === 'ID' ? 'Anggota Dewan & Pimpinan Operasional' : 'Board Members & Operational Leadership' }}
                    </h2>
                    <p class="font-body-md text-on-surface-variant mt-2 text-sm sm:text-base">
                        {{ locale === 'ID' ? 'Setiap anggota tim kami berdedikasi memberikan bimbingan sesuai sunnah serta pelayanan fasilitas terbaik bagi para tamu Allah.' : 'Every member of our team is devoted to delivering authentic Sunnah guidance and premium hospitality for the guests of Allah.' }}
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div 
                        v-for="(member, idx) in teamList" 
                        :key="idx"
                        class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-surface-container/70 flex flex-col justify-between group hover:-translate-y-1.5"
                    >
                        <div>
                            <!-- Member Photo Container with natural cover and position style -->
                            <div class="relative h-72 overflow-hidden bg-surface-container">
                                <img 
                                    :src="member.image" 
                                    :alt="member.name"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    :style="member.positionStyle"
                                />
                                <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-transparent to-transparent flex items-end p-4">
                                    <span class="px-3 py-1 rounded-full bg-white/95 text-primary font-bold text-xs shadow-sm">
                                        {{ member.position }}
                                    </span>
                                </div>
                            </div>

                            <!-- Member Info -->
                            <div class="p-6">
                                <h3 class="font-headline-sm text-xl text-on-surface font-bold group-hover:text-primary transition-colors">
                                    {{ member.name }}
                                </h3>
                                <p class="font-body-sm text-sm text-on-surface-variant mt-2.5 leading-relaxed">
                                    {{ member.description }}
                                </p>
                            </div>
                        </div>

                        <!-- Footer WhatsApp Contact Button -->
                        <div class="p-6 pt-0">
                            <button 
                                @click="contactMember(member)"
                                class="w-full py-2.5 px-4 rounded-xl bg-surface-container hover:bg-primary hover:text-white text-primary text-xs font-bold transition-all flex items-center justify-center gap-2 cursor-pointer group-hover:shadow-sm"
                                type="button"
                            >
                                <span class="material-symbols-outlined text-[18px]">chat</span>
                                <span>{{ locale === 'ID' ? 'Hubungi WhatsApp' : 'Chat WhatsApp' }}</span>
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

        <!-- CTA Consultation -->
        <CtaBanner />
    </AppLayout>
</template>
