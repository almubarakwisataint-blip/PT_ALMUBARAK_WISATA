<script setup>
import { ref, computed } from 'vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

const scrollContainer = ref(null);

const rawPromoCards = [
    {
        tagId: 'KUPON TERBATAS',
        tagEn: 'LIMITED COUPON',
        discountId: 'Diskon Rp 3 Jt',
        discountEn: 'Discount Rp 3M',
        titleId: 'Umrah Plus Turki 12 Hari',
        titleEn: 'Umrah Plus Turkey 12 Days',
        routeId: 'Jakarta - Istanbul - Madinah - Makkah',
        routeEn: 'Jakarta - Istanbul - Madinah - Makkah',
        image: '/images/landing/package-turki-plus.jpg',
        badgeColor: 'bg-amber-500',
        waMessage: 'Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20klaim%20Promo%20Diskon%203%20Juta%20Umrah%20Plus%20Turki'
    },
    {
        tagId: 'CASHBACK INSTAN',
        tagEn: 'INSTANT CASHBACK',
        discountId: 'Cashback Rp 2 Jt',
        discountEn: 'Cashback Rp 2M',
        titleId: 'Umrah Reguler 9 Hari Saudia Direct',
        titleEn: 'Regular Umrah 9 Days Saudia Direct',
        routeId: 'Direct Landing Jeddah Tanpa Transit',
        routeEn: 'Direct Jeddah Landing Non-Stop',
        image: '/images/landing/package-reguler-9hari.jpg',
        badgeColor: 'bg-emerald-600',
        waMessage: 'Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20klaim%20Promo%20Cashback%202%20Juta%20Umrah%20Reguler'
    },
    {
        tagId: 'PROMO RAMADHAN',
        tagEn: 'RAMADAN SPECIAL',
        discountId: 'Free Upgrade Kamar',
        discountEn: 'Free Room Upgrade',
        titleId: 'Umrah Ramadhan & Lailatul Qadar',
        titleEn: 'Ramadan & Laylatul Qadr Umrah',
        routeId: '10 Malam Terakhir di Depan Ka\'bah',
        routeEn: 'Last 10 Nights Facing Kaaba',
        image: '/images/landing/package-ramadhan-16hari.jpg',
        badgeColor: 'bg-rose-600',
        waMessage: 'Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20klaim%20Promo%20Umrah%20Ramadhan%20Free%20Upgrade'
    },
    {
        tagId: 'GRUP KELUARGA',
        tagEn: 'FAMILY GROUP',
        discountId: 'Diskon s.d. 5 Jt',
        discountEn: 'Discount up to 5M',
        titleId: 'Paket Haji Khusus & Furoda VIP',
        titleEn: 'VIP Special & Furoda Hajj Package',
        routeId: 'Direct Madinah & Maktab VIP Mina',
        routeEn: 'Direct Madinah & VIP Mina Maktab',
        image: '/images/landing/package-haji-furoda.jpg',
        badgeColor: 'bg-indigo-600',
        waMessage: 'Assalamu%27alaikum%20Almubarak,%20saya%20ingin%20informasi%20Promo%20Haji%20Furoda%20Keluarga'
    }
];

const promoCards = computed(() => {
    const isEn = locale.value === 'EN';
    return rawPromoCards.map(c => ({
        tag: isEn ? c.tagEn : c.tagId,
        discount: isEn ? c.discountEn : c.discountId,
        title: isEn ? c.titleEn : c.titleId,
        route: isEn ? c.routeEn : c.routeId,
        image: c.image,
        badgeColor: c.badgeColor,
        waMessage: c.waMessage,
    }));
});

const scrollLeft = () => {
    if (scrollContainer.value) {
        scrollContainer.value.scrollBy({ left: -320, behavior: 'smooth' });
    }
};

const scrollRight = () => {
    if (scrollContainer.value) {
        scrollContainer.value.scrollBy({ left: 320, behavior: 'smooth' });
    }
};
</script>

