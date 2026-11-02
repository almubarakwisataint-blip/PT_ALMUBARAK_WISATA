<script setup>
const pillars = [
    {
        number: 'Pilar 01',
        title: 'Pasti Izinnya',
        icon: 'verified_user',
        description: 'Izin PPIU No. U.412 & PIHK Terakreditasi A Resmi oleh Ditjen Penyelenggaraan Haji & Umrah Kemenag RI.',
    },
    {
        number: 'Pilar 02',
        title: 'Pasti Jadwalnya',
        icon: 'calendar_clock',
        description: 'Tanggal keberangkatan dan kepulangan terbit sebelum jamaah melakukan pelunasan biaya ibadah.',
    },
    {
        number: 'Pilar 03',
        title: 'Pasti Terbangnya',
        icon: 'flight',
        description: 'Nomor PNR Tiket PP Maskapai kelas dunia (Saudia / Garuda Indonesia) terbit resmi & berstatus confirmed.',
    },
    {
        number: 'Pilar 04',
        title: 'Pasti Hotelnya',
        icon: 'apartment',
        description: 'Kamar hotel telah dipesan resmi di pelataran Masjidil Haram & Masjid Nabawi (bukan hotel bayangan).',
    },
    {
        number: 'Pilar 05',
        title: 'Pasti Visanya',
        icon: 'badge',
        description: 'Sebagai Provider Visa Resmi Saudi, visa diterbitkan tepat waktu tanpa risiko tertahan di bandara.',
    },
];
</script>

<template>
    <!-- MENGAPA MEMILIH ALMUBARAK (5 PILAR KEPASTIAN KEMENAG) -->
    <section class="w-full py-space-xl bg-white/70">
        <div class="max-w-7xl mx-auto px-gutter">
            <!-- Section Title -->
            <div class="text-center max-w-3xl mx-auto mb-space-xl">
                <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">
                    Komitmen Pelayanan Paripurna
                </span>
                <h2 class="font-headline-lg text-headline-lg text-primary font-extrabold tracking-tight mt-1">
                    5 Pilar Kepastian Kemenag RI Bersama Almubarak
                </h2>
                <p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">
                    Kami menjamin seluruh elemen keberangkatan Anda terproteksi secara transparan, aman, dan legal tanpa keraguan sedikit pun.
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
                            Dana Perlindungan Jamaah Terjamin
                        </h4>
                        <p class="font-body-sm text-[13px] text-on-surface-variant">
                            Sistem pembayaran via Virtual Account Resmi Bank Syariah Indonesia &amp; Mandiri dengan jaminan asuransi perjalanan internasional.
                        </p>
                    </div>
                </div>
                <a 
                    href="/about" 
                    class="px-space-md py-2 rounded-lg bg-surface-container text-primary hover:bg-surface-container-high transition-colors font-label-md text-label-md font-semibold whitespace-nowrap cursor-pointer shrink-0"
                >
                    Lihat Sertifikat Akreditasi
                </a>
            </div>
        </div>
    </section>
</template>

