<script setup>
import { computed } from 'vue';
import { useI18n } from '@/Composables/useI18n';

const { locale, t } = useI18n();

const rawPackages = [
    {
        id: 1,
        titleId: 'Paket Umrah Reguler Berkah 9 Hari',
        titleEn: 'Regular Blessing Umrah 9 Days Package',
        badgeId: 'Favorit Jamaah',
        badgeEn: 'Pilgrim Favorite',
        badgeColor: 'bg-primary text-on-primary',
        durationId: '9 Hari Perjalanan',
        durationEn: '9 Days Journey',
        image: '/images/landing/package-reguler-9hari.jpg',
        flight: 'Saudia Direct (CGK-JED)',
        hotelRatingId: 'Bintang 5',
        hotelRatingEn: '5-Star Luxury',
        departureDate: '14 Nov 2024',
        seatsInfoId: 'Sisa 6 Kursi',
        seatsInfoEn: '6 Seats Left',
        seatsColor: 'text-secondary',
        featuresId: [
            { icon: 'location_on', text: 'Pullman Zamzam Makkah (50m Haram)' },
            { icon: 'location_on', text: 'Al Aqeeq Madinah (100m Nabawi)' },
            { icon: 'record_voice_over', text: 'Muthawif Pembimbing Berizin Resmi' },
            { icon: 'lunch_dining', text: 'Fullboard Buffet Menu Nusantara' },
        ],
        featuresEn: [
            { icon: 'location_on', text: 'Pullman Zamzam Makkah (50m Haram)' },
            { icon: 'location_on', text: 'Al Aqeeq Madinah (100m Nabawi)' },
            { icon: 'record_voice_over', text: 'Certified Official Spiritual Guide' },
            { icon: 'lunch_dining', text: 'Fullboard Indonesian Cuisine Buffet' },
        ],
        currency: 'Rp',
        price: '28,5',
        priceUnitId: 'Juta',
        priceUnitEn: 'Million',
        priceLabelId: 'Mulai dari:',
        priceLabelEn: 'Starts from:',
        primaryBtnTextId: 'Booking Seat',
        primaryBtnTextEn: 'Book Seat',
        primaryBtnColor: 'bg-primary-container hover:bg-primary text-on-primary',
    },
    {
        id: 2,
        titleId: 'Paket Umrah Ramadhan Itikaf 16 Hari',
        titleEn: 'Ramadan Itikaf Umrah 16 Days Package',
        badgeId: 'Edisi Khusus Ramadhan',
        badgeEn: 'Special Ramadan Edition',
        badgeColor: 'bg-secondary text-on-secondary',
        durationId: '16 Hari Full I\'tikaf',
        durationEn: '16 Days Full I\'tikaf',
        image: '/images/landing/package-ramadhan-16hari.jpg',
        flight: 'Garuda Indonesia Direct',
        hotelRatingId: 'Bintang 5 Plus',
        hotelRatingEn: '5-Star Plus',
        departureDate: '22 Mar 2025',
        seatsInfoId: 'Sisa 3 Kursi!',
        seatsInfoEn: 'Only 3 Seats Left!',
        seatsColor: 'text-error',
        featuresId: [
            { icon: 'location_on', text: 'Swissotel Al Maqam Makkah (Depan Ka\'bah)' },
            { icon: 'location_on', text: 'The Oberoi Madinah (Lobby Depan Raudhah)' },
            { icon: 'mosque', text: '10 Malam Terakhir I\'tikaf Lailatul Qadar' },
            { icon: 'restaurant', text: 'Sahur & Iftar Buffet Mewah di Restoran Hotel' },
        ],
        featuresEn: [
            { icon: 'location_on', text: 'Swissotel Al Maqam Makkah (Facing Kaaba)' },
            { icon: 'location_on', text: 'The Oberoi Madinah (Facing Rawdah Courtyard)' },
            { icon: 'mosque', text: 'Last 10 Nights I\'tikaf Laylatul Qadr' },
            { icon: 'restaurant', text: 'Luxury Sahur & Iftar Hotel Buffets' },
        ],
        currency: 'Rp',
        price: '42,9',
        priceUnitId: 'Juta',
        priceUnitEn: 'Million',
        priceLabelId: 'Mulai dari:',
        priceLabelEn: 'Starts from:',
        primaryBtnTextId: 'Booking Seat',
        primaryBtnTextEn: 'Book Seat',
        primaryBtnColor: 'bg-primary-container hover:bg-primary text-on-primary',
    },
    {
        id: 3,
        titleId: 'Haji Khusus Furoda Direct Visa Resmi',
        titleEn: 'Special VIP Furoda Hajj Official Direct Visa',
        badgeId: 'Tanpa Antre (Langsung Berangkat)',
        badgeEn: 'Direct Departure (No Waiting)',
        badgeColor: 'bg-secondary-container text-on-secondary-container',
        durationId: 'Musim Haji 1446 H',
        durationEn: 'Hajj Season 1446 H',
        image: '/images/landing/package-haji-furoda.jpg',
        flight: 'Visa Mujamalah Resmi',
        hotelRatingId: 'Maktab VIP Mina',
        hotelRatingEn: 'VIP Mina Maktab',
        departureDate: 'Dzulqa\'dah 1446 H',
        seatsInfoId: 'Tersedia Kuota',
        seatsInfoEn: 'Quota Available',
        seatsColor: 'text-primary',
        featuresId: [
            { icon: 'verified_user', text: 'Tasreh Haji Resmi Pemerintah Arab Saudi' },
            { icon: 'apartment', text: 'Raffles Makkah Palace / Fairmount VIP' },
            { icon: 'villa', text: 'Maktab VIP Mina AC Eksekutif & Kasur Empuk' },
            { icon: 'medical_services', text: 'Dokter Pendamping Pribadi & Bimbingan Intensif' },
        ],
        featuresEn: [
            { icon: 'verified_user', text: 'Official Saudi Government Hajj Permit' },
            { icon: 'apartment', text: 'Raffles Makkah Palace / Fairmount VIP' },
            { icon: 'villa', text: 'VIP AC Mina Executive Tents with Mattresses' },
            { icon: 'medical_services', text: 'Dedicated Medical Team & Intensive Rites' },
        ],
        currency: 'USD',
        price: '17.500',
        priceUnitId: '',
        priceUnitEn: '',
        priceLabelId: 'Investasi Ibadah:',
        priceLabelEn: 'Investment:',
        primaryBtnTextId: 'Konsul Haji',
        primaryBtnTextEn: 'Hajj Inquiry',
        primaryBtnColor: 'bg-secondary hover:bg-on-secondary-container text-on-secondary',
    },
    {
        id: 4,
        titleId: 'Wisata Halal Turki & Umrah Plus 12 Hari',
        titleEn: 'Halal Tourism Turkey & Umrah Plus 12 Days',
        badgeId: 'Halal Historical Tour',
        badgeEn: 'Halal Historical Tour',
        badgeColor: 'bg-tertiary text-on-tertiary',
        durationId: '12 Hari Plus',
        durationEn: '12 Days Plus',
        image: '/images/landing/package-turki-plus.jpg',
        flight: 'Turkish Airlines',
        hotelRatingId: '2 Negara Sekaligus',
        hotelRatingEn: '2 Countries Combined',
        departureDate: '28 Des 2024',
        seatsInfoId: 'Sisa 5 Kursi',
        seatsInfoEn: '5 Seats Left',
        seatsColor: 'text-secondary',
        featuresId: [
            { icon: 'castle', text: 'Jelajah Istanbul, Hagia Sophia & Bosphorus Cruise' },
            { icon: 'hotel', text: 'Hotel Bintang 5 Makkah (Movenpick) & Madinah' },
            { icon: 'verified', text: 'Ziarah Jejak Peradaban Islam Khilafah Utsmaniyah' },
            { icon: 'soup_kitchen', text: '100% Halal Food Certified Guide & Tour' },
        ],
        featuresEn: [
            { icon: 'castle', text: 'Explore Istanbul, Hagia Sophia & Bosphorus Cruise' },
            { icon: 'hotel', text: '5-Star Makkah (Movenpick) & Madinah Accommodations' },
            { icon: 'verified', text: 'Ottoman Heritage Islamic Civilisation Tour' },
            { icon: 'soup_kitchen', text: '100% Halal Food Certified Guides & Catering' },
        ],
        currency: 'Rp',
        price: '36,8',
        priceUnitId: 'Juta',
        priceUnitEn: 'Million',
        priceLabelId: 'Mulai dari:',
        priceLabelEn: 'Starts from:',
        primaryBtnTextId: 'Booking Seat',
        primaryBtnTextEn: 'Book Seat',
        primaryBtnColor: 'bg-primary-container hover:bg-primary text-on-primary',
    },
];

