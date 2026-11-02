<script setup>
import { computed } from 'vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

const rawPillars = [
    {
        numberId: 'Pilar 01',
        numberEn: 'Pillar 01',
        titleId: 'Pasti Izinnya',
        titleEn: 'Guaranteed License',
        icon: 'verified_user',
        descId: 'Izin PPIU No. U.412 & PIHK Terakreditasi A Resmi oleh Ditjen Penyelenggaraan Haji & Umrah Kemenag RI.',
        descEn: 'Official PPIU No. U.412 & Grade A Accreditation by the Directorate General of Hajj & Umrah Ministry of Religious Affairs.',
    },
    {
        numberId: 'Pilar 02',
        numberEn: 'Pillar 02',
        titleId: 'Pasti Jadwalnya',
        titleEn: 'Guaranteed Schedule',
        icon: 'calendar_clock',
        descId: 'Tanggal keberangkatan dan kepulangan terbit sebelum jamaah melakukan pelunasan biaya ibadah.',
        descEn: 'Exact departure and return dates confirmed before final payment is settled.',
    },
    {
        numberId: 'Pilar 03',
        numberEn: 'Pillar 03',
        titleId: 'Pasti Terbangnya',
        titleEn: 'Guaranteed Flights',
        icon: 'flight',
        descId: 'Nomor PNR Tiket PP Maskapai kelas dunia (Saudia / Garuda Indonesia) terbit resmi & berstatus confirmed.',
        descEn: 'Official confirmed PNR round-trip ticket issued with top airlines (Saudia / Garuda Indonesia).',
    },
    {
        numberId: 'Pilar 04',
        numberEn: 'Pillar 04',
        titleId: 'Pasti Hotelnya',
        titleEn: 'Guaranteed Hotels',
        icon: 'apartment',
        descId: 'Kamar hotel telah dipesan resmi di pelataran Masjidil Haram & Masjid Nabawi (bukan hotel bayangan).',
        descEn: 'Confirmed hotel reservations directly in the courtyard of Masjidil Haram & Nabawi.',
    },
    {
        numberId: 'Pilar 05',
        numberEn: 'Pillar 05',
        titleId: 'Pasti Visanya',
        titleEn: 'Guaranteed Visas',
        icon: 'badge',
        descId: 'Sebagai Provider Visa Resmi Saudi, visa diterbitkan tepat waktu tanpa risiko tertahan di bandara.',
        descEn: 'As an Official Saudi Visa Provider, visas are issued on time without transit delays.',
    },
];

const pillars = computed(() => {
    const isEn = locale.value === 'EN';
    return rawPillars.map(p => ({
        number: isEn ? p.numberEn : p.numberId,
        title: isEn ? p.titleEn : p.titleId,
        icon: p.icon,
        description: isEn ? p.descEn : p.descId,
    }));
});
</script>

<template>
    <!-- MENGAPA MEMILIH ALMUBARAK (5 PILAR KEPASTIAN KEMENAG) -->
    <section class="w-full py-space-xl bg-white/70">
        <div class="max-w-7xl mx-auto px-gutter">
            <!-- Section Title -->
            <div class="text-center max-w-3xl mx-auto mb-space-xl">
                <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">
                    {{ locale === 'ID' ? 'Komitmen Pelayanan Paripurna' : 'Excellence Commitment' }}
                </span>
                <h2 class="font-headline-lg text-headline-lg text-primary font-extrabold tracking-tight mt-1">
                    {{ locale === 'ID' ? '5 Pilar Kepastian Kemenag RI Bersama Almubarak' : '5 Certainty Pillars of Religious Ministry with Almubarak' }}
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
                    {{ locale === 'ID' ? 'Kami menjamin seluruh elemen keberangkatan Anda terproteksi secara transparan, aman, dan legal tanpa keraguan sedikit pun.' : 'We guarantee every element of your departure is protected transparently, safely, and legally with full certainty.' }}
                </p>
            </div>

            <!-- 5 Pillars Bento Mosaic -->
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-space-md">
                <div 
                    v-for="pillar in pillars" 
                    :key="pillar.number"
                    class="bg-surface-container-lowest p-space-lg rounded-xl shadow-sm hover:shadow-md transition-all flex flex-col items-center text-center group border border-surface-container/50 hover:-translate-y-1 duration-300"
                >
                    <div class="w-14 h-14 rounded-full bg-surface-container flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors mb-space-md">
                        <span class="material-symbols-outlined text-[28px]">{{ pillar.icon }}</span>
                    </div>
                    <span class="font-label-sm text-label-sm text-secondary font-bold uppercase tracking-wider mb-1">
                        {{ pillar.number }}
                    </span>
                    <h3 class="font-headline-sm text-[18px] text-on-surface font-bold mb-space-xs">
                        {{ pillar.title }}
                    </h3>
                    <p class="font-body-sm text-[13px] text-on-surface-variant leading-relaxed">
                        {{ pillar.description }}
                    </p>
                </div>
            </div>

            <!-- Detail Certificate Strip -->
            <div class="mt-space-lg bg-surface-container-lowest p-space-md rounded-xl flex flex-col md:flex-row items-center justify-between gap-space-md shadow-sm border border-surface-container/60">
                <div class="flex items-center gap-space-md">
                    <div class="w-10 h-10 rounded-full bg-tertiary-fixed flex items-center justify-center text-primary shrink-0">
                        <span class="material-symbols-outlined text-[22px]">policy</span>
                    </div>
                    <div>
                        <h4 class="font-label-lg text-label-lg text-on-surface font-bold">
                            {{ locale === 'ID' ? 'Dana Perlindungan Jamaah Terjamin' : 'Pilgrim Protection Funds Guaranteed' }}
                        </h4>
                        <p class="font-body-sm text-[13px] text-on-surface-variant">
                            {{ locale === 'ID' ? 'Sistem pembayaran via Virtual Account Resmi Bank Syariah Indonesia & Mandiri dengan jaminan asuransi perjalanan internasional.' : 'Payments via Official Virtual Accounts (BSI & Mandiri) with comprehensive international travel insurance coverage.' }}
                        </p>
                    </div>
                </div>
                <a 
                    href="/about" 
                    class="px-space-md py-2 rounded-lg bg-surface-container text-primary hover:bg-surface-container-high transition-colors font-label-md text-label-md font-semibold whitespace-nowrap cursor-pointer shrink-0"
                >
                    {{ locale === 'ID' ? 'Lihat Sertifikat Akreditasi' : 'View Accreditation Certificate' }}
                </a>
            </div>
        </div>
    </section>
</template>