<template>
    <!-- SECTION: PROMO & SPECIAL OFFERS (SESUAI GAMBAR 2) -->
    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-12">
        <!-- Top Big Banner: Promo Keberangkatan & 3 Ticket Vouchers (Persis Gambar 2) -->
        <div class="relative w-full rounded-3xl md:rounded-[36px] overflow-hidden bg-gradient-to-r from-[#005199] via-[#0275d8] to-[#0099cc] text-white p-6 sm:p-10 shadow-xl mb-8">
            <!-- Decorative Background Pattern -->
            <div class="absolute -right-10 -bottom-10 w-72 h-72 rounded-full bg-white/10 blur-2xl pointer-events-none"></div>
            <div class="absolute left-10 top-0 w-64 h-64 rounded-full bg-white/10 blur-xl pointer-events-none"></div>

            <div class="relative z-10 flex flex-col gap-6">
                <!-- Header Badge & Title -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/20 backdrop-blur-md border border-white/25 text-xs font-bold uppercase tracking-wider mb-2">
                            <span>✨</span>
                            <span>{{ locale === 'ID' ? 'PROMO SPESIAL KEBERANGKATAN 1446 H' : 'SPECIAL DEPARTURE OFFERS 1446 H' }}</span>
                        </div>
                        <h3 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight drop-shadow-sm">
                            {{ locale === 'ID' ? 'Katalog Penawaran & Diskon Eksklusif' : 'Exclusive Offers & Discount Catalog' }}
                        </h3>
                    </div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-2xl bg-amber-400 text-amber-950 font-black text-xs sm:text-sm uppercase tracking-wider shadow-md shrink-0 w-fit">
                        <span class="material-symbols-outlined text-[18px]">alarm</span>
                        <span>{{ locale === 'ID' ? 'KUOTA TERBATAS' : 'LIMITED SEATS' }}</span>
                    </div>
                </div>

                <!-- 3 Ticket Coupons (Persis Model 3 Kupon Diskon di Gambar 2) -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                    <!-- Ticket 1 -->
                    <div class="bg-white rounded-2xl p-4 text-neutral-800 shadow-lg flex flex-col justify-between border-2 border-dashed border-amber-400 relative overflow-hidden group hover:scale-[1.02] transition-transform">
                        <div class="flex items-center justify-between mb-2">
                            <span class="px-2 py-0.5 rounded-md bg-amber-100 text-amber-800 text-[10px] font-extrabold uppercase">
                                {{ locale === 'ID' ? 'KUPON DISKON' : 'DISCOUNT COUPON' }}
                            </span>
                            <span class="material-symbols-outlined text-amber-500 text-[20px]">local_activity</span>
                        </div>
                        <div>
                            <span class="block text-xs font-bold text-neutral-500 uppercase tracking-wider">
                                {{ locale === 'ID' ? 'Potongan Biaya' : 'Price Cut' }}
                            </span>
                            <span class="block text-2xl font-black text-[#005199] leading-tight">Rp 3 Juta</span>
                            <span class="text-[11px] text-neutral-600 font-medium">
                                {{ locale === 'ID' ? 'Paket Umrah Plus Turki & Aqsa' : 'Umrah Plus Turkey & Aqsa Packages' }}
                            </span>
                        </div>
                    </div>

                    <!-- Ticket 2 -->
                    <div class="bg-white rounded-2xl p-4 text-neutral-800 shadow-lg flex flex-col justify-between border-2 border-dashed border-sky-400 relative overflow-hidden group hover:scale-[1.02] transition-transform">
                        <div class="flex items-center justify-between mb-2">
                            <span class="px-2 py-0.5 rounded-md bg-sky-100 text-sky-800 text-[10px] font-extrabold uppercase">
                                {{ locale === 'ID' ? 'CASHBACK' : 'CASHBACK' }}
                            </span>
                            <span class="material-symbols-outlined text-sky-500 text-[20px]">payments</span>
                        </div>
                        <div>
                            <span class="block text-xs font-bold text-neutral-500 uppercase tracking-wider">
                                {{ locale === 'ID' ? 'Cashback Langsung' : 'Direct Cashback' }}
                            </span>
                            <span class="block text-2xl font-black text-[#005199] leading-tight">Rp 2 Juta</span>
                            <span class="text-[11px] text-neutral-600 font-medium">
                                {{ locale === 'ID' ? 'Semua Paket Umrah Reguler' : 'All Regular Umrah Packages' }}
                            </span>
                        </div>
                    </div>

                    <!-- Ticket 3 -->
                    <div class="bg-white rounded-2xl p-4 text-neutral-800 shadow-lg flex flex-col justify-between border-2 border-dashed border-emerald-400 relative overflow-hidden group hover:scale-[1.02] transition-transform">
                        <div class="flex items-center justify-between mb-2">
                            <span class="px-2 py-0.5 rounded-md bg-emerald-100 text-emerald-800 text-[10px] font-extrabold uppercase">
                                {{ locale === 'ID' ? 'FASILITAS GRATIS' : 'FREE COMPLIMENTARY' }}
                            </span>
                            <span class="material-symbols-outlined text-emerald-500 text-[20px]">train</span>
                        </div>
                        <div>
                            <span class="block text-xs font-bold text-neutral-500 uppercase tracking-wider">
                                {{ locale === 'ID' ? 'Tiket Gratis' : 'Complimentary Ticket' }}
                            </span>
                            <span class="block text-2xl font-black text-emerald-700 leading-tight">
                                {{ locale === 'ID' ? 'Kereta Cepat' : 'High Speed Rail' }}
                            </span>
                            <span class="text-[11px] text-neutral-600 font-medium">Haramain Express Makkah-Madinah</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom 3+ Cards Carousel with Navigation Arrows (Persis Gambar 2 Bagian Bawah) -->
        <div class="relative">
            <!-- Navigation Arrow Left -->
            <button 
                @click="scrollLeft"
                type="button"
                aria-label="Geser ke kiri"
                class="absolute -left-3 sm:-left-5 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white text-neutral-800 border border-gray-200 shadow-lg flex items-center justify-center hover:bg-gray-50 hover:scale-110 transition-all z-20 cursor-pointer"
            >
                <span class="material-symbols-outlined text-[20px]">chevron_left</span>
            </button>

            <!-- Navigation Arrow Right -->
            <button 
                @click="scrollRight"
                type="button"
                aria-label="Geser ke kanan"
                class="absolute -right-3 sm:-right-5 top-1/2 -translate-y-1/2 w-10 h-10 rounded-full bg-white text-neutral-800 border border-gray-200 shadow-lg flex items-center justify-center hover:bg-gray-50 hover:scale-110 transition-all z-20 cursor-pointer"
            >
                <span class="material-symbols-outlined text-[20px]">chevron_right</span>
            </button>

            <!-- Cards Horizontal Scroll Container -->
            <div 
                ref="scrollContainer"
                class="flex gap-5 overflow-x-auto scrollbar-none pb-4 pt-1 px-1 scroll-smooth"
            >
                <div 
                    v-for="(card, idx) in promoCards" 
                    :key="idx"
                    class="w-[280px] sm:w-[360px] shrink-0 rounded-2xl overflow-hidden bg-white border border-gray-200 shadow-md hover:shadow-xl transition-all duration-300 flex flex-col group"
                >
                    <!-- Card Image with Coupon Badge -->
                    <div class="relative h-44 sm:h-48 overflow-hidden bg-slate-100">
                        <img 
                            :src="card.image" 
                            :alt="card.title" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" 
                        />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-transparent to-transparent flex items-end justify-between p-3">
                            <span :class="card.badgeColor" class="px-2.5 py-1 rounded-lg text-white font-black text-xs shadow-sm">
                                {{ card.discount }}
                            </span>
                            <span class="px-2 py-0.5 rounded-md bg-black/60 backdrop-blur-md text-white text-[10px] font-bold uppercase tracking-wider">
                                {{ card.tag }}
                            </span>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-4 sm:p-5 flex flex-col justify-between flex-1 gap-3">
                        <div>
                            <h4 class="font-headline-sm text-base sm:text-lg font-bold text-neutral-900 group-hover:text-[#005138] transition-colors leading-snug">
                                {{ card.title }}
                            </h4>
                            <p class="text-xs text-neutral-500 mt-1 flex items-center gap-1">
                                <span class="material-symbols-outlined text-[15px] text-[#005138]">flight_takeoff</span>
                                <span>{{ card.route }}</span>
                            </p>
                        </div>

                        <!-- Action Button -->
                        <div class="pt-2 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-[11px] text-gray-500">{{ locale === 'ID' ? 'S&K berlaku' : 'T&C apply' }}</span>
                            <a 
                                :href="'https://wa.me/6281260003484?text=' + card.waMessage"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="inline-flex items-center gap-1.5 px-4 py-2 rounded-xl bg-[#005138] hover:bg-[#003d2b] text-white text-xs font-bold transition-all shadow-sm hover:scale-105 cursor-pointer"
                            >
                                <span>{{ locale === 'ID' ? 'Klaim Promo' : 'Claim Promo' }}</span>
                                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
.scrollbar-none::-webkit-scrollbar {
    display: none;
}
.scrollbar-none {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
</style>