const packages = computed(() => {
    const isEn = locale.value === 'EN';
    return rawPackages.map(pkg => ({
        ...pkg,
        title: isEn ? pkg.titleEn : pkg.titleId,
        badge: isEn ? pkg.badgeEn : pkg.badgeId,
        duration: isEn ? pkg.durationEn : pkg.durationId,
        hotelRating: isEn ? pkg.hotelRatingEn : pkg.hotelRatingId,
        seatsInfo: isEn ? pkg.seatsInfoEn : pkg.seatsInfoId,
        features: isEn ? pkg.featuresEn : pkg.featuresId,
        priceUnit: isEn ? pkg.priceUnitEn : pkg.priceUnitId,
        priceLabel: isEn ? pkg.priceLabelEn : pkg.priceLabelId,
        primaryBtnText: isEn ? pkg.primaryBtnTextEn : pkg.primaryBtnTextId,
    }));
});

const handleBooking = (pkg) => {
    const message = encodeURIComponent(`Assalamu'alaikum Almubarak Wisata, saya ingin reservasi/informasi untuk ${pkg.title}`);
    window.open(`https://wa.me/6281260003484?text=${message}`, '_blank');
};
</script>

<template>
    <!-- PAKET UNGGULAN SECTION -->
    <section class="w-full py-space-xl">
        <div class="max-w-7xl mx-auto px-gutter">
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-space-xl gap-space-md">
                <div>
                    <span class="font-label-md text-label-md text-secondary uppercase tracking-widest font-bold">
                        {{ locale === 'ID' ? 'Pilihan Terbaik Jamaah' : 'Pilgrims Top Choice' }}
                    </span>
                    <h2 class="font-headline-lg text-headline-lg text-primary font-extrabold tracking-tight mt-1">
                        {{ locale === 'ID' ? 'Paket Umrah & Haji Khusus Unggulan' : 'Featured Umrah & Special Hajj Packages' }}
                    </h2>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mt-space-xs">
                        {{ locale === 'ID' ? 'Dipandu oleh asatidzah berilmu, akomodasi hotel pelataran ring utama, dan maskapai direct tanpa transit untuk ibadah yang khusyuk dan bermakna.' : 'Guided by knowledgeable scholars, 5-star ring 1 courtyard hotels, and direct non-stop flights for a devoted and profound pilgrimage.' }}
                    </p>
                </div>
                <a 
                    href="/travel-promos" 
                    class="inline-flex items-center gap-space-xs font-label-lg text-label-lg text-primary hover:text-primary-container font-semibold transition-colors group"
                >
                    <span>{{ locale === 'ID' ? 'Lihat Semua Paket (12 Program)' : 'View All Packages (12 Programs)' }}</span>
                    <span class="material-symbols-outlined text-[18px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>

            <!-- Packages Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-lg">
                <div 
                    v-for="pkg in packages" 
                    :key="pkg.id"
                    class="flex flex-col bg-surface-container-lowest rounded-xl shadow-md hover:shadow-xl transition-all duration-300 overflow-hidden group border border-surface-container/60"
                >
                    <!-- Card Top Image & Badges -->
                    <div class="relative h-52 overflow-hidden">
                        <div 
                            class="w-full h-full bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                            :style="{ backgroundImage: `url(${pkg.image})` }"
                        ></div>
                        <div class="absolute top-3 left-3 flex flex-col gap-1">
                            <span 
                                :class="pkg.badgeColor"
                                class="px-space-sm py-0.5 rounded-full font-label-sm text-label-sm font-semibold shadow-sm"
                            >
                                {{ pkg.badge }}
                            </span>
                            <span class="px-space-sm py-0.5 rounded-full bg-surface-container-lowest text-primary font-label-sm text-label-sm font-bold shadow-sm">
                                {{ pkg.duration }}
                            </span>
                        </div>
                        <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-surface-container-lowest text-label-sm font-label-sm drop-shadow">
                            <span class="flex items-center gap-1 bg-on-surface/60 backdrop-blur-md px-2 py-0.5 rounded text-[12px]">
                                <span class="material-symbols-outlined text-[14px] text-secondary">flight</span>
                                {{ pkg.flight }}
                            </span>
                            <span class="flex items-center gap-1 bg-on-surface/60 backdrop-blur-md px-2 py-0.5 rounded text-[12px]">
                                <span class="material-symbols-outlined text-[14px] text-tertiary-fixed">hotel</span>
                                {{ pkg.hotelRating }}
                            </span>
                        </div>
                    </div>

                    <!-- Card Body -->
                    <div class="p-space-md flex flex-col flex-1">
                        <div class="flex items-center justify-between text-outline font-label-sm text-label-sm mb-1">
                            <span>{{ locale === 'ID' ? 'Keberangkatan' : 'Departure' }}: {{ pkg.departureDate }}</span>
                            <span :class="pkg.seatsColor" class="font-bold">{{ pkg.seatsInfo }}</span>
                        </div>

                        <h3 class="font-headline-sm text-[18px] text-on-surface font-bold group-hover:text-primary transition-colors leading-snug">
                            {{ pkg.title }}
                        </h3>

                        <!-- Features list -->
                        <div class="mt-space-sm space-y-1.5 font-body-sm text-body-sm text-on-surface-variant flex-1">
                            <div 
                                v-for="(feat, fIdx) in pkg.features" 
                                :key="fIdx"
                                class="flex items-center gap-space-xs text-[13px]"
                            >
                                <span class="material-symbols-outlined text-primary text-[18px] shrink-0">{{ feat.icon }}</span>
                                <span class="leading-tight">{{ feat.text }}</span>
                            </div>
                        </div>

                        <!-- Card Footer Price & Buttons -->
                        <div class="pt-space-md mt-space-md bg-surface-container-low -mx-space-md -mb-space-md p-space-md flex flex-col gap-space-sm border-t border-surface-container">
                            <div class="flex items-baseline justify-between">
                                <span class="font-label-sm text-label-sm text-outline">{{ pkg.priceLabel }}</span>
                                <div class="flex items-baseline gap-1">
                                    <span class="font-label-sm text-label-sm text-primary font-bold">{{ pkg.currency }}</span>
                                    <span class="font-headline-md text-headline-md text-primary font-extrabold">{{ pkg.price }}</span>
                                    <span v-if="pkg.priceUnit" class="font-label-sm text-label-sm text-primary font-bold">{{ pkg.priceUnit }}</span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-space-xs">
                                <a 
                                    :href="`/business`"
                                    class="py-space-xs px-space-sm rounded-lg bg-surface-container-highest text-primary font-label-md text-label-md hover:bg-surface-container transition-colors text-center font-semibold cursor-pointer"
                                >
                                    {{ locale === 'ID' ? 'Detail Paket' : 'Package Details' }}
                                </a>
                                <button 
                                    @click="handleBooking(pkg)"
                                    :class="pkg.primaryBtnColor"
                                    class="py-space-xs px-space-sm rounded-lg font-label-md text-label-md transition-colors text-center font-bold cursor-pointer shadow-xs" 
                                    type="button"
                                >
                                    {{ pkg.primaryBtnText }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

